@extends('layouts.baseHtml')

@section('content')
<div class="flex-center position-ref full-height">
    <a href="/">На главную</a>
    <h1>Редактировать {{ $disc->Name }}</h1>
    <form action="/plate/update/" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" id="" value="{{ $disc->id }}">
        <p>Имя</p>
        <input type="text" name="name" id="" value="{{ $disc->Name  }}">
        <p>Жанр</p>
        <input type="text" name="genre" id="" value="{{ $disc->Genre  }}">
        <p>Описание</p>
        <input type="text" name="text" id="" value="{{ $disc->Text  }}">
        <input type="submit" value="save">
    </form>
</div>
@endsection