@extends('layouts.app')
@section('content')
<section id="about-event">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                {!! $lng->field_1 !!}

            </div>
        </div>
    </div>
</section>

<section class="growing">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="spacer s4"></div>
                <div class="growing_sec">{!! $lng->field_2 !!}</div>
            </div>
            <div class="col-md-6">
                <div class="spacer s4 hide-on-xs"></div>
                <div class="spacer s4 hide-on-xs"></div>
                <div class="growing_first">{!! $lng->field_3 !!}</div>
            </div>
        </div>
    </div>
</section>

<section class="conference">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <div class="spacer s2 hide-on-xs"></div>
                {!! $lng->field_4 !!}
                <div class="spacer s4"></div>
            </div>
        </div>
        <div class="row list-conference">
            <div class="col-md-2 hide-on-xs">
                <div class="letter-conference">1</div>
            </div>
            <div class="col-md-10">
                <div class="conference-box first-conference">
                    <p>{!! $lng->field_5 !!}</p>
                </div>
            </div>
        </div>
        <div class="row list-conference">
            <div class="col-md-2 hide-on-xs">
                <div class="letter-conference">2</div>
            </div>
            <div class="col-md-10">
                <div class="conference-box sec-conference">
                    <p>{!! $lng->field_6 !!}</p>
                </div>
            </div>
        </div>
        <div class="row list-conference">
            <div class="col-md-2 hide-on-xs">
                <div class="letter-conference">3</div>
            </div>
            <div class="col-md-10">
                <div class="conference-box three-conference">
                    <p>{!! $lng->field_7 !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <div class="spacer s3 hide-on-xs"></div>
                {!! $lng->field_8 !!}
                <div class="spacer s3 hide-on-xs"></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <div class="spacer s4 hide-on-xs"></div>
                <div class="spacer s4 hide-on-xs"></div>
                <div class="spacer s2"></div>
                {!! $lng->field_9 !!}
                <div class="spacer s2"></div>
            </div>
        </div>
    </div>
</section>

<section class="group">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-2">
                {!! $lng->field_10 !!}
            </div>
        </div>
    </div>
</section>

<section id="agenda" class="agenda">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2 class="text-center">{!! $lng->agenda !!}</h2>
                <div class="spacer s2"></div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">

                {!! $lng->agenda_txt !!}

            </div>
        </div>
    </div>
</section>

<section id="speakers" class="speakers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2 class="text-center">{!! $lng->prelegenci !!}</h2>
                <div class="spacer s2"></div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-xs-12 no-padding">
                <div class="image-post">
                    <img class="big-img-post" src="/images/speakers/Trevor Masters---Managing Director.png" alt="Trevor Masters">
                    <div class="shodow-caption"></div>
                    <div class="desc-img">
                        <div class="title">Trevor Masters</div>
                        <div class="position">Managing Director</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 no-padding">
                <div class="image-post">
                    <img class="big-img-post" src="/images/speakers/Alexander-Kennedy---Planning-Director.png" alt="Alexander Kennedy">
                    <div class="shodow-caption"></div>
                    <div class="desc-img">
                        <div class="title">Alexander Kennedy</div>
                        <div class="position">Planning Director</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 no-padding">
                <div class="image-post">
                    <img class="big-img-post" src="/images/speakers/Agnieszka Jaworska - Buying Director.png" alt="Agnieszka Jaworska">
                    <div class="shodow-caption"></div>
                    <div class="desc-img">
                        <div class="title">Agnieszka Jaworska</div>
                        <div class="position">Buying Director</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12 no-padding">
                <div class="image-post">
                    <img class="big-img-post" src="/images/speakers/Agnieszka-Olejniczak---Marketing-Director.png" alt="Agnieszka Olejniczak">
                    <div class="shodow-caption"></div>
                    <div class="desc-img">
                        <div class="title">Agnieszka Olejniczak</div>
                        <div class="position">Marketing Director</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 no-padding">
                <div class="image-post">
                    <img class="big-img-post" src="/images/speakers/Anca-Radu---Retail-Director-South-Europe.png" alt="AncaRadu">
                    <div class="shodow-caption"></div>
                    <div class="desc-img">
                        <div class="title">Anca Radu</div>
                        <div class="position">Retail Director South Europe</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 no-padding">
                <div class="image-post">
                    <img class="big-img-post" src="/images/speakers/Aleksandr-Cikaidze---Retail-Director-North-Europe.png" alt="Aleksandr Cikaidze">
                    <div class="shodow-caption"></div>
                    <div class="desc-img">
                        <div class="title">Aleksandr Čikaidze</div>
                        <div class="position">Retail Director North Europe</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12 no-padding">
                <div class="image-post">
                    <img class="big-img-post" src="/images/speakers/Polina-Pocitari---Head-of-Finance-Operations.png" alt="Polina Pocitari">
                    <div class="shodow-caption"></div>
                    <div class="desc-img">
                        <div class="title">Polina Pocitari</div>
                        <div class="position">Head of Finance Operations</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 no-padding">
                <div class="image-post">
                    <img class="big-img-post" src="/images/speakers/Sylwia-Jazwinska---Head-of-Marketing-Operations.png" alt="Sylwia Jazwinska">
                    <div class="shodow-caption"></div>
                    <div class="desc-img">
                        <div class="title">Sylwia Jaźwińska</div>
                        <div class="position">Head of Marketing Operations</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 no-padding">
                <div class="image-post">
                    <img class="big-img-post" src="/images/speakers/Valentina-Busija---Head-of-Human-Resources-Operations4.png" alt="Valentina-Busija">
                    <div class="shodow-caption"></div>
                    <div class="desc-img">
                        <div class="title">Valentina Busija</div>
                        <div class="position">Head of Human Resources Operations</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer s3"></div>
    </div>
</section>

<section id="competitions">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2 class="text-center">{!! $lng->competition !!}</h2>
                <br>
                <ul class="compet">
                    <li>
                        <a href="#competition-2" class="competition-tab competition-active">@lang('content.contest') 1</a>
                    </li>
                    <li>
                        <a href="#competition-3" class="competition-tab">@lang('content.contest') 2</a>
                    </li>
                    <li>
                        <a href="#competition-1" class="competition-tab">@lang('content.contest') 3</a>
                    </li>
                </ul>

                <div class="spacer s4"></div>

                <div class="tab-comp">

                    <div id="competition-1" class="tab-content-competition">
                        <div class="row wrapper-fixed">
                            <div class="col-md-8 no-padding-competition">

                            <div class="blue-box-comp with-after-bg">

                                {!! $lng->competition_1 !!}

                            </div>

                            </div>
                            <div class="col-md-4 no-padding-competition">

                                <div class="spacer s4 show-on-xs"></div>

                                <div class="white-box-form">
                                    @lang('content.contact_form')
                                    <div class="spacer s1"></div>

                                    @include('form.competition1')

                                </div>

                            </div>
                        </div>
                        <div class="spacer s4 hide-on-xs"></div>
                        <div class="spacer s4 hide-on-xs"></div>
                    </div>

                    <div id="competition-2" class="tab-content-competition active">
                        <div class="row">
                            <div class="col-md-8 no-padding-competition">

                            <div class="blue-box-comp with-after-bg">

                                {!! $lng->competition_2 !!}

                            </div>

                            </div>
                            <div class="col-md-4 no-padding-competition">

                                <div class="spacer s4 show-on-xs"></div>

                                <div class="white-box-form">
                                    @lang('content.contact_form')
                                    <div class="spacer s1"></div>

                                    @include('form.competition2')

                                </div>

                            </div>
                        </div>
                        <div class="spacer s4 hide-on-xs"></div>
                        <div class="spacer s4 hide-on-xs"></div>
                    </div>

                    <div id="competition-3" class="tab-content-competition">
                        <div class="row">
                            <div class="col-md-8 no-padding-competition">

                                <div class="blue-box-comp with-after-bg">

                                {!! $lng->competition_3 !!}

                                </div>

                            </div>
                            <div class="col-md-4 no-padding-competition">

                                <div class="spacer s4 show-on-xs"></div>

                                <div class="white-box-form">
                                    @lang('content.contact_form')
                                    <div class="spacer s1"></div>

                                    @include('form.competition3')

                                </div>

                            </div>
                        </div>
                        <div class="spacer s4 hide-on-xs"></div>
                        <div class="spacer s4 hide-on-xs"></div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <h2 class="text-center">{!! $lng->contact !!}</h2>

                <div class="spacer s1"></div>

                <div class="box-form">

                    @lang('content.fillout')

                    <form id="contact-form">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" id="nameform" name="name" placeholder="@lang('content.name')">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="spacer s1 show-on-xs"></div>
                                <input type="text" class="form-control" id="emailform" name="email" placeholder="@lang('content.email')">
                            </div>
                        </div>

                        <div class="spacer s1"></div>

                        <div class="row">
                            <div class="col">
                                <textarea class="form-control" id="msgform" name="msg" placeholder="@lang('content.msg')" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="spacer s1"></div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-submit btn-submit-contact">
                                    @lang('content.send')
                                </button>

                                <div class="spacer s1"></div>

                            </div>
                        </div>

                        <div class="send-success form-success">
                            @lang('content.send_success')
                        </div>
                        <div class="send-error form-error">
                            @lang('content.send_error')
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
    <script>
        // $("#transmissionModal").modal();
    </script>
@endpush

