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

    <title>Lupa Password - Admin</title>
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
              <h3>Lupa Password ?</h3>
              <p>Masukkan email yang sudah anda daftarkan disini</p>
              
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="/reset-password" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{request()->route('token')}}">
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="your-email@gmail.com" id="username" value="{{request()->email}}">
                </div>
                <div class="form-group first">
                  <label for="username">Password Baru</label>
                  <input type="password" name="password" class="form-control" id="username">
                </div>
                <div class="form-group first">
                  <label for="username">Konfirmasi Password Baru</label>
                  <input type="password" name="password_confirmation" class="form-control" id="username">
                </div>
                

                <button type="submit" class="btn btn-block btn-primary"> Simpan Password</button>

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