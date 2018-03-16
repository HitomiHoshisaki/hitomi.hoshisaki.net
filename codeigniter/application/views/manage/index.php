<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>管理ページ</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/common/css/import.css?<?=mt_rand()?>" />
<style type="text/css">
@media (min-width: 1200px) {
	#l-nav {
		float: left;
		width: 25rem;
		height: 100vh;
		box-shadow: 3px 0px 4px rgba(0,0,0,0.3);
	}
	
	/* .l-nav-menu */
	.l-nav-menu {
		top: auto; /* 打ち消し */
		right: auto; /* 打ち消し */
		bottom: 0;
		left: 0;
		width: auto; /* 打ち消し */
		height: auto; /* 打ち消し */
		margin: 2.5rem;
		text-align: left;
	}
	.l-nav-menu-ul {
		margin-top: auto; /* 打ち消し */
	}
	.l-nav-menu-ul li + li {
		border: none; /* 打ち消し */
	}
	.l-nav-menu-ul li a {
		font-size: 2rem;
		line-height: 4rem;
	}
	.l-nav-menu-ul li a i {
		padding-left: 0; /* 打ち消し */
	}
	
	#l-main {
		max-width: none;
		margin: 0 0 0 250px;
	}
}
</style>
</head>
<body id="manage">
	
<header id="l-header" class="d-n">
	<h1>管理ページ</h1>
</header>

<nav id="l-nav">
	<h2 class="d-n">管理メニュー</h2>
	<input id="js-nav-open-checkbox" class="u-d-n-pc" type="checkbox" />
	<div class="l-nav-bar u-d-n-pc">
		<a class="l-nav-bar-icon" href="#top" title="ページトップ">
			<i class="material-icons">home</i>
		</a>
		<label for="js-nav-open-checkbox" class="l-nav-bar-icon">
			<i class="material-icons"></i>
		</label>
	</div>
	<div class="l-nav-menu">
		<ul id="js-nav-menu-ul" class="l-nav-menu-ul">
			<li><a href="/manage/" title="お知らせ"><i class="material-icons">info</i>お知らせ</a></li>
			<li><a href="/manage/contents" title="コンテンツ管理"><i class="material-icons">edit</i>コンテンツ管理</a></li>
			<li><a href="/manage/category" title="カテゴリー管理"><i class="material-icons">view_list</i>カテゴリー管理</a></li>
			<li><a href="/manage/color" title="カラー管理"><i class="material-icons">color_lens</i>カラー管理</a></li>
			<li><a href="/manage/setting" title="アカウント設定"><i class="material-icons">account_circle</i>アカウント設定</a></li>
			<li><a href="/manage/setting" title="サイト設定"><i class="material-icons">settings</i>サイト設定</a></li>
		</ul>
	</div>
	<label for="js-nav-open-checkbox" class="l-nav-overlay u-d-n-pc">
	</label>
</nav>

<main id="l-main">
	
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