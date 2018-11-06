@include('partials/head')
		<div class="container">
			<nav class="navbar navbar-inverse">    
				<div class="navbar-header">        
					<a class="navbar-brand" href="{{ URL::to('articles') }}">article Alert</a>    
				</div>    
				<ul class="nav navbar-nav">        
					<li>
						<a href="{{ URL::to('articles') }}">View All articles</a>
					</li>        
					<li>
						<a href="{{ URL::to('articles/create') }}">Create a article</a>
					</li>    
				</ul>
			</nav>
			<h1>Edit {{ $article->title }}</h1>
			<!-- if there are creation errors, they will show here -->
			{{ HTML::ul($errors->all()) }}
				{{ Form::model($article, array('route' => array('articles.update', $article->id), 'method' => 'PUT')) }}    
				<div class="form-group">        
					{{ Form::label('title', 'title') }}        
					{{ Form::text('title', null, array('class' => 'form-control')) }}    
				</div>    
				<div class="form-group">        
					{{ Form::label('description', 'description') }}        
					{{ Form::text('description', null, array('class' => 'form-control')) }}    
				</div>    
				{{ Form::submit('Edit the article!', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
		</div>
	</body>
</html>
