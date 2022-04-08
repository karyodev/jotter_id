@extends('main')
@section('title')
    <!-- Title CSS -->
    <title>{{ 'Jotter.id - Tags' }}</title>
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
                        <form class="basic-info">

                            <div class="blog-widget blog-tags">
                                <h3>Add Your Interest</h3>
                                <ul>
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Job Tips</a>
                                    </li>
                                    <li>
                                        <a href="#">UX Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Tips & Tricks</a>
                                    </li>
                                    <li>
                                        <a href="#">Writting</a>
                                    </li>
                                    <li>
                                        <a href="#">Business</a>
                                    </li>
                                    <li>
                                        <a href="#">Resume</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="text-right mt-2">
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
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
