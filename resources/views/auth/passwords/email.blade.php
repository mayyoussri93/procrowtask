@extends('layouts.app')

@section('content')

    <div class="limiter">
        <div class="container-login100" style=" background-image:url({{asset('img/bg-01.jpg')}}) ;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <span class="login100-form-title p-b-49">
						{{ __('Reset Password') }}
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "E-Mail is reauired">
                        <span class="label-input100">{{ __('E-Mail Address') }}</span>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>



                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

@endsection

