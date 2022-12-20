<form id="competition1">
    @csrf

    <div class="form-group row">
        <div class="col-md-12">
            <input type="text" class="form-control" id="nr-shop" name="nr_shop" value="{{ old('nr_shop') }}" placeholder="@lang('content.store_number')">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <input type="text" class="form-control" id="size-team" name="size_team" value="{{ old('size_team') }}" placeholder="@lang('content.size_teams')">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            
            <select class="form-control" id="select-country" name="country">
                <option value="">@lang('content.country')</option>
                @foreach ($languages as $language) 
                <option value="{{ $language->lng }}">{{ $language->long_lng }}</option>
                @endforeach
            </select>
            
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="@lang('content.name')">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <input type="email" class="form-control" id="email-comp" name="email" value="{{ old('email') }}" placeholder="@lang('content.email')">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <input type="url" class="form-control" id="link" name="link" value="{{ old('link') }}" placeholder="@lang('content.link')">
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input checkbox3" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                <a target="_blank" href="{{ URL::asset('storage/regulamin' . $lng->pdf3) }}">@lang('content.regulations')</a>
            </label>
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input checkbox3a" type="checkbox" id="gridCheck">
            <label class="form-check-label agree-odo" for="gridCheck">
                <a target="_blank" href="@lang('content.rodo_link')">@lang('content.rodo')</a> 
            </label>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-12">
            <button type="submit" class="btn btn-submit">
                @lang('content.send')
            </button>

            <div class="spacer s1"></div>

        </div>
    </div>

    <div class="send-success comp1-success">
        @lang('content.send_success')
    </div>    
    <div class="send-error comp1-error">
        @lang('content.send_success_comp')
    </div>    
</form>