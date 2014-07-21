$(function () {

    function runCalendar() {
        var $modal = $('#event-modal');
        var $id = $("#id").val();
        $('#external-events div.external-event').each(function () {
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 20 //  original position after the drag
            });
        });
        /*  Initialize the calendar  */
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var form = '';
        var calendar = $('#calendar').fullCalendar({
            slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
            minTime: '08:00:00',
            maxTime: '19:00:00',          
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            monthNames: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ], 
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
            dayNames: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
            buttonText: {
                today: 'hoy',
                month: 'mes',
                week: 'semana',
                day: 'día'
            },
            
            events: '/eventos/semestre/' + $id,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            eventDrop: function(event, delta, revertFunc) {
                $.ajax({
                    type: "PUT",
                    url: "/evento/drop/" + event.id,
                    data: { 
                        start: event.start.format(),
                        end: event.end.format()
                    }

                }).done(function( msg ) {
                });
            },
            drop: function (date, allDay) { // this function is called when something is dropped
                // retrieve the dropped element's stored Event Object
                debugger;
                var originalEventObject = $(this).data('eventObject');
                var $categoryClass = $(this).attr('data-class');
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                if ($categoryClass)
                    copiedEventObject['className'] = [$categoryClass];
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },

            selectable: true,
            eventClick: function (calEvent, jsEvent, view) {
                var form = $("<form></form>");
                form.append("<label>Editar evento</label>");
                form.append("<div class='input-group'><input class='form-control' type=text value='" + calEvent.title + "' /><span class='input-group-btn'><button type='submit' class='btn btn-success'><i class='fa fa-check'></i> Guardar</button></span></div>");
                $modal.modal({
                    backdrop: 'static'
                });
                $modal.find('.delete-event').show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
                    

                    $.ajax({
                        type: "DELETE",
                        url: "/evento/delete/" + calEvent.id
                    }).done(function( msg ) {
                        calendar.fullCalendar('removeEvents', function (ev) {
                            return (ev._id == calEvent._id);
                        });
                    });


                    
                    $modal.modal('hide');
                });
                $modal.find('form').on('submit', function () {
                    calEvent.title = form.find("input[type=text]").val();


                    $.ajax({
                        type: "PUT",
                        url: "/evento/edit/" + calEvent.id,
                        data: { 
                            title: calEvent.title,
                        }

                    }).done(function( msg ) {
                        calendar.fullCalendar('updateEvent', calEvent);
                    });

                    

                    


                    $modal.modal('hide');
                    return false;
                });
            },
            select: function (start, end, allDay) {
                $modal.modal({
                    backdrop: 'static'
                });
                form = $("<form></form>");
                form.append("<div class='row'></div>");
                form.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Evento</label><input class='form-control' placeholder='Entrega de borrador' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Categoría</label><select class='form-control' name='category'></select></div></div>").find("select[name='category']").append("<option value='bg-green'>Aviso</option>")
                .append("<option value='bg-purple'>Opcional</option>").append("<option value='bg-orange'>Importante</option>").append("<option value='bg-red'>Urgente</option>");
                $modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
                    form.submit();
                });
                $modal.find('form').on('submit', function () {
                    title = form.find("input[name='title']").val();
                    $categoryClass = form.find("select[name='category'] option:checked").val();
                    if (title !== null && title.length != 0) {




                        $.ajax({
                            type: "POST",
                            url: "/evento/add/" + $("#id").val(),
                            data: { 
                                title: title,
                                start: start.format(),
                                end: end.format(),
                                className: $categoryClass 
                            }

                        }).done(function( msg ) {
                            calendar.fullCalendar('renderEvent', {
                                title: title,
                                start: start,
                                end: end,
                                allDay: false,
                                className: $categoryClass
                            }, true);
                        });

                        


                    }
                    else{
                        alert('You have to give a title to your event');
                    }
                    $modal.modal('hide');
                    return false;
                });
calendar.fullCalendar('unselect');
}

});
}

runCalendar();

});

