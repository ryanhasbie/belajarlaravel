<x-app-layout>
    <div class="card w-96 bg-base-100 shadow-xl m-6">
        <div class="card-body">
        <h2 class="card-title">Edit Task</h2>
            {{-- <form action="/tasks/{{ $tasks->id }}" method="POST"> --}} <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @method('put')
                @csrf
                @include('tasks._form')
            </form>
        </div>
    </div>
</x-app-layout>