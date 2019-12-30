<!DOCTYPE html>
<html lang="zh-CN">
<?php
$t = $_GET["t"];
$b = $_GET["b"];
$l = explode(' ', $b);
$b1 = $l[0];
$b2 = $l[1];
$g = $_GET["g"];
$l = explode(' ', $g);
$g1 = $l[0];
$g2 = $l[1];
$f = $_GET["f"];
$l = explode('-', $f);
$y = $l[0];
$m = $l[1];
$d = $l[2];
?>
<META http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<TITLE><?php echo $t;?></TITLE> 
<STYLE type="text/css">
@font-face {
	font-family: digit;
	src: url('digital-7_mono.ttf') format("truetype");
}
</STYLE>
 <LINK href="default.css" rel="stylesheet" type="text/css"> 
<SCRIPT src="jquery.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="garden.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="functions.js" type="text/javascript"></SCRIPT>
 
<META name="GENERATOR" content="MSHTML 11.00.10570.1001"></HEAD> 
<BODY>
<DIV style="text-align: center; clear: both;">
<!-- <SCRIPT src="gg_bd_ad_720x90.js" type="text/javascript"></SCRIPT> -->
 
<SCRIPT src="follow.js" type="text/javascript"></SCRIPT>
 </DIV>
<DIV id="mainDiv">
<DIV id="content">
<DIV id="code"><SPAN class="comments">/**</SPAN><BR><SPAN class="space"><SPAN 
class="comments">* from <?php echo $y; ?>-<?php echo$m; ?>-<?php echo$d; ?>,</SPAN><BR><SPAN class="space"><SPAN class="comments">* to <?php  echo date('Y-m-d'); ?>.</SPAN><BR><SPAN 
class="space"><SPAN class="comments">*/</SPAN><BR>			男孩 = <SPAN class="keyword"><?php echo $b1; ?></SPAN> 
<?php echo $b2;?> <BR>			女孩 = <SPAN class="keyword"><?php echo $g1;?></SPAN> <?php echo $g2;?><BR><SPAN class="comments">　 
坠入爱河。</SPAN><BR>			男孩爱这个女孩;<BR><SPAN class="comments">　 
他们彼此相爱。</SPAN><BR>			女孩爱男孩;<BR><SPAN class="comments">　 
随着时间的推移。</SPAN><BR>			男孩离不开女孩;<BR><SPAN 
class="comments">　 同时。</SPAN><BR>			女孩离不开男孩;<BR><SPAN class="comments">　 
漫天的风和雨;</SPAN><BR><SPAN class="comments">　 无论是步行还是5公里。</SPAN><BR><SPAN class="keyword">男孩</SPAN> 非常   <SPAN class="keyword">幸福</SPAN>;<BR><SPAN 
class="keyword">女孩</SPAN> 也非常 <SPAN 
class="keyword">幸福</SPAN>;<BR><SPAN class="placeholder"><SPAN class="comments">　 
不管是现在;</SPAN><BR><SPAN class="placeholder"><SPAN class="comments">　 
还是在遥远的将来。</SPAN><BR><SPAN class="placeholder">这个男孩只有一个梦想;<BR><SPAN class="comments">　 男孩希望女孩能拥有幸福。</SPAN><BR><BR><BR>			我想说:<BR>			宝贝，我永远爱你。<BR></SPAN></SPAN></SPAN></SPAN></SPAN></SPAN></DIV>
<DIV id="loveHeart"><CANVAS id="garden"></CANVAS>			 
<DIV id="words">
<DIV id="messages">亲爱的，这是我们相爱在一起的时光。					 
<DIV id="elapseClock"></DIV></DIV>
<DIV id="loveu">					爱你直到永永远远。<BR>
<DIV class="signature">- <?php echo $b1; echo $b2; ?></DIV></DIV></DIV></DIV></DIV></DIV>
<SCRIPT type="text/javascript">
var offsetX = $("#loveHeart").width() / 2;
var offsetY = $("#loveHeart").height() / 2 - 55;
var together = new Date();
together.setFullYear(<?php echo $y; ?>, <?php echo ($m - 1); ?>, <?php echo $d; ?>);
together.setHours(20);
together.setMinutes(0);
together.setSeconds(0);
together.setMilliseconds(0);

if (!document.createElement('canvas').getContext) {
	var msg = document.createElement("div");
	msg.id = "errorMsg";
	msg.innerHTML = "你的浏览器不支持HTML5！<br/>建议使用谷歌浏览器"; 
	document.body.appendChild(msg);
	$("#code").css("display", "none")
	$("#copyright").css("position", "absolute");
	$("#copyright").css("bottom", "10px");
	document.execCommand("stop");
} else {
	setTimeout(function () {
		startHeartAnimation();
	}, 5000);

	timeElapse(together);
	setInterval(function () {
		timeElapse(together);
	}, 500);

	adjustCodePosition();
	$("#code").typewriter();
}
</SCRIPT>
 </BODY></HTML>
