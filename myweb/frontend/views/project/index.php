<?php 

use common\services\UrlServices;
use common\composers\BaseController; 
?>
<!--banner-->

	<div class="banner">
<div class="container">	
		  <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
						<div class="banner-top">
							<img src="images/12.jpg" class="img-responsive" alt="">
						</div>
						  <div class="banner-top banner-bottom">
							<img src="images/11.jpg" class="img-responsive" alt="">
						</div>
				   		 <div class="clearfix"> </div>
				   	 </div>
				   
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
						
						<div class="banner-top">
							<img src="images/14.jpg" class="img-responsive" alt="">
						</div>
						  <div class="banner-top banner-bottom">
							<img src="images/13.jpg" class="img-responsive" alt="">
						</div>
				   		 <div class="clearfix"> </div>
						
				   	 </div>
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
							<div class="banner-top">
							<img src="images/16.jpg" class="img-responsive" alt="">
						</div>
						  <div class="banner-top banner-bottom">
							<img src="images/15.jpg" class="img-responsive" alt="">
						</div>
				   		 <div class="clearfix"> </div>
				   	 </div>
			</article>
			</div>
			 <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
		</div>
		<!---->
		  <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider({
					 pagination : true,
					 nav : false,
				});         
   		     </script> 	
		
		</div>   
	</div>
<!--content-->
<div class="content">
	<div class="container">
			<div class="content-top" >
				<h2 class="new">游戏</h2>
			
			<div class="wrap">	
			<div class="main" >
				<ul id="og-grid" class="og-grid">
					<?php foreach ($data as $key => $value): ?>
							<li>
						<a href="#" data-largesrc="<?=UrlServices::AdminUrl('/').$value['image_url']  ?>" data-title="Subway Surfers" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="<?=UrlServices::AdminUrl('/').$value['image_url']  ?>" alt="img01"/>
						</a>
					</li>
					<?php endforeach ?>
				
					
					 <div class="clearfix"> </div>
					</ul>
				</div>
			</div>
		</div>
<script src="/js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
	</div>
		<!----->
		<div class="col-mn">
			<div class="container">
					<div class="col-mn2">
						<h3>The Best Features</h3>
						<p>Contrary to popular belief
							, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
						<a class=" more-in" href="single.html">Read More</a>
				</div>
			</div>
		</div>
		<!---->
  
	
	