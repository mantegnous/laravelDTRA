<!-- app/views/articles/show.blade.php -->
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

			<h1>Showing {{ $article->name }}</h1>    
			<div class="jumbotron text-center">        
				<h2>{{ $article->title }}</h2>        
				<p>            
					<strong>Description:</strong> {{ $article->description }}<br>        
				</p>    
			</div>
		</div>
	</body>
</html>
