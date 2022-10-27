@extends('Client.template.base')
@section('content')


        <!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container"></div>
        </section><!-- End Counts Section -->

        <main>
            <div class="container">
              <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                      <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                          <img src="{{url('public')}}/assets/img/logo.png" alt="">
                        </a>
                      </div><!-- End Logo -->
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            <p class="text-center small">Enter your E-mail & password to login</p>
                            @include('Client.template.utils.notif')
                          </div>
                          <form action="{{url('Client/login')}}" method="post" class="row g-3 needs-validation" >
                            @csrf
                            <div class="col-12">
                              <label class="form-label">E-mail</label>
                              <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="email" name="email" class="form-control" required>
                                <div class="invalid-feedback">Please enter your E-mail.</div>
                              </div>
                            </div>
        
                            <div class="col-12">
                              <label class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" required>
                              <div class="invalid-feedback">Please enter your password!</div>
                            </div>

                            <div class="col-12">
                              <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                          </form>
        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
                </div>
              </main>
              <!-- End #main --> 
@endsection