@include('backend.layouts.head')
<style>   footer{
    display: none;
}</style>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register</p>
                <form action="{{route('admin-register')}}" id="" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="full_name" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                    </div>
                    <span class="text-danger mb-2">
                        @error('full_name')
                            {{$message}}
                        @enderror
                    </span>
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
                        <input type="password" class="form-control password" name="password" placeholder="Password">
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
                    <div class="input-group mb-3">
                        <input type="password" class="form-control password-confir" name="password-confir" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger mb-2">
                    @error('password-confir')
                            {{$message}}
                        @enderror
                    </span>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>

                    </div>
                </form>
                <br>

                <a href="{{route('admin-login')}}" class="text-center">I already have a membership</a>
            </div>

        </div>
    </div>


    @include('backend.layouts.footer')

    <script>
        $(document).ready(function () {
            $("#registerForm").validate({
                rules: {
                    full_name: {
                        required: true,
                        maxlength: 255
                    },
                    email: {
                        required: true,
                        email: true,
                        maxlength: 255
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    password_confirmation: {
                        required: true,
                        minlength: 8,
                        equalTo: "[name='password']" // Ensure passwords match
                    }
                },
                messages: {
                    full_name: {
                        required: "Please enter your full name",
                        maxlength: "Your name must be less than 255 characters long"
                    },
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address",
                        maxlength: "Your email must be less than 255 characters long"
                    },
                    password: {
                        required: "Please enter a password",
                        minlength: "Your password must be at least 8 characters long"
                    },
                    password_confirmation: {
                        required: "Please confirm your password",
                        minlength: "Your password must be at least 8 characters long",
                        equalTo: "Passwords do not match"
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.input-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
