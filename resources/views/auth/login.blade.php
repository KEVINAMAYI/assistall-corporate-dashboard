
@extends('../corporate-dashboard.layouts.body')
@section('content')

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="text-align:center; padding-top:100px; border-right:grey 1px solid;">
                                <img src="corporate-dashboard/img/kra_logo.png"  style="border-radius:100%;" width="130" height="130" alt="">
                                <p style="font-weight:bold; font-size:22px;">Kenya Revenue Authority (assistALL)</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                               @enderror

                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="...........">
                                        </div>
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                            
                                    </form>
                                    <hr>

                                    @if (Route::has('password.request'))

                                    <div class="text-center">
                                        <a class="small" href="password/reset">Forgot Password?</a>
                                    </div>
                                    @endif

                                    <div class="text-center">
                                        <a class="small" href="/register">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('../corporate-dashboard.layouts.javascript')

@endsection
