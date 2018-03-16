<footer id="l-footer">
	<i class="material-icons l-footer-i">copyright</i>2018 hitomi hoshisaki
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
/*global $*/

// ページ内スムーズスクロール
$('a[href^="#"]').click(function(){
	var speed = 800;
	var href= $(this).attr("href");
	var target = $(href == '#' || href == '' ? 'html' : href);
	var position = target.offset().top;
	$('html, body').animate({scrollTop:position}, speed, 'swing');
	return false;
});

// SP版メニューをクリックした時の挙動
$('#js-nav-contents-ul a').click(function(){
	$('#js-nav-open-checkbox').prop('checked',false);
});
</script>