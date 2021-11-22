<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
	/* Set height of the grid so .sidenav can be 100% (adjust if needed) */
	.row.content {height: 5000px}

	/* Set gray background color and 100% height */
	.sidenav {
	  background-color: #f1f1f1;
	  height: 100%;
	}

	/* Set black background color, white text and some padding */
	footer {
	  background-color: white;
	  color: white;
	  padding: 15px;
	}

	/* On small screens, set height to 'auto' for sidenav and grid */
	@media screen and (max-width: 767px) {
	  .sidenav {
	    height: auto;
	    padding: 15px;
	  }
	  .row.content {height: auto;} 
	}
	</style>
</head>
<body>
	<div class="container-fluid">
	  <div class="row content">
	    <div class="col-sm-3 sidenav">
	      <h4>Bintang.com</h4>
	      <ul class="nav nav-pills nav-stacked">
	        <li><a href="{{ route('consume.index') }}">Popular Post</a></li>
	        <li><a href="{{ route('consume.category', 'business')}}">Business</a></li>
	        <li><a href="{{ route('consume.category', 'entertainment')}}">Entertainment</a></li>
	        <li><a href="{{ route('consume.category', 'science')}}">Science</a></li>
	      </ul><br>
	      <div class="input-group">
	      	<form method='POST' action="{{ route('consume.search') }}">
			    <input type='hidden' name='_token' value='{{csrf_token()}}'>
			    <label class='form-group'>Search : </label>
			    <input type='text' name='key' id='key'>
			    <input type='submit' value='search' class='btn btn-primary btn-sm form-group'>
			</form>";
	      </div>
	    </div>

	    <div class="col-sm-9">
	   		@foreach($articles as $val)
				<h4><small>{{ $val->source->name }}</small></h4>
				<hr>
				<img src="{{ $val->urlToImage }}">
				<h2><a href="{{$val->url}}"> {{$val->title}}</a></h2>
				<h5><span class="glyphicon glyphicon-time"></span> {{$val->author}}, {{ substr($val->publishedAt,0,10) }}.</h5><br>
				<p>{{$val->description}}</p>
				<br><br>
	      	@endforeach
	    </div>

	<footer class="container-fluid">
	  <p>Footer Text</p>
	</footer>
</body>
</html>