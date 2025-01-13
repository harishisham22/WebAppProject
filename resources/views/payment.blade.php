<!-- Ahmad Lutfi -->

@extends('master.layout')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('orders.pay') }}">
        @csrf
        <div class="row">
            <div class="card-group">
                <div class="card">
                    <div class="card-header">
                        <h1><b>{{ __('PAYMENT') }}</b></h1>
                    </div>

                    <div class="card-body">
                        <div class="col-md-12">

                            <div class="card">
                                <div class="form-group rounded p-3 mb-3">
                                    <h5 style="font-family: Helvetica"><b>{{ __('PAYMENT METHOD') }}</b></h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="fpx_bank" checked
                                            value="fpx">
                                        <label class="form-check-label" for="fpx_bank">
                                            {{ __('FPX Bank') }}
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method"
                                            id="touch_n_go" value="touch_n_go">
                                        <label class="form-check-label" for="touch_n_go">
                                            {{ __('Touch N Go') }}
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="card"
                                            value="card">
                                        <label class="form-check-label" for="card">
                                            {{ __('Card') }}
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method"
                                            id="pay_to_counter" value="counter">
                                        <label class="form-check-label" for="pay_to_counter">
                                            {{ __('Pay to Counter') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="form-group rounded p-3 mb-3">
                                    <h5 style="font-family: Helvetica"><b>{{ __('ORDER TYPE') }}</b></h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="order_type" id="pickup" checked
                                            value="pickup">
                                        <label class="form-check-label" for="pickup">
                                            {{ __('Pickup') }}
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="order_type" id="dine_in"
                                            value="dine_in">
                                        <label class="form-check-label" for="dine_in">
                                            {{ __('Dine-in') }}
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="order_type" id="asap"
                                            value="asap">
                                        <label class="form-check-label" for="asap">
                                            {{ __('As Soon as Possible') }}
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="order_type"
                                            id="specific_time" value="specific_time">
                                        <label class="form-check-label" for="specific_time">
                                            {{ __('Specific Time') }}
                                        </label>
                                    </div>

                                    <div class="form-group rounded p-3 mb-3" id="specificTimeInput" style="display: none;">
                                        <label
                                            for="specific_time_input">{{ __('Specific Time (if applicable)') }}</label>
                                        <input type="time" class="form-control" id="specific_time_input"
                                            name="specific_time" placeholder="Enter specific time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="col-md-12">
                                <div class="card-title">
                                    <h5 style="font-family: Helvetica"><b>{{ __('ORDER SUMMARY') }}</b></h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered rounded">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Quantity</th>
                                                <th>Price (RM)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--  Cart Item loop here  -->
                                            <tr>
                                                <td>Shawarma Large</td>
                                                <td>2</td>
                                                <td>RM 10.00</td>
                                            </tr>
                                            <tr>
                                                <td>Nasi Lemak Ayam Goreng</td>
                                                <td>3</td>
                                                <td>RM 5.00</td>
                                            </tr>
                                            <tr>
                                                <td>Chicken Mix</td>
                                                <td>1</td>
                                                <td>RM 5.00</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <p><strong>Total: RM 40.00</strong></p>

                                    <button type="submit" class="btn btn-primary"
                                        style="font-color: #000000"><b>{{ __('PROCEED TO PAYMENT') }}</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    const orderTypeRadios = document.querySelectorAll('input[name="order_type"]');
    const specificTimeInput = document.getElementById('specificTimeInput');

    orderTypeRadios.forEach(radio => {
        radio.addEventListener('change', () => {
            if (radio.value === 'specific_time') {
                specificTimeInput.style.display = 'block';
            } else {
                specificTimeInput.style.display = 'none';
            }
        });
    });
</script>
@endsection