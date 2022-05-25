<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>ファイル管理画面</title>
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
    <h1>ファイル管理画面</h1>
</header>
<nav>
</nav>
<main>
    <table>
        <tr><th>ファイル名</th><th>プレビュー</th><th>コメント</th></tr>
        @foreach($files as $file)
            <tr>
                <td>{{$file->file_name}}</td>
                <td><img src="/storage/{{$file->file_name}}"></td>
                <td>{{$file->comment}}</td>
            </tr>
        @endforeach
    </table>
</main>
<footer>
</footer>
</body>
</html>
