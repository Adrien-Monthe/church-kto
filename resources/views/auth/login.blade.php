@extends('backend.layouts.auth-layout')
@section('page-title', __('auth-login.page-title'))
@section('auth-content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="{{ route('home' ) }}" class="logo d-flex align-items-center w-auto">
                            <img src="{{ asset('frontend/images/Logo/ln_logo_4.png')}}" alt="">
                            <span class="d-none d-lg-block"> Enfance KTO DLQ</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">@lang('auth-login.login-into-account')</h5>
                                <p class="text-center small">@lang('auth-login.enter-email-password')</p>
                            </div>

                            <form class="row g-3 needs-validation" novalidate method="POST"
                                  action="{{ route('login') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">{{ __('Email') }}</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input name="email" class="form-control" id="yourEmail" required type="email"
                                               :value="old('email')" autofocus>
                                        <div class="invalid-feedback">@lang('auth-login.enter-email').</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword"
                                           class="form-label">@lang('auth-login.password-label')</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword"
                                           required autocomplete="current-password">
                                    <div class="invalid-feedback">@lang('auth-login.enter-password')</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" value="true"
                                               id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button style="background-color: #c15884; border-color: #c10884"
                                            class="btn btn-primary  btn-primary-custom w-100" type="submit">Login
                                    </button>
                                </div>
                                {{--                                <div class="col-12">--}}
                                {{--                                    <p class="small mb-0">Don't have account? <a href="{{ route('register',) }}">Create an account</a></p>--}}
                                {{--                                </div>--}}
                            </form>

                        </div>
                    </div>

                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                        Conçu par <a href="https://bootstrapmade.com/">GENZIS</a>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection()
