    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Librapp</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Foo</a></li>
            <li><a href="#">Bar</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              @if (Auth::user())
               <a href="#">Welcome, {{ Auth::user()->name }}</a>
              @else
                {!! link_to_action('Auth\AuthController@getLogin', 'Login') !!}
              @endif             
            <li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
