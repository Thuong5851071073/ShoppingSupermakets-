<section class="recent_posts padbot40">
			
    <!-- CONTAINER -->
    <div class="container">
        <h2>Bài viết mới</h2>
        <!-- ROW -->
        <div class="row" data-appear-top-offset='-100' data-animated='fadeInUp'>
            @foreach ($newPosts as $k => $post)
                @if ($k < 2)
                    <div class="col-lg-6 col-md-6 padbot30">
                        <div class="recent_post_item clearfix">
                            <div class="recent_post_date">{{ date_format($post->created_at,"d") }}<span>{{ substr(date_format($post->created_at, "F"), 0, 3) }}</span></div>
                            <a class="recent_post_img" href="{{ route('blog.detail', [get_category_post_by_id(get_category_by_post_id($post->id)->category_id)->slug, $post->slug]) }}" >
                                <img src="{{ RvMedia::getImageUrl($post->image, 'new_post', false, RvMedia::getDefaultImage()) }}" alt="" />
                            </a> 
                            <a class="recent_post_title" href="{{ route('blog.detail', [get_category_post_by_id(get_category_by_post_id($post->id)->category_id)->slug, $post->slug]) }}" >{{ $post->name }}</a>
                            <div class="recent_post_content">{{ $post->description }}</div>
                            <ul class="post_meta">
                                <li><i class="fa fa-comments"></i>Bình luận <span class="sep">|</span> 15</li>
                            </ul>
                        </div>
                    </div>
                @endif
            @endforeach
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section>