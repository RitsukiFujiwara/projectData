<div class="modal js-modal">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <a class="js-modal-close" href="">×</a>
        <form method="POST" action="{{ route('catalog.add')}}">
            @csrf
        <div class="title_wrapper">
            <h2>NewProject</h2>
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
        <input type="submit" value="登録">      
    </form>
    </div><!--modal__inner-->
</div><!--modal-->

<script>
    $(function(){
   $('.js-modal-open').on('click',function(){
       $('.js-modal').fadeIn();
       return false;
   });
   $('.js-modal-close').on('click',function(){
       $('.js-modal').fadeOut();
       return false;
   });
});
</script>