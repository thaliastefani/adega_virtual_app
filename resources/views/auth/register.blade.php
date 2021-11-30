<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/register.css') }}">

  <title>Adega Virtual</title>
</head>
<body>
  <div class="register-area">
    <a href="/">
      <p class="register-titulo">ADEGA VIRTUAL</p>
    </a>
    <p class="register">Crie sua Conta</p>
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div>
        <label for="email" class="register-area-email">{{ __('Email') }}</label>

        <div>
          <input id="email" type="email" name="email" class="register-area-email form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
            <span class="invalid-feedback" role="alert">
              <br><strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
      <div>
        <label for="password" class="register-area-password">{{ __('Senha') }}</label>
        <div>
          <input id="password" type="password" name="password" class="register-area-password form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
      <div>
        <label for="name" class="register-area-name">{{ __('Nome') }}</label>

        <div>
          <input id="name" type="text" name="name" class="register-area-name form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="email" autofocus>

          @error('name')
            <span class="invalid-feedback" role="alert">
              <br><strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
      <div>
        <label for="password-confirm" class="register-area-birthdate">{{ __('Confirmação de Senha') }}</label>
        <div>
          <input id="password-confirm" type="password" class=" register-area-birthdate form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

          @error('password-confirm')
            <span class="invalid-feedback" role="alert">
              <br><strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>
      <div>
        <input type="submit" class="btn-register-area" value="{{ __('cadastrar') }}">
        <a href="/">
            <p class="cancelar">cancelar</p>
        </a>
      </div>
    </form>
  </div>
</body>
</html>