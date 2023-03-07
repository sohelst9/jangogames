@extends('layouts.frontend.app')
@section('header')
    <meta property="og:title" content="Play free online games on Jangogames {{ $game->name }} Games">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image"
        @if ($game->thumbnail) content="{{ asset('uploads/Games/' . $game->thumbnail) }}" @else content="{{ $game->image_link }}" @endif />
    <meta name="title" content=" Play free online games on Jangogames {{ $game->name }} Games" />
    <meta name="description"
        content="Play thousands of free online games on Jango Games. Find the best free games you will love to play. Play all your favorite games like puzzle games, word and trivia games, card games, multiplayer games and more." />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Play free online games on Jangogames {{ $game->name }} Games</title>
@endsection
@section('frontend_content')
    <!-- ===================================== -->
    <!-- PLAYGROUND PART START -->
    <!-- ===================================== -->
    <section id="playground">
        <div class="container-fluid">
            <div class="row gx-3">
                <!-- left top sidebar -->
                <div class="col-xl-2 col-lg-6 col-12">
                    <div class="row gx-3">
                        @foreach ($related_games->slice(1, 4) as $related_game)
                            <div class="col-md-6 col-6 col-sm-6 mb-3">
                                <div class="gameGallery">
                                    <div class="gameImg gamereset">
                                        <a href="{{ route('gamePlay', $related_game?->Game->slug) }}" title="{{ $related_game?->Game->name }}">
                                            @if ($related_game?->Game->thumbnail)
                                                <img src="{{ asset('uploads/Games/' . $related_game?->Game->thumbnail) }}"
                                                    alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                            @else
                                                <img src="{{ $related_game?->Game->image_link }}" alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                            @endif
                                        </a>
                                        <div class="gameImg_content contentreset">
                                            <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                title="{{ $related_game?->Game->name }}">{{ $related_game?->Game->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!----ads left sidebar--------->
                        <div class="col-md-12 col-12">
                            <div class="add_v">
                                <h3>Ads.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end left sidebar -->

                <!---game play----->
                <div class="col-xl-8 col-12 col-lg-12">
                    <div class="playground spaces">
                        <iframe src="{{ $game->link }}" width="100%" height="100%" scrolling="none" frameborder="0"
                            id="fullScreen"></iframe>
                        <div class="playground_sidepannel">
                            <div class="game_name">
                                <a href="{{ route('gamePlay', $game->slug) }}">{{ $game->name }}</a>
                            </div>
                            <div class="icons d-flex">
                                <div class="share_icon">
                                    <a href="#" id="share" title="Share" data-bs-toggle="tooltip"
                                        data-bs-placement="top"><i class="uil uil-share-alt"></i></a>
                                </div>

                                <div class="expand_icon">
                                    <a href="#" id="openScreen" title="Fullscreen" data-bs-toggle="tooltip"
                                        data-bs-placement="top"><i class="uil uil-expand-arrows-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="socail_container">
                            <div class="close_icon"><i class="uil uil-times"></i></div>
                            <div class="socail_share">
                                <!-- ShareThis BEGIN -->
                                <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                            </div>
                        </div>
                    </div>
                    <div class="row mt-60">
                        <div class="col-md-12">
                            <div class="add_h">
                                <h3>Ads.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!---end game play----->

                <!--- start right top sidebar---->
                <div class="col-xl-2 col-md-6 ">
                    <div class="row gx-3">
                        @foreach ($related_games->slice(5, 4) as $related_game)
                            <div class="col-md-6 col-6 col-sm-6 mb-3">
                                <div class="gameGallery">
                                    <div class="gameImg gamereset">
                                        <a href="{{ route('gamePlay', $related_game?->Game->slug) }}" title="{{ $related_game?->Game->name }}">
                                            @if ($related_game?->Game->thumbnail)
                                                <img src="{{ asset('uploads/Games/' . $related_game?->Game->thumbnail) }}"
                                                alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                            @else
                                                <img src="{{ $related_game?->Game->image_link }}" alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                            @endif
                                        </a>
                                        <div class="gameImg_content contentreset">
                                            <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                title="{{ $related_game?->Game->name }}">{{ $related_game?->Game->name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12 col-12">
                            <div class="add_v">
                                <h3>Ads.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- end right top sidebar---->

                <!-- start -->
                <div class="col-md-12">
                    <div class="row my-3">
                        <!-- start left  middle sidebar -->
                        <div class="col-xl-2 col-md-3 ">
                            <div class="row gx-3">
                                @foreach ($related_games->slice(9, 8) as $related_game)
                                    <div class="col-md-6 col-6 col-sm-6 mb-3">
                                        <div class="gameGallery">
                                            <div class="gameImg gamereset">
                                                <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                    title="{{ $related_game?->Game->name }}">
                                                    @if ($related_game?->Game->thumbnail)
                                                        <img src="{{ asset('uploads/Games/' . $related_game?->Game->thumbnail) }}"
                                                        alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                                    @else
                                                        <img src="{{ $related_game?->Game->image_link }}" alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                                    @endif
                                                </a>
                                                <div class="gameImg_content contentreset">
                                                    <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                        title="{{ $related_game?->Game->name }}">{{ $related_game?->Game->name }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-12 col-12">
                                    <div class="add_v">
                                        <h3>Ads.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end left  middle sidebar -->

                        <div class="col-xl-8 col-md-6">
                            <div class="row">
                                <!---start middle related game----->
                                @foreach ($related_games->slice(18, 8) as $related_game)
                                    <div class="col-md-3 col-6 col-sm-6 mb-3">
                                        <div class="gameGallery">
                                            <div class="gameImg gamereset">
                                                <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                    title="{{ $related_game?->Game->name }}">
                                                    @if ($related_game?->Game->thumbnail)
                                                        <img src="{{ asset('uploads/Games/' . $related_game?->Game->thumbnail) }}"
                                                            alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                                    @else
                                                        <img src="{{ $related_game?->Game->image_link }}" alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                                    @endif
                                                </a>
                                                <div class="gameImg_content contentreset">
                                                    <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                        title="{{ $related_game?->Game->name }}">{{ $related_game?->Game->name }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!---end middle related game----->

                                <div class="row g-1">
                                    <div class="col-md-12">
                                        <section id="homepageContent" class="pb-5">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="Content_wrapper pl-5 pt-5">
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <div class="inner_content" id="content">
                                                                        <main>
                                                                            <article>
                                                                                <h2>{{ $game->name }}</h2>
                                                                                <p>
                                                                                    {!! $game->desc !!}
                                                                                </p>
                                                                            {{-- </article>
                                                                                <h2>Platform</h2>
                                                                                <p>Web Browser (desktop and mobile)</p>
                                                                            </article> --}}
                                                                            <div class="game_genre mt-5">
                                                                                <div class="game_genre-box"
                                                                                    id="genreBx">
                                                                                    <div class="game_genre-box-title">
                                                                                        <h2>Related Categories & Tags</h2>
                                                                                    </div>
                                                                                    <div class="game_genre-box-icon">
                                                                                        <i class="fas fa-chevron-down"
                                                                                            id="genreIcon"></i>
                                                                                    </div>
                                                                                    <div class="game_genre-items"
                                                                                        id="genreItem">
                                                                                        <h3>Categories</h3>
                                                                                        <ul>
                                                                                            @foreach ($game_same_categories as $same_category)
                                                                                            <li><a href="#"
                                                                                                    class="genreItem">{{ $same_category->category_name }}</a>
                                                                                            </li>
                                                                                            @endforeach
                                                                                               
                                                                                        </ul>
                                                                                        <h3>Tags</h3>
                                                                                        <ul>
                                                                                            @foreach ($game_same_tags as $same_tag)
                                                                                            <li><a href="#"
                                                                                                    class="genreItem">{{ $same_tag->tag_name }}</a>
                                                                                            </li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>


                                                                        </main>

                                                                    </div>

                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="content_img">
                                                                        <div class="swiper mySwiper2">
                                                                            <div class="swiper-wrapper">
                                                                                <div class="swiper-slide">
                                                                                    <a href="#"><img
                                                                                            src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                                                            alt="" /></a>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <a href="#"><img
                                                                                            src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                                                            alt="" /></a>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <a href="#"><img
                                                                                            src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                                                            alt="" /></a>
                                                                                </div>
                                                                                <div class="swiper-slide">
                                                                                    <a href="#"><img
                                                                                            src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                                                            alt="" /></a>
                                                                                </div>


                                                                            </div>
                                                                            <div class="swiper-pagination"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row pt-5">
                                                                        <div class="col-md-12 col-12">
                                                                            <div class="add_v-sm">
                                                                                <h3>Ads.</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="back_to_game_btn">
                                                                <a href="#top" class="back_to_game">Back To Game &nbsp;
                                                                    <i class="fa fa-chevron-up"></i> </a>
                                                            </div> --}}
                                                        </div>

                                                        <div class="bottom_bar">
                                                            <div class="bottom_bar-bar"></div>
                                                            <div class="see_more">
                                                                <a href="#content" class="see_more-btn"><i
                                                                        class="fas fa-chevron-down"></i> See More </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-3 ">
                            <div class="row gx-3">
                                <!---start middle related game----->
                                @foreach ($related_games->slice(27, 8) as $related_game)
                                    <div class="col-md-6 col-6 col-sm-6 mb-3">
                                        <div class="gameGallery">
                                            <div class="gameImg gamereset">
                                                <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                    title="{{ $related_game?->Game->name }}">
                                                    @if ($related_game?->Game->thumbnail)
                                                        <img src="{{ asset('uploads/Games/' . $related_game?->Game->thumbnail) }}"
                                                            alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                                    @else
                                                        <img src="{{ $related_game?->Game->image_link }}" alt="{{ $related_game?->Game->name }} - Play Free Best {{ $related_game->category_name }} Online Game on JangoGames.com">
                                                    @endif
                                                </a>
                                                <div class="gameImg_content contentreset">
                                                    <a href="{{ route('gamePlay', $related_game?->Game->slug) }}"
                                                        title="{{ $related_game?->Game->name }}">{{ $related_game?->Game->name }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-md-12 col-12">
                                    <div class="add_v">
                                        <h3>Ads.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end left  middle sidebar -->
            </div>
        </div>
        </div>
    </section>

    <!-- ===================================== -->
    <!-- PLAYGROUND PART END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!-- ALL GAMES START -->
    <!-- ===================================== -->
    <section id="all_games" class="pt-5">

        <div class="section_title text-center">
            <div class="section_title-important">

                <lord-icon src="https://cdn.lordicon.com/ktxpktdd.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:80px;height:70px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>All Games</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Play Millions has the best selection of online games for you to play, from multiplayer games to free
                    online games for pc and more. Plus, we add new games all the time, so you'll never get bored!</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="{{ route('all_games') }}" class="view-more-button text-dark" title="View More Games"
                    data-bs-toggle="tooltip" data-bs-placement="top">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="gameGallery">
                @foreach ($games->slice(1, 6) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(7, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(8, 3) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(12, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(14, 3) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(18, 3) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(22, 4) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(27, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(28, 2) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(31, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(33, 2) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(36, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(38, 4) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(43, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(45, 2) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(48, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(50, 2) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(53, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(55, 4) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(60, 1) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(62, 6) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach


                @foreach ($games->slice(69, 3) as $game)
                    <div class="gameImg big-stretch">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($games->slice(73, 10) as $game)
                    <div class="gameImg">
                        <a href="{{ route('gamePlay', $game->slug) }}" title="{{ $game->name }}">
                            @if ($game->thumbnail)
                                <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @else
                                <img src="{{ $game->image_link }}"
                                    alt="{{ $game->name }} - Play Free Best {{ $game->gameCategory?->category_name }} Online Game on JangoGames.com">
                            @endif
                        </a>
                        <div class="gameImg_content">
                            <a href="{{ route('gamePlay', $game->slug) }}"
                                title="{{ $game->name }}">{{ $game->name }} </a>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="view_more text-right pt-5">
                <a href="{{ route('all_games') }}" class="view-more-button--load-more text-dark" title="Load More Games"
                    data-bs-toggle="tooltip" data-bs-placement="top">View All</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- ALL GAMES END -->
    <!-- ===================================== -->

    <!-- ===================================== -->
    <!-- ALL TAGS START -->
    <!-- ===================================== -->
    <section id="game_slider" class="pt-5">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/qjvxqdov.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:80px;height:70px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>Popular Tags</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> Lorem Ipsum has been
                    the industry's standard dummy</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="alltags.html" class="view-more-button text-dark" title="View More Tags"
                    data-bs-toggle="tooltip" data-bs-placement="top">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="tagBox">
                <div class="tagCard" style="--i:#FA5757" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="MineCraft" data-bs-toggle="tooltip"
                            data-bs-placement="top">MineCraft</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#7AB0E0" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Car Racing" data-bs-toggle="tooltip"
                            data-bs-placement="top">Car
                            Racing</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#5A7A98" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Basketball" data-bs-toggle="tooltip"
                            data-bs-placement="top">Basketball</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#1B00BC" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="2 player" data-bs-toggle="tooltip" data-bs-placement="top">2
                            player</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#709E01" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Bike Racing" data-bs-toggle="tooltip"
                            data-bs-placement="top">Bike
                            Racing</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#5DB2F2" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Driving" data-bs-toggle="tooltip"
                            data-bs-placement="top">Driving</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#6E3A00" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Multiplayer" data-bs-toggle="tooltip"
                            data-bs-placement="top">Multiplayer</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#B05B83" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Card Game" data-bs-toggle="tooltip"
                            data-bs-placement="top">Card
                            Game</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#154F4A" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Board Game" data-bs-toggle="tooltip"
                            data-bs-placement="top">Board
                            Game</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#003164" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Chess" data-bs-toggle="tooltip"
                            data-bs-placement="top">Chess</a>
                    </div>
                </div>

                <div class="tagCard" style="--i:#FF8870" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Tower defence" data-bs-toggle="tooltip"
                            data-bs-placement="top">Tower
                            defence</a>
                    </div>
                </div>

                <div class="tagCard" style="--i:#D18AFF" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="3D" data-bs-toggle="tooltip"
                            data-bs-placement="top">3D</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#00C79D" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Drifting" data-bs-toggle="tooltip"
                            data-bs-placement="top">Drifting</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#5700AE" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="MMO" data-bs-toggle="tooltip"
                            data-bs-placement="top">MMO</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#56423D" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Match 3" data-bs-toggle="tooltip"
                            data-bs-placement="top">Match
                            3</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#FA5757" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="MineCraft" data-bs-toggle="tooltip"
                            data-bs-placement="top">MineCraft</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#7AB0E0" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Car Racing" data-bs-toggle="tooltip"
                            data-bs-placement="top">Car
                            Racing</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#5A7A98" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Basketball" data-bs-toggle="tooltip"
                            data-bs-placement="top">Basketball</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#1B00BC" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="2 player" data-bs-toggle="tooltip" data-bs-placement="top">2
                            player</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#709E01" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Bike Racing" data-bs-toggle="tooltip"
                            data-bs-placement="top">Bike
                            Racing</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#5DB2F2" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Driving" data-bs-toggle="tooltip"
                            data-bs-placement="top">Driving</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#6E3A00" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Multiplayer" data-bs-toggle="tooltip"
                            data-bs-placement="top">Multiplayer</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#B05B83" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Card Game" data-bs-toggle="tooltip"
                            data-bs-placement="top">Card
                            Game</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#154F4A" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Board Game" data-bs-toggle="tooltip"
                            data-bs-placement="top">Board
                            Game</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#003164" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Chess" data-bs-toggle="tooltip"
                            data-bs-placement="top">Chess</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#FF8870" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Tower defence" data-bs-toggle="tooltip"
                            data-bs-placement="top">Tower
                            defence</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#D18AFF" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="3D" data-bs-toggle="tooltip"
                            data-bs-placement="top">3D</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#00C79D" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Drifting" data-bs-toggle="tooltip"
                            data-bs-placement="top">Drifting</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#5700AE" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="MMO" data-bs-toggle="tooltip"
                            data-bs-placement="top">MMO</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#56423D" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Match 3" data-bs-toggle="tooltip"
                            data-bs-placement="top">Match
                            3</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#FA5757" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="MineCraft" data-bs-toggle="tooltip"
                            data-bs-placement="top">MineCraft</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#7AB0E0" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Car Racing" data-bs-toggle="tooltip"
                            data-bs-placement="top">Car
                            Racing</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#5A7A98" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Basketball" data-bs-toggle="tooltip"
                            data-bs-placement="top">Basketball</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#1B00BC" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="2 player" data-bs-toggle="tooltip" data-bs-placement="top">2
                            player</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#709E01" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Bike Racing" data-bs-toggle="tooltip"
                            data-bs-placement="top">Bike
                            Racing</a>
                    </div>
                </div>
                <div class="tagCard" style="--i:#5DB2F2" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                    <div class="tagCard_icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div class="tagCard_name">
                        <a href="alltags.html" title="Driving" data-bs-toggle="tooltip"
                            data-bs-placement="top">Driving</a>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- ===================================== -->
    <!-- ALL TAGS END -->
    <!-- ===================================== -->


    <!-- ===================================== -->
    <!-- YOU MAY LIKE START -->
    <!-- ===================================== -->
    <section id="you_may_like" class="youmaylike mt-5">
        <div class="section_title text-center">
            <div class="section_title-important">

                <lord-icon src="https://cdn.lordicon.com/mdgrhyca.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:70px;height:60px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>You May Like</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> Lorem Ipsum has been
                    the industry's standard dummy</p>
            </div>
        </div>
        <div class="container-fluid ">
            <div class="view_more text-right">
                <a href="youmaylikegame.html" class="view-more-button text-dark" title="View More Games"
                    data-bs-toggle="tooltip" data-bs-placement="top">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="row mb-5  justify-content-center">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                    <div class="youmaylike_gameCard">
                        <div class="youmaylike_gameCard_Img">
                            <a href="playground.html" title="Snow Mo" data-bs-toggle="tooltip"
                                data-bs-placement="top"> <img src="images/games/Snow Mo-min.png" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="youmaylike_gameCard_Name">
                            <a href="playground.html" title="Snow Mo" data-bs-toggle="tooltip"
                                data-bs-placement="top">Snow Mo</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                    <div class="youmaylike_gameCard">
                        <div class="youmaylike_gameCard_Img">
                            <a href="playground.html" title="Speed Row" data-bs-toggle="tooltip"
                                data-bs-placement="top"> <img src="images/games/Speed Row-min.png" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="youmaylike_gameCard_Name">
                            <a href="playground.html" title="Speed Row" data-bs-toggle="tooltip"
                                data-bs-placement="top">Speed Row</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                    <div class="youmaylike_gameCard">
                        <div class="youmaylike_gameCard_Img">
                            <a href="playground.html" title="River bend" data-bs-toggle="tooltip"
                                data-bs-placement="top"> <img src="images/games/River bend-min.png" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="youmaylike_gameCard_Name">
                            <a href="playground.html" title="River bend" data-bs-toggle="tooltip"
                                data-bs-placement="top">River bend</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                    <div class="youmaylike_gameCard">
                        <div class="youmaylike_gameCard_Img">
                            <a href="playground.html" title="Somersault Ninja" data-bs-toggle="tooltip"
                                data-bs-placement="top"> <img src="images/games/Somersault Ninja-min.png"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="youmaylike_gameCard_Name">
                            <a href="playground.html" title="Somersault Ninja" data-bs-toggle="tooltip"
                                data-bs-placement="top">Somersault Ninja</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                    <div class="youmaylike_gameCard">
                        <div class="youmaylike_gameCard_Img">
                            <a href="playground.html" title="Rule out" data-bs-toggle="tooltip"
                                data-bs-placement="top"> <img src="images/games/Rule out-min.png" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="youmaylike_gameCard_Name">
                            <a href="playground.html" title="Rule out" data-bs-toggle="tooltip"
                                data-bs-placement="top">Rule out</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-5">
                    <div class="youmaylike_gameCard">
                        <div class="youmaylike_gameCard_Img">
                            <a href="playground.html" title="Stickman Ghost" data-bs-toggle="tooltip"
                                data-bs-placement="top"> <img src="images/games/Stickman Ghost Online-512x512-min.jpg"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="youmaylike_gameCard_Name">
                            <a href="playground.html" title="Stickman Ghost" data-bs-toggle="tooltip"
                                data-bs-placement="top">Stickman Ghost</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- YOU MAY LIKE END -->
    <!-- ===================================== -->



    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT START -->
    <!-- ===================================== -->
    <section id="homepageContent" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class=" content_title--fullwidth text-left">Online Free Games &nbsp; <i
                            class="fas fa-arrow-circle-right"></i> &nbsp; Educational</h1>
                    <div class="Content_wrapper pl-5 pt-5">
                        <div class="row ">
                            <div class="col-md-10">
                                <div class="inner_content" id="content">

                                    <main>
                                        <article>
                                            <h2>What is Lorem Ipsum?</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, mollitia.
                                                Officia
                                                dicta saepe reprehenderit fugit obcaecati voluptate corrupti ea unde
                                                corporis
                                                illum eligendi culpa dolorem perspiciatis iste pariatur dolore
                                                molestias,
                                                repudiandae, consequuntur quia ut quod magnam rem nulla. Eos culpa
                                                aliquid
                                                voluptate quisquam quis modi adipisci vero deleniti, consectetur
                                                repudiandae
                                                saepe aliquam dicta, labore sequi! Fugit ut cumque eaque porro est
                                                corrupti, ea
                                                eos totam, alias accusamus blanditiis sint atque inventore voluptates
                                                dignissimos. Mollitia tempora praesentium nulla accusamus facere dolorem
                                                provident placeat autem atque, non vitae eligendi officia quod? Ducimus,
                                                maiores
                                                explicabo corporis architecto vel a accusamus eius accusantium ratione.
                                            </p>
                                        </article>
                                        <article>
                                            <h2>What Do We Use it?</h2>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda magni
                                                molestias illum quidem, consequatur architecto ex excepturi hic dicta
                                                doloribus,
                                                totam doloremque. Facere aperiam dolorum totam ex officiis assumenda
                                                sapiente
                                                eligendi dolore et mollitia minus aut commodi reiciendis voluptate
                                                deserunt
                                                doloribus voluptatibus sint ab error, maxime unde voluptatem amet
                                                facilis. Totam
                                                fugiat ex vitae labore, reiciendis non natus et qui quis placeat,
                                                temporibus,
                                                cupiditate voluptas. Eligendi facere et itaque minus dolorum repudiandae
                                                eius
                                                minima, sequi corrupti dignissimos facilis ullam labore tempora,
                                                consequatur
                                                sapiente odio recusandae nobis inventore fuga, dicta cum. Hic
                                                repellendus
                                                distinctio aut facilis magnam ipsa vero tempora consectetur?</p>
                                        </article>
                                        <article>
                                            <h2>What Does it Come From?</h2>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda magni
                                                molestias illum quidem, consequatur architecto ex excepturi hic dicta
                                                doloribus,
                                                totam doloremque. Facere aperiam dolorum totam ex officiis assumenda
                                                sapiente
                                                eligendi dolore et mollitia minus aut commodi reiciendis voluptate
                                                deserunt
                                                doloribus voluptatibus sint ab error, maxime unde voluptatem amet
                                                facilis. Totam
                                                fugiat ex vitae labore, reiciendis non natus et qui quis placeat,
                                                temporibus,
                                                cupiditate voluptas. Eligendi facere et itaque minus dolorum repudiandae
                                                eius
                                                minima, sequi corrupti dignissimos facilis ullam labore tempora,
                                                consequatur
                                                sapiente odio recusandae nobis inventore fuga, dicta cum. Hic
                                                repellendus
                                                distinctio aut facilis magnam ipsa vero tempora consectetur?</p>
                                        </article>
                                        <article>
                                            <h2>What Does it Come From?</h2>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda magni
                                                molestias illum quidem, consequatur architecto ex excepturi hic dicta
                                                doloribus,
                                                totam doloremque. Facere aperiam dolorum totam ex officiis assumenda
                                                sapiente
                                                eligendi dolore et mollitia minus aut commodi reiciendis voluptate
                                                deserunt
                                                doloribus voluptatibus sint ab error, maxime unde voluptatem amet
                                                facilis. Totam
                                                fugiat ex vitae labore, reiciendis non natus et qui quis placeat,
                                                temporibus,
                                                cupiditate voluptas. Eligendi facere et itaque minus dolorum repudiandae
                                                eius
                                                minima, sequi corrupti dignissimos facilis ullam labore tempora,
                                                consequatur
                                                sapiente odio recusandae nobis inventore fuga, dicta cum. Hic
                                                repellendus
                                                distinctio aut facilis magnam ipsa vero tempora consectetur?</p>
                                        </article>
                                        <article>
                                            <h2>What Does it Come From?</h2>

                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda magni
                                                molestias illum quidem, consequatur architecto ex excepturi hic dicta
                                                doloribus,
                                                totam doloremque. Facere aperiam dolorum totam ex officiis assumenda
                                                sapiente
                                                eligendi dolore et mollitia minus aut commodi reiciendis voluptate
                                                deserunt
                                                doloribus voluptatibus sint ab error, maxime unde voluptatem amet
                                                facilis. Totam
                                                fugiat ex vitae labore, reiciendis non natus et qui quis placeat,
                                                temporibus,
                                                cupiditate voluptas. Eligendi facere et itaque minus dolorum repudiandae
                                                eius
                                                minima, sequi corrupti dignissimos facilis ullam labore tempora,
                                                consequatur
                                                sapiente odio recusandae nobis inventore fuga, dicta cum. Hic
                                                repellendus
                                                distinctio aut facilis magnam ipsa vero tempora consectetur?</p>
                                        </article>
                                    </main>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="content_img">
                                    <div class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#"><img
                                                        src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#"><img
                                                        src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#"><img
                                                        src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="#"><img
                                                        src="images/landscape_game/Rectangle 2004 (6)-min.jpg"
                                                        alt="" /></a>
                                            </div>


                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="bottom_bar">
                        <div class="bottom_bar-bar"></div>
                        <div class="see_more">
                            <a href="#content" class="see_more-btn"><i class="fas fa-chevron-down"></i> See More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ===================================== -->
    <!-- HOME PAGE CONTENT END -->
    <!-- ===================================== -->


    <!-- ===================================== -->
    <!-- ALL CATTEGORIES START -->
    <!-- ===================================== -->
    <section id="game_slider" class="pt-3">
        <div class="section_title text-center">
            <div class="section_title-important">
                <lord-icon src="https://cdn.lordicon.com/nkmsrxys.json" trigger="loop" delay="500"
                    colors="primary:#5700ae,secondary:#7c89ff" style="width:80px;height:80px">
                </lord-icon>
                <div class="section_title-heading">
                    <h1>Cattegories</h1>
                </div>
            </div>
            <div class="section_title-text text-center">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> Lorem Ipsum has been
                    the industry's standard dummy</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="view_more text-right">
                <a href="allcategories.html" class="view-more-button text-dark" title="View More Cattegory"
                    data-bs-toggle="tooltip" data-bs-placement="top">View More</a>
                <lord-icon src="https://cdn.lordicon.com/iifryyua.json" trigger="loop" colors="primary:#5700ae"
                    style="width:42px;height:32px">
                </lord-icon>
            </div>
            <div class="bar mb-4"></div>
            <div class="swiper mySwiper1 game">
                <div class="swiper-wrapper game-wrapper">
                    <!-- one -->
                    <div class="swiper-slide ">
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/action/Hit Masters Rush-512x340-min.jpg" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Action" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Action</a>
                            </div>
                        </div>
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/adventure/Crazy Gunner-512x512-min.jpg" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Adventure" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Adventure</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/multiplayer game/8 Ball Pool Multiplayer-512x384-min.jpg"
                                    alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Multiplayer" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Multiplayer</a>
                            </div>
                        </div>
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/action/Polywar 2-512x340-min.jpg" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Educational" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Educational</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/games/Cannon Candy-min.png" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Arcade" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Arcade</a>
                            </div>
                        </div>
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/games/Encasing 512.512-min.png" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Sports" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Sports</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/games/Clockwork-min.png" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Educational" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Educational</a>
                            </div>
                        </div>
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/games/Targeter 512 -min.png" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Sports" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Sports</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/games/Golf Battle-512x512-min.jpg" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Sports" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Sports</a>
                            </div>
                        </div>
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/games/Car Nabbing-min.png" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Racing" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Racing</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/games/Speed Row-min.png" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Racing" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Racing</a>
                            </div>
                        </div>
                        <div class="cattegory">
                            <div class="cattegory_img">
                                <img src="images/games/Perfect Tongue-512x340-min.jpg" alt="">
                            </div>
                            <div class="cattegory_name">
                                <a href="#" title="Action" data-bs-toggle="tooltip"
                                    data-bs-placement="top">Action</a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="swiper-button-next" title="Go Next" data-bs-toggle="tooltip" data-bs-placement="left">
                </div>
                <!-- <div class="swiper-button-prev"></div> -->
            </div>
        </div>
    </section>
    <!-- ===================================== -->
    <!-- ALL CATTEGORIES END -->
    <!-- ===================================== -->
@endsection
