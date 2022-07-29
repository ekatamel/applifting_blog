@extends("layouts/main")

@section('content')

<div  class="register">
  <h2 class="register__title">Create a new user</h2>
  <p class="register__text">If you would like to grant access to admin panel to another person, you can register him/her as a user by entering her/his name, email and creating the password. Then user will be allowed to login with these credentials here: www.lesbotoc.cz/login.
  </p>
  
  
  
  
  <form class="register__form" action="{{ route('register') }}" method="post">
  
  
    {{-- @include('events/messages') --}}
    @if (Session::has("success"))
    <div class="events__success">
        {{Session::get("success")}}
    </div>
    @endif 
  
    @csrf
  
    <label class="events__label" for="name">Enter user's name</label>
    <input class="events__input" type="text" name="name" value="{{ old('name') }}">
    @error('name')
    <div class="events__message">{{ $message }}</div >
    @enderror
  
  
    <label class="events__label" for="email">Enter user's email</label>
    <input class="events__input" type="email" name="email" value="{{ old('email') }}">
    @error('email')
    <div class="events__message">{{ $message }}</div >
    @enderror
    
  
    {{-- <label class="events__label" for="role">Enter user's role</label>
  
    <select class="events__input" name="role" id="role" required>
      <option selected disabled="disabled">Select a role</option>
      <option value="admin" {{old('role') == 'admin' ? 'selected' : ""}}>Admin</option>
      <option value="user" {{old('role') == 'user' ? 'selected' : ""}}>User</option>
    </select>
    @error('role')
    <div class="events__message">{{ $message }}</div >
    @enderror --}}
    
  
  
  
  
  
    <label class="events__label" for="password">Enter user's password</label>
    <input class="events__input" type="password" name="password" value="">
    @error('password')
    <div class="events__message">{{ $message }}</div >
    @enderror
  
  
    <label class="events__label" for="password_confirmation">Confirm user's password</label>
    <input class="events__input" type="password" name="password_confirmation" value="">
    @error('password_confirmation')
    <div class="events__message">{{ $message }}</div >
    @enderror
  
  
    <button class="button register__button" type="submit"><i class="fa fa-user-plus" aria-hidden="true"></i>
      <div  class="button__text">Register</div >
    </button>
  
  </form>
  
  
  </div >
  

@endsection