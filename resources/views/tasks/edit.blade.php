<x-app-layout>
    <div class="card w-96 bg-base-100 shadow-xl m-6">
        <div class="card-body">
        <h2 class="card-title">Edit Task</h2>
            {{-- <form action="/tasks/{{ $tasks->id }}" method="POST"> --}} <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @method('put')
                @csrf
                <input type="text" name="list" value="{{$task->list}}" placeholder="The name of task..">
                <button type="submit" class="btn btn-sm btn-success">Save</button>
                @error('list')
                    <div class="alert alert-error shadow-sm mr-6 ml-0 mt-3">
                        <div>
                            <span>{{$message}}</span>
                        </div>
                    </div>
                @enderror
            </form>
        </div>
    </div>
</x-app-layout>