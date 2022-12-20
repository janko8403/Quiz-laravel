@extends('admin.layout.app')

@section('title')
   Język
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Dodaj język</h4>
                </div>
                <div class="card-body">
                    <div class="spacer s2"></div>
            
                    <form method="POST" action="{{ url('admin/create-language') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Wybierz język</label>
                                    <select class="form-control" name="lng">
                                        <option value="">Język</option>
                                        @foreach($countries as $key => $country)
                                            <option value="{{ $key }}">{{ $country }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">O wydarzeniu</label>
                                    <textarea name="field_1" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">29 WRZEŚNIA</label>
                                    <input type="text" class="form-control" name="field_2" value="{{ old('field_2') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">ONLINE / NA ŻYWO</label>
                                    <input type="text" class="form-control" name="field_3" value="{{ old('field_3') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Tegoroczna konferencja</label>
                                    <textarea name="field_4" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">1</label>
                                    <input type="text" class="form-control" name="field_5" value="{{ old('field_5') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">2</label>
                                    <input type="text" class="form-control" name="field_6" value="{{ old('field_6') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">3</label>
                                    <input type="text" class="form-control" name="field_7" value="{{ old('field_7') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Wasze zdanie</label>
                                    <textarea name="field_8" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Udział w konferencji</label>
                                    <textarea name="field_9" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Przygotowaliśmy dla Was</label>
                                    <textarea name="field_10" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Agenda</label>
                                    <input type="text" class="form-control" name="agenda" value="{{ old('agenda') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Agenda treść</label>
                                    <textarea name="agenda_txt" cols="30" rows="5"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Prelegenci</label>
                                    <input type="text" class="form-control" name="prelegenci" value="{{ old('prelegenci') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Konkurs</label>
                                    <input type="text" class="form-control" name="competition" value="{{ old('competition') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Konkurs 1</label>
                                    <textarea name="competition_2" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Konkurs 2</label>
                                    <textarea name="competition_3" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Konkurs 3</label>
                                    <textarea name="competition_1" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Kontakt</label>
                                    <input type="text" class="form-control" name="contact" value="{{ old('contact') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Kontakt treść</label>
                                    <textarea name="contact_txt" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Regulamin - Bear</label>
                                    <input type="file" class="form-control" name="pdf" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Regulamin - Design</label>
                                    <input type="file" class="form-control" name="pdf2" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Regulamin - Song</label>
                                    <input type="file" class="form-control" name="pdf3" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary pull-left">Dodaj</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
