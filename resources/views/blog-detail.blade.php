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
                        @php
                            $xt = strpos($blogs->post, '</h2><p>&nbsp;</p>');
                            $judul = substr($blogs->post, 4, (int)$xt-4);
                            $text = substr($blogs->post, (int)$xt+21, 200);
                            $postt = substr($blogs->post, (int)$xt+18);
                            $n = count($tags);
                            $i=0;
                        @endphp
                        <h3 class="post-title">{{ $judul }}</h3>
                        <div class="blog-meta">
                            <ul>
                                <li class="breadcrumb-item active" aria-current="page">@foreach ($tags as $t)
                                    @php
                                        $i++;
                                        if($i==$n-1){
                                            echo $t->name_tags." & ";
                                        } elseif ($i==$n){
                                            echo $t->name_tags;
                                        } else {
                                            echo $t->name_tags.", ";
                                        }
                                    @endphp   
                                @endforeach</li>
                                <li class="breadcrumb-item">{{ date('d F Y', strtotime($blogs->created_blogs)) }}</li>
                                <li class="breadcrumb-item">FREE</li>
                            </ul>
                            <p>
                                <h4>Oleh: {{ $blogs->nama }}</h4>
                            </p>
                        </div>
                        <img src="assets/img/blog/blog-details.jpg" alt="blog details image">
                    </div>
                    {!! $postt !!}

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