<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Webエンジニア・ほしさきひとみのポートフォリオサイト。主にPHP/Rails/HTML5/CSS3/jQueryを使う。">
<meta name="keywords" content="ほしさきひとみ,Webエンジニア,プログラマー,コーダー,ディレクター,デザイナー,就職活動,転職活動,フリーランス,ポートフォリオ,制作実績,Web制作,自己PR,職務経歴">
<title>ほしさきひとみポートフォリオサイト</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/css/import.css?<?=mt_rand()?>">
</head>
<body id="top" class="l-body--public">
	
<header class="l-header">
	<h1>
		<a href="#top" title="サイトTOP">
			<div class="l-header__role">Webエンジニア</div>
			<div class="l-header__name">ほしさき ひとみ</div>
			<div class="l-header__roman">Hitomi Hoshisaki</div>
			<span class="d-n">ポートフォリオサイト</span>
		</a>
		<img class="l-header__face" src="/img/my/face.png" alt="私の顔写真" />
	</h1>
</header>

<nav class="l-nav">
	<h2 class="d-n">サイトメニュー</h2>
	<input id="j-nav__checkbox" class="l-nav__checkbox" type="checkbox" />
	<div class="l-nav__bar">
		<a class="l-nav__bar-icon-box" href="#top" title="ページトップ">
			<i class="material-icons">home</i>
		</a>
		<label for="j-nav__checkbox" class="l-nav__bar-icon-box">
			<i class="material-icons"></i>
		</label>
	</div>
	<div id="j-nav__menu" class="l-nav__menu">
		<ul class="l-nav__menu-ul">
			<li><a href="#portfolio" title="ポートフォリオ"><i class="material-icons">developer_board</i>ポートフォリオ</a>
			<li><a href="#works" title="職務経歴"><i class="material-icons">description</i>職務経歴</a>
			<li><a href="#profile" title="自己紹介"><i class="material-icons">face</i>自己紹介</a>
			<li><a href="#introduction" title="他己紹介"><i class="material-icons">textsms</i>他己紹介</a>
			<li><a href="#contact" title="お問い合わせ"><i class="material-icons">send</i>お問い合わせ</a>
		</ul>
	</div>
	<label for="j-nav__checkbox" class="l-nav__overlay u-d-n-pc"></label>
</nav>

<address class="l-address">
	<ul class="l-address__icon-ul">
		<li><a href="mailto:hitomi[あっとまーく]hoshisaki.net" title="mail"><img src="/img/social/mail.png" alt="mail" /></a></li>
		<!--<li><a href="" title="LINE"><img src="/img/social/line.png" alt="LINE" /></a></li>-->
		<li><a href="https://twitter.com/HitomiHoshisaki" title="Twitter" target="_blank"><img src="/img/social/twitter.png" alt="Twitter" /></a></li>
		<li><a href="https://www.facebook.com/HitomiHoshisaki" title="facebook" target="_blank"><img src="/img/social/facebook.png" alt="facebook" /></a></li>
		<li><a href="https://qiita.com/HitomiHoshisaki" title="Qiita" target="_blank"><img src="/img/social/qiita.png" alt="Qiita" /></a></li>
		<li><a href="https://github.com/HitomiHoshisaki" title="GitHub" target="_blank"><img src="/img/social/github.png" alt="GitHub" /></a></li>
	</ul>
	<ul class="l-address__text-ul">
		<li><a href="mailto:hitomi[あっとまーく]hoshisaki.net" title="mail">hitomi＠hoshisaki.net</a></li>
		<li><a href="<?= $_SERVER['REQUEST_SCHEME'] ?>://<?= $_SERVER['HTTP_HOST'] ?>" title="URL"><?= $_SERVER['REQUEST_SCHEME'] ?>://<?= $_SERVER['HTTP_HOST'] ?></a></li>
	</ul>
</address>

<main class="l-main">
	
	<article id="portfolio">
		<h2>ポートフォリオ</h2>
		
	</article>
	
	<article id="works">
		<h2>職務経歴</h2>
			<p>新卒で、大手中古本販売チェーンに入社。店長、新店の立ち上げ店長を経験後、社員教育の研修インストラクターに抜擢されました。その後、大手求人広告サイトの運営会社にコピーライターとして転職。Excelスキルを認められ、大量のCSVデータを扱う部署に異動しました。Excel関数やマクロを使った時間短縮・応募効果の向上に貢献。現在は職業訓練校でWEBを勉強中です。</p>
			<h3>大手中古本販売チェーン</h3>
			<h4>[業務内容]</h4>
			<p>店長として、スタッフの採用・教育、売場作り、宣伝広告、売上管理、損益計画などを経験しました。研修インストラクターとしては、既存社員・新入社員・FC向けの研修講師、研修のカリュラム作成、アルバイトスタッフ海外研修の引率、マニュアル作成、売上不振店の短期立て直しなどを行ないました。</p>
			<h4>[マネジメント経験]</h4>
			<p>店⻑として、アルバイト7〜15名のマネジメントを行ないました。コミュニケーションを重視し、会社の理念や店舗の売上目標、ひとつひとつのオペレーションの意味を伝え続けました。考え方を共有する事でチームがまとまり、業績も向上しました。</p>
			<h4>[アピールポイント]</h4>
			<p>売上不振店の業務改善では、「店⻑のコミュニケーションの質の向上」と「カウンター内の作業効率の向上」に力を入れました。するとスタッフのモチベーションが上がり、店に活気が戻ります。その後の売場レイアウト変更などもスムーズに進みます。1日当たりの売上ベースが目に見えて上がりました。</p>
			<h3>大手求人広告サイトの運営会社</h3>
			<h4>[業務内容]</h4>
			<p>初めは主に、アルバイト求人サイトのコピーライティングを担当。その後Excelスキルを認められ、CSVを使ったサイト運用代行を任されました。大手派遣会社が持つ数千件の求人データの中から効果的な案件を数百件選び、最適な形にデータを加工してサイトに掲載するという業務です。</p>
			<h4>[アピールポイント]</h4>
			<p>作業手順の見直しやマニュアルの修正、秀丸・Excelのマクロ活用などを行ない、作業時間を半減させました。Excelでの効果分析を通じて応募効果が上がり、派遣会社に感謝されて売上も伸びました。チームメンバー向けにExcel勉強会を開催し、チーム全体の作業効率・応募効率の向上にも貢献しました。</p>
	</article>
	
	<article id="profile">
		<h2>自己紹介</h2>
			<h3>1.コミュニケーション能力</h3>
			<p>研修インストラクターを経験し、目的や行動の意味、具体的なオペレーションを相手に伝える力が身につきました。相手に受け入れてもらうためには、まず自分が相手を受け入れることが重要だと考えます。将来はWEB制作ディレクターとして、この能力を活かしたいです。</p>
			<h3>2.問題発見解決能力</h3>
			<p>「“面倒くさい”は改善のチャンス」だと考えています。例えばテープカッターの配置を変えるだけで、ぐんと作業効率があがることがあります。すでにある方法に満足せず、もっといい方法がないかを考え、実行します。この能力により、店⻑職でもデスクワークでも、作業効率と売上を伸ばしてきました。</p>
			<h3>3.学ぶ力</h3>
			<p>学ぶことが好きです。分からないことがあるとすぐに調べたり、本を読んだりする習慣があります。Excel関数・マクロ・ピボットテーブル、秀丸マクロなども、ほぼ独学で使ってきました。未経験ではありますが、WEB制作の現場でも学ぶ力を発揮し、早期にお役に立てるよう努めます。</p>
	</article>

	<article id="introduction">
		<h2>他己紹介</h2>
		<p>WEB設計科のクラスメイト20人に聞いた、私の印象です。プレゼンテーションの授業でいただいたものを流用しました。</p>
		<ol>
			<li>しっかりしている。コミュニケーションに気を使う。クラスの雰囲気作りがとてもよい。</li>
			<li>サザエさんのうきえさんを思い浮かべる。安心感。あこがれ。</li>
			<li>リーダーシップがある。とてもしっかりしていて頼れる人です。</li>
			<li>頼れる人。</li>
			<li>しっかりしていて、頼もしい姉さんです。</li>
			<li>しっかりしている。人をうまくまとめられる。</li>
			<li>明るいしっかり者。</li>
			<li>しっかり者の芸術肌もってる人。周りへの配慮・調整がうまい。</li>
			<li>天才！がんばんなくても何でもわかっちゃうタイプ？</li>
			<li>リーダー！！</li>
			<li>何事もソツがないと思います。</li>
			<li>思考の回転が早い。仕事が早い。細かい事に気がつく。常に周囲を見ている。気がつかえる。</li>
			<li>人の上に立つのが合いそう。</li>
			<li>明るい。しきるのが上手。どりょく家。</li>
			<li>プレゼン能力と、周囲の状況把握能力が高い。人間好き。自信あり。</li>
			<li>リーダーシップがある。常に周囲に気を配っている。理解力が高い。</li>
			<li>明るくリーダーシップがある。人に気を使える。超いい人。みんなで遊ぶのが好きな人。</li>
			<li>頭の回転が速い。物事を整理して捉えることができる。アイディアがほうふ。</li>
			<li>しっかりしていてとても優しい人。人に気を使わせないようにするのが上手な気づかいの人。</li>
			<li>いつも大変お世話になっております。優しすぎ！</li>
		</ol>
	</article>
	
	<section id="contact">
		<h2>お問い合わせ</h2>
		<form method="post" action="check.php">
			<dl>
				<dt>御社名</dt>
				<dd>
					<input type="text" name="company" value="" class="input_half">
					<small><span class="span_option">任意</span></small>
				</dd>
				<dt>お名前</dt>
				<dd>
					<input type="text" name="name" value="" required class="input_half">
					<small><span class="span_required">必須</span></small>
				</dd>
				<dt>返信用メールアドレス</dt>
				<dd>
					<input type="email" name="mail" value="" required class="input_half">
					<small><span class="span_required">必須</span></small>
				</dd>
				<dt>お電話番号</dt>
				<dd>
					<input type="tel" name="tel" value="" class="input_half">
					<small><span class="span_option">任意</span></small>
				</dd>
				<dt>ご用件</dt>
				<dd>
					<select name="title" class="input_half" required>
						<option value="面接へのお誘い">面接へのお誘い</option>
						<option value="会社見学へのお誘い">会社見学へのお誘い</option>
						<option value="おすすめ求人情報">おすすめ求人情報</option>
						<option value="その他お問い合わせ">その他お問い合わせ</option>
					</select>
					<small><span class="span_required">必須</span>&nbsp;選択してください</small>
				</dd>
				<dt>お問い合わせ内容&nbsp;<span class="span_required">必須</span></dt>
				<dd><textarea name="body" value="" required></textarea></dd>
			</dl>
			<div>
				<button type="reset" class="button_back">リセット</button>
				<button type="submit">入力内容を確認する</button>
			</div>
		</form>
	</section>
	
</main>

<? include_once(__DIR__.'/../_parts/_footer.php') ?>

</body>
</html>