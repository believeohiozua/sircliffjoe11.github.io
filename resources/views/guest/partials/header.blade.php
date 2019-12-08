    <!-- Begin header-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img src="{{ asset('frontend/images/logo.png') }}">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                arial-control="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('discover') }}">Discover</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('how-it-works') }}">How it Works</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('help') }}">Help</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0">
                            <div class="form-group mr-sm-2">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search"
                                    aria-label="Search">
                            </div>
                        </form>
                    </li>
                    @if (Auth::check())
                    <li class="nav-item idea-link">
                        <a href="{{ route('create-idea') }}"><button class="btn btn-outline-primary nav-link" style="font-size: 14px;">Share an Idea</button></a>
                    </li>
                    @else
                    <li class="nav-item idea-link">
                        <a href="{{ route('login') }}"><button class="btn btn-outline-primary nav-link" style="font-size: 14px;">Share an Idea</button></a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header -->