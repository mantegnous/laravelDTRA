<?php echo $__env->make('partials/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="container">
			<nav class="navbar navbar-inverse">    
				<div class="navbar-header">        
					<a class="navbar-brand" href="<?php echo e(URL::to('articles')); ?>">Article Alert</a>    
				</div>    
				<ul class="nav navbar-nav">        
					<li>
						<a href="<?php echo e(URL::to('articles')); ?>">View All articles</a>
					</li>        
					<li>
						<a href="<?php echo e(URL::to('articles/create')); ?>">Create a article</a>    
					</li>
				</ul>
			</nav>
			<h1>Create a Article</h1>
			<!-- if there are creation errors, they will show here -->
			<?php echo e(HTML::ul($errors->all())); ?>

			<?php echo e(Form::open(array('url' => 'articles'))); ?>    
				<div class="form-group">        
					<?php echo e(Form::label('title', 'title')); ?>        
					<?php echo e(Form::text('title', Input::old('title'), array('class' => 'form-control'))); ?>    
				</div>    
				<div class="form-group">        
					<?php echo e(Form::label('description', 'description')); ?>        
					<?php echo e(Form::text('description', Input::old('description'), array('class' => 'form-control'))); ?>    
				</div>    
				<?php echo e(Form::submit('Create the Article!', array('class' => 'btn btn-primary'))); ?>

			<?php echo e(Form::close()); ?>

		</div>
	</body>
</html>
