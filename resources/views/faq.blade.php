@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/faq.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/styles.css') }}">
@endsection

@section('content')
<style>
    body {
        background-color: rgb(237, 229, 229);
    }
</style>

<div class="content-box-title">
    <h1>Common Questions and Answers</h1>
</div>


<div class="accordion">
    <!-- Accordion Item 1 -->
    <input type="checkbox" id="section1" class="accordion-input">
    <label for="section1" class="accordion-label">🌸 How can you print a document from your laptop at HZ?</label>
    <div class="accordion-content">
        <p>1. Go to https://print.hz.nl <br>
            2. Log in with your HZ email and password. <br>
            3. Go to "web print".<br>
            4. Follow the steps.<br>
            5. After following the steps you can go to any printer in the
            HZ building, scan your student or faculty card and print your documents.</p>
    </div>

    <!-- Accordion Item 2 -->
    <input type="checkbox" id="section2" class="accordion-input">
    <label for="section2" class="accordion-label">🍄 How can you scan a document and send it to your laptop at
        HZ?</label>
    <div class="accordion-content">
        <p>1. Locate any of the printers at HZ. <br>
            2. Log into the printer by either scanning your card or entering your HZ student of faculty card.<br>
            3. Choose the scan option.<br>
            4. Place the paper you want to scan onto the glass plate.<br>
            5. Adjust any settings you want to change.<br>
            6. Press start.<br>
            7. When your done scanning, log out of the printer.</p>
    </div>

    <!-- Accordion Item 3 -->
    <input type="checkbox" id="section3" class="accordion-input">
    <label for="section3" class="accordion-label">🌺 How can I put money on my student card?</label>
    <div class="accordion-content">
        <p>There are two step you can follow. <br><br>

            At the HZ location: <br><br>
            1. Go to the top-up machine on the ground floor.<br>
            2.Scan your student or faculty card.<br>
            3. Choose the amount you want to put on the card.<br>
            4. Pay with your debit card<br><br>

            Online: <br><br>
            1. Go to https://print.hz.nl<br>
            2. Log in with your HZ email and password.<br>
            3. Go to “Top-up balance”.<br>
            4. Choose the amount you want to put on the card.<br>
            5. Fill out you bank details and pay.</p>
    </div>

    <!-- Accordion Item 4 -->
    <input type="checkbox" id="section4" class="accordion-input">
    <label for="section4" class="accordion-label">🌿 How can you book a project space?</label>
    <div class="accordion-content">
        <p>First we’re going to add the selfservice portal to our home page to make it easier for next time:<br><br>

            1. Go to portal https://portal.hz.nl<br>
            2. Log in with your HZ email and password.<br>
            3. Click on “Change personal menu”<br>
            4. Look for “Selfservice portal” and click on the “+”.<br><br>

            Now for reserving a room:<br><br>

            1. Go back to the portals menu page.<br>
            2. Click on: “> Selfservice portal”.<br>
            3. Click on: “Reservations”.<br>
            4. Click on: “Reserve a meeting or project room”.<br>
            5. Click on: “Reserve a room”.<br>
            6. Find the date you want to reserve and select a time. You do this by holding down and dragging the
            cursor across the screen.<br>
            7. Click on: “Next”.<br>
            8. Fill out your information.<br>
            9. Click: “Confirm reservation”.

    </div>

    <!-- Accordion Item 5 -->
    <input type="checkbox" id="section5" class="accordion-input">
    <label for="section5" class="accordion-label">🪷 What are the instructions if you want to park your car at the
        HZ parking lot?</label>
    <div class="accordion-content">
        <p>It’s not possible to park directly at HZ with a car, there is however
            1 parking space for people with disabilities and/or chronic conditions. <br><br>
            If you want to go to campus by car it is possible to park your car on Kousteensedijk,
            which is an 8 minute walk. Be mindful that there’s only a few parking spaces
            available each day. Upon showing your entry card, you can get an exit card at
            the JRCZ service desk.</p>
    </div>
</div>

@endsection
