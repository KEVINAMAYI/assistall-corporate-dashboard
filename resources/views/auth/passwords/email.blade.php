
@extends('corporate-dashboard.layouts.body')
@section('content')

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body pt-3 pl-3 pr-3">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                       @endif
                        <div class="row">
                             <div class="col-lg-6 d-none d-lg-block" style="text-align:center; padding-top:100px; border-right:grey 1px solid;">
                                <img src="corporate-dashboard/img/kra_logo.png"  style="border-radius:100%;" width="130" height="130" alt="">
                                <p style="font-weight:bold; font-size:22px;">Kenya Revenue Authority (assistALL)</p>
                             </div>                            
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p>
                                    </div>
                                    <form method="POST" action="{{ route('password.email') }}">
                                         @csrf
                                        <div class="form-group">
                                            <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('corporate-dashboard.layouts.javascript')
    
@endsection

