@extends("admin.parts.layout")
@section("title",'Пользователи')
@section("content")
<form action="{{ route('admin.user.update',$user_list->id) }}"
     method="post"
     autocomplete="=off">
    @csrf
    <div class="form-group">
        <label for="name">FIO</label>
        <input type="text"
               id="name"
               name="name"
               value="{{ $user_list->name }}"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Email</label>
        <input type="text"
               id="email"
               name="email"
               value="{{ $user_list->email }}"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Password</label>
        <input type="text"
               id="password"
               name="password"
               placeholder="Enter your a new password"
               class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">Save</button>
</form>
Тут надо написать Логику Редактирования <br>
<a href="{{ route('logout') }}">Выход</a>
@endsection

