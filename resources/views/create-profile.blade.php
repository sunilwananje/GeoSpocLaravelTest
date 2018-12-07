@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Profile</div>

                <div class="card-body">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('store.profile') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="web_address" class="col-md-4 col-form-label text-md-right">{{ __('Web Address') }}</label>

                            <div class="col-md-6">
                                <input id="web_address" type="text" class="form-control{{ $errors->has('web_address') ? ' is-invalid' : '' }}" name="web_address" >

                                @if ($errors->has('web_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('web_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cover_letter" class="col-md-4 col-form-label text-md-right">{{ __('Cover Letter') }}</label>

                            <div class="col-md-6">
                                <input id="cover_letter" type="text" class="form-control{{ $errors->has('cover_letter') ? ' is-invalid' : '' }}" name="cover_letter" >
                                @if ($errors->has('cover_letter'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cover_letter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="attachment" class="col-md-4 col-form-label text-md-right">{{ __('Attachment') }}</label>

                            <div class="col-md-6">
                                <input id="attachment" type="file" class="form-control{{ $errors->has('attachment') ? ' is-invalid' : '' }}" name="attachment" >
                                @if ($errors->has('attachment'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('attachment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="is_working" class="col-md-4 col-form-label text-md-right">{{ __('Do you like working?') }}</label>

                            <div class="col-md-6">
                                <select name="is_working" class="form-control{{ $errors->has('is_working') ? ' is-invalid' : '' }}" id="is_working">
                                  <option value="">Select</option>
                                  <option value="1">Yes</option>
                                  <option value="0">No</option>
                                </select> 
                                @if ($errors->has('is_working'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('is_working') }}</strong>
                                    </span>
                                @endif  
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <div class="captcha">
                                <span>{!! captcha_img() !!}</span>
                                <button type="button" id="refresh" class="btn btn-success"><i class="fa fa-refresh"></i></button>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                <input id="captcha" type="text" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" placeholder="Enter Captcha" name="captcha"></div>
                                @if ($errors->has('captcha'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                @endif 
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#refresh').click(function(){
        $.ajax({
            type:'GET',
            url:'{{route("refresh.captcha") }}',
            success:function(data){
                $(".captcha span").html(data.captcha);
            }
        });
    });
})

</script>
@endsection