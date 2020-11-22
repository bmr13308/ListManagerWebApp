
@extends('layouts.app', ['title' => 'Login'])

@section('content')
    <div class="main__container">
    <form action="{{route('login')}}" id="login-form" class="login-form" method="POST">
        @csrf
       
          <p>Please Sign In</p>
          <label class="form__element form__username-label" for="username"><b>User name:</b></label>
          <input class="form__element form__username" type="text" name="username">
          @error('username')
          <p class="error-message">{{$message}}
          </p>
          @enderror
          <label class="form__element form__password-label" for="password"><b>Password:</b></label>
          <input class="form__element form__password" type="password" name="password">
          @error('password')
          <p class="error-message">{{$message}}
          </p>
          @enderror
        
    
        <input class="form__element form__submit" type="submit" value="ENTER">
      </form>
      <div class="flex-center form__message">
        @if(session('status'))
        <p id="login-message">
          {!!session('status')!!}
        </p>
        @endif
      </div>

    </div>

@endsection



  