<div role="main" class="main shop">

  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <hr class="tall">
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h1 class="mb-none"><strong>Edit recipe</strong></h1>
        <p></p>
      </div>
    </div>

    <div class="row">
      <?php echo form_open_multipart("recipes/edit_recipe/{$recipe->id}", [ 'id' => 'edit_form' ]);?>			   
	  		<div class="col-md-6">
				<div class="form-group">
					<label for="photo"><strong>Photo</strong></label>
					<div style="position:relative;">
						<a class='btn btn-primary' href='javascript:;'>
							Choose File...
						</a>
						&nbsp;
						<span class='label label-info' id="upload-file-info"></span>
					</div>
				</div>

	      		<div class="form-group">
	      			<label for="description"><strong>Description</strong></label>
	      			<textarea rows="5" class="form-control" name="new_description" id="description" placeholder="<?php echo $recipe->description; ?>"></textarea>
	      		</div>
	      		<div class="form-group">
	      			<label for="directions"><strong>Directions</strong></label>
	      			<textarea rows="5" class="form-control" name="new_directions" id="directions" placeholder="<?php echo $recipe->directions; ?>"></textarea>
	      		</div>
      		</div>
															<!-- SECOND DIV -->
      		<div class="col-md-6">
	      		<div class="row">
		      		<div class="col-md-12">
			      		<div class="form-group">
			      			<label for="title"><strong>Title</strong></label>
			      			<input type="text" class="form-control" id="title" name="new_title" placeholder="<?php echo $recipe->title; ?>">
			      		</div>
			      	</div>
			    </div>

		      	<div class="row">
			      	<div class="col-md-4">
			      		<div class="form-group">
			      			<label for="prep_time"><strong>Preparation time</strong></label>
			      			<input type="text" class="form-control" id="prep_time" name="new_prep_time" placeholder="<?php echo $recipe->prep_time; ?>">
			      		</div>
			      	</div>

			      	<div class="col-md-4">
			      		<div class="form-group">
			      			<label for="servings"><strong>Servings</strong></label>
			      			<input type="text" class="form-control" id="servings" name="new_servings" placeholder="<?php echo $recipe->servings; ?>">
			      		</div>
		      		</div>
		      		<div class="col-md-4">
		      			<div class="form-group">
			      			<label for="cals"><strong>Calories</strong></label>
			      			<input type="text" class="form-control" id="cals" name="new_cals" placeholder="<?php echo $recipe->cals; ?>">
	      				</div>
	      			</div>
		      	</div>
		      	<div class="row">
		      		<div class="col-md-12">
			      		<div class="form-group">
			      			<label for="ingredients"><strong>Ingredients</strong></label>
			      			<textarea rows="8" class="form-control" name="new_ingredients" id="ingredients" placeholder="<?php echo $recipe->ingredients; ?>"></textarea>
			      		</div>
		      		</div>
	      		</div>
		      	<div class="row">
		      		<div class="col-md-12 text-right">
		      			<button type="submit" class="btn btn-lg btn-success">Update</button>
		      			<a href="<?=base_url('recipes/my_recipes')?>"  class="btn btn-lg btn-danger">Cancel</a>
		      		</div>
		      	</div>
		      </div>
		<?php echo form_close(); ?>
      </div>
    </div>
</div>

