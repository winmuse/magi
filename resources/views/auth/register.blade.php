@extends('layouts.app')
@section('container')
{{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <svg class="mb-4" width="40" height="32" role="img" aria-label="Bootstrap">
        <use xlink:href="#bootstrap">
            <symbol id="bootstrap" viewBox="0 0 118 94">
                <title>Bootstrap</title>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
            </symbol>
        </use>
    </svg>
    <h1 class="h3 mb-3 fw-normal">{{ __('Please sign in') }}</h1>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required autofocus>
        <label for="name">{{ __('Name') }}</label>
    </div>
    <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}"
               placeholder="name@example.com" required autofocus>
        <label for="email">{{ __('Email') }}</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password"
               required autocomplete="new-password">
        <label for="password">{{ __('Password') }}</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
               required>
        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
    </div>
    <div class="form-floating">
        <a class="underline text-dark" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
    </div>
    <br />
    <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Register') }}</button>
</form> --}}
<div class="col-lg-12 py-5">
    <div class="row align-items-center">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <section class="content">
                <span><h4 class=text-center>会員情報入力</h4></span>
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary mb-4" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Akio" required autofocus>
                        <label for="floatingInput">ニックネーム</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required autofocus>
                        <label for="floatingInput">メールアドレス</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="floatingPassword">パスワード</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
                        <label for="floatingPassword">パスワード(確認用)</label>
                    </div>
                    <div class="text-center mb-3">
                        登録した時点でmagiの
                        <a href="javascript:void(0);">
                            利用規約
                        </a>
                        と
                        <a href="javascript:void(0);">
                            プライバシーポリシー
                        </a>
                        に同意したものとします。
                    </div>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <button class="w-100 btn btn-lg btn-dark" type="submit">次へ進む</button>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </form>
            </section>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
@endsection
