@extends('main')
@section('title')
<!-- Title CSS -->
<title>Jotter.id - Account</title>
@endsection
@section('body')

        <!-- Page Title Start -->
        <section class="page-title title-bg10">
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <!-- Page Title End -->

        <!-- Account Area Start -->
        <section class="account-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="account-information">
                            <div class="profile-thumb">
                                <img src="assets/img/account.jpg" alt="account holder image">
                                <h3>Alfin Sugestian</h3>
                                <p>Bergabung sejak Februari 2022</p>
                            </div>

                            <ul>
                                <li>
                                    <a href="#" class="active">
                                        <i class='bx bx-user'></i>
                                        Profil
                                    </a>
                                </li>
                                <li>
                                    <a href="resume.html">
                                        <i class='bx bxs-file-doc'></i>
                                        Daftar Tulisan
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-briefcase'></i>
                                        Applied Job
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-envelope'></i>
                                        Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                        Saved Jobs
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-lock-alt' ></i>
                                        Change Password
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-coffee-togo'></i>
                                        Delete Account
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-log-out'></i>
                                        Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="account-details">
                            <h3>Basic Information</h3>
                            <form class="basic-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Phone</label>
                                            <input type="number" class="form-control" placeholder="Your Phone">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <input type="text" class="form-control" placeholder="Job Title">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="account-btn">Edit</button>
                                        <button type="submit" class="account-btn">Save</button>
                                    </div>
                                </div>
                            </form>

                            <h3>Address</h3>
                            <form class="-candidate-address">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Country</label>
                                            <input type="text" class="form-control" placeholder="Your Country">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your City</label>
                                            <input type="text" class="form-control" placeholder="Your City">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="number" class="form-control" placeholder="City Zip">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Region</label>
                                            <input type="text" class="form-control" placeholder="Your Region">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="account-btn">Edit</button>
                                        <button type="submit" class="account-btn">Save</button>
                                    </div>
                                </div>
                            </form>

                            <h3>Other information</h3>
                            <form class="cadidate-others">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="number" class="form-control" placeholder="Your Age">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Work Experience</label>
                                            <input type="number" class="form-control" placeholder="Work Experience">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Language</label>
                                            <input type="text" class="form-control" placeholder="Language">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Skill</label>
                                            <input type="text" class="form-control" placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="account-btn">Edit</button>
                                        <button type="submit" class="account-btn">Save</button>
                                    </div>
                                </div>
                            </form>

                            <h3>Social links</h3>
                            <form class="candidates-sociak">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" placeholder="www.facebook.com/user">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="number" class="form-control" placeholder="www.twitter.com/user">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Linkedin</label>
                                            <input type="text" class="form-control" placeholder="www.Linkedin.com/user">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Github</label>
                                            <input type="text" class="form-control" placeholder="www.Github.com/user">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="account-btn">Edit</button>
                                        <button type="submit" class="account-btn">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Account Area End -->
@endsection
@section('script')
@endsection