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
                @include('sidebar-account')
                    <div class="col-md-8">
                        <div class="account-details">
                            <form class="basic-info" action="/account" method="POST">
                                @csrf
                                <h3>Basic Information</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" placeholder="Cth: Jhon Doe" name="nama" required value="{{ $user->nama }}" autocomplete="OFF">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Cth: jhondoe_" name="username" required value="{{ $user->username }}" autocomplete="OFF">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Cth: jhondoe@gmail.com" name="email" required value="{{ $user->email }}" autocomplete="OFF">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. Telpon</label>
                                            <input type="text" class="form-control" placeholder="Cth: 08974879215" name="telp" required value="{{ $user->telp }}" autocomplete="OFF">
                                        </div>
                                    </div>
                                </div>
                                <h3 class="mt-3">Social Links</h3>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" placeholder="Cth: Alfin Sugestian" autocomplete="OFF" name="facebook" value="@if ($facebook) {{ $facebook->username_acc }}@endif">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" placeholder="Cth: helloalfin_" name="twitter" autocomplete="OFF" value="@if ($twitter) {{ $twitter->username_acc }} @endif">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Linkedin</label>
                                            <input type="text" class="form-control" placeholder="Cth: Alfin Sugestian" name="linkedin" autocomplete="OFF" value="@if($linkedin){{ $linkedin->username_acc }} @endif">
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