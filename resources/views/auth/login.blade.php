<x-app-layout>
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label for="email" class="ml-3">Email</label>
                <input type="email" value="{{old('email')}}" name="email" placeholder="Masukan Email.." id="email" class="input input-bordered w-full max-w-xs m-2" autofocus/>
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                <br>
                <label for="password" class="ml-3">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukan Password.." class="input input-bordered w-full max-w-xs m-2" />
                    @error('password')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                <button type="submit" class="btn btn-success w-full m-2">Login</button>
            </form>
        </div>
    </div>
</x-app-layout>