<a href="#" class="like"  data-value='like'  data-source-type="{{ $type }}" data-source-id="{{ $id }}" data-source-liked="{{ $is_liked ?? "false" }}">
    <i class="fa-heart"></i> <span class="like-numbers">{{ $likes ?? "0" }}</span> 
</a>