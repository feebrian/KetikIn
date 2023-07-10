<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                @auth
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">My Article</a></li>
                    <li><a href="#">Stats</a></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button>Logout</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="gap-y-1">
                    <li><a href="/signup">Register</a></li>
                    <li><a href="/signin">Login</a></li>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="font-bold normal-case text-xl" href="/">KetikIn</a>
    </div>
    <div class="navbar-end">
        <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>

        @auth
            <button class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    {{-- <span class="badge badge-xs badge-primary indicator-item"></span> --}}
                </div>
            </button>
            <button class="btn btn-ghost btn-circle">
                <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" class="h-6 w-6   "
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>

        @endauth
        @guest
            <button class="btn btn-primary" onclick="window.location.href = '/login'">
                Login
            </button>
        @endguest
    </div>
</div>
