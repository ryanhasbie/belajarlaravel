    <div class="navbar bg-neutral text-neutral-content">
        <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">Belajar Laravel</a>
        </div>
        <div class="flex-none">
        <ul class="menu menu-horizontal p-0">
            @foreach ($navbar as $name => $url)
                <li><a href="{{$url}}">{{$name}}</a></li>
            @endforeach
            @guest
                <li><a href="{{ route('register') }}">Registrasi</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            @else
                <li tabindex="0">
                    <a>
                    {{Auth::user()->name}}
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
                    </a>
                    <ul class="p-2 bg-neutral">
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
        </div>
    </div>
