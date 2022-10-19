<h2 class="card-title">Create New Task</h2>
{{-- <form action="/tasks" method="POST"> --}} <form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    @include('tasks._form')
</form>
</div>