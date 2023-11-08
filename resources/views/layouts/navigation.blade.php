<nav class="navbar bg-neutral text-base-100 sticky top-0 z-10">
    <div class="navbar-start">

        {{-- mobile --}}
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost md:hidden">
                <i class="fa-solid fa-bars"></i>
            </label>
            @if (Route::has('login'))
                @auth
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Home</a></li>
                        @if (auth()->user()->is_admin)
                            <li><a>My Gor</a></li>
                            <li><a>Chats</a></li>
                        @else
                            <li><a>My Tickets</a></li>
                            <li><a>Chats</a></li>
                            <li><a>Blog</a></li>
                        @endif
                    </ul>
                @else
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Home</a></li>
                        <li><a>Blog</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                @endif
            @endauth
            @endif
        </div>
        {{-- end --}}
        <a class="btn btn-ghost normal-case text-xl"><img src="{{ asset('assets/images/logo4.png') }}" alt="Logo"
                class="w-24"></a>

        {{-- dekstop --}}
        <div class="hidden md:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                @guest
                    <li><a>Blog</a></li>
                @endguest
            </ul>

            <div class="button-group align-end">
                <a href="/register" class="btn btn-outline-primary">Register</a>
                <a href="/login" class="btn btn-primary">Login</a>
            </div>
        </div>
        @if (Route::has('login'))
            @auth
                <div class="hidden md:flex">
                    <ul class="menu menu-horizontal px-1">
                        @if (auth()->user()->is_admin)
                            <li><a>Admin Dashboard</a></li>
                            <li><a>Chats</a></li>
                        @else
                            <li><a>My Tickets</a></li>
                            <li><a>Chats</a></li>
                            <li><a>Blog</a></li>
                        @endif
                    </ul>
                </div>
            @else
        </div>
        <div class="navbar-end hidden md:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('login') }}" :active="request() - > routeIs('login')">Login</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" :active="request() - > routeIs('register')">Register</a></li>
            </ul>
            @endif
        @endauth
        @endif
    </div>
    {{-- end --}}
    @if (Route::has('login'))
        @auth
            <div class="ml-auto dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost">
                    <div class="">
                        {{ Auth::user()->name }} <i class="fa-solid fa-caret-down"></i>
                    </div>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Profile</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        <li>
                            @csrf
                            <a href="route('logout')"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a>
                        </li>
                    </form>
                </ul>
            </div>
        @endauth
    @endif
</nav>
