@extends('layouts.app_quiz')

@section('content')
    <section class="quiz-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="quiz-result">
                        <div class="start-container-result">
                            <h2 class="text-center text-uppercase">@lang('content.title_values')</h2>
                            <div class="spacer s4"></div>

                            @foreach($values as $key=> $val)

                                <div class="item-value">
                                    <h5 class="text-left h5-value">
                                        @lang('content.'.$val["name"].'_val')
                                    </h5>
                                    <div class="item-box text-center" style="background: {{$val["bg"]}}; @if($key == 4) color:#ffffff; @else @endif">
                                        @lang('content.'.$val["name"].'.desc')
                                    </div>
                                    <div class="spacer s2"></div>
                                </div>

                            @endforeach
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection