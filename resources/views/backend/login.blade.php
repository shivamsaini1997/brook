@include('backend.layouts.head')

<style>
    footer{
        display: none;
    }
</style>

<body class="hold-transition login-page">
    <div class="login-box">


        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Admin Login</p>

                <form action="{{route('admin-login')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger mb-2">
                        @error('email')
                                {{$message}}
                            @enderror
                        </span>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger mb-2">
                        @error('password')
                                {{$message}}
                            @enderror
                        </span>
                    <div class="row">


                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>
                </form>

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{route('admin-register')}}" class="text-center">Register</a>
                </p>
            </div>

        </div>
    </div>

</body>


@include('backend.layouts.footer')
