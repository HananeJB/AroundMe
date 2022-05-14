@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | dashboard</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')

    <div id="main_wrapper">
        <header id="header_part">
            <div id="header">
                <div class="container">
                    <div class="utf_left_side">
                        <div id="logo"> <a href="index_1.html"><img src="images/logo.png" alt=""></a> </div>
                        <div class="mmenu-trigger">
                            <button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
                            </button>
                        </div>
                        <nav id="navigation" class="style_one">
                            <ul id="responsive">
                                <li><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index_1.html">Home Version 1</a></li>
                                        <li><a href="index_2.html">Home Version 2</a></li>
                                        <li><a href="index_3.html">Home Version 3</a></li>
                                        <li><a href="index_4.html">Home Version 4</a></li>
                                        <li><a href="index_5.html">Home Version 5</a></li>
                                        <li><a href="index_6.html">Home Version 6</a></li>
                                        <li><a href="index_7.html">Home Version 7</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Listings</a>
                                    <ul>
                                        <li><a href="#">List Layout</a>
                                            <ul>
                                                <li><a href="listings_list_with_sidebar.html">Listing List Sidebar</a></li>
                                                <li><a href="listings_list_full_width.html">Listing List Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Grid Layout</a>
                                            <ul>
                                                <li><a href="listings_grid_with_sidebar.html">Listing Grid Sidebar</a></li>
                                                <li><a href="listings_two_column_map_grid.html">Listing Two Column Grid</a></li>
                                                <li><a href="listings_grid_full_width.html">Listing Grid Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Half Listing Map</a>
                                            <ul>
                                                <li><a href="listings_half_screen_map_list.html">Listing Half List</a></li>
                                                <li><a href="listings_half_screen_map_grid.html">Listing Half Grid</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Listing Details</a>
                                            <ul>
                                                <li><a href="listings_single_page_1.html">Single Listing Version 1</a></li>
                                                <li><a href="listings_single_page_2.html">Single Listing Version 2</a></li>
                                                <li><a href="listings_single_page_3.html">Single Listing Version 3</a></li>
                                                <li><a href="listings_single_page_4.html">Single Listing Version 4</a></li>
                                                <li><a href="listings_single_page_5.html">Single Listing Version 5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">User Panel</a>
                                    <ul>
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="dashboard_add_listing.html">Add Listing</a></li>
                                        <li><a href="dashboard_my_listing.html">My Listings</a></li>
                                        <li><a href="dashboard_bookings.html">Bookings</a></li>
                                        <li><a href="dashboard_messages.html">Messages</a></li>
                                        <li><a href="dashboard_wallet.html">Wallet</a></li>
                                        <li><a href="dashboard_visitor_review.html">Reviews</a></li>
                                        <li><a href="dashboard_bookmark.html">Bookmark</a></li>
                                        <li><a href="dashboard_my_profile.html">My Profile</a></li>
                                        <li><a href="dashboard_change_password.html">Change Password</a></li>
                                        <li><a href="dashboard_invoice.html">Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog_page.html">Blog Grid</a></li>
                                        <li><a href="blog_page_left_sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog_page_right_sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog_detail_left_sidebar.html">Blog Detail Leftside</a></li>
                                        <li><a href="blog_detail_right_sidebar.html">Blog Detail Rightside</a></li>
                                    </ul>
                                </li>
                                <li><a class="current" href="#">Pages</a>
                                    <ul>
                                        <li><a href="page_about.html">About Us</a></li>
                                        <li><a href="#">Categorie Type</a>
                                            <ul>
                                                <li><a href="page_categorie_one.html">Categorie One</a></li>
                                                <li><a href="page_categorie_two.html">Categorie Two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="add_listing.html">Add Listing</a></li>
                                        <li><a class="active" href="listing_booking.html">Booking Listing</a></li>
                                        <li><a href="page_pricing.html">Pricing Plan</a></li>
                                        <li><a href="wishlist_listings.html">Wishlist Page</a></li>
                                        <li><a href="page_filtering_style.html">Filtering Style</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="page_element.html">Page Element</a></li>
                                        <li><a href="page_faqs.html">Page Faq</a></li>
                                        <li><a href="#">Icons</a>
                                            <ul>
                                                <li><a href="page_icons_one.html">Icon-Mind Icon</a></li>
                                                <li><a href="page_icons_two.html">Simple Line Icon</a></li>
                                                <li><a href="page_icons_three.html">Font Awesome Icon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="page_not_found.html">Page Error 404</a></li>
                                        <li><a href="page_coming_soon.html">Coming Soon</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                    <div class="utf_right_side">
                        <div class="header_widget"> <a href="#dialog_signin_part" class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i> Sign In</a> <a href="dashboard_add_listing.html" class="button border with-icon"><i class="sl sl-icon-user"></i> Add Listing</a></div>
                    </div>

                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Choose Payment Option</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index_1.html">Home</a></li>
                                <li>Choose Payment Option</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container margin-bottom-75">
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
        </div>



        <!-- Footer -->
        <div id="footer" class="footer_sticky_part">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>Useful Links</h4>
                        <ul class="social_footer_link">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Listing</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>My Account</h4>
                        <ul class="social_footer_link">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">My Listing</a></li>
                            <li><a href="#">Favorites</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>Pages</h4>
                        <ul class="social_footer_link">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Our Partners</a></li>
                            <li><a href="#">How It Work</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>Help</h4>
                        <ul class="social_footer_link">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Add Listing</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom_backto_top"><a href="#"></a></div>
    </div>

@endsection
