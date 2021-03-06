<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="portfolio-title">
							<div class="row">
								<div class="portfolio-nav-all col-md-1">
									<a href="<?=site_url('recipes')?>" data-tooltip data-original-title="Back to catalogue"><i class="fa fa-th"></i></a>
								</div>
								<div class="col-md-10 center">
									<h2 class="mb-none"><?php echo $recipe->title ?></h2>
								</div>
							</div>
						</div>
						<hr class="tall" />
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
							<div>
								<span class="img-thumbnail">
									<img alt="" class="img-responsive" src="<?php echo base_url() . 'assets/uploads/' . $recipe->photo; ?>" />
								</span>
							</div>	
                    </div>		 

					<div class="col-md-8">
						<div class="portfolio-info">
							<div class="row">
								<div class="col-md-12 center">
									<ul>
										<li>
											<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
										</li>
										<li>
											<i class="fa fa-calendar"></i>
										</li>
										<li>
											<i class="fa fa-tags"></i> <a href="#"></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
                        
						<h4 class="heading-primary"><?php echo $recipe->title ?></h4>
						<ul class="portfolio-details">
							<li>
								<p><strong>Description:</strong></p>
								<p><?php echo $recipe->description ?></p>
							</li>
							<li>
								<p><strong>Ingredients:</strong></p>
								<p><?php echo $recipe->ingredients ?></p>
							</li>
							<li>
								<p><strong>Directions:</strong></p>
								<p><?php echo $recipe->directions ?></p>
							</li>
							<li>
								<p><strong>Preparation time: <?php echo $recipe->prep_time ?></strong></p>
							</li>
							<li>
								<p><strong>Servings: <?php echo $recipe->servings ?></strong></p>
							</li>
							<li>
								<p><strong>Cals: <?php echo $recipe->cals ?></strong></p>
							</li>
						</ul>
                            <div class="dropdown" style="float:left;margin-right:4px;">
                            	<?php if(!$in_favourites) : ?>
                            		<?php if(isset($user_info->username)): ?>
                                  		<a href="<?php echo base_url("recipes/add_to_favourites/{$recipe->id}");?>" class="btn btn-success btn-icon"><i class="fa fa-plus"></i>Add to favourites</a>
                                  	<?php else: ?>
                                  		 <a href="<?php echo base_url("users/login");?>" class="btn btn-success btn-icon"><i class="fa fa-plus"></i>Add to favourites</a>
                                  	<?php endif; ?>
                                <?php else : ?>
                                	 <a href="<?php echo base_url("recipes/delete_from_favourites/{$recipe->id}");?>" class="btn btn-danger btn-icon"><i class="fa fa-trash"></i>Remove from favourites</a>
                                <?php endif; ?> 
                            </div>
                            <?php if(isset($user_info->username)): ?>
                            	<?php if($in_user_recipes) : ?>
                            		<a href="<?php echo base_url("recipes/edit_form/{$recipe->id}");?>" class="btn btn-warning btn-icon"><i class="fa fa-pencil"></i>Edit</a>
                            	<?php endif; ?>
                        	<?php endif; ?>
                    </div>
				</div>
            	<hr class="tall" />
            	<?php if(isset($user_info->username)): ?>
	            	<form  action="" method="post" enctype="multipart/form-data" id="comment_form">   
						<h3 class="heading-primary"><i class="fa fa-comments"></i>Comments</h3>
		                <div class="col-md-6">
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<input type="hidden" name="recipe_id" value="<?php echo $recipe->id ?>" />
		                                <textarea rows="5" class="form-control" name="data" placeholder="Write your comment!"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="alert alert-success" style="display: none;"></div>
									 <button type="submit" class="btn btn-lg btn-primary">Post Comment</button>
								</div>
							</div>
		                </div>
		            </form>
		        <?php else: ?>
		        	<div class="col-md-6"><div class="alert alert-danger">Please <a href="<?=base_url('users/login')?>">log in</a> to comment!</div></div>
		        <?php endif; ?>
					<div class="col-md-6" id="comments">
	                    <?php foreach($comments as $comment): ?>
							<div class="testimonial testimonial-style-3">
								<blockquote><p><?php echo $comment->data; ?></p></blockquote>
								<div class="testimonial-arrow-down"></div>
								<div class="testimonial-author"><?php echo $comment->username; ?></div>
							</div>
						<?php endforeach; ?>
					</div>
			</div>
