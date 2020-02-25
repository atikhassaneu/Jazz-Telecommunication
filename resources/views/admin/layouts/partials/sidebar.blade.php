<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo">
        <a href="" class="simple-text logo-normal">
            Jazz Voice
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{Request::is("admin/dashboard*")? "active" : ""}}">
                <a class="nav-link" href="{{route('admin.dashboard.index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{Request::is("admin/slider*")? "active" : ""}}">
                <a class="nav-link" href="{{route("admin.slider.index")}}">
                    <i class="material-icons">slideshow</i>
                    <p>Slider</p>
                </a>
            </li>
            <li class="nav-item {{Request::is("admin/service*")? "active" : ""}}">
                <a class="nav-link" href="{{route("admin.service.index")}}">
                    <i class="material-icons">assessment</i>
                    <p>Service</p>
                </a>
            </li>
            <li class="nav-item {{Request::is("admin/contact*")? "active" : ""}}">
                <a class="nav-link" href="{{route("admin.contact.index")}}">
                    <i class="material-icons">contact_support</i>
                    <p>Contact</p>
                </a>
            </li>
        </ul>

        <div class="logout" style="text-align: center; padding-top: 30px;">
            <li class="nav-item py-5" style="text-align: center; display: inline-block">
                <button onclick="event.preventDefault(); document.getElementById('logout').submit();" style="color: #ffffff; cursor: pointer; display: block; height: 40px; width: 40px; text-align: center; background: #D71E24; border: none; outline: none; border-radius: 50%; font-size: 18px;" type="button" rel="tooltip" title=""data-original-title="Logout">
                    <i class="material-icons pt-1">lock_out</i>
                </button>
            </li>

            <form id="logout" style="display: none" action="{{route('logout')}}" method="post">@csrf</form>
        </div>



    </div>
</div>
