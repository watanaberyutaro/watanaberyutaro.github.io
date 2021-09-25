@extends('layout.common')
@include('layout.common')
@include('layout.header')
<section class="index__message">
    <div class="message__item">
        <div class="message__left">
        <div class="space-100"></div>
            <div class="message__ttlimg"></div>
            <h2 class="message__ttl">採用担当より</h2>
            <div class="message__descBox">
                <p class="mission__text">求める人材<br>クリエイションはどんなことをしているか<br>などの文章をここに入れます。</p>
                <div class="message__more">
                    <a href="/work" class="message__more">
                    </a>
                </div>
            </div>
        </div>
        <div class="message__imgBox">
            <img src="/img/forest.jpg" alt="img2" class="message__img">
        </div>
    </div>
</section>
<div class="space-100"></div>
<div class="message__bc">
<div class="space-100"></div>
    <div class="message__wrap">
    <section class="message__2">
        <div class="message__textLeft">
        <h1>選考で重視する点</h1>
        <p>当社の選考では、筆記試験を行わず、面接と適性検査※を行います 。
        建設業の仕事は一人で完結するものではなく、社内外さまざまな方と関わることで進んでいきます。営業職はもちろんですが、施工管理職も工事を進める中で、職人さんに的確な指示を出し、交渉することが必要になります。その場に応じたコミュニケーションが取れること、また自分の意志や伝えなければならないことをしっかり伝えられる「話す力」が大切です。
        そのため、応募者一人ひとりとじっくり話ができるよう、集団ではなく個別面接を行っています。個別面接を通して、コミュニケーション能力があるか、また建築に携わる意欲があるかを選考します。</p>
        </div>
        <div class="message__imgRight">
        <img src="/img/film01.jpeg" alt="img2"class="message__imgRight__01">
        </div>
    </section>
    <section class="message__3">
        <h1>よくある質問</h1>
    </section>
    </div>
    <div class="space-100"></div>
</div>



@include('layout.footer')
