@extends('layout.common')
@include('layout.common')
@include('layout.header')
<!DOCTYPE html>
<html lang="ja" charset="UTF-8">
<main>
<title>Contact - 株式会社Creation</title>
<div class="space-100"></div>
<section>
<div class="contact__wrap">
<div class="inner">
<h3 class="contact__wrap-ttl">フォームからのお問い合わせ</h3>
<div id="mw_wp_form_mw-wp-form-152" class="mw_wp_form mw_wp_form_input  ">
					<form method="post" action="{{ route('contacts.entry') }}" enctype="multipart/form-data"><p class="contact__wrap-text">記入内容を確認後、弊社よりご連絡させていただきます。
なお、基本的にメールでのご返信となりますが、お電話/FAXでの返信を希望される場合は、あらかじめお知らせください。
※は必須項目となりますので、必ずご入力ください。</p>

<div class="contact__form">
@if ($message)
<div id="modal-content" class="error" onclick="modal_onclick_close()">
        <div id="modal-close" role="alert" aria-live="polite" aria-atomic="true" class="alert alert-danger" onclick="modal_onclick_close()" >
            {{ $message }}</a>
        </div>
    </div>
@endif
<script type="text/javascript">
function modal_onclick_close(){
    document.getElementById("modal-content").style.display = "none";
}
</script>
<div>
<label>お名前<span class="span">※</span></label>

<input type="text" name="name" size="60" required>
</div>

<div>
<label>フリガナ<span class="span">※</span></label>

<input type="text" name="kana" size="60" required>

</div>

<div>
<label>貴社名<span class="span">※</span></label>

<input type="text" name="company" size="60" required>

</div>

<div>
<label>お電話番号<span class="span">※</span></label>

<span class="mwform-tel-field">
	<input type="text" name="tel0" class="tel" size="6" maxlength="5" required data-conv-half-alphanumeric="true">
	-	<input type="text" name="tel1" class="tel" size="5" maxlength="4" required data-conv-half-alphanumeric="true">
	-	<input type="text" name="tel2" class="tel" size="5" maxlength="4" required data-conv-half-alphanumeric="true">
</span>

<input type="hidden" name="tel[separator]" value="-">

</div>

<div>
<label>メールアドレス<span class="span">※</span></label>

<input type="email" name="email" id="email" class="email wide" size="60" required data-conv-half-alphanumeric="true">

</div>

<div>
<label for="">お問い合わせ内容<span class="span">※</span></label>

<textarea name="contents" id="contents" class="contents" cols="50" rows="5" required></textarea>

</div>

</div>

<div class="btn__submit">

<input type="submit" name="submitConfirm" value="送信" class="submit">

</div><input type="hidden" id="mw_wp_form_token" name="mw_wp_form_token" value="389b754cea"><input type="hidden" name="_wp_http_referer" value="/contact/"><input type="hidden" name="mw-wp-form-form-id" value="152"><input type="hidden" name="mw-wp-form-form-verify-token" value="c86523ee30ac7c367025841e17826facc03bcbb2"><input type="hidden" id="mw_wp_form_token" name="mw_wp_form_token" value="389b754cea"><input type="hidden" name="_wp_http_referer" value="/contact/"><input type="hidden" name="mw-wp-form-form-id" value="152"><input type="hidden" name="mw-wp-form-form-verify-token" value="c86523ee30ac7c367025841e17826facc03bcbb2"></form>
</div>

</div>
</div>
</section></main>
</html>
@include('layout.footer')
