@extends('layout.layout')

@section('contentcss')
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/styles.css') }}">
@endsection

@section('content')
<div class="content-box-title">
    <h1>Overview of Study Year 1 </h1>
    <p>Below is a detailed breakdown of the courses,
        projects, and credits for Study Year 1. <br>I’ll use this overview to
        track my progress and stay organized throughout the schoolyear.<br><br><br></p>
</div>

<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: auto;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: center;
        padding: 16px;
        border: 1px solid #ffffff;
    }

    th {
        background-color: #e6bacb93;
    }

    th:first-child,
    td:first-child {
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #ffffff7b
    }

    tr:nth-child(odd) {
        background-color: #ffffff43
    }

    .fa-check {
        color: green;
    }

    .fa-remove {
        color: red;
    }
</style>

<table>
    <tr>
        <th colspan="6" style="text-align: center;">Semester 1</th>
    </tr>
    <tr>
        <th style="width:auto">Course timing</th>
        <th>Course name</th>
        <th>Course project</th>
        <th>EC</th>
        <th>Checkbox</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td>Block 1</td>
        <td>Program- & career orientation</td>
        <td>Presentation</td>
        <td>2,5</td>
        <td>👩🏼‍💻</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Block 1</td>
        <td>Computer science basics</td>
        <td>Written knowledge test</td>
        <td>5EC</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Block 1</td>
        <td>Programming basics</td>
        <td>Written knowledge test</td>
        <td>5 EC</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="2">Block 2</td>
        <td rowspan="2">Object-Oriented programming</td>
        <td>Presentation</td>
        <td rowspan="2">10 EC</td>
        <td rowspan="2">-</td>
        <td rowspan="2">-</td>
    </tr>
    <tr>
        <!-- ROWSPAN BLOCK 2 -->
        <!-- ROWSPAN Object-Oriented programming -->
        <td style="text-align: center;">Written knowledge test</td>
        <!-- ROWSPAN 10 EC -->
        <!-- ROWSPAN CHECK -->
        <!-- ROWSPAN GRADE -->
    <tr>
    <tr>
        <th colspan="6" style="text-align: center;">Semester 2</th>
    </tr>
    <tr>
        <td rowspan="4">Block 1</td>
        <td rowspan="4">Framework project 1</td>
        <td>Written knowledge test <br> on-site case study</td>
        <td rowspan="4">10 EC</td>
        <td rowspan="4">-</td>
        <td rowspan="4">-</td>
    </tr>
    <tr>
        <!-- ROWSPAN Block 1 -->
        <!-- ROWSPAN Framework project 1 -->
        <td style="text-align: center;">Written knowledge test <br> database </td>
        <!-- ROWSPAN 10 E -->
        <!-- ROWSPAN - -->
        <!-- ROWSPAN GRADE -->
    <tr>
        <!-- ROWSPAN Block 1 -->
        <!-- ROWSPAN Framework project 1 -->
        <td style="text-align: center;"> Group assignment</td>
        <!-- ROWSPAN 10 E -->
        <!-- ROWSPAN - -->
        <!-- ROWSPAN GRADE -->
    </tr>
    <tr>
        <!-- ROWSPAN  Block 1-->
        <!-- ROWSPAN Framework project 1 -->
        <td style="text-align: center;">Portfolio</td>
        <!-- ROWSPAN 10 E -->
        <!-- ROWSPAN - -->
        <!-- ROWSPAN GRADE -->
    </tr>
    <tr>
        <td rowspan="3">Block 2</td>
        <td rowspan="3">Framework project 2</td>
        <td>Group presentation</td>
        <td rowspan="3">10 EC</td>
        <td rowspan="3">-</td>
        <td rowspan="3">-</td>
    </tr>
    <tr>
        <!-- ROWSPAN Block 2 -->
        <!-- ROWSPAN Framework project 2 -->
        <td style="text-align: center;">Portfolio <br> project assessment</td>
        <!-- ROWSPAN 10 EC -->
        <!-- ROWSPAN - -->
        <!-- ROWSPAN GRADE -->
    </tr>
    <tr>
        <!-- ROWSPAN Block 2 -->
        <!-- ROWSPAN Framework project 2 -->
        <td style="text-align: center;">Portfolio <br> IT development </td>
        <!-- ROWSPAN 10 EC -->
        <!-- ROWSPAN - -->
        <!-- ROWSPAN GRADE -->
    </tr>
    <tr>
        <td>Block 1 & 2</td>
        <td>Business IT consultancy basics</td>
        <td>Individual assignment</td>
        <td>2,5 EC</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <th colspan="6" style="text-align: center;">Semester 1 + 2</th>
    </tr>
    <tr>
        <td>Block 1 & 2</td>
        <td>Personal professional development exploration</td>
        <td>Criterian refrenced assesment</td>
        <td>12,5 EC</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <th colspan="6" style="text-align: center;">Project weeks</th>
    </tr>
    <tr>
        <td>-</td>
        <td>IT personality</td>
        <td>Portfolio 1</td>
        <td>1,25 EC</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <td>-</td>
        <td>IT personality</td>
        <td>Portfolio 2</td>
        <td>1,25 EC</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <tr>
        <th></th>
        <th>Total EC acquired =</th>
        <th>-</th>
        <th>-------- +</th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <th colspan="6" style="text-align: center;">Max. obtainable EC amount 60 EC
            Min. EC required 45 EC</th>
    </tr>
</table>

<div>
    <img src="{{ Vite::asset('resources/images/Dashboard/StickerSmileyFace.png') }}" alt="Piece of tape for art" class="img-stickerSmileyFace">
</div>

@endsection
