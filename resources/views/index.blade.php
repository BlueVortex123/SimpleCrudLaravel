@extends('layout')
@section('content')

    <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('tasks.create') }}"> Create new task</a>
                </div>
            </div>
    </div>
    
    
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif


    <table class="table table-striped table-bordered">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Deadline</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($tasks as $task)
        <tr>
        <th scope="row">{{ $task->id }}</th>
        <td>{{ $task->name }}</td>
        <td>{{ $task->email }}</td>
        <td>{{ $task->deadline }}</td>
        <td>
        <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
            
            <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>

    {{ $tasks->links() }}



@endsection