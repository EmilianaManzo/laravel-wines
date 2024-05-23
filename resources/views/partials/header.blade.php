    <header class="mb-5">



    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top ">
        <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                href="{{ route('home') }}">Home</a>

            <a class="nav-link {{ Route::currentRouteName() === 'wines.index' ? 'active' : '' }}"
                href="{{ route('wines.index') }}">Vini</a>

            <a class="nav-link {{ Route::currentRouteName() === 'wines.create' ? 'active' : '' }}"
                href="{{ route('wines.create') }}">Crea nuovo vino</a>

            </div>
        </div>
        </div>
    </nav>




    </header>
