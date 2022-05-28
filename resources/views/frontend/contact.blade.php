@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | Contact</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')



        <div class="clearfix"></div>

        <!-- Content -->
        <div class="utf_contact_map margin-bottom-70">
            <div id="utf_single_listing_map_block">
                <div id="utf_single_listingmap" data-latitude="36.778259" data-longitude="-119.417931" data-map-icon="im im-icon-Map2"></div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <section id="contact" class="margin-bottom-70">
                        <h4><i class="sl sl-icon-phone"></i> Contact Us</h4>
                        <form id="contactform">
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Frist Name" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="name" type="text" placeholder="Last Name" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="email" type="email" placeholder="Email" required />
                                </div>
                                <div class="col-md-6">
                                    <input name="subject" type="text" placeholder="Subject" required />
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <input type="submit" class="submit button" id="submit" value="Submit" />
                        </form>
                    </section>
                </div>

                <div class="col-md-4">
                    <div class="utf_box_widget margin-bottom-70">
                        <h3><i class="sl sl-icon-map"></i> Office Address</h3>
                        <div class="utf_sidebar_textbox">
                            <ul class="utf_contact_detail">
                                <li><strong>Phone:-</strong> <span>+ 001 245 0154</span></li>
                                <li><strong>Web:-</strong> <span><a href="#">www.sitename.com</a></span></li>
                                <li><strong>E-Mail:-</strong> <span><a href="mailto:info@example.com">info@example.com</a></span></li>
                                <li><strong>Address:-</strong> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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