@extends('layout.common')
@include('layout.common')
@include('layout.header')

<div class="member__header">
    <div class="h__bg"></div>
    <div class="catch__text">あなたにとってCreationとは？</div>
    <div class="member__caption">
        <span class="member__time">入社時期</span>
        <span class="member__jname">平野　洋輔</span>
        <span class="member__ename">YOSUKE HIRANO</span>
        <span class="member__text">自己紹介文</span>
    </div>
</div>

<div class="member__qa">
    <div class="interview__body1">
        <div class="photo1">
            <img src="/img/portrait.jpg" alt="" class="qa__photo1">
        </div>
        <div class="interview1">
            <p class="question">Creationのココが好きだな、働きやすいなっていうところはありますか？</p>
            <p class="answer">
            若い会社なので、色々なアイデアを出しやすい点にあります。
            　過去の風習を捨て、新しい事に挑戦しやすい環境を得られやすいのは、クリエイションならではの良いポイントだと思います。
            　従業員同士の関係性に関しても、仕事の時は全員がプロに徹し、各々の仕事に立ち向かい、時には従業員全員が一つの問題に立ち向かう団結力がありますが、一歩職場を離れると、お互いのプライベートは勿論自由ですがドライかつ大人な人間関係も今時の世相にも合っていると思います。
            　また、会社の立地も御茶ノ水という総武線・中央線沿線だという部分も高ポイントです。
        </p>
        </div>
    </div>
    <div class="interview__body2">
        <div class="interview2">
            <p class="question">仕事でやりがいを感じる時はどんな時ですか？</p>
            <p class="answer">
            様々な競合他社がいる中で、クリエイションを選んで頂き、「クリエイションを選んで良かった」とお客様に笑顔になってもらう事が一番やりがいを感じます。
            他に以前の自分だったらクリア出来なかったであろう問題に対応できるようになり、己の成長を実感できた時です。
        </p>
        </div>
    </div>
    <div class="interview__body3">
    <div class="photo2">
            <img src="/img/portrait2.jpeg" alt="" class="qa__photo2">
        </div>
        <div class="interview3">
        <p class="question">夢や目標はありますか？入社前と入社後で変わった場合も教えてください。</p>
        <p class="answer">入社前は漠然と「楽して稼ぎたい」位にしか考えておりませんでしたが、今ではもっと色々な技術を得たい、もっと色々な人達から認められたい、もっと数字を伸ばしたい等、貪欲に目標を追いかけたいと思えるようになりました。ゆくゆくは何か一つクリエイション内で事業を立ち上げ、成功へ導けたら嬉しいですね。皆が同じ目線で見てくれる事が多い環境なので意識は本当に変わりました、笑顔が凄く増えたと自覚しています。
        </p>
        </div>
    </div>
    <div class="interview__body4">
        <div class="photo2">
        <img src="/img/portrait.jpeg" alt="" class="qa__photo3">
        </div>
        <div class="interview4">
        <p class="question_last">
        これから入社を考えている方へメッセージをお願いします。
        </p>
        <p class="answer_last">
        クリエイションは、各々違う環境で生きてきた人間達が一つの場所に集まり、同じ目標に向かって一致団結出来る職場だと思います。
        　一緒に仕事をする気概があれば、きっと笑顔が増える事は間違いないです。
        </p>
        </div>
    </div>
</div>
@include('layout.footer')
