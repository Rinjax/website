<nav class="navbar navbar-expand-md ml-auto main-nav">
    <a href="#" class="d-md-none navbar-brand">Rinjax Development</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-chevrons-down"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto pr-md-3">
            <a class="nav-item nav-link {!! (\Route::currentRouteName() == 'website.home') ? 'active' : null !!}"
               href="{!! route('website.home') !!}">
                Home <span class="sr-only">(current)</span>
            </a>
            <a class="nav-item nav-link {!! (\Route::currentRouteName() == 'website.about') ? 'active' : null !!} "
               href="{!! route('website.about') !!}">
                About
            </a>
            <a class="nav-item nav-link {!! (\Route::currentRouteName() == 'website.portfolio') ? 'active' : null !!} "
               href="{!! route('website.portfolio') !!}">
                For Fun
            </a>
            <a class="nav-item nav-link {!! (\Route::currentRouteName() == 'website.cv') ? 'active' : null !!} "
               href="{!! route('website.cv') !!}">
                CV
            </a>
        </div>
    </div>
</nav>