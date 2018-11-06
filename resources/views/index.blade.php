@include('partials/head')

		<div class="container">
			<nav class="navbar navbar-inverse">    
				<div class="navbar-header">       
					<a class="navbar-brand" href="{{ URL::to('articles') }}">Article Alert</a>    
				</div>    
				<ul class="nav navbar-nav">        
					<li>
						<a href="{{ URL::to('articles') }}">View All Articles</a>
					</li>       
					<li>
						<a href="{{ URL::to('articles/create') }}">Create a Article</a> 
					</li>   
				</ul>
			</nav>
			<h1>All the articles</h1>
			<!-- will be used to show any messages -->
			@if (Session::has('message'))    
				<div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif

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
					@foreach($articles as $key => $value)        
						<tr>            
							<td>{{ $value->id }}</td>            
							<td>{{ $value->title }}</td>            
							<td>{{ $value->description }}</td>   
							<!-- we will also add show, edit, and delete buttons -->            
							<td class="text-center">                
								<!-- delete the example (uses the destroy method DESTROY /articles/{id} -->                
								<!-- we will add this later since its a little more complicated than the other two buttons -->                
								<!-- show the example (uses the show method found at GET /articles/{id} -->                
								<a class="btn btn-small btn-success" href="{{ URL::to('articles/' . $value->id) }}">Show this Article</a>                
								  
							</td>  
							<td>
								{{ Form::open(array('url' => 'articles/' . $value->id, 'class' => 'text-center')) }}                	
								{{ Form::hidden('_method', 'DELETE') }}               
								{{ Form::submit('Delete this article', array('class' => 'btn btn-warning')) }}            
								{{ Form::close() }}
							</td>           
							<td class="text-center">
								<!-- edit this example (uses the edit method found at GET /articles/{id}/edit -->               
								<a class="btn btn-small btn-info" href="{{ URL::to('articles/' . $value->id . '/edit') }}">Edit this Article</a>  
							</td>    
						</tr>    
					@endforeach    
				</tbody>
			</table>
		</div>
	</body>
</html>

