<div role="main" class="main shop">

	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<hr class="tall">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<h1 class="mb-none"><strong>Recipes Catalog</strong></h1>
			</div>
		</div>

		<div class="row">
				<ul class="products product-thumb-info-list" data-plugin-masonry>
				<?php foreach($recipes as $recipe) : ?>
					<li class="col-md-3 col-sm-6 col-xs-12 product">
						<span class="product-thumb-info catalog-box">
							<a href="<?=base_url('recipes/recipe_view/'.$recipe->id)?>">
								<span class="product-thumb-info-image">
									<span class="product-thumb-info-act">
										<span class="product-thumb-info-act-left"><em>View</em></span>
									</span>
									<img alt="" class="img-responsive catalog-image" src="<?php echo base_url()?>assets/img/burger.jpg" alt="">
								</span>
							</a>
							<span class="product-thumb-info-content">
									<h4><?php echo $recipe->title ?></h4>			
							</span>
						</span>
					</li>	
					<?php endforeach; ?>
				</ul>
		</div>
</div>
