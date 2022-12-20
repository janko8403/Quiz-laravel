<form id="competition2">
    @csrf
    
    <div class="form-group row">
        <div class="col-md-12">
            <input type="text" class="form-control" id="nr-shop2" name="nr_shop" value="{{ old('nr_shop') }}" placeholder="@lang('content.store_number')">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            
            <select class="form-control" id="select-country2" name="country">
                <option value="">@lang('content.country')</option>
                @foreach ($languages as $language) 
                <option value="{{ $language->lng }}">{{ $language->long_lng }}</option>
                @endforeach
            </select>
            
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <input type="text" class="form-control" id="name2" name="name" value="{{ old('name_surname') }}" placeholder="@lang('content.name')">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <input type="email" class="form-control" id="email-comp2" name="email" value="{{ old('email') }}" placeholder="@lang('content.email')">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <div class="fileUploadInput">
                <div class="text-file comp1">@lang('content.addimage')</div> 
                <input type="file" accept=".jpg,.jpeg,.png" id="pimage2" name="pimage"/>
                <button><img src="/images/attachment.svg" alt=""></button>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input checkbox1" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                <a target="_blank" href="{{ Storage::url('regulamin' . $lng->pdf) }}">@lang('content.regulations')</a> 
            </label>

        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input checkbox1a" type="checkbox" id="gridCheck">
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

    <div class="send-success comp2-success">
        @lang('content.send_success')
    </div>    
    <div class="send-error comp2-error">
        @lang('content.send_success_comp')
    </div>
</form>