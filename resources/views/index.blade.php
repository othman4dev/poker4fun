@extends('layouts.app')
@section('content')
<header>
    <h1 class="big">
        Poker.io
    </h1>
</header>
<main id="main">
    <div class="hisHand">
        <div class="profile">
            <div class="img-status">
                <img src="assets/Default_pfp.svg.png" alt="">
                <div class="status" id="opponent-status">Thinking...</div>
            </div>
            <div class="profile-texts">
                <p class="name">Opponent</p>
                <div class="money-card"><span id="hisMoney">10000</span> <i class="bi bi-coin"></i></div>
            </div>
        </div>
        <fieldset class="your">
            <legend>Opponent</legend>
            <span id="insert-his" style="display: none;"></span>
            
        </fieldset>
        <div class="result">
            <span id="his-result"></span>
        </div>
    </div>
    <div class="table">
        <fieldset class="our">
            <legend>Table</legend>
            <span id="insert-tab" style="display: none;"></span>
            
        </fieldset>
        <fieldset class="bet">
            <legend style="font-size: 19px;">Bet</legend>
            <div class="chips-container">
                <img src="assets/chip.png" class="chip" id="chip" style="width: 100px;height: 100px;" alt="">
            </div>
            <p class="money" id="bets">0</p>
        </fieldset>
        <fieldset class="actions" id="actions">
            <legend style="font-size: 19px;">Action</legend>
            <button class="action yellow" disabled onclick="action('bet')" id="bet">
                Bet
            </button>
            <button class="action black" disabled onclick="action('check')" id="check">
                Check
            </button>
            <button class="action red" disabled onclick="action('fold')" id="fold">
                Fold
            </button>
        </fieldset>
        <!-- <fieldset class="actions" id="actions">
            <legend style="font-size: 19px;">Action</legend>
            <button class="action yellow" disabled onclick="action('bet')">
                Bet
            </button>
            <button class="action green" disabled onclick="action('call')">
                Call
            </button>
            <button class="action red" disabled onclick="action('fold')">
                Fold
            </button>
        </fieldset> -->
    </div>
    <div class="myHand">
        <fieldset class="mine">
            <Legend>You</Legend>
            <span id="insert-my" style="display: none;"></span>
            
        </fieldset>
        <div class="result">
            <span id="result"></span>
        </div>
        <div class="profile">
            <div class="img-status">
                <img src="assets/Default_pfp.svg.png" alt="">
                <div class="status" id="your-status">Your Turn</div>
            </div>
            <div class="profile-texts">
                <p class="name">You</p>
                <div class="money-card"><span id="myMoney">10000</span> <i class="bi bi-coin"></i></div>
            </div>
        </div>
    </div>
</main>
@endsection