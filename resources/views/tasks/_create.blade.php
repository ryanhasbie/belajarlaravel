<h2 class="card-title">Create New Task</h2>
{{-- <form action="/tasks" method="POST"> --}} <form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <input type="text" name="list" placeholder="The name of task..">
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