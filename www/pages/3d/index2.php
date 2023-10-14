<!doctype html>
<html lang="ko">
<head>

	<?php include("../../meta_head.php"); ?>
    <link rel="stylesheet" href="./style.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> -->
</head>
<body>
	<div id="wrap">
		<!— header —>
		<?php include("../../header.php"); ?>

		<!— header End —>
		<section id="container"> 
		<div class='container container--rea'>
			<div class='cube cube--ani cube--color-red' id="my_cube">
			<!-- 백업
				<div class='face--one face--ani'><img src="https://hanbongsik.cafe24.com/tempImg/iu.png" style="width:100%;height:100%;vertical-align:top;" alt=""/></div>
			-->
			<div class='face--one face--ani'><img src="/tempImg/ssb-front3.png" style="width:100%;height:100%;vertical-align:top;" alt=""/></div>
				<div class='face--two face--ani'></div>
				<!--
				<div class='face--tree face--ani'><img src="https://hanbongsik.cafe24.com/tempImg/iu.png" style="width:100%;height:100%;vertical-align:top;" alt=""/></div>-->
				<!-- 백업 
				<div class='face--tree face--ani'><img src="/assets/img/temp_sz.png" style="width:100%;height:100%;vertical-align:top;" alt=""/></div>
				-->
				<div class='face--tree face--ani'><img src="/tempImg/ssb.png" style="width:100%;height:100%;vertical-align:top;" alt=""/></div>

				<div class='face--four face--ani'></div>
				<div class='face--five face--ani'></div>
				<div class='face--sixe face--ani'></div>
			</div>
			</div>

			<dav class="topbar" style="text-align:center;">
				<span>
					<button id="reset-3d" style="padding:5px 20px;">원위치로</button>
				</span>
				<!--
				<span>
					<button id="explose-3d">Explose</button>
				</span>
				<span>
					<button id="implose-3d">Inplose</button>
				</span>
				<span>
					<label for="size-cube">Size</label>
					<select id="size-cube" value="12"/>
					<option value="6">6em</option>
					<option value="12" selected>12em</option>
					<option value="24">24em</option>
					</select>
				</span>
				<span>
					<label for="theme-cube">Theme</label>
					<select id="theme-cube" value="cube--dee"/>
					<option value="cube--dee">Dée</option>
					<option value="cube--color-red" selected>Rouge</option>
					<option value="cube--color-gray">Gris</option>
					<option value="cube--border">Border</option>
					</select>
				</span>
-->
			</dav>

			<style>
			.cube{width:330px;height:524px;margin-left:0;margin-top:0;margin-left:-165px;margin-top:-242px;}
			
			.cube--color-red .face{border:none !important;}
			.cube--color-red .face--one{border:none !important;}
			
			.face--one{transform:rotateY(0deg) 
				translateZ(0px) translateY(0%) !important;}
			.face--tree{transform:rotateY(180deg) translateZ(0px) !important;background:#fff;display:none;}
			.face--two{display:none;transform:rotateY(180deg) translateZ(1px) !important;}
			.face--four{display:none;transform:rotateY(180deg) rotateX(180deg) translateZ(1px) !important;}
			.face--five{display:none;transform:rotateY(180deg) translateZ(1px) !important;}
			.face--sixe{display:none;transform:rotateY(180deg) translateZ(1px) !important;}
			.container--rea{padding-top:105px;}

			.face--one{transform:rotateY(0deg) translateZ(1px) !important;}
			.face--tree{display:block;}
			.face--tree .img{transform:rotateX(0deg) rotateY(-180deg) rotateZ(0deg);}

			.cube--color-red .face, .cube--color-red .face--one, .cube--color-red .face--two, .cube--color-red .face--tree, .cube--color-red .face--four, .cube--color-red .face--five, .cube--color-red .face--sixe{border:none !important;background:transparent !important;border-radius:20px;overflow:hidden;}
			
			</style>
			<!-- partial -->
			<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.6/hammer.min.js'></script><script  src="./script.js"></script>

		</section>

		<!— footer —>
		<?php include("../../footer.php"); ?>
		<!— footer End —>
			
		<!-- 모달 -->
		<?php include("../../modal_common.php"); ?>
		<!-- 모달 End -->

	</div>
</body>
