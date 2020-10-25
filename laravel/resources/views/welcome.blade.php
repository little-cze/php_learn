<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
{{--路径需要从views开始写--}}
@extends('parent')

{{--模板继承--}}
@section('main')
<div id="app">
    现在是：{{$date}},今天是星期{{$day}}<br>
    一年之后的时间是：{{date('Y-m-d H:i:s'),$time}}
    <form action="admin/select" method="any">
        <button type="submit" value="submit">
            submit
        </button>
    </form>
    @foreach($list as $key =>$val)
        {{$val}}<br>
    @endforeach
</div>
@endsection

{{--文件的包含--}}
@include('home')

<form action="home/test">
    @csrf
    ID: <input type="text" name="id" value="">
    姓名：<input type="text" name="firstname" value="">
    年龄：<input type="text" name="age" value="">
    邮箱：<input type="email" name="email" value="">
    <input type="submit" value="submit">
</form>

</body>

</html>
