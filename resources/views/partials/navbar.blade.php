
   
<div class="container">
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="{{ url('/img/FGE-icon5.png') }}" width="auto" height="60" alt="">
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Busqueda de información
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/busqueda/persona')}}">Persona</a>
                        <a class="dropdown-item" href="{{url('/busqueda/direccion')}}">Dirección</a>
                        <a class="dropdown-item" href="{{url('/busqueda/vehiculo')}}">Vehículo</a>
                        <a class="dropdown-item" href="{{url('/busqueda/numcarpeta')}}">Número de Carpeta</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Generación de estadisticas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/estadistica/iniciadas')}}">Carpetas Iniciadas</a>
                        <a class="dropdown-item" href="{{url('/estadistica/region')}}">Región</a>
                        <a class="dropdown-item" href="{{url('/estadistica/municipio')}}">Municipio</a>
                        <a class="dropdown-item" href="{{url('/estadistica/colonia')}}">Colonia</a>
                        <a class="dropdown-item" href="{{url('/estadistica/delito')}}">Delito</a>
                        <a class="dropdown-item" href="{{url('/estadistica/etnia')}}">Etnia</a>
                        <a class="dropdown-item" href="{{url('/estadistica/sexo')}}">Sexo</a>
                        <a class="dropdown-item" href="{{url('/estadistica/edad')}}">Edad</a>
                        <a class="dropdown-item" href="{{url('/estadistica/unidad')}}">Unidad</a>
                        <a class="dropdown-item" href="{{url('/estadistica/fiscal')}}">Fiscal</a>
                    </div>
                </li>
            
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuario
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Salir</a>
                        <a class="dropdown-item" href="#">Entrar</a>
                        <a class="dropdown-item" href="#">Registrar</a>
                    </div>
                </li>


                   
            </ul>
        </div>
    </nav>
</div>




