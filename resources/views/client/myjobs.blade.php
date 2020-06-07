<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</head>

<body>
	<!-- navbar -->
	<div class="ui inverted top fixed menu">

		<a class="item" href="{{ route('freelancer_dashboard') }}">
				Home
			</a>
		<div class="item">
			<div class="ui icon input">
				<input type="text" placeholder="Search...">
				<i class="search icon"></i>
			</div>
		</div>
		<div class="right menu">

			<a class="item">
				
			</a>

			<a class="item" href="/{{ route('logout') }}"
			onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
			{{ __('Logout') }}
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
	</div>
</div>
<br>
<br>

<div class="ui internally celled grid">
	<div class="row">
		<div class="three wide column">
			

		</div>

		<div class="ten wide column">
			<div class="ui raised container segment">
				@foreach($show as $data)
				<h2 class="ui header">Job Title 
				</h2>
				<h3>{{ $data->job_title }}&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
				<h2 class="ui header">Job Description
				</h2>
				<h3>{{ $data->about }}&nbsp&nbsp&nbsp&nbsp&nbsp</i></h3>
				<h2 class="ui header">Job Budget
				</h2>
				<h3><i class="rupee sign icon"></i>{{$data->budget}}&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
				<h2 class="ui header">Duration
				</h2>				
				<h3>{{$data->months}}&nbsp&nbsp&nbsp&nbsp&nbspMonths
				</h3>		
				<h2 class="ui header">Tags</h2>
				@foreach($cat as $cat1)
			    <h3><a class="ui black label">{{$cat1->title}}</a>&nbsp&nbsp&nbsp&nbsp&nbsp
			    </h3>	
			    @endforeach
			    @endforeach								 
			</div>

		</div>
		<div class="three wide column">
		</div>
	</div>
</div>
</body>
</html>