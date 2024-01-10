<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
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
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                     </div>
                     <!-- @if($errors->any())
                        @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                        @endforeach
                        @endif -->
                     <form class="signup" action="/users" method="post">
                        @csrf
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                 placeholder="First Name" name="name" value="{{old('name')}}" >
                              <span style="color:red">@error('name'){{$message}}@enderror</span>
                           </div>
                           <div class="col-sm-6">
                              <input type="text" class="form-control form-control-user" id="exampleLastName" name="lname" value="{{old('lname')}}"
                                 placeholder="Last Name">
                              <span style="color:red">@error('lname'){{$message}}@enderror</span>
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" value="{{old('email')}}"
                              placeholder="Email Address">
                           <span style="color:red">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="password" class="form-control form-control-user"
                                 id="exampleInputPassword" name="password" value="{{old('password')}}" placeholder="Password">
                              <span style="color:red">@error('password'){{$message}}@enderror</span>
                           </div>
                           <div class="col-sm-6">
                              <input type="password" class="form-control form-control-user"
                                 id="password" name="rpass"  value="{{old('rpass')}}" placeholder="Confirm Password">
                              <span style="color:red">@error('rpass'){{$message}}@enderror</span>
                           </div>
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit">Register Account</button>
                        <!-- <a href="{{ url('users') }}" class="btn btn-primary btn-user btn-block">
                           Register Account
                           </a> -->
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
                        <a class="small" href="{{url('forgot')}}">Forgot Password?</a>
                     </div>
                     <div class="text-center">
                        <a class="small" href="{{url('login')}}">Already have an account? Login!</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>