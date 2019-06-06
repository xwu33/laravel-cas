<!-- <script src="{{ asset('js/app.js') }}"></script>
require('./requestAccess'); -->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css">
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

      <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
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

<!-- http://laravel.swu.local/user -->

<p>
<p>
<div id="mybamaRequestForm" class="panel panel-default">
<div class="panel-heading">Request Access</div>
<div class="panel-body">
<form role="form" method="GET" action="https://login.ua.edu/cas/login">
  <input type="hidden" name="service" id="casService" value="http://laravel.swu.local/user"  />
  <div class="row">
    <div class="col-sm-4">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="account_type" class="sr-only">Account Type</label>
          <select class="form-control" name="account_type" id="account_type_mybama" required autofocus>
            <option disabled selected value="">Select Account Type</option>
            @foreach ($roles as $role)
              <option value="{{ $role->id }}"
                @if(old('account_type') == $role->id)
                  selected="selected"
                @endif
                >{{ $role->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="col-sm-12">
          <div class="form-group">
            <button type="submit" class="btn btn-primary col-xs-12">
              Request myBama Link
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
  </div>
