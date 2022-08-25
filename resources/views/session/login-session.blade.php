@extends('layouts.user_type.guest')

@section('content')

  <main class="main-content  mt-0" >
    <section>
      <div class="page-header min-vh-75" style="background-image: url('../../assets/img/login-bg.png');background-size: cover; background-repeat: no-repeat;background-attachment: fixed;">
        <div class="container h-100" >
          <div class="row" style="float: right; padding-top:20px;">
            <img src="../../assets/img/logo-balmon-jakarta.png" style="width: 130px;" alt="login-logo-kominfo">
            <img src="../../assets/img/logo-kominfo.png" style="width: 80px;" alt="login-logo-balmon-jakarta">
          </div>
          <div class="row" >
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-4">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome to SIMANTAN</h3>
                  <p class="mb-0" style="font-size: 18px">Sistem Informasi Pemantauan<br></p>
                  <p class="mb-2" style="font-size: 18px">dan Penertiban</p>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="/session">
                    @csrf
                    <label style="font-size: 14px;">NIP</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" style="height: 60px;box-shadow: 0px 4px 100px 5px rgba(209, 209, 209, 0.25);font-size: 16px" name="email" id="email" placeholder="Email" value="admin@softui.com" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label style="font-size: 14px;">Password</label>
                    <div class="mb-4">
                      <input type="password" class="form-control"  style="height: 60px;box-shadow: 0px 4px 100px 5px rgba(209, 209, 209, 0.25);font-size: 16px" name="password" id="password" placeholder="Password" value="secret" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-4 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" style="height: 65px;text-transform: capitalize;font-size:18px;box-shadow: 0px 4px 100px 20px rgba(0, 133, 255, 0.25);border-radius: 10px;">Login</button>
                    </div>
                    <div class="center" style="margin-top: 50px;text-align:center;font-size:18px;">
                      &copy;
                      <a > Balai Monitor SFR Kelas I Jakarta 2022 </a> 
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 d-md-block d-none me-n5 ms-auto p-7">
              <img src="../../assets/img/login-illus.png" style="width: 400px; margin-top:35px;" alt="login-illustration">
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>

@endsection