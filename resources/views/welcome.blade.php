<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div><!--/.nav-collapse -->
</div>

<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
  </div>

</div>


<div class="container">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css">
  <div class="text-center">
    <p></p>
    <h1>Welcome to our test app</h1>

  <div class="row">
    <div class="col-md-6">
      <h2>Request Access</h2>
      <p>If you do not have an account, you can request access here </p>
      <a href="{{ URL::to('/access') }}"><button class="btn btn-primary">Request Access</button><br></a>
      (this will link to account creation screen for myBama OR local users)
    </div>
    <div class="col-md-6">
       <h2>Login</h2>
      <p>If you have a myBama account, please login using your myBama username and password here</p>
      <a href="{{ URL::to('/user') }}"><button class="btn btn-primary">myBama Login</button><br></a>
      <p>
      <a href="{{ URL::to('/login') }}"><button class="btn btn-inverse">Don't have a myBama account?</button><br></a>
    </div>

    <!-- <div class="flex-center position-ref full-height">
       @if (Route::has('login'))
           <div class="top-right links">
               @auth
                   <a href="{{ url('/home') }}">Home</a>
               @else
                   <a href="{{ route('login') }}">Login</a>

                   @if (Route::has('register'))
                       <a href="{{ route('register') }}">Register</a>
                   @endif
               @endauth
           </div>
       @endif -->


   </div>

  </div><!--/.row-->
    </div>
</div><!-- /.container -->
