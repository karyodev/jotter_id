@extends('main')
@section('title')
    <!-- Title CSS -->
    <title>Jotter.id - Sign In</title>
@endsection
@section('body')

    <!-- Sign In Section Start -->
    <div class="signin-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                    <form class="signin-form" method="POST" action="/login">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" autocomplete="OFF"
                                value="{{ old('email') }}" autofocus required name="email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your Password" required
                                name="password" id="pass_log_id">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                        </div>

                        <div class="signin-btn text-center">
                            <button type="submit">Sign In</button>
                        </div>

                        <div class="other-signin text-center">
                            <span>Or sign in with</span>
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
                            <p>Not have an account?
                                <a href="/register">
                                    Create an account
                                    <i class='bx bx-chevrons-right bx-fade-right'></i>
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In Section End -->

@endsection
@section('script')

    <script>
        $(document).on('click', '.toggle-password', function() {

            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#pass_log_id");
            input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
        });
    </script>
@endsection
