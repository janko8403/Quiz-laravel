@extends('layouts.stream')

@section('content')
    <section class="stream-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="spacer s4"></div>
                    <h1>
                        @lang('stream_title')
                    </h1>
                    <p>
                        @lang('stream_description')
                    </p>
                    <div class="spacer s4"></div>
                    <div style="padding:56.25% 0 0 0;position:relative;">
                        <iframe src=@lang('content.embed') frameborder="0"
                                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                                style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                    </div>

                    <!-- @if (Lang::get('content.chat') != 'NULL')
                        <div class="spacer s4"></div>
                        <div style="position: relative; z-index: 1">
                            <iframe src=@lang('content.chat') width="100%" height="100%"
                                    style="min-height: 320px"
                                    frameborder="0"></iframe>
                        </div>
                    @endif -->

                </div>
            </div>
        </div>
    </section>

@endsection
