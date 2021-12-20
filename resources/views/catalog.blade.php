@extends('layouts.app')

@section('content')
<div class="content_title">
    <h2>ProjectList</h2>
</div>

<div class="add_button">
    <a href="{{route('catalog.data')}}"><i class="fas fa-plus"></i> NewProject</a>
</div>
@if ($catalogs)
    
    @foreach ($catalogs as $catalog)
    <div class="content_wrapper">
        <div class="content_item">
            <p>{{ $catalog->title }}</p>
        </div>
        <div class="content_item">
            <div class="hidden_box">
                <label for="{{$catalog->id}}">▼詳細</label>
                <input type="checkbox" id="{{$catalog->id}}"/>
                <div class="hidden_show">
                  <!--非表示ここから-->     
                      <p>{{$catalog->text}}</p>
                  <!--ここまで-->
                </div>
            </div>
        </div>
        <div class="content_item">
            @foreach ($skills as $skill)
                @if ($skill->id === $catalog->skill)
                    <p>{{ $skill->skill_name }}</p>
                @endif
            @endforeach
        </div>
        <div class="content_item_icon">
            <a href="{{route('catalog.show',['id' => $catalog->id])}}"><i class="fas fa-pen"></i></a>
        </div>
        <div class="content_item_icon">
            <a href="{{route('catalog.destroy',['id' => $catalog->id])}}"><i class="fas fa-trash-alt"></i></a>
        </div>
    </div>
    @endforeach
@else
    Nodata
@endif


 <!-- Scripts -->
 <script src="{{ mix('/js/app.js') }}" defer></script>

 </body>
 </html>
@endsection

