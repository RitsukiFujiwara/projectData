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
 </head>
 <body>
 <div id="app">
    <header-component></header-component>
    <example-component></example-component>
</div>
<table>
    <tr>
        <th>No</th>
        <th>案件名</th>
        <th>使用技術</th>
        <th>詳細</th>
    </tr>
    @foreach ($catalogs as $catalog)
    <tr>
        <td>{{ $catalog->id }}</td>
        <td>{{ $catalog->title }}</td>
        <td>{{ $catalog->skill }}</td>
        <td><a href="">詳細を見る</a></td>
        {{-- <td><a href="{{ route('catalog.show',['id' => $catalog->id ]) }}">詳細を見る</a></td> --}}
     </tr>
    @endforeach
</table>

 <!-- Scripts -->
 <script src="{{ mix('/js/app.js') }}" defer></script>
 </body>
 </html>
