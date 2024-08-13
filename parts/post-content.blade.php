<?php
if (!empty($post->keywords)) {
    $keywords = explode(',', $post->keywords);
}
?>

<main class="single-post-container">
    <div class="single-post-featured-image"
        style="min-height: 480px; background-image: url('{!! asset('/uploads/' . $post->featured_image) !!}')"
        title="{{$post->title}}">
    </div>
    <div class="max-w-3xl mx-auto">
        <div class="mt-3 bg-white rounded-b flex flex-col leading-normal">
            <article class="">
                <h1 href="#" class="">{{$post->title}}</h1>
                <p class="text-xs mt-2">Written By:
                    <a href="#"
                        class="link text-xs">
                        {{$post->author}}
                    </a> In
                    <a href="#"
                        class="link text-xs">
                        {{!empty($post->category) ? $post->category : 'No category'}}
                    </a>

                </p>

                {{-- Post content --}}
                <div class="flex flex-col gap-4">
                    {!! $post->content !!}
                </div>

                @foreach ($keywords as $keyword)
                    <a href="#" class="post-keywords link">
                        #{{$keyword}}
                    </a>
                @endforeach
            </article>
        </div>
    </div>
</main>
