@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="margin:50px;">
            <div class="card">
                <div class="card-header">{{ __('index.verify') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('index.check_mail') }}
                        </div>
                    @endif

                    {{ __('index.message') }}
                   <a href="{{ route('verification.resend') }}">{{ __('index.click') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
