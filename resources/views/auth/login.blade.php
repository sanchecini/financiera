@extends('layouts.login')
@section('content')

    
    
 <form id="formlogin" autocomplete="off" action="{{ route('login') }}" method="POST" class="pt-3 login100-form validate-form p-b-33 p-t-5">
 @csrf
        <div class="wrap-input100 validate-input" data-validate = "Ingresar usuario">
            <input class="input100" type="text" name="username" placeholder="Usuario" autocomplete="off" required>
            @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Ingresar contraseña">
            <input class="input100" type="password" name="password" placeholder="Contraseña" autocomplete="off" required>
            @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror   
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
        </div>

        <div class="container-login100-form-btn m-t-32">
        <button type="submit" name="" class="login100-form-btn">
                Entrar
            </button>
        </div>

</form>

    
    
      
  </form>

  

  <div class="my-3">
      <a href="{{ route('register') }}" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" style="background-color:#BA3F50;" > Registrar usuario </a>
    </div>
@endsection
