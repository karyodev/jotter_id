@extends('main')
@section('title')
    <!-- Title CSS -->
    <title>{{ 'Jotter.id - Create Post' }}</title>
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
                        @foreach ($blogs as $b)
                        <a href="/post/detailpost/{{ $b->id }}">
                            <div class="blog-widget blog-tags mt-2">
                                @php
                                    $xt = strpos($b->post, '</h2><p>&nbsp;</p>');
                                    $judul = substr($b->post, 4, (int)$xt-4);
                                    $text = substr($b->post, (int)$xt+21, 200);
                                @endphp
                                <h3>{{ $judul }}</h3>
                                <p>{{ $text }}. . . . .</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Account Area End -->
@endsection

@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
