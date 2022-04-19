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
    <section class="account-section ptb-100 w-100">
        <div class="container">
            <div class="row">
                @include('sidebar-account')
                <div class="col-md-8">
                    <div class="account-details">
                        <form class="basic-info" action="/content" method="POST">
                            @csrf
                            <div class="blog-widget blog-tags mt-2">
                                <h3>Buat Tulisan</h3>
                                <input type="text" class="form-control mb-3" placeholder="Title" name="title" required autocomplete="OFF">
                                <textarea class="form-control" name="content" id="editor" ></textarea>
                            </div>
                            <div class="blog-widget blog-tags mt-2">
                                <h3>Kategori Tulisan</h3>
                                <ul>
                                    @foreach ($tags as $t)
                                        <li class="mr-4">
                                            <div data-toggle="buttons">
                                                <label class="btn btn-outline-dark">
                                                    <input type="checkbox" autocomplete="off" class="-ml-2"
                                                        value="{{ $t->id }}" name="tags[]" style="opacity: 0">
                                                    {{ $t->name_tags }}
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="text-right mt-2">
                                <button type="submit"
                                    class="account-btn btn-outline-dark bg-transparent text-dark border border-dark">Save as
                                    Draft</button>
                                <button type="submit" class="account-btn">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Account Area End -->
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#editor').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: 500
            });
        });
    </script>

    <script>
        $('[data-toggle="buttons"] .btn').on('click', function() {
            // toggle style
            $(this).toggleClass('btn-outline-dark btn-outline-dark active');
            // toggle checkbox
            var $chk = $(this).find('[type=checkbox]');
            $chk.prop('checked', !$chk.prop('checked'));

            return false;
        });
    </script>
@endsection
