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
                                <div class="blog-card">
                                    <div class="blog-text">
                                        <ul>
                                            <li>
                                                <i class='bx bxs-user'></i>
                                                {{ $user->nama }}
                                            </li>
                                            <li>
                                                <i class='bx bx-calendar'></i>
                                                {{ date('d F Y', strtotime($b->created_blogs)) }}
                                            </li>
                                            <li class="text-success">
                                                <i class='bx bx-menu-alt-left'></i>
                                                Published
                                            </li>
                                        </ul>
                                        @php
                                            $text =  substr($b->post, 0 , 200);
                                        @endphp
                                        <h3>
                                            <a href="/post/detailpost/{{ $b->id }}">
                                                {{ $b->title }}
                                            </a>
                                        </h3>
                                        <a href="/post/detailpost/{{ $b->id }}">
                                            <p>{!! $b->post !!}</p>
                                        </a>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="candidate-skill">
                                                    <ul>
                                                        @foreach ($b->tags as $tags)
                                                        <li
                                                            class="border border-secondary px-2 text-sm mt-2 py-1 text-secondary">
                                                            {{ $tags->name_tags }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-right">
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-outline-dark btn-sm border border-dark dropdown-toggle"
                                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-menu-alt-right"></i>
                                                    </button>
                                                    <div class="dropdown-menu border-0 border"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#"><i class='bx bx-edit mr-2'></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class='bx bx-window-close mr-2'></i>Unpublish</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
