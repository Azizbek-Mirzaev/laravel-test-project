@extends('admin.parts.layout')
@section('title', 'Категории')
@section('content')
<div class="mt-3">
    <a href="{{ route('admin.category.create') }}" class="btn btn-success">Создать</a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>КРУД</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
            <tr>
                <td>{{ $category->id  }}</td>
                <td>{{ $category->title  }}</td>
                <td>{{ $category->created_at  }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a class="btn btn-secondary" href="{{ route('admin')  }}">Назад </a>
@endsection
