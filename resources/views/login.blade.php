@extends('layouts.app')
@section('content')
<div class="login-question">
    <div class="cards-animated">
        <div class="card heart tilted">
            <div class="card-inner" style="animation-name: flip">
                <div class="front">
                    <img src="assets/cardBack.jpg" class="img-back" alt="">
                </div>
                <div class="back">
                    <div class="top"> A <i class="bi bi-suit-heart-fill"></i></div>
                    <div class="center"> A <i class="bi bi-suit-heart-fill"></i></div>
                    <div class="bottom"> A <i class="bi bi-suit-heart-fill"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cards-animated2">
        <div class="card spade tilted2">
            <div class="card-inner" style="animation-name: flip">
                <div class="front">
                    <img src="assets/cardBack.jpg" class="img-back" alt="">
                </div>
                <div class="back">
                    <div class="top"> K <i class="bi bi-suit-spade-fill"></i></div>
                    <div class="center"> K <i class="bi bi-suit-spade-fill"></i></div>
                    <div class="bottom"> K <i class="bi bi-suit-spade-fill"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="question">
        <h1 class="welcome">Welcome to Poker4Fun</h1>
        <div class="question-btns">
            <button class="answer log">Sign In</button>
            <button class="answer log">Sign Up</button>
            <button class="answer guest">Play As Guest</button>
        </div>
    </div>
    <div class="login-illu">
        <img src="assets/poker.svg" class="poker-logo" alt="">
    </div>
</div>
@endsection