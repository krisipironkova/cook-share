<div role="main" class="main shop">

  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <hr class="tall">
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h1 class="mb-none"><strong>Adding new recipe</strong></h1>
        <p></p>
      </div>
    </div>

    <div class="row">
      	<!-- <form action="recipes/add_recipe" method="post" enctype="multipart/form-data" id="recipe_form"> -->
      	<?php echo form_open_multipart('recipes/add_recipe', [ 'id' => 'recipe_form' ]);?>			   
	  		<div class="col-md-6">
	  			<?php if (isset($error)): ?>
	  				<div class="alert alert-danger"><?php echo $error; ?></div>
	  			<?php endif; ?>
				<div class="form-group">
					<label for="photo"><strong>Photo</strong></label>
					<div style="position:relative;">
						<a class='btn btn-primary' href='javascript:;'>
							Choose File...
							<input type="file" accept="image/*" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="photo" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
						</a>
						&nbsp;
						<span class='label label-info' id="upload-file-info"></span>
					</div>
				</div>

	      		<div class="form-group">
	      			<label for="description"><strong>Description</strong></label>
	      			<textarea rows="5" class="form-control" name="description" id="description" placeholder="A few words about the recipe..."></textarea>
	      		</div>
	      		<div class="form-group">
	      			<label for="directions"><strong>Directions</strong></label>
	      			<textarea rows="5" class="form-control" name="directions" id="directions" placeholder="Еxplain the steps for preparing the recipe..."></textarea>
	      		</div>
      		</div>
															<!-- SECOND DIV -->
      		<div class="col-md-6">
	      		<div class="row">
		      		<div class="col-md-12">
			      		<div class="form-group">
			      			<label for="title"><strong>Title</strong></label>
			      			<input type="text" class="form-control" id="title" name="title" placeholder="title">
			      		</div>
			      	</div>
			    </div>

		      	<div class="row">
			      	<div class="col-md-4">
			      		<div class="form-group">
			      			<label for="prep_time"><strong>Preparation time</strong></label>
			      			<input type="text" class="form-control" id="prep_time" name="prep_time" placeholder="prep_time">
			      		</div>
			      	</div>

			      	<div class="col-md-4">
			      		<div class="form-group">
			      			<label for="servings"><strong>Servings</strong></label>
			      			<input type="text" class="form-control" id="servings" name="servings" placeholder="servings">
			      		</div>
		      		</div>
		      		<div class="col-md-4">
		      			<div class="form-group">
			      			<label for="cals"><strong>Calories</strong></label>
			      			<input type="text" class="form-control" id="cals" name="cals" placeholder="cals">
	      				</div>
	      			</div>
		      	</div>
		      	<div class="row">
		      		<div class="col-md-12">
			      		<div class="form-group">
			      			<label for="ingredients"><strong>Ingredients</strong></label>
			      			<textarea rows="8" class="form-control" name="ingredients" id="ingredients" placeholder="Enter the necessary ingredients..."></textarea>
			      		</div>
		      		</div>
	      		</div>
		      	<div class="row">
		      		<div class="col-md-12 text-right">
		      			<button type="submit" class="btn btn-lg btn-success">Create</button>
		      			<a href="<?=base_url('recipes/my_recipes')?>"  class="btn btn-lg btn-danger">Cancel</a>
		      		</div>
		      	</div>
		      </div>
      	<?php echo form_close(); ?>
      </div>
    </div>
</div>

