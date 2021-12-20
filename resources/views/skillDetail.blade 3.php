<!doctype html>
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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal-default-theme.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.js"></script>
 </head>
 <body>
    <div class="container_wrapper">
        <div class="container">
            <nav class="navbar">
                <span class="nav-bar logo"><a href="{{route('catalog.index')}}">ProjectManagement</a></span>
                <div>
                    <button class="btn"><a href="{{route('catalog.data')}}">新規登録</a></button>
                    <button class="btn"><a href="#modal">技術追加</a></button>
                    <button class="btn">ログアウト</button>
                </div>
            </nav>
        </div>
    </div>
 <div id="app">
    <skilldetail-component></skilldetail-component>
</div>
<!-- モーダルに出てくる内容 -->
<div class="remodal" data-remodal-id="modal">
    <!-- クローズボタン -->
    <button data-remodal-action="close" class="remodal-close"></button>
    <form method="POST" action="{{ route('skill.add')}}">
        @csrf
        <h2 class="new_skill">新規技術登録</h2>
        <div class="skill_add">
            <label>技術名</label><br>
            <input type="text" name="skill_name">
        </div>
        <input type="submit" value="登録">  
    </form>
</div>
<div class="detail_container">
    @foreach ($skills as $skill)
    <form method="GET" action="{{ route('skill.update', ['id' => $skill->id]) }}">
    @csrf
    <div class="title_wrapper">
        <p>技術名</p>
        <input type="text" value="{{ $skill->skill_name }}" name="skill_name">
    </div>
    <input type="submit" style="width: 20%;" value="変更">      
</form>
    @endforeach
</div>


 <!-- Scripts -->
 <script src="{{ mix('/js/app.js') }}" defer></script>
 </body>
 </html>
