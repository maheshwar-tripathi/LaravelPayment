@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome!</div>

                <div class="card-body">
                    {{ __('This is a payments processing system, using the most popular payment platform available.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
