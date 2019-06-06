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
    <h1>Request a local account</h1>


    <div class="content">
      <div>
        <!-- <select name="role_id" onchange="submitForm();" class="form-control"> -->
          <select name="" onchange="submitForm();" class="form-control">
          <option disabled selected value="">Select Account Type</option>
          <option>Admin</option>
          <option>Faculty</option>
          <option>Student</option>
        </select>
      </div>
      <p></p>
      <form id="captcha-form" method="POST" action="{{ route('register') }}">
                              @csrf

                              <div class="form-group row">
                                  <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                                  <div class="col-md-6">
                                      <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                                      @if ($errors->has('username'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('username') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                  <div class="col-md-6">
                                      <input id="firstname" type="firstname" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required>

                                      @if ($errors->has('firstname'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('firstname') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                  <div class="col-md-6">
                                      <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                      @if ($errors->has('lastname'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('lastname') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                  </div>
                              </div>

                              <div class="form-group">
        <!-- <label for="captcha">Captcha</label> -->
                                         {!! NoCaptcha::renderJs() !!}
                                         {!! NoCaptcha::display() !!}
                                     <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                              </div>


                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Request Access') }}
                                      </button>
                                  </div>
                              </div>
                          </form>

    <!-- <script type="text/javascript">
    function submitForm(){
      var form = document.getElementByld("myform");
      form.submit();
    }
    </script> -->

  </div>
  </div>

</div><!-- /.container -->
