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
                        <a href="{{ route('ideas.create') }}"><button class="btn btn-outline-primary nav-link" style="font-size: 14px;">Share Idea</button></a>
                    </li>
                <ul class="navbar-nav">
                <div class="top-nav notification-row">
        
                <!-- notification dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                <!-- alert notification start-->
                <li id="alert_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" href="#">
                        <i class="fas fa-envelope" style="color: gray;" aria-hidden="true"></i>
                            <span class="badge bg-danger" style="color: #fff; font-size: 10px;">4</span>
                    </a>
                <ul class="dropdown-menu extended notification">
                    <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 4 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><img src="{{ asset('frontend/images/cliff.jpg') }}" width="20" class="rounded-circle profile-ava username"/></span>
                                <span class="subject">
                                    <span class="from"> John Doe</span>
                                    <span class="time"> 1 min</span>
                                    </span>
                                    <span class="message">
                                        This is just a sample message.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><img src="{{ asset('frontend/images/cliff.jpg') }}" width="30" class="rounded-circle profile-ava username"/></span>
                                    John liked your idea.
                                <span class="small italic pull-right">50 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><img src="{{ asset('frontend/images/cliff.jpg') }}" width="30" class="rounded-circle profile-ava username"/></span>
                                    Project 3 Completed.
                                <span class="small italic pull-right">1 hr</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><img src="{{ asset('frontend/images/cliff.jpg') }}" width="30" class="rounded-circle profile-ava username"/></span>
                                    Mick appreciated your work.
                                <span class="small italic pull-right"> Today</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" style="font-weight:bold;">See all messages</a>
                        </li>
                    </ul>
                </li>
                
                <li id="alert_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" href="#">
                        <i class="fas fa-bell" style="color: gray;" aria-hidden="true"></i>
                            <span class="badge bg-danger" style="color: #fff; font-size: 10px;">5</span>
                    </a>
                <ul class="dropdown-menu extended notification">
                    <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 5 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"> <i class="fas fa-user fa-fw" aria-hidden="true"></i></span>
                                    Friend Request
                                <span class="small italic pull-right">5 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    Someone viewed your profile.
                                <span class="small italic pull-right">1 hr</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"> <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                                    John liked your idea.
                                <span class="small italic pull-right">50 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    Someone viewed your profile.
                                <span class="small italic pull-right">1 hr</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="fa fa-handshake" aria-hidden="true"></i></span>
                                    Mick appreciated your work.
                                <span class="small italic pull-right"> Today</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" style="font-weight:bold;">See all notifications</a>
                        </li>
                    </ul>
                </li>
                

          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink-4" aria-haspopup="true" aria-expanded="false" href="#">
                <img src="{{ asset('frontend/images/cliff.jpg') }}" width="28" class="rounded-circle profile-ava username"/> {{ Auth::user()->username }}</a>
            <ul class="dropdown-menu extended logout">
              <li class="eborder-top">
                <a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user fa-fw" aria-hidden="true"></i>&nbsp; Profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('campaigns.index') }}"><i class="fas fa-credit-card fa-fw" aria-hidden="true"></i>&nbsp; My Campaigns</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('ideas.index') }}"><i class="fas fa-lightbulb fa-fw" aria-hidden="true"></i>&nbsp; Ideas</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('help') }}"><i class="fas fa-question-circle fa-fw" aria-hidden="true"></i>&nbsp; Help</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('settings') }}"><i class="fas fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-fw" aria-hidden="true"></i>&nbsp; Log out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
                    
                </ul>
            @else
                <li class="nav-item idea-link">
                    <a href="{{ route('login') }}"><button class="btn btn-outline-primary nav-link" style="font-size: 14px;">Share Idea</button></a>
                </li>
            @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header -->