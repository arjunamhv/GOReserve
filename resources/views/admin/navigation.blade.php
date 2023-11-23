<nav class="navbar bg-neutral text-base-100 sticky top-0 z-10">
    <div class="navbar-start w-full md:w-9/12">
        <label for="my-drawer" class="btn btn-ghost drawer-button"><i class="fa-solid fa-bars"></i></label>

        <a class="btn btn-ghost normal-case text-xl"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-28"></a>

        {{-- dekstop --}}
        <div class="flex">
            <ul class="menu menu-horizontal px-0">
                <li><a href="{{ route('landing') }}">Home</a></li>
                <li><a>My GOR</a></li>
            </ul>
        </div>
    </div>
    {{-- end --}}
    @if (Route::has('login'))
        @auth
            <div class="ml-auto dropdown dropdown-end hidden md:flex">
                <label tabindex="0" class="btn btn-ghost">
                    <div class="">
                        {{ Auth::user()->name }} <i class="fa-solid fa-caret-down"></i>
                    </div>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
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
