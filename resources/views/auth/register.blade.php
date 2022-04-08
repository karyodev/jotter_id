@extends('main')
@section('title')
    <!-- Title CSS -->
    <title>Jotter.id - Sign Up</title>
@endsection
@section('body')

    <!-- Sign up Section Start -->
    <div class="signup-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                    <form class="signup-form" action="/register" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" required autofocus autocomplete="OFF" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" required autocomplete="OFF" name="username">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" required autocomplete="OFF" name="email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your Password" id="pass_log_id" required autocomplete="OFF" name="password">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password p"></span>
                        </div>

                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" class="form-control" placeholder="Password Confirmation" required autocomplete="OFF"
                                id="konfirmasip" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password pk"></span>
                        </div>

                        <div class="signup-btn text-center">
                            <button type="submit">Sign Up</button>
                        </div>

                        <div class="other-signup text-center">
                            <span>Or sign up with</span>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-google'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>

                        <div class="create-btn text-center">
                            <p>
                                Have an Account?
                                <a href="/login">
                                    Sign In
                                    <i class='bx bx-chevrons-right bx-fade-right'></i>
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->

@endsection
@section('script')
    <script>
        $(document).on('click', '.p', function() {

            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#pass_log_id");
            input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
        });

        $(document).on('click', '.pk', function() {

            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#konfirmasip");
            input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
        });
    </script>
@endsection
