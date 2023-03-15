<nav class="navbar navbar-expand-lg bg-body-tertiary fw-bolder ">
    <div class="container-fluid">
       <p class="fs-2">FameYourGhost</p>
        <a class="navbar-brand" href="http://fameyourghost.test/"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is("home") ? "active" : "" }}" aria-current="page" href="{{ route("home") }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ Route::is("about") ? "active" : "" }}" href="{{ route("about") }}">About</a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" {{ Route::is("demo") ? "active" : "" }}" href="{{ route("demo") }}">Demo</a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
