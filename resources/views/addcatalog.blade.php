{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
 
     <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>
 
     <!-- Styles -->
     <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/vue-js-modal@1.3.31/dist/index.min.js"></script> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue-js-modal@1.3.31/dist/styles.css">
 </head>
 <body>
    <div class="container_wrapper">
        <div class="container">
            <nav class="navbar">
                <span class="nav-bar logo"><a href="{{route('catalog.index')}}">ProjectManagement</a></span>
                <div>
                    <button class="btn"><a href="{{route('catalog.data')}}">新規登録</a></button>
                    <button class="btn">技術管理</button>
                    <button class="btn">ログアウト</button>
                </div>
            </nav>
        </div>
    </div>
 <div id="app">
    <addcatalog-component></addcatalog-component>
</div>

<div class="detail_container">
    <form method="POST" action="{{ route('catalog.add')}}">
        @csrf
    <div class="title_wrapper">
        <p>案件名</p>
        <input type="text" value="" name="title">
    </div>
    <div class="text_wrapper">
        <p>内容</p>
        <textarea class="catalog_text" rows="10" cols="50"  wrap=”hard” name="text"></textarea>
    </div>
    <div class="skill_wrapper">
        <p>使用技術</p>
        <select name="skill">
            @foreach ($skills as $skill)
                <option value="{{$skill->id}}">{{$skill->skill_name}}</option> 
            @endforeach
        </select>
    </div>
    <input type="submit" value="登録" style="width: 20%;">      
</form>
</div>


 <!-- Scripts -->
 <script src="{{ mix('/js/app.js') }}" defer></script>
 </body>
 </html> --}}
 @extends('layouts.app')

@section('content')


 <!-- Scripts -->
 
@endsection
