@extends('layouts.app')

@section('content')
<div class="content_title">
    <h2>ProjectList</h2>
</div>
@if ($catalogs)
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
@else
    Nodata
@endif


 <!-- Scripts -->
 <script src="{{ mix('/js/app.js') }}" defer></script>

 </body>
 </html>
@endsection

