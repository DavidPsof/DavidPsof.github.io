<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plate</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            display: block;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <h1>Редактировать {{ $disc->Name }}</h1>
    <form action="/Update/" method="post">
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

</body>
</html>