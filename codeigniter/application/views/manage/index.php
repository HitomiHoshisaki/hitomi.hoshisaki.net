<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>管理ページ</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/css/import.css?<?=mt_rand()?>">
<style>
@media (min-width: 1200px) {
	.l-main {
		max-width: none;
		margin: 0 0 0 250px;
	}
}
</style>
</head>
<body class="l-body--manage">
	
<header class="l-header d-n">
	<h1>管理ページ</h1>
</header>

<nav class="l-nav">
	<h2 class="d-n">管理メニュー</h2>
	<input id="j-nav__checkbox" class="l-nav__checkbox" type="checkbox" />
	<div class="l-nav__bar">
		<a class="l-nav__bar-icon-box" href="#top" title="ページトップ">
			<i class="material-icons">home</i>
		</a>
		<label for="j-nav__checkbox" class="l-nav__bar-icon-box">
			<i class="material-icons"></i>
		</label>
	</div>
	<div class="l-nav__menu">
		<ul class="l-nav__menu-ul">
			<li><a href="/manage/" title="お知らせ"><i class="material-icons">info</i>お知らせ</a>
			<li><a href="/manage/contents" title="コンテンツ管理"><i class="material-icons">edit</i>コンテンツ管理</a>
			<li><a href="/manage/category" title="カテゴリー管理"><i class="material-icons">view_list</i>カテゴリー管理</a>
			<li><a href="/manage/color" title="カラー管理"><i class="material-icons">color_lens</i>カラー管理</a>
			<li><a href="/manage/setting" title="アカウント設定"><i class="material-icons">account_circle</i>アカウント設定</a>
			<li><a href="/manage/setting" title="サイト設定"><i class="material-icons">settings</i>サイト設定</a>
		</ul>
	</div>
	<label for="j-nav__checkbox" class="l-nav__overlay"></label>
</nav>

<main class="l-main">
	
		<?=$this->session->flashdata('flash');?>
	
		<ul>
			<li><a href="/manage/create_table/admins_table">/manage/create_table/admins_table</a></li>
			<li><a href="/manage/drop_table/admins_table">/manage/drop_table/admins_table</a></li>
			<li><a href="/manage/create_table/categories_table">/manage/create_table/categories_table</a></li>
			<li><a href="/manage/drop_table/categories_table">/manage/drop_table/categories_table</a></li>
			<li><a href="/manage/create_table/contents_table">/manage/create_table/contents_table</a></li>
			<li><a href="/manage/drop_table/contents_table">/manage/drop_table/contents_table</a></li>
		</ul>

</main>

<? include_once(__DIR__.'/../_parts/_footer.php') ?>

</body>
</html>