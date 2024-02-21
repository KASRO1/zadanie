@section("header")
    <header>
        <div class="header__content container">
            <div class="container__header">
                <div class="logo__container">
                    <img class="logo" src="./assets/img/header/logo.svg"
                         alt="logo">
                </div>
                <div class="vertical_line">

                </div>
                <div class="search_container">
                    <div class="main__input">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Search">
                    </div>
                </div>
            </div>
            <div class="container__header">
                <div class="header__menu">
                    <ul>
                        <li><a href="#">Trade</a></li>
                        <li><a href="#">P2P</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Mining</a></li>
                        <li><a href="#">Academy</a></li>
                    </ul>
                </div>
                <div class="vertical_line"></div>
                @if(auth()->check())

                    <div class="header__buttons">
                        <a href="{{route("api.logout")}}" class="btn btn-dark"><i class="bi bi-door-open " style="margin-right: 10px"></i>{{auth()->user()->email}}</a>
                        @if(auth()->user()->role === "admin")
                            <a href="{{route("admin.users")}}" class="btn btn-gold"><i class="bi bi-wrench-adjustable-circle-fill"></i></a>
                        @endif

                    </div>
                @else
                    <div class="header__buttons">
                        <a href="{{route("register")}}" class="btn btn-dark">Register</a>
                        <a href="{{route("login")}}" class="btn btn-primary">Log in</a>
                    </div>
                @endif
            </div>
    </header>
@endsection
