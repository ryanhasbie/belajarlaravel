    <div class="navbar bg-neutral text-neutral-content">
        <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">Belajar Laravel</a>
        </div>
        <div class="flex-none">
        <ul class="menu menu-horizontal p-0">
            @foreach ($navbar as $name => $url)
                <li><a href="{{$url}}">{{$name}}</a></li>
            @endforeach
                <li><a href="{{ route('register') }}">Registrasi</a></li>
        </ul>
        </div>
    </div>
