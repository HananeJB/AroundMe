@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | Confirmation</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')


        <div class="clearfix"></div>

        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Pricing</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="/business">Home</a></li>
                                <li>Pricing</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="fullwidth_block margin-top-0 padding-top-0 padding-bottom-50" data-background-color="#fff">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="headline_part centered margin-bottom-20">Choose Your Plan<span>Discover & connect with top-rated local businesses</span></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="utf_pricing_container_block margin-top-30 margin-bottom-30">
                        <div class="plan featured col-md-3 col-sm-6 col-xs-12">
                            <div class="utf_price_plan">
                                <h3>Basic</h3>
                                <span class="value">$29<span>/Par Month</span></span> <span class="period">Basic User Membership</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button border" href="/register_lisitng"><i class="sl sl-icon-basket"></i> Order Now</a>
                            </div>
                        </div>

                        <div class="plan featured col-md-3 col-sm-6 col-xs-12 active">
                            <div class="utf_price_plan">
                                <h3>Business</h3>
                                <span class="value">$49<span>/Par Month</span></span> <span class="period">Business User Membership</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button" href="#"><i class="sl sl-icon-basket"></i> Order Now</a>
                            </div>
                        </div>

                        <div class="plan featured col-md-3 col-sm-6 col-xs-12">
                            <div class="utf_price_plan">
                                <h3>Premium</h3>
                                <span class="value">$69<span>/Par Month</span></span> <span class="period">Premium User Membership</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button border" href="#"><i class="sl sl-icon-basket"></i> Order Now</a>
                            </div>
                        </div>

                        <div class="plan featured col-md-3 col-sm-6 col-xs-12">
                            <div class="utf_price_plan">
                                <h3>Platinum</h3>
                                <span class="value">$99<span>/Par Month</span></span> <span class="period">Platinum User Membership</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button border" href="#"><i class="sl sl-icon-basket"></i> Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="utf_cta_area_item utf_cta_area2_block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_subscribe_block clearfix">
                            <div class="col-md-8 col-sm-7">
                                <div class="section-heading">
                                    <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Newsletter!</h2>
                                    <p class="utf_sec_meta">
                                        Subscribe to get latest updates and information.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <span class="la la-envelope-o"></span>
                                        <input class="form-control" type="email" placeholder="Enter your email" required="">
                                        <button class="utf_theme_btn" type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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


@endsection
