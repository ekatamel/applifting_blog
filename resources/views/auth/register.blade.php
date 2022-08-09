@extends("layouts/main") @section('content')

<div class="register">
    <h2 class="register__title">Register</h2>

    <form class="register__form" action="{{ route('register') }}" method="post">
        @if (Session::has("success"))
        <div class="register__success">
            {{Session::get("success")}}
        </div>
        @endif @csrf

        <label class="register__label" for="name">Name</label>
        <input
            class="register__input"
            type="text"
            name="name"
            value="{{ old('name') }}"
        />
        @error('name')
        <div class="message__error">{{ $message }}</div>
        @enderror

        <label class="register__label" for="email">Email</label>
        <input
            class="register__input"
            type="email"
            name="email"
            value="{{ old('email') }}"
        />
        @error('email')
        <div class="message__error">{{ $message }}</div>
        @enderror

        <label class="register__label" for="password">Password</label>
        <input
            class="register__input"
            type="password"
            name="password"
            value=""
        />
        @error('password')
        <div class="message__error">{{ $message }}</div>
        @enderror

        <label class="register__label" for="password_confirmation"
            >Confirm the password</label
        >
        <input
            class="register__input"
            type="password"
            name="password_confirmation"
            value=""
        />
        @error('password_confirmation')
        <div class="message__error">{{ $message }}</div>
        @enderror

        <button class="button register__button" type="submit">
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            <div class="button__text">Register</div>
        </button>
    </form>
</div>

@endsection
