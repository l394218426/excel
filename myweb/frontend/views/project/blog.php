
<!--content-->
<div class="blog">
	<div class="container">
		<h2>Blog</h2>
			<div class="single-inline">
				<div class="blog-to">		
						<?php foreach ($data as $key => $value): ?>
							
						<a href="single.html"><img class="img-responsive sin-on" src="images/sin1.jpg" alt="" /></a>
							<div class="blog-top">
							<div class="blog-left">
								<b><?= date('d',$value['blog_time'])  ?></b>
							
							</div>
							<div class="top-blog">
								<a class="fast" href="single.html"><?=$value['blog_name'] ?></a>
								<p><a href="single.html"></a> <a href="#"></a> | <a href="single.html"></a></p> 
								<p class="sed"><?=$value['blog_desc']  ?></p> 
								
								
							</div>
							
					</div>
						
						<?php endforeach ?>
					</div>
				</div>
				<nav>
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2 <span class="sr-only"></span></a></li>
					<li><a href="#">3 <span class="sr-only"></span></a></li>
					<li><a href="#">4 <span class="sr-only"></span></a></li>
					<li><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
				  </ul>
				</nav>
			</div>
			</div>
		
