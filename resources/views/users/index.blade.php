<x-app-layout>
    <h1  class="text-xl font-medium m-6">All User</h1>
    <ul class="m-6">
        @foreach ($users as $user)
            <li><a href="{{ route('users.show', $user->username) }}">{{$user->name}}</a></li>
        @endforeach
    </ul>
</x-app-layout>