@extends('layout.common')
@include('layout.common')
@include('layout.header')
<section class="index__work">
	<div class="recruit__ttl"></div>
	<h2 class="recruit__ttll">私たちの求める人材</h2>
	<div class="space-100"></div>
</section>
<div id="wrapper">
	<div id="contents">
		<div class="anim section-in animated fadeIn" data-label="fadeIn">
			<div class="recruit__wrap">
                <a href="/recruitMidcareer" class="recruit__right">
					<div class="recruit__link">中途募集要項</div>
				</a>
				<a href="/recruitNewgraduates" class="recruit__left">
					<div class="recruit__link">アルバイト募集要項</div>
				</a>
			</div>
			<div class="space-100"></div>
			<div class="guideline">
				<h2 class="r-title">アルバイト情報</h2>
				<table class="entry-format">
					<tbody>
						<tr>
							<th>募集職種</th>
							<td>営業・webデザイナー・webクリエイター・マーケティング
							</td>
						</tr>
						<tr>
							<th>応募条件</th>
							<td>年齢学歴不問</td>
						</tr>
						<tr>
							<th>給与</th>
							<td>時給1,100円～　交通費支給</td>
						</tr>
						<tr>
							<th>勤務地</th>
							<td>本社</td>
						</tr>
						<tr>
							<th>福利厚生</th>
							<td>雇用保険・健康保険・厚生年金保険</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="space-100"></div>
@include('layout.footer')
