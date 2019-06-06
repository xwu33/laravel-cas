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
    <h1>Do you have a myBama account?</h1>



    <button  onclick="window.location.href='{{ URL::to('/link') }}'" class="btn btn-primary">Yes</button>
  <button onclick="window.location.href='{{ URL::to('/register') }}'" class="btn btn-primary">No</button>
  </div><!--/.row-->
    </div>
</div><!-- /.container -->




<!-- <script type="text/javascript" src="https://laravel.swu.local/resources/js/requestAccess.js"></script> -->

<!-- <p style="color:black;font-size:20px;">
       Do you have a myBama account?
</p>
<a href="{{ URL::to('/link') }}">Yes</a>
<a href="{{ URL::to('/register')}}">No</a> -->
