@extends("admin.parts.layout")
@section("title",'Пользователи')
@section("content")
{{-- @dd($user_list) --}}

<table class="table table-striped">
    <thead>
        <tr>
            <th>№</th>
            <th>FIO</th>
            <th>Email</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $user_list as $user )
            {{-- @dd($user) --}}
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td class='d-flex flex-column align-items-center'>
                    <div>
                        <a class="btn btn-primary" href="{{ route('admin.user.edit', $user->id) }}">Редактировать</a>
                    </div>
                    <div class="my-3">
                        <a class="btn btn-dark" href="{{ route('admin.user.show', $user->id) }}">Посмотреть</a>
                    </div>
                    <div>
                        <a class="btn btn-danger" href="{{ route('admin.user.delete', $user->id) }}">Удалить</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
Salom Urto5612561
Admin panel2222 <br>
<a class="btn btn-primary" href="{{ route('admin.user.about')  }}">Автор </a><br><br>
<a class="btn btn-secondary" href="{{ route('admin')  }}">Назад </a>
<a class="btn btn-danger" href="{{ route('logout') }}">Выход</a>
@endsection

