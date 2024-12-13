<header class="bg-dark py-3 ">
    <div class="container d-flex align-items-center justify-content-end">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo img-fluid" style="max-width: 150px;">
        </div>
        <div>
            <h1 class="text-white m-4">ProgramaKat</h1>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cursos.index') }}">Gestión Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('alumnos.index') }}">Gestión Alumnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cursos.matriculacion') }}">Matriculación</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
</header>
