<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</head>
<body>
  <div class="ui inverted top fixed menu">

   <div class="item">
    <div class="ui icon input">
      <input type="text" placeholder="Search...">
      <i class="search icon"></i>
    </div>
  </div>
  <div class="right menu">
 <a class="item">
    {{ Auth::user()->name }}
  </a>
  <a class="item" href="{{ route('client_postjob')}}">
    Post Job
  </a>
  <a class="item" href="{{ route('client_request')}}">
    Requests
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



<div class="ui fluid container">
  <img class="ui fluid image" src="/desk.jpg" style=" height: 600px;">
</div>



<br>

<div class="ui grey inverted segment">
  <div class="ui center aligned huge header">
    Popular
  </div>
</div>

<h4 class="ui horizontal divider header">
 <div class="ui large header">Content Writers</div>
</h4>
<br>


<div class="ui four cards" style="padding-left: 20px; padding-right: 20px;">
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>  
</div>

<br>

<div class="ui grey inverted segment">
  <div class="ui center aligned huge header">
    Popular
  </div>
</div>

<h4 class="ui horizontal divider header">
 <div class="ui large header">Web Development</div>
</h4>
<br>


<div class="ui four cards" style="padding-left: 20px; padding-right: 20px;">
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>  
</div>

<br>

<div class="ui grey inverted segment">
  <div class="ui center aligned huge header">
    Popular
  </div>
</div>

<h4 class="ui horizontal divider header">
 <div class="ui large header">Photography</div>
</h4>
<br>


<div class="ui four cards" style="padding-left: 20px; padding-right: 20px;">
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>
  <div class="card">
    <div class="blurring dimmable image">
      <div class="ui dimmer">
        <div class="content">
          <div class="center">
            <div class="ui inverted button">Add Friend</div>
          </div>
        </div>
      </div>
      <img src="/images/avatar/large/elliot.jpg">
    </div>
    <div class="content">
      <a class="header">Team Fu</a>
      <div class="meta">
        <span class="date">Created in Sep 2014</span>
      </div>
    </div>
    <div class="extra content">
      <a>
        <i class="users icon"></i>
        2 Members
      </a>
    </div>
  </div>  
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
</script>
</html>