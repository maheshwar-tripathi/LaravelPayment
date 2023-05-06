@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make A payment</div>

                <div class="card-body">
                    <form action="#" method="POST" id="paymentform">
                        @csrf
                        <div class="row">
                            <div class="col-auto">
                                <label for="">How much you ant to pay?</label>
                                <input
                                    type="number"
                                    min="5"
                                    step="0.01"
                                    class="form-control"
                                    name="value"
                                    vale="{{ mt_rand(500,100000) / 100 }}"
                                    required
                                >
                                <small class="form-text text-muted">
                                    Use values with up to two decimal places, using a dot "."
                                </small>
                            </div>
                            <div class="col-auto">
                                <label for="">Currency</label>
                                <select class="custom-select" name="currency" id="currency" required>
                                    @foreach($currencies as $currency)
                                        <option value="{{ $currency->iso }}">
                                            {{ strtoupper($currency->iso) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="">
                                    Select the desired payment platform
                                </label>
                                <div class="form-group col-md-5" id="toogler">
                                    <div class="btn-group btn-group-toogle" data-toogle="buttons">
                                        @foreach($paymentPlatforms as $paymentPlatform)
                                            <label
                                                class="btn btn-outline-secondary rounded m-2 p-1"
                                                data-target="#{{ strtolower($paymentPlatform->name) }}Collapse"
                                                data-toggle="collapse">
                                                <input
                                                    type="radio"
                                                    name="payment_platform"
                                                    value="{{ $paymentPlatform->id }}"
                                                    required
                                                >
                                                <img
                                                    class="img-fluid img-thumbnail"
                                                    src="{{ asset($paymentPlatform->image) }}"
                                                    alt="{{ $paymentPlatform->name }}"
                                                >
                                            </label>
                                        @endforeach
                                    </div>
                                    @foreach($paymentPlatforms as $paymentPlatform)
                                        <div
                                            id="{{ strtolower($paymentPlatform->name) }}Collapse"
                                            class="collapse"
                                            data-parent="#toggler"
                                        >
                                            @includeIf('components.'. strtolower($paymentPlatform->name). '-collapse')
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button class="btn btn-primary bth-lg" type="button" id="pay">Pay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
