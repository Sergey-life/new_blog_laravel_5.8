
<!doctype html>
<html lang="en" class="font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <link rel="alternate" type="application/atom+xml" title="The Laravel Blog" href="/feed">

    <meta name="theme-color" content="#011627">

    <meta name="twitter:title" content="The Laravel Blog ">
    <meta name="og:title" content="The Laravel Blog ">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="">
    <meta name="twitter:site" content="@themsaid">
    <meta name="twitter:image" content="https://blog.laravel.com/social-share.jpg">

    <meta name="og:site_name" content="The Laravel Blog">
    <meta name="og:image" content="https://blog.laravel.com/social-share.jpg">
    <meta name="og:type" content="website">
    <meta name="og:locale" content="en_US">

    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Merriweather" rel="stylesheet">

    <link rel="icon" type="image/png" href="https://laravel.com/favicon.png">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/styles/sunburst.min.css">

    <!-- Styles -->
    <link href="/css/theme.css" rel="stylesheet">

    <!-- Google analytics tracking code goes here -->

</head>
<body>

<header class="py-5 mb-10">
    <div class="container mx-auto px-5 lg:max-w-screen">
        <div class="flex items-center flex-col lg:flex-row">
            <a href="/" class="flex items-center no-underline text-brand">
                <img class="text-xl ml-3 w-24" src="https://www.revenuearchitects.com/wp-content/uploads/2017/02/Blog_pic-705x399.png" alt="">
            </a>

            <div class="lg:ml-auto mt-10 lg:mt-0 flex items-center">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Admin panel</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
{{--                <a href="/forge" class="ml-5 no-underline hover:underline uppercase">Forge</a>--}}
{{--                <a href="/envoyer" class="ml-5 no-underline hover:underline uppercase">Envoyer</a>--}}
            </div>
        </div>

    </div>
</header>

@foreach($posts as $post)

<div class="container mx-auto px-5 lg:max-w-screen-sm">
    <a class="no-underline transition block border border-lighter w-full mb-10 p-5 rounded post-card" href="{{route('posts.article', $post->id)}}">
        <div class="flex flex-col justify-between flex-1">
            <div>
                <h2 class="font-sans leading-normal block mb-6">
                    {{$post->subject}}
                </h2>

                <p class="leading-normal mb-6 font-serif leading-loose">
                    {{$post->hort_description}}
                </p>
            </div>
{{--            @foreach($author as $authors)--}}
            <div class="flex items-center text-sm text-light">
                <img src="https://download-cs.net/steam/download_avatar/3434" class="w-10 h-10 rounded-full" title="Taylor Otwell">
                <span class="ml-2">{{$post->author}}</span>
{{--                @endforeach--}}
                <span class="ml-auto">{{$post->updated_at}}</span>
            </div>

        </div>
    </a>
</div>
@endforeach


<div class="border-t border-lighter mt-20">
    <div class="container mx-auto px-5 lg:max-w-screen">
        <div class="text-muted py-10 text-center">
            Blog <a href="#">2020</a>.
        </div>
    </div>
</div>
</body>
</html>
