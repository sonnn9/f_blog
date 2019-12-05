<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{ __('News') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">{{ __('Home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ __('Contact') }}</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">{{ __('Search') }}</button>
        </form>
        <div>
            <a href="{!! route('user.change-language', ['en']) !!}">{{ __('English') }}</a>
            <a href="{!! route('user.change-language', ['vi']) !!}">{{ __('Viet Nam') }}</a>
        </div>
    </div>
</nav>
