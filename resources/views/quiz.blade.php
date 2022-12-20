@extends('layouts.app_quiz')
@section('content')
    <section class="quiz-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="quiz">
                        <div class="start-container">
                            <h2 class="text-center text-uppercase">@lang('quiz_title')</h2>
                            <div class="spacer s1"></div>
                            <p class="text-center">
                                @lang('quiz_start_text')
                            </p>
                            <div class="spacer s2"></div>
                            <a class="start-quiz">@lang('quiz_start')</a>
                        </div>

                        <div class="form-container">
                            <form action="">
                                @csrf
                                <ul id="listContainer">
                                    @foreach($questions as $key=> $question)
                                        <li style="@if($key == 0) display:list-item @else display:none  @endif">
                                            <div class="step step-{{$question["nr"]}}">
                                                <div class="name">
                                                    <span>{{$question["nr"]}}.</span> @lang('quiz_step'.$question["nr"].'_name')
                                                </div>
                                                <div class="spacer s1"></div>
                                                <div class="questions">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               value="{{$question["answersValue"][0]}}"
                                                               name="step{{$question["nr"]}}"
                                                               id="step{{$question["nr"]}}a">
                                                        <label class="form-check-label" for="step{{$question["nr"]}}a">
                                                            @lang('quiz_step'.$question["nr"].'_1')
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               value="{{$question["answersValue"][1]}}"
                                                               name="step{{$question["nr"]}}"
                                                               id="step{{$question["nr"]}}b">
                                                        <label class="form-check-label" for="step{{$question["nr"]}}b">
                                                            @lang('quiz_step'.$question["nr"].'_2')
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               value="{{$question["answersValue"][2]}}"
                                                               name="step{{$question["nr"]}}"
                                                               id="step{{$question["nr"]}}c">
                                                        <label class="form-check-label" for="step{{$question["nr"]}}c">
                                                            @lang('quiz_step'.$question["nr"].'_3')
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>

                                <ul class="list-count">
                                    <li>
                                        <div class="count"><span class="add_num">1</span>/10</div>
                                    </li>
                                    <li>
                                        <a class="next-button">@lang('quiz.quiz.next')</a>
                                        <a class="btn-submit-quiz disabled hide-submit">@lang('quiz.quiz.finish')</a>
                                    </li>
                                </ul>

                            </form>

                        </div>

                        <div class="score-container">

                            <div class="spacer s4"></div>

                            <div class="chart">

                                <table
                                    class="charts-css [ column ] [ show-primary-axis ] [ data-spacing-10 reverse-data ]"
                                    id="my-chart">
                                    <tbody>
                                    <tr>
                                        <td class="lovecustomer"><span class="num">0</span></td>
                                    </tr>
                                    <tr>
                                        <td class="simplicity"><span class="num">0</span></td>
                                    </tr>
                                    <tr>
                                        <td class="growth"><span class="num">0</span></td>
                                    </tr>
                                    <tr>
                                        <td class="spirit"><span class="num">0</span></td>
                                    </tr>
                                    <tr>
                                        <td class="respect"><span class="num">0</span></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="row">
                                <div class="col-md-8 offset-md-2">

                                    <div class="spacer s2"></div>

                                    <p class="text-center">@lang('quiz_text')</p>
                                    <div class="spacer s1"></div>

                                    <p class="text-center"><strong>@lang('quiz_send_score')</strong></p>
                                    <div class="spacer s1"></div>

                                    <form class="send-score" id="quiz-form">
                                        <input type="hidden" name="respect">
                                        <input type="hidden" name="spirit">
                                        <input type="hidden" name="growth">
                                        <input type="hidden" name="simplicity">
                                        <input type="hidden" name="lovecustomer">
                                        <input type="email" placeholder="@lang('quiz_content_email')" id="email-quiz"/>
                                        <button type="submit">@lang('quiz_content_send')</button>
                                    </form>
                                    <div class="spacer s1"></div>
                                    <div style="width: 60%;" class="send-success quiz-success">
                                        @lang('quiz_send_success')
                                    </div>
                                    <div style="width: 60%;" class="send-error quiz-error">
                                        @lang('quiz_send_error')
                                    </div>
                                    <div class="spacer s2"></div>
                                    <a class="back-to-home" href="{{ url('/home') }}">@lang('quiz_back_to_home') </a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="spacer s4"></div>
                    <div class="spacer s4"></div>

                    <div class="quiz-result">
                        <div class="start-container-result">
                            <h2 class="text-center text-uppercase">@lang('quiz.quiz.quiz_result')</h2>
                            <div class="spacer s1"></div>
                            <p class="text-center">
                                @lang('quiz.quiz.quiz_result_desc')
                            </p>
                            <div class="spacer s2"></div>
                            <ul class="result">
                                <li>@lang('content.respect_val')</li>
                                <li>@lang('content.spirit_val')</li>
                                <li>@lang('content.growth_val')</li>
                                <li>@lang('content.simply_val')</li>
                                <li>@lang('content.love_val')</li>
                            </ul>
                            <div class="spacer s2"></div>
                            <a href="/quiz-values" class="start-quiz-result">@lang('quiz.quiz.quiz_result_button')</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
