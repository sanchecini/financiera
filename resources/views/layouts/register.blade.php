<!DOCTYPE html>
<html lang="en">



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registro de usuario</title>
  <!-- plugins:css -->
  {!! Html::style('ansan/register/vendors/iconfonts/font-awesome/css/all.min.css') !!}
  {!! Html::style('ansan/register/vendors/css/vendor.bundle.base.css') !!}
  {!! Html::style('ansan/register/vendors/css/vendor.bundle.addons.css') !!}
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  {!! Html::style('ansan/register/css/style.css') !!}
  <!-- endinject -->
  <link rel="shortcut icon" href="" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{asset('ansan/images/logo.png')}}" alt="">
              </div>
              <h4>Registrar Usuario</h4>
              

              @yield('content')


            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
           
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  {!! Html::script('ansan/register/vendors/js/vendor.bundle.base.js') !!}
  {!! Html::script('ansan/register/vendors/js/vendor.bundle.addons.js') !!}
  <!-- endinject -->
  <!-- inject:js -->
  {!! Html::script('ansan/register/js/off-canvas.js') !!}
  {!! Html::script('ansan/register/js/hoverable-collapse.js') !!}
  {!! Html::script('ansan/register/js/misc.js') !!}
  {!! Html::script('ansan/register/js/settings.js') !!}
  {!! Html::script('ansan/register/js/todolist.js') !!}
  <!-- endinject -->
</body>
</html>
