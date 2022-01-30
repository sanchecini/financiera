@extends('layouts.register')
@section('content')

<form autocomplete="off" class="pt-3" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
      <label for="username">Nombre completo</label>
      <div class="input-group">
        <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="fa fa-user" style="color:#254EDB;"></i>
          </span>
        </div>
        <input id="username" type="text" name="name" class="form-control form-control-lg border-left-0 @error('name') is-invalid @enderror" id="name" placeholder="Nombre completo" required>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>

    <div class="form-group">
      <label for="username">Nombre de usuario</label>
      <div class="input-group">
        <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="fa fa-user" style="color:#254EDB;"></i>
          </span>
        </div>
        <input id="username" type="text" name="username" class="form-control form-control-lg border-left-0 @error('username') is-invalid @enderror" id="username" placeholder="Usuario" required>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
    </div>


    <div class="form-group">
      <label for="password">Contraseña</label>
      <div class="input-group">
        <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="fa fa-lock" style="color:#254EDB;"></i>
          </span>
        </div>
        <input id="password" type="password" name="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" id="password" placeholder="Password" required>   
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror                  
      </div>
    </div>

    <div class="form-group">
      <label for="password">Confirma contraseña</label>
      <div class="input-group">
        <div class="input-group-prepend bg-transparent">
          <span class="input-group-text bg-transparent border-right-0">
            <i class="fa fa-lock" style="color:#254EDB;"></i>
          </span>
        </div>
        <input id="password-confirm" type="password" name="password_confirmation" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" id="password" placeholder="Confirmar Password" required utocomplete="new-password">   
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror                  
      </div>
    </div>

    
    

    <div class="my-3">
      <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" style="background-color:#254EDB;" > Registrar </button>
    </div>

    
    
      
  </form>

  

  <div class="my-3">
      <a href="{{ route('login') }}" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" style="background-color:#BA3F50;" > Cancelar </a>
    </div>
@endsection
