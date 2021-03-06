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
                                    @foreach ($tags as $t)
                                        <li class="mr-4">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $t->id }}"
                                                    name="tags[]">
                                                <label class="form-check-label"
                                                    for="defaultCheck1">{{ $t->name_tags }}</label>
                                            </div> --}}
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
