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
			<h1>All the articles</h1>
			<!-- will be used to show any messages -->
			<?php if(Session::has('message')): ?>    
				<div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
			<?php endif; ?>

			<table class="table table-striped table-bordered">    
				<thead>        
					<tr>            
						<th>ID</th>            
						<th>Title</th>            
						<th>Description</th>  
						<th>Show</th>          
						<th>Delete</th>       
						<th>Edit</th>        
					</tr>   
				</thead>    
				<tbody>    
					<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        
						<tr>            
							<td><?php echo e($value->id); ?></td>            
							<td><?php echo e($value->title); ?></td>            
							<td><?php echo e($value->description); ?></td>   
							<!-- we will also add show, edit, and delete buttons -->            
							<td class="text-center">                
								<!-- delete the example (uses the destroy method DESTROY /articles/{id} -->                
								<!-- we will add this later since its a little more complicated than the other two buttons -->                
								<!-- show the example (uses the show method found at GET /articles/{id} -->                
								<a class="btn btn-small btn-success" href="<?php echo e(URL::to('articles/' . $value->id)); ?>">Show this Article</a>                
								  
							</td>  
							<td>
								<?php echo e(Form::open(array('url' => 'articles/' . $value->id, 'class' => 'text-center'))); ?>                	
								<?php echo e(Form::hidden('_method', 'DELETE')); ?>               
								<?php echo e(Form::submit('Delete this article', array('class' => 'btn btn-warning'))); ?>            
								<?php echo e(Form::close()); ?>

							</td>           
							<td class="text-center">
								<!-- edit this example (uses the edit method found at GET /articles/{id}/edit -->               
								<a class="btn btn-small btn-info" href="<?php echo e(URL::to('articles/' . $value->id . '/edit')); ?>">Edit this Article</a>  
							</td>    
						</tr>    
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
				</tbody>
			</table>
		</div>
	</body>
</html>

