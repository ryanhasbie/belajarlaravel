<x-app-layout>
    <h1 class="text-xl font-medium text-black m-6 font-bold">Tasks</h1>

        <div class="card w-96 bg-base-100 shadow-xl m-6">
            <div class="card-body">
            @include('tasks._create')
        </div>

<div class="overflow-x-auto">
    <table class="table w-800px m-6">
        <tbody>
            @foreach ($tasks as $index => $task)
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$task->list}}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id)}}" class="btn btn-sm btn-info">Edit</a>
                </td>
                <td>
                    <form action="{{route('tasks.destroy', $task->id)}}" method="POST" style="display:inline;">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-sm btn-error">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>