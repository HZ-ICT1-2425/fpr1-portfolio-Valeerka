@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/index.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/styles.css') }}">
@endsection

@section('content')
<section class="contentBoxIndexTop">
    <div>
        <img src="{{ Vite::asset('resources/images/Welcome/StickerBlackCat.png') }}" alt="image of a drawn black cat" class="img-stickerBlackCat">
        <img src="{{ Vite::asset('resources/images/Welcome/StickerTapeTopPageBegin.png') }}" alt="Piece of tape for art" class="img-stickerTapeTopPageBegin">
        <img src="{{ Vite::asset('resources/images/Welcome/StickerTapeTopPageEnd.png') }}" alt="Piece of tape for art" class="img-stickerTapeTopPageEnd">

    <div>
        <h1>Hi, I'm Valeria Cantsheva – Welcome to <br>my ICT Journey</h1>
        <p>I’ve always had a close connection with computers, growing up I was surrounded by technology.
            At some point, my fascination with them almost became an obsession. I remember seeing
            programming and hacking in movies and thinking it was the coolest thing ever.

            <br><br>Ofcourse now that I’m old enough I’ve realized that its not like the movies, but it
            still seemed quite interesting to me. The idea of understanding how computers really
            work stayed with me for years, even though I didn’t pursue it right away.

            <br><br>It wasn’t until I met someone who aspired to be a white hat hacker that my interest
            was peaked. Their passion for ethical hacking sparked something in me, and I realized
            this field could offer more than just entertainment, it could be a career.</p>

        <h1><br>Motivation</h1>
        <p>While my love for computers played a huge role in my decision to join the HBO-ICT program,
            I can’t ignore the practical side of things. Growing up, money was always tight at home.
            My mom worked hard to support both of us, and I knew I wanted a stable career that could
            provide financial security.

            <br><br>When I learned that the ICT field offers many well-paying
            opportunities, I saw it as the perfect combination: a way to work with something I love
            while also achieving stability in life. It felt like a more exciting and natural choice
            for me compared to other fields like law or business.</p>
    </div>
</section>

<div class="image-row-index">
    <img src="{{ Vite::asset('resources/images/Welcome/GifHackerMan.webp') }}" alt="A gif that shows a hacker behind a pc" class="homePageGifs">
    <img src="{{ Vite::asset('resources/images/Welcome/GifLittleGirl.webp') }}" alt="A gif of a little girl who looks confused" class="homePageGifs">
    <img src="{{ Vite::asset('resources/images/Welcome/GifButtonsHere.webp') }}" alt="A gif of a funny meme that shows the text buttons here, buttons there" class="homePageGifs">
</div>

<div class="contentBoxIndexBottom">
    <img src="{{ Vite::asset('resources/images/Welcome/StickerTapeBottomPageBegin.png') }}" alt="Piece of tape for art" class="img-stickerTapeBottomPageBegin">
    <h1>Future Exploration</h1>
    <p>Although I’m only just starting the program,
        I’m excited to explore the different paths ICT has to offer. I haven’t
        fully decided what I want to specialize in yet, but here are a few areas
        that interest me:
        <li>White hat hacking: Protecting systems and learning the skills to defend against cyberattacks.</li>
        <li>Programming: Developing different kinds of software, whether it's games, apps, or websites.</li>
        <li>Creative projects: I like the idea of combining technology with creativity to build something unique.
        </li>
    </p>
</div>

<div>
    <img src="{{ Vite::asset('resources/images/Welcome/StickerStars.png') }}" alt="Piece of tape for art" class="img-stickerStars">
</div>
@endsection

