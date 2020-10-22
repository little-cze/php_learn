<!DOCTYPE>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>
<body>
    <h1>Home</h1>
    <form action="TestController@add" method="get">
        @csrf
{{--        指向web路由文件定义的路由的任何HTML表单都应该包含一个csrf令牌字段。--}}
        <button type="submit" value="submit">submit</button>
    </form>
</body>
</html>
