<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>ファイル編集画面</title>
    <style>
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
<header>
    <h1>ファイル編集画面</h1>
</header>
<nav>
</nav>
<main>
    <form action="{{ route('file.update', ['file_id' => $file->id]) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>コメント：<input type="text" name="comment" value="{{$file->comment}}"></div>
        <div>ファイル：<input type="file" name="file"></div>
        <div><img src="/storage/{{$file->file_name}}"></div>
        <input type="submit" value="更新">
    </form>
</main>
<footer>
</footer>
</body>
</html>
