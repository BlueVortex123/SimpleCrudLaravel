@extends('layout')

@section('head')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create new Task</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('tasks.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your fields<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tasks.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="topic">Name</label>
    <input type="text" class="form-control"  placeholder="Enter the name" name ="name">
  </div>
  <div class="form-group">
    <label for="description">Email</label>
    <input type="text" class="form-control" placeholer ="Enter the email" name="email">
  </div>
  
  <div class="form-group">
        <label for="deadline">Task Deadline</label>
        <input type="date" class="form-control" id ="deadline" name="deadline" value=""/>
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection