@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/blog.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/styles.css') }}">
@endsection

@section('content')

<div class="content-box-title">
    <h1>Blog</h1>
</div>

<div class="row-blog">
    <div class="column-blog">
        <div class="card-blog">
            <h2>Site revamp!</h2>
            <h5>ARTICLE, 17/10/24</h5>
            <div class="blogPostsPictures" style="height:200px"><img src="images/Blog/Blog04BannerFeedbackOne.JPG"></div>
            <p> On the 13th of september I had my first round of feedback for my website, and not to toot my own horn too much, i
                did get placed number one when it comes to styling!! But starting tomorrow (oct 18th), I have my graded assesment
                for my website and have to show my re-worked website with all the feedback...
            </p>
            <a href="blog/Feedback.html" target="_blank">Read more</a>
        </div>
        <div class="card-blog">
            <h2>Cloud Storage vs. Traditional Storage</h2>
            <h5>ARTICLE, 10/09/24</h5>
            <div class="blogPostsPictures" style="height:200px"><img src="{{ Vite::asset('resources/images/Blog/Blog03BannerCloud.jpg') }}"></div>
            <p> Cloud storage lets you store data online on remote servers, making
                it easy to access from any device connected with the internet. It's
                maintained by the service provider...</p>
            <a href="blog/cloud-storage-vs-traditional-storage.html" target="_blank">Read more</a>
        </div>
        <div class="card-blog">
            <h2>Study choice</h2>
            <h5>Why I choose the studies and future plans, 10/09/24</h5>
            <div class="blogPostsPictures" style="height:200px"><img src="{{ Vite::asset('resources/images/Blog/Blog02BannerHzBuilding.jpg') }}"></div>
            <p> The reasoning for choosing HZ was straightforward for me. I've always been
                fascinated by computers and technology, so pursuing a study that's focused
                entirely...</p>
            <a href="blog/study-choice-activities.html" target="_blank">Read more</a>
        </div>
        <div class="card-blog">
            <h2>SWOT-analysis</h2>
            <h5>My personal swot-analysis from the SKC document, 10/09/24</h5>
            <div class="blogPostsPictures" style="height:200px"><img src="{{ Vite::asset('resources/images/Blog/Blog01BannerSWOT.png') }}"></div>
            <p> Here is a overview of my personal SWOT-analysis from the SKC document that I had to fill
                out before starting the course at HZ. I reworked the answers I gave in a nice simple picture
                to make it much easier to...</p>
            <a href="blog/swot-analysis.html" target="_blank">Read more</a>
        </div>
        <div class="EndTextBlog">
            <h2>Nothing to see here..</h2>
        </div>
    </div>
</div>
@endsection
