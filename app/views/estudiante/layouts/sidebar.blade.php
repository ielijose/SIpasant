<nav id="sidebar">
    <div id="main-menu">
        <ul class="sidebar-nav">
            <li>
                <a href="/"><i class="fa fa-dashboard"></i><span class="sidebar-text">Escritorio</span></a>
            </li>

            <li>
                <a href="/pasantias"><i class="fa fa-file-text-o"></i><span class="sidebar-text">Pasantias</span></a>
            </li>
    
            @if(isset($current) && $current->estado == 'aceptado')
            <li>
                <a href="/documentos"><i class="fa fa-folder"></i><span class="sidebar-text">Documentos</span></a>
            </li>
            @endif
            
            <br>
        </ul>
    </div>

    
</nav>