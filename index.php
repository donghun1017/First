<?php 
	session_start();

	//회원가입을 통해 저장되어 있는 세션값.
	$userid= $_SESSION['userid'];
	$username= $_SESSION['username'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WELCOME TO SPEAKKO</title>

	<script
  		src="https://code.jquery.com/jquery-3.2.1.min.js"
  		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  		crossorigin="anonymous">
  		</script>

	<script src="http://malsup.github.com/jquery.cycle2.js"></script>
	
	<link rel="stylesheet" type="text/css" href="./css/common.css">

</head>
<body>
	<?php include "./lib/top_menu.php"; ?>
	
	
	<!--// 메인 슬라이드 배너  -->
	<div id="section_02">
		<div id="main_text_box">					
		<div id="main_text_01">당신의 한국어 능력을 상승시켜줄<br/>
		최고의 한국어 교육 파트너
		</div>
			<div id="main_text_02">NO.1 Korean education</div>
			<div id="main_text_03">Speakko</div>
		</div>
		<div style="width:100%;height:auto;z-index:1;overflow:hidden;">
			<div style="width:100%;height:938px;position:relative;left:50%;margin-left: -952px;z-index:1;">
				<div class="cycle-slideshow">
					<img src="image/section02_3.jpg" alt="">
					<img src="image/section02_2.jpg" alt="">
					<img src="image/section02_1.jpg" alt="">
				</div>

			</div>

		</div>

	</div>

	<div id="section_content_empty"></div>
	<div id="section_content">
		<ul id="section_content_list">
			<li id="section_content_1"><a href=""><img src="image/main_content1.png" width="25%" height="312" style="float: left;"></a></li>
			<li id="section_content_2"><a href=""><img src="image/main_content2.jpg" width="25%" height="312" style="float: left;"></a></li>
			<li id="section_content_3"><a href=""><img src="image/main_content3.jpg" width="25%" height="312" style="float: left;"></li></a>
			<li id="section_content_4"><a href=""><img src="image/main_content4.jpg" width="25%" height="312" style="float: left;"></li></a>
		</ul>
	</div>
				

	<?php include "./lib/foot.php"; ?>





</body>
</html>