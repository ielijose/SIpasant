<!DOCTYPE HTML>
<html>
<head>
    <title>Reportes en PDF</title>

    <style type="text/css">

    body {
        font-family: verdana, arial, sans-serif ;
        font-size: 12px ;
    }

    th,
    td {
        padding: 4px 4px 4px 4px ;
        text-align: center ;
    }

    th {
        border-bottom: 2px solid #333333 ;
    }

    td {
        border-bottom: 1px dotted #999999 ;
    }

    tfoot td {
        border-bottom-width: 0px ;
        border-top: 2px solid #333333 ;
        padding-top: 20px ;
    }
    
    table, h1{
        width: 80%;
        text-align: center;
        margin: 0 auto;
    }
    </style>

</head>
<body align="center">


    <h1><strong>Listado de </strong> pasantias 
                        @if($status != 'total')
                        "{{ $status }}s"
                        @endif
                         </h1>


    <table cellspacing="0">

        <!---
            Define the HEAD of the table. This is the data that
            will be displayed at the top of every printed page.
            - -->
            <thead>
                <tr>
                    <th>Nombre y Apellido</th>
                    <th>CI</th>
                    <th>Aceptación</th>
                    <th>Entrega de Carta</th>
                    <th>Entrega Borrador</th>
                    <th>Retiro Borrador</th>
                    <th>Entrega Final</th>
                </tr>
            </thead>


            <tbody>


                @foreach ($pasantias as $key => $pasantia)
                <tr>
                    <td>{{ $pasantia->estudiante->nombre }} {{ $pasantia->estudiante->apellido }}</td>
                    <td>{{ $pasantia->estudiante->ci or '' }}</td>
                    @if(isset($pasantia->proceso->id))
                    <td>{{ $pasantia->proceso->getStepById(1) }}</td>
                    <td>{{ $pasantia->proceso->getStepById(2) }}</td>
                    <td>{{ $pasantia->proceso->getStepById(3) }}</td>
                    <td>{{ $pasantia->proceso->getStepById(4) }}</td>
                    <td>{{ $pasantia->proceso->getStepById(5) }}</td>
                    @else
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    @endif
                </tr>
                @endforeach


            </tbody>
        </table>
    <br>
        <p align="center">SIpasant LICOM</p>


    </body>
    </html>