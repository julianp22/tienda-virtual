@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Administrar productos') }}</div>

                <div class="card-body">
                    <Home />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
