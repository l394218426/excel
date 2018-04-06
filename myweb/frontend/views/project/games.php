
<?php 

use common\services\UrlServices;
use common\composers\BaseController; 
?>
<!--content-->
	<div class="container">
			<div class="games">
				<h2> Games</h2>
			
			<div class="wrap">	
			<div class="main">
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

