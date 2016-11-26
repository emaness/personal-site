<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
		
		<link rel="stylesheet" href="css/EverettStyle.css">
		<title>Everett J Maness</title>
	</head>
	<body class="no-js">
		<div class="mainContainer">
			<script>
				var el = document.getElementsByTagName("body")[0];
				el.className = "";
			</script>
			<header class="bgimage">
				<div class="container">
					<div class="row">
						<div class="idTag col-6">
							<div class="tagPic">
								<img src="images/idPic.jpg" alt="My Face">
							</div>
							<div class="tagContainer">	
								<div class="tagText">
									<h1>Innovative Tech Solutions</h1>
								</div>
							</div>
							<div class="col-6"></div>
						</div>
					</div>
				</div>
			</header>
			<nav id="topNav">
				<ul> 
					<li id="aboutThisBtn">About this</li>
					<li id="navlist">
						<a href="#" title="Nav Link 2">Projects</a>
						<ul id="sub_navlist">
							<li><a href="../live-search/index.php" title="Live search tool">Live search tool</a></li>
							<li><a href="../myImage-test/my_file_insert.php" title="Image database">Image database</a></li>
							<!--<li><a href="#" title="Sub Nav Link 3">Sub Nav Link 3</a></li>-->
							<!--<li><a href="#" title="Sub Nav Link 4">Sub Nav Link 4</a></li>-->
							<!--<li class="last"><a href="#" title="Sub Nav Link 5">Sub Nav Link 5</a></li>-->
						</ul>
					</li>
					<li><a href="#" title="Example 1">Example 1</a></li>
					<li><a href="#" title="Example 2">Example 2</a></li>
					<li><a href="#" title="Example 3">Example 3</a></li>
				</ul>
			</nav>
			<div class="container" id="main">
				<div class="row">
					<div class="col-10">
						<div class="textContainer" id="content">
							
						</div>
					</div>
					<aside class="col-2" id="left">
						<!-- <h2>How to find me:</h2>
						<ul>
							<li> 
								<ul>
									<li class="contactdesc"><h3>You can email me.</h3></li>
									<li class="contactdesc">emaness09@gmail.com</li>
								</ul>
							</li>
							<li>
								<ul>
									<li><h3>You can even call me.</h3></li>
									<li>(305) 906-2372</li>
								</ul>
							</li>			
							<li>
								<ul>
									<li><h3>Or if you're a Millenial..</h3></li>
									<li>FB: Everett Maness</li>
									<li>Insta: @TheRealMacEverett</li>
									<li>Twitter: @HalftimeHacker</li>	
								</ul>
							</li>	
						</ul> -->
					</aside>
				</div>
			</div>
			<div class="row" id="bottomRow">
				<footer>
					<div class="col-4 footBgr">
						<div class="contactContainer">
							<div class="footerHeading">
								<h1>Contact me</h1>
							</div>
							<ul>
								<li>c: (305) 906-2372</li>
								<li>e: emaness09@gmail.com</li>
							</ul>
						</div>
					</div>
					<div class="col-4 footBgr">
						<div class="followContainer">
							<div class="footerHeading">
								<h1>Follow me</h1>
							</div>
							<a href="https://twitter.com/intent/tweet?screen_name=HalftimeHacker" class="twitter-mention-button" data-show-count="false">Tweet to @TwitterDev</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
							<a href="https://twitter.com/HalftimeHacker" class="twitter-follow-button" data-show-count="false">Follow @HalftimeHacker</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script><a></a>
						</div>
					</div>
					<div class="col-4 footBgr">
						<div class="linksContainer">
							<div class="footerHeading">
								<h1>Fascinations</h1>
							</div>
						</div>
					</div>
				</footer>
			</div>
			
		<script src="js/jquery.js"></script>
		<script src="js/modernizr.js"></script>
	<!-- <script src="js/bootstrap.min.js"></script>-->
		<script src="js/script.js"></script>
		<script>
				(function($){
					console.log("running script");
					//cache nav
					var nav = $("#topNav");
					console.log("setting nav cache");
					//add indicators and hovers to submenu parents
					nav.find("li").each(function(){
						console.log("finding <li> function");
						if ($(this).find("ul").length > 0) {
							console.log("found ul");
							$("<span>").text("^").appendTo($(this).children(":first"));
							
							//show subnav on hover
							$(this).mouseenter(function(){
								console.log("mouse entered");
								$(this).find("ul").stop(true, true).slideDown();
							});
							
							//hide submenus on exit
							$(this).mouseleave(function(){
								console.log("mouse left");
								$(this).find("ul").stop(true, true).slideUp();
							});
						}
					});
				})(jQuery);
			</script>
		</div>
	</body>
	
</html>

