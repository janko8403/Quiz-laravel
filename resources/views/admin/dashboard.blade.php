@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            @if (Auth::check() && Auth::user()->hasRole('Admin'))
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">people</i>
                            </div>
                            <p class="card-category">Wszyscy użytkownicy</p>
                            <h3 class="card-title">{{ count($all) - 1 }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">link</i>
                                <a href="{{ url('admin/users') }}">zobacz więcej</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">message</i>
                            </div>
                            <p class="card-category">Wiadomości</p>
                            <h3 class="card-title">{{ count($messages) }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">link</i>
                                <a href="{{ url('admin/messages') }}">zobacz więcej</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">language</i>
                        </div>
                        <p class="card-category">Dodane języki</p>
                        <h3 class="card-title">{{ count($languages) }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">link</i>
                            <a href="{{ url('/admin/language') }}">zobacz więcej</a>
                        </div>
                    </div>
                </div>
            </div>

            @if (Auth::check() && Auth::user()->hasRole('Admin'))
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-default card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">center_focus_weak</i>
                            </div>
                            <p class="card-category">Udział w konkursach</p>
                            <h3 class="card-title">{{ count($competitions) }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">link</i>
                                <a href="{{ url('admin/competition/1') }}">zobacz więcej</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">quiz</i>
                            </div>
                            <p class="card-category">Wysłanych na maila wyników testu</p>
                            <h3 class="card-title">{{ $testEmailsCount }}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
