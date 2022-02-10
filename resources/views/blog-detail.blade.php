@extends('main')
@section('title')
<!-- Title CSS -->
<title>Jotter.id - Blog Detail</title>
@endsection
@section('body')

<!-- Blog Details Section Start -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="blog-dedails-text text-center">
                    <div class="blog-details-img text-center">
                        <h3 class="post-title">Tips for Making Your Resume Stand Out</h3>
                        <div class="blog-meta">
                            <ul>
                                <li class="breadcrumb-item active" aria-current="page">Olahraga</li>
                                <li class="breadcrumb-item">17 Agustus 2020</li>
                                <li class="breadcrumb-item">Free Article</li>
                            </ul>
                            <p>
                                <h4>Oleh: Michelle Obama</h4>
                            </p>
                        </div>
                        <img src="assets/img/blog/blog-details.jpg" alt="blog details image">
                    </div>

                    

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <img src="assets/img/blog/blog-details2.jpg" class="details-inner-img" alt="blog details image">
                        </div>
                        <div class="col-sm-6">
                            <img src="assets/img/blog/blog-details3.jpg" class="details-inner-img" alt="blog details image">
                        </div>
                    </div>

                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>

                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>


                    <div class="details-tag">
                        <ul>
                            <li>Share:</li>
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                            </li>
                        </ul>
                    </div>


                    <form class="comment-form">
                        <h3>Leave Comment</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Your Name" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Your Name">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea class="form-control comment-box" cols="30" rows="6" placeholder="Your Comment"></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="comment-btn">
                            Post a Comment
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
@endsection
@section('script')
@endsection