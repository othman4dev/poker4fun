<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <title>Cards Game</title>
</head>
<body>
    <div class="header-org">
        <h1 class="title-game"><i class=""></i>Poker.io</h1>
        <button class="deal" onclick="dealCards(this)">
            Play <p class="price-tag">( 500&nbsp;<i class="bi bi-coin" style="font-size: 15px;color: goldenrod;"></i>&nbsp;)</p>
        </button>
        <div class="money">
            <p id="money">10 000 &nbsp;<i class="bi bi-coin" style="font-size: 15px;color: goldenrod;"></i></p>
            <div class="plus"><p>+</p></div>
        </div>
    </div>
    @yield('content')
    <div class="turns" id="message">
        <p id="turn"> Your Turn </p>
    </div>
</body>
</html>
<script src="{{ asset('js/engine.js') }}" defer></script>