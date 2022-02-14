@extends('main')
@section('title')
<!-- Title CSS -->
<title>Jotter.id - Create Post</title>
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
                                <small><i>Bergabung sejak <b>Februari 2022</b></i></small>
                            </div>
                            <div class="profile-thumb">
                                <button class="btn btn-dark"><i class="bx bx-edit mr-2"></i>Buat Tulisan</button>
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
                                        <i class='bx bx-file'></i>
                                        Daftar Tulisan
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxs-star'></i>
                                        Berlangganan
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-tag'></i>
                                        Tags
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
                            <form class="basic-info">
                                <h3>Basic Information</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" placeholder="Cth: Jhon Doe">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Cth: jhondoe_">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Cth: jhondoe@gmail.com">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. Telpon</label>
                                            <input type="number" class="form-control" placeholder="Cth: 08974879215">
                                        </div>
                                    </div>
                                </div>
                                
                                <h3 class="mt-3">Social Links</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" placeholder="Cth: Alfin Sugestian">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="number" class="form-control" placeholder="Cth: helloalfin_">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Linkedin</label>
                                            <input type="text" class="form-control" placeholder="Cth: Alfin Sugestian">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" class="form-control" placeholder="Cth: jhon_doe">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="account-btn">Simpan</button>
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