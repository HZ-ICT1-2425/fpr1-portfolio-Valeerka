@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/profile.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/styles.css') }}">
@endsection

@section('content')
<section class="content-box-profile-top">
    <div class="image-selfie">
        <img src="{{ Vite::asset('resources/images/Profile/StickerSun.png') }}" alt="Piece of tape for art" class="img-stickerSun">
        <img src="{{ Vite::asset('resources/images/Profile/StickerSelfieBorder.png') }}" alt="Piece of tape for art" class="img-stickerSelfieBorder">
        <img src="{{ Vite::asset('resources/images/Profile/ProfilePictureSelfie.jpg') }}" alt="image a photo of me" class="img-selfie">
    </div>
    <div class="image-row-WebsitePictograms">
        <a href="https://github.com/Valeerka" target="_blank">
            <img src="{{ Vite::asset('resources/images/Profile/LinkPictogramGithubNew.png') }}" alt="image github logo" class="ProfileWebsitePictograms">
        </a>
        <a href="mailto:cant0004@hz.nl" target="_blank">
            <img src="{{ Vite::asset('resources/images/Profile/LinkPictogramEmailNew.png') }}" alt="image email logo" class="ProfileWebsitePictograms">
        </a>
        <a href="https://www.instagram.com/ikvalaan/" target="_blank">
            <img src="{{ Vite::asset('resources/images/Profile/LinkPictogramInstagramNew.png') }}" alt="image instagram logo" class="ProfileWebsitePictograms">
        </a>
    </div>
    <h1><br><br>Valeria Cantsheva</h1>
    <p> Middelburg, Netherlands<br><br></p>
    <p> While I consider myself to be a big house mouse, I do like to hang out at bars from
        time to time. In summer I like drinking cold beers in the city centre, while in colder months
        I prefer a nice hot tea. However most of my time is definitely spent at home. I enjoy drawing
        digitally, although don’t do this as often compared to a couple years ago, I like cooking,
        binge watching tv-shows and most importantly I like spending time with my dogs. Currently,
        I have two dogs: One named Gucci and the other one Mylo. Mylo is actually the son of Gucci
        who we took in about a year ago.
    </p>
</section>

<section class="dogs-container">
    <div class="dogs">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs01.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs04.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs05.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs06.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs02.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs03.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs07.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs08.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs09.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs10.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs11.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs12.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs13.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs14.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs15.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs19.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs16.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs17.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs18.jpg') }}" alt="dog">
        <!-- Down here is a double so the pictures are working accordingly-->
        <img src="{{ Vite::asset('resources/images/Profile/Dogs01.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs04.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs05.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs06.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs02.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs03.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs07.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs08.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs09.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs10.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs11.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs12.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs13.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs14.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs15.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs19.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs16.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs17.jpg') }}" alt="dog">
        <img src="{{ Vite::asset('resources/images/Profile/Dogs18.jpg') }}" alt="dog">
    </div>
</section>

<div class="container-content-box-profile-small">
    <section class="content-box-profile-small">
        <img src="{{ Vite::asset('resources/images/Profile/StickerGreenUnderlineForText.png') }}" alt="Piece of tape for art" class="img-stickerGreenUnderlineForText">
        <h1> My traits </h1>
        <ul>
            <li> Creative </li>
            <li> Optimistic </li>
            <li> Detail oriented </li>
            <li> Eager to learn </li>
            <li> thoughtful </li>
        </ul>
    </section>

    <section class="content-box-profile-small">
        <img src="{{ Vite::asset('resources/images/Profile/StickerHearts.png') }}" alt="Piece of tape for art" class="img-stickerHearts">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3ZaaDJzCaux8i6LhQO2ENC?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </section>
</div>

<section class="content-box-profile-bottom">
    <img src="{{ Vite::asset('resources/images/Profile/StickerFilmCamera.png') }}" alt="Film camera sticker" class="img-stickerFilmCamera">
    <h1>Favorite series</h1>
    <div class="image-row-ProfileMovies">
        <a href="https://www.youtube.com/watch?v=9QxRbzFk3zk" target="_blank">
            <img src="{{ Vite::asset('resources/images/Profile/moviePosterTheGoodPlace.jpg') }}" alt="Poster from the series The Good Place" class="ProfileImageMovies">
        </a>
        <a href="https://www.youtube.com/watch?v=UQhzQDW4L84" target="_blank">
            <img src="{{ Vite::asset('resources/images/Profile/moviePosteriZombie.jpg') }}" alt="Poster from the series iZombie" class="ProfileImageMovies">
        </a>
        <a href="https://www.youtube.com/watch?v=OftuEZVaGrc" target="_blank">
            <img src="{{ Vite::asset('resources/images/Profile/moviePosterTheBlacklist.jpg') }}" alt="Poster from the series The Black List" class="ProfileImageMovies">
        </a>
        <a href="https://www.youtube.com/watch?v=lDToq9SuEmI" target="_blank">
            <img src="{{ Vite::asset('resources/images/Profile/moviePosterLoki.jpg') }}" alt="Poster from the series Loki" class="ProfileImageMovies">
        </a>
        <a href="https://www.youtube.com/watch?v=-max0wOTcuI" target="_blank">
            <img src="{{ Vite::asset('resources/images/Profile/moviePosterKaos.jpg') }}" alt="Poster from the series Kaos" class="ProfileImageMovies">
        </a>
    </div>
</section>
<!-- adding change for testing -->
@endsection
