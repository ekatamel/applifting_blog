@extends("layouts/main") @section('content')

<div class="login">
    <h2 class="login__title">Log In</h2>

    <form class="login__form" action="{{ route('login') }}" method="post">
        @if (Session::has("success"))
        <div class="login__success">
            {{Session::get("success")}}
        </div>
        @endif @csrf

        <label class="login__label" for="email">Email</label>

        <input
            class="login__input"
            type="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="me@example.com"
        />
        @error('email')
        <div class="message__error">{{ $message }}</div>
        @enderror

        <label class="login__label" for="password">Password</label>

        <input class="login__input" type="password" name="password" value="" />
        @error('password')
        <div class="message__error">{{ $message }}</div>
        @enderror

        <button class="login__button" type="submit">Log In</button>
    </form>
</div>

@endsection
