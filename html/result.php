<!DOCTYPE html>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
	putenv("LANG=ko_KR.UTF-8");
	setlocale(LC_ALL, 'ko_KR.utf8');
?>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Input</title>
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
	
     <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo2.png" alt="" width="300" height="150"/></a></div>
                </div>
                <div class="rd-navbar-right rd-navbar-nav-wrap">
                  <div class="rd-navbar-aside">
                    <ul class="rd-navbar-contacts-2">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="phone" href="tel:#">02-710-9019</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body">Cheongpa-ro 47-gil, Cheongpa-dong 2-ga, Yongsan-gu, Seoul</div>
                        </div>
                      </li>
                    </ul>
                                    </div>
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">홈</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="keyword.php">인재상 적합도 분석</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="recommend.php">문장 추천 서비스</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="issue.php">최신 이슈</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                  <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                  </div>
                </div>
                <div class="rd-navbar-project">
                  <div class="rd-navbar-project-header">
                    <h5 class="rd-navbar-project-title">Gallery</h5>
                    <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                      <div class="project-close"><span></span><span></span></div>
                    </div>
                  </div>
                  <div class="rd-navbar-project-content rd-navbar-content">
                    <div>
                      <div class="row gutters-20" data-lightgallery="group">
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-1-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-1-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-2-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-2-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-3-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-3-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-4-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-4-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-5-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-5-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                        <div class="col-6">
                          <!-- Thumbnail Creative-->
                          <article class="thumbnail thumbnail-creative"><a href="images/project-6-1200x800-original.jpg" data-lightgallery="item">
                              <div class="thumbnail-creative-figure"><img src="images/project-6-195x164.jpg" alt="" width="195" height="164"/>
                              </div>
                              <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div></a></article>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- parallax top-->
      <!-- Breadcrumbs -->
        <!-- Breadcrumbs -->
       
      <section class="bg-gray-7">
        <div class="container">
          <h3 class="breadcrumbs-custom-title">Analysis</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
      </section>
      
	<?php
		
   		 $ar = "\"{$_POST['t']}\"";
		 $keyword = "\"{$_POST['box']}\"";
  
	        //echo system("python /var/www/python/input_to_noun.py $ar");
		exec("python /var/www/python/input_to_noun.py $ar",$o);
		exec("python /var/www/python/return_average.py $keyword", $out);
		$key = $out[0]*100;
		$per = round($key,0);
	?>

      <section class="section section-lg bg-default">
        <div class="container">
          <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left" id="tabs-4">
            <div class="col-lg-4 col-xl-3">
              <h5 class="text-spacing-200 text-capitalize">인재상 적합도 분석</h5>
              <ul class="nav list-category list-category-down-md-inline-block">
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="0s"><a data-toggle="tab" style="pointer-events: none; color:gray;" >Step 1. 인재상 키워드 선택</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".1s"><a data-toggle="tab" style="pointer-events: none; color:gray;">Step 2. 자기소개서 입력</a></li>
              <!--</ul><a class="button button-xl button-primary button-winona" href="#tabs-4-3">결과 분석</a>-->
		<li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".2s"><a class="active" data-toggle="tab" style="pointer-events: none;">Step 3. 분석결과</a></li>		
<br>	</ul>
		<!--<form action="#" accept-charset="utf-8" name="cover_Letter" method="get">-->
		<!--<li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".2s"><a class="button button-xl button-primary button-winona" href="#tabs-4-3" data-toggle="tab">결과분석</a></li>-->
            </div>
            <div class="col-lg-8 col-xl-9">
              <!-- Tab panes-->
              
              <div class="tab-content tab-content-1">
                
      		 
               <div class="tab-pane fade show active" id="tabs-4-3">
     

		 <img src="images/result4.png" alt="" width="60%" height="90" style="margin-right:2%;"  style="margin-top:20%;">
                <div id = i_result style="height: auto; width: 100%; border-top:1px solid grey ; margin-bottom=5%;">
		<p id="key" style="margin-left:20%; margin-top:1%;  font-size:300%; color:#FF6384;">
		<script type="text/javascript">
			document.getElementById("key").innerHTML = <?php echo json_encode($keyword);?>;
		</script>
		<img src="images/result3.png" alt="" width="60%" height="80">

		 <div class="result" id="results">
		
		<canvas id="myChart"></canvas>
		
			<script type="text/javascript">
			Chart.pluginService.register({
				beforeDraw: function (chart) {
					if (chart.config.options.elements.center) {
		        //Get ctx from string
		        var ctx = chart.chart.ctx;
		        
						//Get options from the center object in options
		        var centerConfig = chart.config.options.elements.center;
		      	var fontStyle = centerConfig.fontStyle || 'Arial';
						var txt = centerConfig.text;
		        var color = centerConfig.color || '#000';
		        var sidePadding = centerConfig.sidePadding || 20;
		        var sidePaddingCalculated = (sidePadding/100) * (chart.innerRadius * 2)
		        //Start with a base font of 30px
		        ctx.font = "30px " + fontStyle;
		        
						//Get the width of the string and also the width of the element minus 10 to give it 5px side padding
		        var stringWidth = ctx.measureText(txt).width;
		        var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

		        // Find out how much the font can grow in width.
		        var widthRatio = elementWidth / stringWidth;
		        var newFontSize = Math.floor(30 * widthRatio);
		        var elementHeight = (chart.innerRadius * 2);

		        // Pick a new font size so it will not be larger than the height of label.
		        var fontSizeToUse = Math.min(newFontSize, elementHeight);

						//Set font settings to draw it correctly.
		        ctx.textAlign = 'center';
		        ctx.textBaseline = 'middle';
		        var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
		        var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
		        ctx.font = fontSizeToUse+"px " + fontStyle;
		        ctx.fillStyle = color;
		        
		        //Draw text in center
		        ctx.fillText(txt, centerX, centerY);
					}
				}
			});

				var value = <?php echo json_encode($per);?>;
				var progressLabel = value + '%';
				Chart.defaults.global.legend.display = false;
				Chart.defaults.global.tooltips.enabled = false;
				var config = {
					type: 'doughnut',
					data: {
						
						datasets: [{
							data: [value, 100-value],
							backgroundColor: [
								"#FFC845",
								"#DEE2E6"
							],
							hoverBackgroundColor: [
								 "#FFC845",
                                                                 "#DEE2E6"
                                                        ]
						}]
					},
				options: {
					hover: {mode: null},
					elements: {
						center: {
							text: progressLabel,
		          color: '#FF6384', // Default is #000000
		          fontStyle: 'Arial', // Default is Arial
		          sidePadding: 20 // Defualt is 20 (as a percentage)
						}
					}
				}
			};


				var ctx = document.getElementById("myChart").getContext("2d");
				var myChart = new Chart(ctx, config);
			</script>
		
		 		<!-- </canvas>	 -->
				
	              <div style="position:absolute; width:600px; height:60px; top:-31px; left:-40px;">
                  </p><!--<img src="images/final.png" alt="" width="600" height="60"/>--></div>
                  
                </div>
                
           
            </div>
          </div>
        </div>
       </div>
      </section>

     

    

      
       

      <!-- Bottom Banner--><a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )"></a>
      <!-- Page Footer-->
      <footer class="section footer-modern context-dark footer-modern-2">

        <div class="footer-modern-line-3">
          <div class="container">
            <div class="row row-10 justify-content-between">
              <div class="col-md-6"><span style="font-size:15px;">100, Cheongpa-ro 47-gil, Cheongpa-dong 2-ga, Yongsan-gu, Seoul</span></div>
              <div class="col-md-auto">
                <!-- Rights-->
                <p class="rights" style="font-size:15px;"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span><span> Design&nbsp;by&nbsp;JiEun, GeonSeo, EunBi, EunBi</span></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>

