@extends('admin.parts.layout')
@section('title', $user_show->name)
@section('content')

<div class="mt-3">
    <div class="row">
        <div class="col-6"><h6>Name</h6></div>
        <div class="col-6">{{$user_show->name}}</div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6"><h6>Email</h6></div>
        <div class="col-6">{{$user_show->email}}</div>
    </div>
    <hr>
</div><br>
<form action="{{ route('admin.user.index')  }}" method="get">
    <button type="submit" class="btn btn-success">Назад FORM</button><br>`
</form>
<a class="btn btn-primary" href="{{ route('admin.user.index')  }}">Назад A tag</a>
@endsection
