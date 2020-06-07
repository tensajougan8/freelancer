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
			<div class="ui fluid card">
				<div class="image">
					<img src="/images/avatar/large/daniel.jpg">
				</div>
				<div class="content">
					<a class="header">Daniel Louise</a>
				</div>
			</div>

		</div>

		<div class="ten wide column">
			<div class="ui raised container segment">
				<h2 class="ui header">Frist Name 
				</h2>
				<h3>{{ Auth::user()->fname }}&nbsp&nbsp&nbsp&nbsp&nbsp<i class="edit icon" id="fname"></i></h3>
				<h2 class="ui header">Last Name
				</h2>
				<h3>{{ Auth::user()->lname }}&nbsp&nbsp&nbsp&nbsp&nbsp<i class="edit icon" id="lname"></i></h3>
				<h2 class="ui header">Email
				</h2>


				<h3>{{$user->email}}&nbsp&nbsp&nbsp&nbsp&nbsp<i class="edit icon" ></i></h3>
				<h2 class="ui header">About
				</h2>
				@isset($user->about)
				<h3>{{ Auth::user()->about }}&nbsp&nbsp&nbsp&nbsp&nbsp<i class="edit icon" id="about"></i>

				</h3>
				@else
				<button class="ui primary button" id="about">
					Enter About
				</button>
				@endisset

				<h2 class="ui header">Category</h2>
				@isset($user->c_id)
				   @foreach($cat as $cat1)
					<h3>{{$cat1->title}}&nbsp&nbsp&nbsp&nbsp&nbsp<i class="edit icon" id="category"></i></h3>
					 @endforeach
					@else
					 <button class="ui primary button" id="category">
						Enter Category
					 </button>
				@endisset

				<h2 class="ui header">Skills</h2>
				@isset($user->c_id)

				   @isset($skills->freelancer_id)
					<h3>
					@foreach($sk as $skill)
						<a class="ui black label">{{$skill->title}}</a>
					@endforeach
						&nbsp&nbsp&nbsp&nbsp&nbsp<i class="edit icon" id="tags"></i></h3>
					 @else
					 <button class="ui primary button" id="tags">
						Enter Skills
					 </button>
					 @endisset
					@else
					 <button class="ui primary button" id="category">
						Enter Category
					 </button>
				@endisset
			</div>
		</div>
		<div class="three wide column">
		</div>
	</div>
</div>

<div class="ui modal fname">
	<i class="close icon"></i>
	<div class="ui segment">
		<h2 class="ui right floated header">First Name</h2>
		<div class="ui clearing divider"></div>
		<form  method="POST" action="{{ route('freelancer_firstname')}}">
			{{csrf_field()}}
			<input type="hidden" id="fid"name="fid" value="{{Auth::user()->id}}" readonly>
			<div class="ui form">
				<div class="field">
					<label>First Name: </label>
					<input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror			
				</div>
				<button class="ui primary button" type="submit">
					Save
				</button>
			</div>
		</form>
	</div>  
</div>

<div class="ui modal lname">
	<i class="close icon"></i>
	<div class="ui segment">
		<h2 class="ui right floated header">Last Name</h2>
		<div class="ui clearing divider"></div>
		<form  method="POST" action="{{ route('freelancer_lastname')}}">
			{{csrf_field()}}
			<input type="hidden" id="fid"name="fid" value="{{Auth::user()->id}}" readonly>
			<div class="ui form">
				<div class="field">
					<label>Last Name</label>
					<input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="fname" autofocus>

					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<button class="ui primary button" type="submit">
					Save
				</button>
			</div>
		</form>
	</div>  
</div>

<div class="ui modal about">
	<i class="close icon"></i>
	<div class="ui segment">
		<h2 class="ui right floated header">About</h2>
		<div class="ui clearing divider"></div>
		<form  method="POST" action="{{ route('freelancer_about')}}">
			{{csrf_field()}}
			<input type="hidden" id="fid"name="fid" value="{{Auth::user()->id}}" readonly>
			<div class="ui form">
				<div class="field">
					<label>About </label>
					<textarea rows="3" id="about" type="text" class="form-control @error('about') is-invalid @enderror" name="about" value="{{ old('about') }}" required autocomplete="about" autofocus></textarea>
						@error('about')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					
				</div>
				<button class="ui primary button" type="submit">
					Save
				</button>
			</div>
		</form>
	</div>  
</div>

<div class="ui modal category">
	<i class="close icon"></i>
	<div class="ui segment">
		<h2 class="ui right floated header">Select Category</h2>
		<div class="ui clearing divider"></div>
		<form  method="POST" action="{{ route('freelancer_category')}}">
			{{csrf_field()}}
			<input type="hidden" id="fid"name="fid" value="{{Auth::user()->id}}" readonly>
			<div class="ui form">
				<div class="field">
					<label>Category </label>
					@isset($user->c_id)
					<p> Updating the category will remove all your skills.</p>
					<select class="ui dropdown" name="cat">
					  @foreach($category as $categorys)
                        <option value="{{$categorys->id}}">{{$categorys->title}}</option>
                        @endforeach
					</select>
					@else
						
					<select class="ui dropdown" name="cat">
					  @foreach($category as $categorys)
                        <option value="{{$categorys->id}}">{{$categorys->title}}</option>
                        @endforeach
					</select>	
					@endisset
				</div>
				<button class="ui primary button" type="submit">
					Save
				</button>
			</div>
		</form>
	</div>  
</div>

<div class="ui modal tags">
	<i class="close icon"></i>
	<div class="ui segment">
		<h2 class="ui right floated header">Select tags</h2>
		<div class="ui clearing divider"></div>
		<form  method="POST" action="{{ route('freelancer_tag')}}">
			{{csrf_field()}}
		<input type="hidden" id="fid"name="fid" value="{{Auth::user()->id}}" readonly> 
			<div class="ui form">
				<div class="field">
					<label>Category </label>
					<select multiple="multiple" name="tag[]" class="ui fluid search dropdown">
						@foreach($tag as $tags)
						<option value="{{$tags->id}}"> {{ $tags->title}}</option>
						@endforeach
					</select>		
				</div>
				<button class="ui primary button" type="submit">
					Save
				</button>
			</div>
		</form>
	</div>  
</div>

<script type="text/javascript">
	$(function(){
		$("#fname").click(function(){
			$(".fname").modal('show');
		});
		$(".fname").modal({
			closable: true
		});
	});
	$(function(){
		$("#lname").click(function(){
			$(".lname").modal('show');
		});
		$(".lname").modal({
			closable: true
		});
	});
	$(function(){
		$("#about").click(function(){
			$(".about").modal('show');
		});
		$(".about").modal({
			closable: true
		});
	});
	$(function(){
		$("#category").click(function(){
			$(".category").modal('show');
		});
		$(".category").modal({
			closable: true
		});
	});
	$(function(){
		$("#tags").click(function(){
			$(".tags").modal('show');
		});
		$(".tags").modal({
			closable: true
		});
	});

$('.ui.search.dropdown')
  .dropdown({
  })
;

</script>
</body>
</html>