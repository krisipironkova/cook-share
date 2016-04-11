<div role="main" class="main shop">

	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<hr class="tall">
			</div>
		</div>

      	<div class="row">
	      	<div class="col-md-4">
	      		<div class="form-group">
	      			<h1 class="mb-none"><strong>My Recipes</strong></h1>
	      		</div>
	      	</div>

	      	<div class="col-md-8 text-right">
	      		<div class="form-group">
	      			<a href="<?=base_url('recipes/recipe_form')?>" class="btn btn-lg btn-primary">New Recipe</a>
	      		</div>
      		</div>
      	</div>

		<div class="row">
			<ul class="portfolio-list">
			<?php foreach ($recipes as $recipe): ?>
				<li class="col-md-2 col-sm-3 col-xs-3 isotope-item websites">
					<div class="portfolio-item">
						<a href="<?=base_url('recipes/recipe_view/'.$recipe->id)?>">
							<span class="thumb-info">
								<span class="thumb-info-wrapper">
									<img src="<?php echo base_url()?>assets/img/burger.jpg" class="img-responsive" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner"><?php echo $recipe->title ?></span>
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
</div>

