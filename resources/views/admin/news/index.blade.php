<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>List news</h1>
    <a href="/news/create">Create new</a>
    <ul>
    @foreach ($list as $news)
        <li>{{ $news->title }} - {{$news->category->name}}</li>
    @endforeach
    </ul>
</body>
</html>
