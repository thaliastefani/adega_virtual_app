<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/login.css') }}">

  <title>Adega Virtual</title>
</head>
<body>
  <div class="login-area">
    <a href="/">
      <p class="login-titulo">ADEGA VIRTUAL</p>
    </a>
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div>
        <label for="email" class="login-area-email">{{ __('Email') }}</label>

        <div>
          <input id="email" type="email" name="email" class="login-area-email form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
            <span class="invalid-feedback" role="alert">
              <br><strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
      <div>
        <label for="password" class="login-area-password">{{ __('Senha') }}</label>
        <div>
          <input id="password" type="password" name="password" class="login-area-password form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

              <!-- <div class="form-group row">
                  <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                          </label>
                      </div>
                  </div>
              </div> -->
                      <!-- <button type="submit" class="btn btn-primary">
                          {{ __('Login') }}
                      </button> -->
      <div>
        <input type="submit" class="btn-login-area" value="{{ __('login') }}">
        <a href="http://adegavirtual/register">
            <p class="criar-conta">Criar Conta</p>
        </a>

                      <!-- @if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      @endif -->
      </div>
    </form>
  </div>
</body>
</html>