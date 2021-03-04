@extends('layout')

    @section('head')

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    @endsection

@section('content')



<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
  
      
      <form method="post" action="{{ route('tasks.update', $task->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $task->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $task->email }}"/>
          </div>
          <div class="form-group">
            <label for="deadline">Task Deadline</label>
            <input type="date" class="form-control" value = "{{ $task -> deadline }}"  name="deadline"/>
         </div>
        
          
          
          
          <button type="submit" class="btn btn-block btn-danger">Update Task</button>
      </form>
  </div>
</div>
@endsection

