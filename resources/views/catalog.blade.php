@extends('layouts.app')

@section('content')
<div class="content_title">
    <h2>ProjectList</h2>
</div>
<div class="search_area">
    <form action="{{ route('catalog.index') }}" method="GET">
    @csrf
        <input type="text" name="keyword" value="{{$keyword}}" class="input_keyword" placeholder="プロジェクト名">
            <select name="skill">
                <option value="">使用技術を選択</option>
                @foreach ($skills as $skill)
                    @if ($skill->id === (int)$search_skill)
                    <option value="{{$skill->id}}" selected="selected">{{$skill->skill_name}}</option>
                    @else
                    <option value="{{$skill->id}}">{{$skill->skill_name}}</option>
                    @endif
                @endforeach
            </select>
        
        <input type="submit" value="検索" class="submit_button">
    </form>
</div>
<div class="add_button">
    <a class="js-modal-open" href=""><i class="fas fa-plus"></i> NewProject</a>
</div>
@include('inc.newProject')
@include('inc.message')
@if ($results->count())
    @foreach ($results as $result)
    <div class="content_wrapper">
        <div class="content_item">
            <p>{{ $result->title }}</p>
        </div>
        <div class="content_item">
            <div class="hidden_box">
                <label for="{{$result->id}}">▼内容</label>
                <input type="checkbox" id="{{$result->id}}"/>
                <div class="hidden_show">
                  <!--非表示ここから-->     
                      <p>{{$result->text}}</p>
                  <!--ここまで-->
                </div>
            </div>
        </div>
        <div class="content_item">
            @foreach ($skills as $skill)
                @if ($skill->id === $result->skill)
                    <p>{{ $skill->skill_name }}</p>
                @endif
            @endforeach
        </div>
        <div class="content_item_icon">
            <a href="{{route('catalog.show',['id' => $result->id])}}"><i class="fas fa-pen"></i></a>
        </div>
        <div class="content_item_icon">
            <a href="{{route('catalog.destroy',['id' => $result->id])}}"><i class="fas fa-trash-alt"></i></a>
        </div>
    </div>
    @endforeach
@else
    Nodata
@endif

 </body>
 </html>
@endsection

