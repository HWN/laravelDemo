<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>后台</title>
    <meta name="description"
          content="一款由JQ酷为了省时间而打造的后台管理模板，封装了常用的JS方法，使得你可以写更少甚至不写js代码就可以完成整个后台的搭建。模板使用了layui，模块化开发，本套模板是按着本人这些年来的习惯编写，也为方便以后搭建项目的便捷而编写"/>
    <meta name="keywords" content="jqadmin,后台模板,layui后台模板"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <!-- load css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font/iconfont.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layui.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jqadmin.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css')}}" media="all">
    <script type="text/javascript" src="{{ URL::asset('js/layui/layui.js')}}"></script>
</head>
<body>
    @yield('content')
</body>
    @yield('script')
</html>