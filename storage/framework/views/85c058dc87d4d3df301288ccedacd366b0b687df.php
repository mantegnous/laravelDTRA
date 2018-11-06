<!-- app/views/articles/show.blade.php -->
<?php echo $__env->make('partials/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="container">
			<nav class="navbar navbar-inverse">    
				<div class="navbar-header">        
					<a class="navbar-brand" href="<?php echo e(URL::to('articles')); ?>">Article Alert</a>    
				</div>    

				<ul class="nav navbar-nav">        
					<li>
						<a href="<?php echo e(URL::to('articles')); ?>">View All Articles</a>
					</li>        
					<li>
						<a href="<?php echo e(URL::to('articles/create')); ?>">Create a Article</a> 
					</li>   
				</ul>
			</nav>

			<h1>Showing <?php echo e($article->name); ?></h1>    
			<div class="jumbotron text-center">        
				<h2><?php echo e($article->title); ?></h2>        
				<p>            
					<strong>Description:</strong> <?php echo e($article->description); ?><br>        
				</p>    
			</div>
		</div>
	</body>
</html>
