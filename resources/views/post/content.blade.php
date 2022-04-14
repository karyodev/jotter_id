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
                        <form class="basic-info" action="/content" method="POST">
                            @csrf
                            <div class="blog-widget blog-tags mt-2">
                                <h3>Buat Tulisan</h3>
                                <textarea class="form-control" name="content" id="editor"></textarea>
                            </div>
                            <div class="blog-widget blog-tags mt-2">
                                <h3>Kategori Tulisan</h3>
                                <ul>
                                    @foreach ($tags as $t)    
                                    <li class="mr-4">
                                       <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $t->id }}" name="tags[]">
                                            <label class="form-check-label" for="defaultCheck1">{{ $t->name_tags }}</label>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="text-right mt-2">
                                <button type="submit" class="account-btn">Simpan</button>
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
