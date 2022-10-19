<x-app-layout>
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Registration</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="email" class="ml-3">Email</label>
                <input type="email" value="{{old('email')}}" name="email" placeholder="Masukan Email.." id="email" class="input input-bordered w-full max-w-xs m-2" autofocus/>
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                <br>
                <label for="username" class="ml-3">Username</label>
                <input type="text" name="username" value="{{old('username')}}" id="username" placeholder="Masukan nama.." class="input input-bordered w-full max-w-xs m-2" />
                    @error('username')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                <br>
                <label for="name" class="ml-3">Name</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Masukan nama.." class="input input-bordered w-full max-w-xs m-2" />
                    @error('name')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                <br>
                <label for="password" class="ml-3">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukan Password.." class="input input-bordered w-full max-w-xs m-2" />
                    @error('password')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                <button type="submit" class="btn btn-success w-full m-2">Register</button>
            </form>
        </div>
    </div>
</x-app-layout>