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

   <div class="item">
    <div class="ui icon input">
      <input type="text" placeholder="Search...">
      <i class="search icon"></i>
    </div>
  </div>
  <div class="right menu">
   
  <a class="item" href="{{route('freelancer_profile')}}">
    My Profile
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
      <div class="ui vertical menu">
        <div class="item">
          <div class="header">Products</div>
          <div class="menu">
            <a class="item">Enterprise</a>
            <a class="item">Consumer</a>
          </div>
        </div>
        <div class="item">
          <div class="header">CMS Solutions</div>
          <div class="menu">
            <a class="item">Rails</a>
            <a class="item">Python</a>
            <a class="item">PHP</a>
          </div>
        </div>
        <div class="item">
          <div class="header">Hosting</div>
          <div class="menu">
            <a class="item">Shared</a>
            <a class="item">Dedicated</a>
          </div>
        </div>
        <div class="item">
          <div class="header">Support</div>
          <div class="menu">
            <a class="item">E-mail Support</a>
            <a class="item">FAQs</a>
          </div>
        </div>
      </div>
    </div>
    <div class="ten wide column">
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>
      <div class="ui raised container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <br>
        <br>
      </div>

    </div>

    <div class="three wide column">
      
    </div>
  </div>
</div>
  <br>
  <br>
  <div class="ui inverted vertical footer segment form-page">
    <div class="ui fluid container">
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
</html>