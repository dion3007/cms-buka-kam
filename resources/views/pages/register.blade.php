<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
  <meta name="author" content="Lukasz Holeczek">
  <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
  <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

  <title>CoreUI Bootstrap 4 Admin Template</title>

  <!-- Icons -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Main styles for this application -->

  <!-- Styles required by this views -->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body class="app flex-row overhidden">
    <div class="row col-md-12">
        <div class="col-md-12">
            <div class="card-group custom-log-view">
                <div class="card p-4 text-white bg-light">
                    <div class="card-body custom">
                      <div class="div_logo">
                        <img class="bg-logo" src="{{url('img/bg/logo_transparent.png')}}">
                      </div>
                        <img class="bg-img" src="{{url('img/bg/bg1.jpg')}}">
                    </div>
                </div>
                <div class="card bg-white py-5 d-md-down-none align-items-center" style="width:44%">
                    <div class="card-body w-custom-20 mt-custom-4">
                        <div>
                        <h1 class="text-center">b u k a k a m a r</h1>
                        <p class="text-muted text-center">Please login your account.</p>
                        <form method="POST" action="{{ url('newUser') }}">
                        {{ csrf_field() }} 
                        <div class="input-group mb-3">
                          <span class="input-group-addon"><i class="icon-user"></i></span>
                          <input type="text" name="hotelname" class="form-control" placeholder="Hotel name">
                        </div>

                        <div class="input-group mb-3">
                          <span class="input-group-addon"><i class="icon-user"></i></span>
                          <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                        </div>              

                        <div class="input-group mb-3">
                          <span class="input-group-addon"><i class="icon-user"></i></span>
                          <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                        </div>

                        <div class="input-group mb-3">
                          <span class="input-group-addon">@</span>
                          <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="input-group mb-3">
                          <span class="input-group-addon"><i class="icon-lock"></i></span>
                          <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="input-group mb-3">
                          <span class="input-group-addon"><i class="icon-lock"></i></span>
                          <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-block btn-warning">Create Account</button>
                      </form>

                          <a href="/login" class="btn btn-block btn-secondary mt-2">You have already an account? Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
  <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

</body>
</html>