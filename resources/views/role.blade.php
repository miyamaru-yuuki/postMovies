<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
    <title>役割管理画面</title>
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
    <h1>役割管理画面</h1>
</header>
<nav>
</nav>
<main>
    <table>
        @foreach($users as $user)
            <tr><td>{{$user->name}}</td><td>{{$user->email}}</td><td>{{$user->roles}}</td></tr>
        @endforeach
    </table>
{{--    <form id="fm1" method="POST">--}}
{{--        <input type="hidden" name="sid" value=0 id="sidtxt0">--}}
{{--        <input type="text" name="sname" id="snametxt0">--}}
{{--        <input type="text" name="tanka" id="tankatxt0">--}}
{{--        <input type="submit" value="追加" id="submit">--}}
{{--    </form>--}}
</main>
<footer>
</footer>
</body>
</html>
