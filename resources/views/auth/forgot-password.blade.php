@extends('layouts.app')
@section('container')
{{-- <form method="POST" action="{{ route('password.email') }}">
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
    <h1 class="h3 mb-3 fw-normal">{{ __('Forgot Password') }}</h1>

    <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}"
               placeholder="name@example.com" required autofocus>
        <label for="email">{{ __('Email') }}</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Email Password Reset Link') }}</button>
</form> --}}
<div class="col-lg-12 py-5">
    <div class="row align-items-center">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <section class="content">
                <span><h4 class=text-center>パスワードをリセットし、仮パスワードを発行します。</h4></span>
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary mb-4" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required autofocus>
                        <label for="floatingInput">メールアドレス</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <button class="w-100 btn btn-lg btn-dark" type="submit">パスワードの再設定を行う</button>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </form>
                <div class="text-center">
                    ご登録のメールアドレスをお忘れのお客様はお問合せフォームより運営チームへご連絡ください
                    * 場合によってはアカウントが復旧できないことがございます。
                </div>
            </section>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
@endsection
