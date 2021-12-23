<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
 
     <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>
 
     <!-- Styles -->
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
     <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/vue-js-modal@1.3.31/dist/index.min.js"></script> 
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue-js-modal@1.3.31/dist/styles.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/vue-js-modal@1.3.31/dist/index.min.js"></script> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue-js-modal@1.3.31/dist/styles.css">

 </head>
 <body>
    <div class="container_wrapper">
        <div class="container">
            <nav class="navbar">
                <span class="nav-bar logo"><a href="{{route('catalog.index')}}">ProjectManagement</a></span>
                <div>
                    <button class="btn"><a href="{{route('skill.index')}}">技術管理</a></button>
                    <button class="btn"><a href="">ログアウト</a></button>
                </div>
            </nav>
        </div>
    </div>
    
 {{-- <div id="app">
    <example-component></example-component>
    <router-view></router-view>
</div> --}}
{{-- <div class="search_wrapper">
    <div class="search_skill">
        <span>スキル検索</span>
        <input type="text" class="flexdatalist" name="inputName" autocomplete="on" list="datalist_skill" >
        <datalist id="datalist_skill">
            @foreach ($skills as $skill)
                <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
            @endforeach
        </datalist>
    </div>
    <div class="search_project">
        <span>案件検索</span>
        <input name="inputName" autocomplete="on" list="datalist_project" type="text">
        <datalist id="datalist_project">
            @foreach ($catalogs as $catalog)
                <option value="{{ $catalog->id }}">{{ $catalog->title }}</option>
            @endforeach
        </datalist>
    </div>
</div> --}}

<main class="py-4">
    @yield('content')
</main>
