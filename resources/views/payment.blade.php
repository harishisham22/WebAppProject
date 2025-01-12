@extends('master.layout')
@section('content')

<div class="container section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h1><b>PAYMENT</b></h1>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="container" data-aos="fade-up">
                    <h3><b>Select a payment method: </b></h3>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_type" id="fpx-bank" value="FPX BANK">
                    <label class="form-check-label" for="">
                        FPX BANK
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_type" id="TOUCH N GO" value="TOUCH N GO">
                    <label class="form-check-label" for="TOUCH N GO">
                        TOUCH N GO
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_type" id="CARD" value="CARD">
                    <label class="form-check-label" for="CARD">
                        CARD
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_type" id="CASH" value="CASH">
                    <label class="form-check-label" for="CASH">
                        CASH
                    </label>
                </div>

                <div class="container" data-aos="fade-up">
                    <h3><b>Select a order type: </b></h3>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="order_type" id="pickup" value="pickup">
                    <label class="form-check-label" for="pickup">
                        PICKUP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="order_type" id="asap" value="asap">
                    <label class="form-check-label" for="dineIn">
                        AS SOON AS POSSIBLE
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="order_type" id="dine-in" value="dine-in">
                    <label class="form-check-label" for="dine-in">
                        DINE-IN
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="order_type" id="specific" value="specific">
                    <label class="form-check-label" for="specific">
                        SPECIFIC TIME
                    </label>
                </div>
            </div>

            <div class="col">
                <div class="row align-items-start">
                    <h2 style="font-family: helvetica; font-size: 16px">ORDER SUMMARY</h2>
                    <!-- Cart item loop -->


                    <h3 style="font-family: helvetica; font-size: 16px">TOTAL: RM 100</h3>
                </div>
                <div class="row align-items-center">
                    <button type="button" class="btn btn-primary" style="width: 80%; font-size: 15px"><b>PROCEED TO
                            PAYMENT</b></button>
                </div>
            </div>

        </div>


    </div>


</div>
</div>

@endsection