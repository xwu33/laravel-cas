<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css">
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

      <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="{{ URL::to('/logout') }}">Logout</a></li>
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

  <div class="text-center">
    <p>It looks like your account does not have permission to access this site.</p>
                    <p>
                    <a href="{{route('link')}}"><button class="btn btn-primary">Request Access</button><br></a>

  </div>

</div><!-- /.container -->
