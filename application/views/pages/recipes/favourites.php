<div class="container">
<h1>Favourites</h1>
<hr />
    <div class="row">
    
			<ul class="portfolio-list">
                <?php foreach($favourites as $recipe): ?>
 				<li class="col-md-2 col-sm-3 col-xs-3 isotope-item websites">
					<div class="portfolio-item">
						<a href="<?=base_url('recipes/recipe_view/' . $recipe->id )?>">
							<span class="thumb-info">
								<span class="thumb-info-wrapper">
									<img src="<?php echo base_url() . 'assets/uploads/' . $recipe->photo; ?>" class="img-responsive" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner"><?php echo $recipe->title?></span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</li>
                <?php endforeach; ?>
			</ul>
   	</div>
</div>