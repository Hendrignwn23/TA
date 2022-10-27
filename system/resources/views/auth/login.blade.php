<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public')}}/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url('public')}}/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public')}}/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{url('public')}}/login/css/style.css">

    <title>Login Admin</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('{{url('public')}}/login/images/sdn05.jpeg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Login to <strong>ADMIN</strong></h3>
              @if (session('status'))
              <div class="mb-4 font-medium text-sm text-green-600">
                   <p style="color: #27AE60">Password berhasil diperbaharui</p>
              </div>
              @endif
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="{{url('admin/login')}}" method="post">
                @csrf
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="email" class="form-control" placeholder="your-email@gmail.com" name="email" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  
                  <span class="ml-auto"><a href="/forgot-password" class="forgot-pass">Lupa Password</a></span> 
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{url('public')}}/login/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public')}}/login/js/popper.min.js"></script>
    <script src="{{url('public')}}/login/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/login/js/main.js"></script>
  </body>
</html>