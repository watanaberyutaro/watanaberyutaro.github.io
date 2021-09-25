@extends('layout.common')
@include('layout.common')
@include('layout.header')
<div class="space-50"></div>
<div class="friend__ttl"></div>
    <h2 class="human__ttl">私たちの仲間</h2>
    <div class="space-50"></div>
    <div class="human__descBox">
        <p class="human__desc ">「〇〇〇〇」な人が集まる会社</p>
        <p class="human__text">社員について<br>どんな人がいる会社なのか</p>
    </div>
    <div class="human__box">
        <ul class="human__list">
            <li class="human__item">
                <a href="/saito" class="interview__item">
                <div class="interview__iconBox">
                    <img src="/img/icon.jpeg" alt="icon1" class="human__icon">
                    </div>
                    <span class="interview__detail">事業統括マネージャー</span>
                    <div class="interview__box">
                        <span class="interview__time">入社年月日</span>
                        <span class="interview__jname">齋藤 祐次</span>
                        <span class="interview__ename">YUJI SAITO</span>
                    </div>
                    <div class="mask">
                        <div class="caption">Creationはあなたにとってどんな会社ですか？</div>
                    </div>
                </a>
            </li>
            <li class="human__item">
            <a href="/hirano" class="interview__item">
            <div class="interview__iconBox">
                    <img src="/img/icon.jpeg" alt="icon1" class="human__icon">
                    </div>
                    <span class="interview__detail">営業部</span>
                    <div class="interview__box">
                        <span class="interview__time">入社年月日</span>
                        <span class="interview__jname">平野 洋輔</span>
                        <span class="interview__ename">YOSUKE HIRANO</span>
                    </div>
                    <div class="mask">
                        <div class="caption">Creationはあなたにとってどんな会社ですか？</div>
                    </div>
                </a>
            </li>
            <li class="human__item">
            <a href="/saito" class="interview__item">
                    <div class="interview__iconBox">
                    <img src="/img/icon.jpeg" alt="icon1" class="human__icon">
                    </div>
                    <span class="interview__detail">肩書き</span>
                    <div class="interview__box">
                        <span class="interview__time">入社年月日</span>
                        <span class="interview__jname">齋藤 祐次</span>
                        <span class="interview__ename">YUJI SAITO</span>
                    </div>
                    <div class="mask">
                        <div class="caption">Creationはあなたにとってどんな会社ですか？</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
<div class="space-100"></div>

@include('layout.footer')
