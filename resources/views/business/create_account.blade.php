@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | dashboard</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')



        <div class="clearfix"></div>
        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Choose Payment Option</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/business">Home</a></li>
                                <li><a href="/pricing">pricing</a></li>
                                <li>Choose Payment Option</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container margin-bottom-75">
            <form action="{{}}">
            <div class="row">
                <div class="col-lg-8 col-md-8 utf_listing_payment_section">
                    <div class="utf_booking_listing_section_form margin-bottom-40">
                        <h3><i class="sl sl-icon-paper-plane"></i> Billing Information</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" value="" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input type="text" value="" placeholder="Last Name">
                            </div>
                            <div class="col-md-6">
                                <div class="medium-icons">
                                    <label>E-Mail</label>
                                    <input type="text" value="" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="medium-icons">
                                    <label>Phone</label>
                                    <input type="text" value="" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="utf_booking_payment_option_form">
                        <h3><i class="sl sl-icon-credit-card "></i> Payment Method</h3>
                        <div class="payment">
                            <div class="utf_payment_tab_block">
                                <div class="utf_payment_trigger_tab">
                                    <input checked="" id="stripe" name="cardType" type="radio" value="stripe">
                                    <label for="stripe">Paywith Stripe</label>
                                    <img class="utf_payment_logo stripe" src="images/stripe.png" alt="">
                                </div>
                                <div class="utf_payment_tab_block_content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="name">Name</label>
                                                <input id="nameOnCard" name="stripename" placeholder="Name" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="email">Email</label>
                                                <input id="email" name="email" placeholder="Email" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="phoneNumber">Phone Number</label>
                                                <input id="phoneNumber" placeholder="Phone Number" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="couponCode">Coupon Code?</label>
                                                <input id="couponCode" placeholder="Coupon Code" required="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="utf_payment_tab_block">
                                <div class="utf_payment_trigger_tab">
                                    <input checked="" id="paypal" name="cardType" type="radio" value="paypal">
                                    <label for="paypal">PayPal</label>
                                    <img class="utf_payment_logo paypal" src="images/paypal_pay.png" alt="">
                                </div>
                                <div class="utf_payment_tab_block_content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="payPalname">PayPal Name</label>
                                                <input id="nameOnCard" name="payPalname" placeholder="Paypal Name" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="payPalemail">PayPal Email</label>
                                                <input id="payPalemail" name="payPalemail" placeholder="Paypal Email" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="phoneNumber">Phone Number</label>
                                                <input id="phoneNumber" placeholder="Phone Number" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="couponCode">Coupon Code?</label>
                                                <input id="couponCode" placeholder="Coupon Code" required="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="utf_payment_tab_block utf_payment_tab_block_active">
                                <div class="utf_payment_trigger_tab">
                                    <input type="radio" name="cardType" id="creditCart" value="creditCard">
                                    <label for="creditCart">Credit / Debit Card</label>
                                    <img class="utf_payment_logo" src="images/pay_icon.png" alt="">
                                </div>
                                <div class="utf_payment_tab_block_content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="cardNumber">Card Number</label>
                                                <input id="cardnumber" name="cardNumber" placeholder="0000  0000  0000  0000" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-label">
                                                <label for="nameOnCard">Card Holder Name</label>
                                                <input id="cardname" name="cardName" placeholder="Card Holder Name" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-label">
                                                <label for="expirynDate">Expiry Month</label>
                                                <input id="expiryDate" placeholder="MM" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-label">
                                                <label for="expiryDate">Expiry Year</label>
                                                <input id="expirynDate" placeholder="YYYY" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-label">
                                                <label for="cvv">CVV Code</label>
                                                <input id="cvv" required="" placeholder="***" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="listing_booking_confirmation.html" class="button utf_booking_confirmation_button margin-top-20 margin-bottom-10">Confirm Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 margin-top-0 utf_listing_payment_section">
                    <div class="utf_booking_listing_item_container compact utf_order_summary_widget_section">

                        <div class="utf_listing_item_content">
                            <h3>Vintage Italian Beer Bar & Restaurant</h3>


                        </div>

                    </div>
                    <div class="boxed-widget opening-hours summary margin-top-0">
                        <h3><i class="fa fa-calendar-check-o"></i> Purchase Summary</h3>
                        <ul>
                            <li>Appearing <span>10 Jan 2019</span></li>
                            <li>Hour <span>1:30 PM</span></li>
                            <li>Disappearing <span>16 Jan 2019</span></li>
                            <li>Guests <span>3 Adults</span></li>
                            <li>Deposit <span>$230.00</span></li>
                            <li>V.A.T <span>$18.00</span></li>
                            <li class="total-costs">Sub Total <span>$248.00</span></li>


                        </ul>
                    </div>
                </div>
            </div>
            </form>
        </div>



        <!-- Footer -->

        <div id="bottom_backto_top"><a href="#"></a></div>


@endsection
