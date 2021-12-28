@extends('layouts.app')

@section('content')
<div class="modal js-modal-detail">
    <div class="modal__bg js-modal-detail-close"></div>
    <div class="modal__content">
        <a class="js-modal-close" href="">×</a>
        @foreach ($catalogs as $catalog)
        <form method="GET" action="{{ route('catalog.update', ['id' => $catalog->id]) }}">
            @csrf
        <div class="title_wrapper">
            <h2>NewProject</h2>
            <p>案件名</p>
            <input type="text" value="{{ $catalog->title }}" name="title">
        </div>
        <div class="text_wrapper">
            <p>内容</p>
            <textarea class="catalog_text" rows="10" cols="50"  wrap=”hard” name="text">{{ $catalog->text }}</textarea>
        </div>
        <div class="skill_wrapper">
            <p>使用技術</p>
            <select name="skill">
                @foreach ($skills as $skill)
                @if ($skill->id === $catalog->skill)
                <option value="{{$skill->id}}" selected="selected">{{$skill->skill_name}}</option> 
                @else
                <option value="{{$skill->id}}">{{$skill->skill_name}}</option> 
                @endif
                @endforeach
            </select>
        </div>
        <input type="submit" value="登録">      
    </form>
    @endforeach
    </div><!--modal__inner-->
</div><!--modal-->

<script>
    $(function(){
   $('.js-modal-detail-open').on('click',function(){
       $('.js-modal-detail').fadeIn();
       return false;
   });
   $('.js-modal-detail-close').on('click',function(){
       $('.js-modal-detail').fadeOut();
       return false;
   });
});
</script>
@endsection

