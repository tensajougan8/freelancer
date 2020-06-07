<html>

<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</head>

<body>
  <!-- navbar -->
  <div class="ui inverted top fixed menu">

    <a class="item">
    Home
  </a>

   <div class="right menu">
  <div class="ui pointing dropdown link item">
    <span class="text">Client's Name</span>
    <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item">Edit Profile</div>
      <div class="item">Requests</div>
      <div class="header">My Jobs</div>
      <div class="item">Status</div>
      <div class="item">Cancellations</div>
    </div>
  </div>
  <a class="item active">
    Logout
  </a>
</div>
</div>
<br>

<br>
<br>
<div class="ui raised very padded text container segment">
  
  <h2 class="ui header">Job</h2>

  <form class="ui form" method="POST" action="{{ route('client_job')}}">
      {{csrf_field()}}
  <div class="field">
    <label>Job Title</label>
    <input type="hidden" id="cid"name="cid" value="{{Auth::user()->id}}" readonly>
    <input id="title" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

          @error('title')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
  </div>
  <div class="field">
    <label>Job Description</label>
    <textarea rows="3" id="about" type="text" class="form-control @error('about') is-invalid @enderror" name="about" value="{{ old('about') }}" required autocomplete="about" autofocus></textarea>
            @error('about')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
  </div>
        <div class="field">
          <label>Category </label>
          <select class="ui dropdown" name="cat" required autocomplete="about">
            @foreach($categories as $cat)
             <option value="{{$cat->id}}">{{$cat->title}}</option>
             @endforeach            
          </select>   
        </div>  
         <div class="field">
        <label>Job Tags</label>
       <select multiple="multiple" name="tags[]" class="ui fluid search dropdown" required autocomplete="about">
            @foreach($tag as $tags)
            <option value="{{$tags->id}}">{{$tags->title}}</option>
            @endforeach
          </select> 
      </div>
      <div class="four wide field">
        <label>Should be done in less than</label>
        <input type="number" name="amount" maxlength="6" class="form-control @error('about') is-invalid @enderror" placeholder="Budget" required autocomplete="about" >
         @error('amount')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
      </div>
      <div class="four wide field">
        <label>Deadline(Months)</label>
        <input type="number" name="months" maxlength="2" placeholder="Months" class="form-control @error('about') is-invalid @enderror" required autocomplete="about" >
        @error('months')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
      </div>     
     
  <div class="ui buttons">
  <button class="ui button">Cancel</button>
  <div class="or"></div>
  <button class="ui positive button" type="submit">Next</button>
</div>
</form>
</div>
<br>
<div class="ui inverted vertical footer segment form-page">
  <div class="ui container">
    Travel Match 2015. All Rights Reserved
    <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
    <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>
    <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>
    <br>
    <br>
    <br>
  </div>
</div>       
</body>
<script type="text/javascript">
  $('.special.cards .image').dimmer({
    on: 'hover'
  });  

  $('.ui.dropdown')
  .dropdown();

  $('.ui.search.dropdown')
  .dropdown({
  });

</script>
</html>