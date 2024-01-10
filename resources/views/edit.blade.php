<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> -->
    <!-- <h1>Flat Responsive Form</h1> -->
<!-- <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
    <form action="/edit" method ="POST" class="wpcf7-form" novalidate="novalidate">
        @csrf

        <div style="display: none;">
            <input type="hidden" name="_wpcf7" value="156">
            <input type="hidden" name="_wpcf7_version" value="3.7.2">
            <input type="hidden" name="_wpcf7_locale" value="en_US">
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f156-p143-o1">
            <input type="hidden" name="_wpnonce" value="d1da331d93">
        </div>
        <p>
        <input type="hidden" name="id" value="{{ $data['id'] }}">
           <span class="wpcf7-form-control-wrap Name">
             <input type="text" name="name" value="{{$data['name']}}" size="20" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter your Name">
          </span>
          <span class="wpcf7-form-control-wrap Name">
             <input type="text" name="lname" value="{{$data['lname']}}" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=" Enter yor Fname">
          </span>
          <span class="wpcf7-form-control-wrap Email">
            <input type="email" name="email" value="{{$data['email']}}" size="40" class="emailinput wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder=" Enter your Email">
          </span>
          <span class="wpcf7-form-control-wrap Email">
            <input type="text" name="password" value="{{$data['password']}}" size="40" class="emailinput wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter your password">
          </span>
          <span class="wpcf7-form-control-wrap Email">
            <input type="text" name="rpass" value="{{$data['rpass']}}" size="40" class="emailinput wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter your rpass">
          </span>
          
          
          <input type="submit" value="update" class="wpcf7-form-control wpcf7-submit btn">
          
      </p>
      <div class="wpcf7-response-output wpcf7-display-none">
      </div>
  </form>
</div>
</body>
</html> -->







<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit an Account!</h1>
                            </div>
                            <form action="/edit" method ="POST" class="wpcf7-form" novalidate="novalidate">
                                @csrf

                                <input type="hidden" name="id" value="{{ $data['id'] }}">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name" value="{{ $data['name'] }}"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="lname" value="{{ $data['lname'] }}"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" value="{{ $data['email'] }}"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword"  name ="password" value="{{ $data['password'] }}"placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleRepeatPassword" name="rpass"  value="{{ $data['rpass'] }}"placeholder="Repeat Password">
                                    </div>
                                </div>
                                <!-- <a href="{{url('users')}}" class="btn btn-primary btn-user btn-block" type="submit">
                                              Update</a> -->

                                              <button class="btn btn-primary btn-user btn-block" type="submit">Update Account</button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>