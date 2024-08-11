<?php
exportAssets();
$defaults = getThemeDefaults();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="{{ settings('r', 'general.theme_color')}}" >
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <link rel="stylesheet" href="{{ homeUrl('/assets/css/style.css') }}">
        <script type="text/javascript" src="{{ homeUrl('/assets/js/script.js') }}" defer></script>
        <title>{{ settings('r', "general.name", "Nidavel") }}</title>
    </head>

    <body>
        <div class="body-bg">
            {{-- Nav --}}
            <div>
                @include('front.parts.nav')
            </div>

            <div class="flex flex-col gap-16">
                {{-- Header --}}
                {{-- Main section --}}
                <div class="">
                    <div class="relative w-full h-96 overflow-hidden">
                        <img
                         style="width: 100%; height: 100%; object-position: center; object-fit: cover;"
                         alt="Header Image"
                         src="{{ homeUrl("/assets/img/ctn-edit-3.jpg", 0) }}">
                        <div class="absolute top-0 w-full h-full flex justify-center items-center z-10">
                            <span class="tag-line">{{$defaults['tag-line']}}</span>
                        </div>
                    </div>
                </div>
                <div class="body-margin w-full">
                    <div class="w-full">
                        <div class="posts-list-container">
                            @php
                                $postIndex = 0;
                            @endphp
                            @foreach ($posts as $post)
                            @php
                                $postIndex++;
                                $imgHeight = $postIndex % 2 === 0 ? 'h-72' : 'h-40';
                            @endphp
                            <div class="post-card">
                                <img src="<?= $post->featured_image != null
                                 ? asset('/uploads/' . $post->featured_image)
                                 : asset('/uploads/images/post_default_image.png') ?>"
                                 class="object-cover w-full {{$imgHeight}}"
                                 alt="" />
                                <div class="p-5">
                                    <a href="{{ exportLink("/posts/$post->link") }}" aria-label="Category" title="{{ $post->title }}" class="post-card-title">{{ $post->title }}</a>
                                    <p class="mb-3 text-xs tracking-wide">
                                        {{-- <a href="/" class="post-card-category" aria-label="Category" title="traveling">{{ !empty($post->category) ? $post->category : 'No category' }}</a> --}}
                                        <span class="post-card-category" aria-label="Category" title="traveling">{{ !empty($post->category) ? $post->category : 'No category' }}</span>
                                        <span class="text-gray-600">— {{ date('jS F Y', strtotime($post->updated_at)) }}</span>
                                    </p>
                                    <p class="post-card-desc">
                                        {{ $post->description != null ? substr($post->description, 0, 75) : substr($post->content, 0, 102) }}
                                    </p>
                                    <a href="{{ exportLink("/posts/$post->link") }}" aria-label="" class="post-card-cta">Learn more</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Footer --}}
                <div>
                    @include('front.parts.footer')
                </div>
            </div>
        </div>
    </body>
</html>
