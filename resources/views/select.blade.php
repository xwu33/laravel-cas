
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="status"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! {{cas()->user()}}
                    <a href="{{ URL::to('/logout') }}">Logout</a>

                </div>
            </div>
        </div>
    </div>
</div>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css">
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

  <div class="text-center">
    <h1>Thanks for logging in!</h1>

    <p>You are logged in! {{cas()->user()}} </p>
    <a href="{{ URL::to('/logout') }}"><button class="btn btn-primary">Logout</button></a>
  </div>

</div><!-- /.container -->
