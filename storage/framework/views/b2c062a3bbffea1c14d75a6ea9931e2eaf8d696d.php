<!-- app/views/articles/edit.blade.php -->
<!DOCTYPE html>
<html>
	<head>    
		<title>Look! I'm CRUDding</title>    
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	</head>

	<body>
		<div class="container">
			<nav class="navbar navbar-inverse">    
				<div class="navbar-header">        
					<a class="navbar-brand" href="<?php echo e(URL::to('articles')); ?>">article Alert</a>    
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
			<h1>Edit <?php echo e($article->title); ?></h1>
			<!-- if there are creation errors, they will show here -->
			<?php echo e(HTML::ul($errors->all())); ?>

				<?php echo e(Form::model($article, array('route' => array('articles.update', $article->id), 'method' => 'PUT'))); ?>    
				<div class="form-group">        
					<?php echo e(Form::label('title', 'title')); ?>        
					<?php echo e(Form::text('title', null, array('class' => 'form-control'))); ?>    
				</div>    
				<div class="form-group">        
					<?php echo e(Form::label('description', 'description')); ?>        
					<?php echo e(Form::text('description', null, array('class' => 'form-control'))); ?>    
				</div>    
				<?php echo e(Form::submit('Edit the article!', array('class' => 'btn btn-primary'))); ?>

			<?php echo e(Form::close()); ?>

		</div>
	</body>
</html>
