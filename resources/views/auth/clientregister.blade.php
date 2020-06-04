<html>
<head>
  <title></title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</head>
<body>
  <div class="ui raised segment">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
  </div>
  <br>
  <br>
  <div class="ui raised very padded text container segment">
    <div class="ui placeholder segment">
      <div class="computer only column very relaxed stackable grid">
        
        <form class="ui form" method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}}">
          @csrf
          <h4 class="ui dividing header">Registration Form</h4>
          <div class="required field">
            <label>First Name</label>
            <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="required field">
            <label>Last Name</label>
            <input id="lname" type="text" class="form-control @error('name') is-invalid @enderror" name="lname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="required field">
            <label>Email ID</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="required field">
            <label>Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div class="required field">
            <label>Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
          <button class="ui primary button" type="submit" >
            Sign Up
          </button>
          <p>Already have an account? <a href="{{route('client_login')}}">Log in here</a></p>
           @csrf
        </form>

      </div>
    </div>
  </div>
  <br>
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
  <script type="text/javascript">$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});</script>       
</body>
</html>