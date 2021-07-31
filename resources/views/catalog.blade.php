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
     <script src="{{asset('jquery-flexdatalist-2.3.0 2/jquery.flexdatalist.min.js')}}"></script>
     <link rel="stylesheet" href="{{asset('jquery-flexdatalist-2.3.0 2/jquery.flexdatalist.min.css')}}">
     <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/vue-js-modal@1.3.31/dist/index.min.js"></script> 
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vue-js-modal@1.3.31/dist/styles.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
    <example-component></example-component>
    <router-view></router-view>
</div>
<div class="search_wrapper">
    <div class="search_skill">
        <input type="text" class="flexdatalist" name="inputName" autocomplete="on" list="datalist_skill" >
        <datalist id="datalist_skill">
            @foreach ($skills as $skill)
                <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
            @endforeach
        </datalist>
    </div>
    <div class="search_project">
        <input name="inputName" autocomplete="on" list="datalist_project" type="text">
        <datalist id="datalist_project">
            @foreach ($catalogs as $catalog)
                <option value="{{ $catalog->id }}">{{ $catalog->title }}</option>
            @endforeach
        </datalist>
    </div>
</div>
<table>
    <tr>
        <th>No</th>
        <th>案件名</th>
        <th>使用技術</th>
        <th>詳細</th>
        <th>削除</th>
    </tr>
    @foreach ($catalogs as $catalog)
    <tr>
        <td>{{ $catalog->id }}</td>
        <td>{{ $catalog->title }}</td>
        @foreach ($skills as $skill)
            @if ($skill->id === $catalog->skill)
                <td>{{ $skill->skill_name }}</td>
            @endif
        @endforeach
        <td><a href="{{route('catalog.show',['id' => $catalog->id])}}"><i class="far fa-eye"></i></a></td>
        <td><a href="{{route('catalog.destroy',['id' => $catalog->id])}}"><i class="fas fa-times"></i></a></td>
     </tr>
    @endforeach
</table>

 <!-- Scripts -->
 <script src="{{ mix('/js/app.js') }}" defer></script>
 <script>
    const skills = @json($skills);
   $('.flexdatalist').flexdatalist({
    minLength: 1,
         searchIn: 'skill_name',
         searchContain: true,
         data:skills
});
</script>
 </body>
 </html>
