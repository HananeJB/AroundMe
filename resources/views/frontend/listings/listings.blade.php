@extends('layouts.frontend_layout')

@section('head')
    <title>AroundMe | Etablissements</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')

<div id="wrapper" class="mm-page mm-slideout">

    <div class="clearfix"></div>
    <div class="fs-container">
        <div class="fs-inner-container content">
            <div class="fs-content">
                <div class="search">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row with-forms">
                                <div class="col-fs-6">
                                    <div class="input-with-icon"> <i class="sl sl-icon-magnifier"></i>
                                        <input type="text" placeholder="Que cherchez-vous?" value=""/>
                                    </div>
                                </div>
                                <div class="col-fs-6">
                                    <div class="intro-search-field utf-chosen-cat-single">
                                        <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Sélectionnez l'emplacement">
                                            <option>Agadir</option>
                                            <option>Marrackech</option>
                                            <option>Casablanca</option>
                                            <option>Rabat</option>
                                            <option>Essaouira</option>
                                            <option>Fes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="listing_filter_block">
                                        <div class="col-md-3 col-xs-3">
                                            <div class="utf_layout_nav"> <a href="listings_half_screen_map_grid.html" class="grid"><i class="fa fa-th"></i></a> <a href="#" class="list active"><i class="fa fa-align-justify"></i></a> </div>
                                        </div>
                                        <div class="col-md-9 col-xs-9">
                                            <div class="sort-by utf_panel_dropdown sort_by_margin float-right"> <a href="#">Destination</a>
                                                <div class="utf_panel_dropdown-content">
                                                    <input class="distance-radius" type="range" min="1" max="999" step="1" value="1" data-title="Select Range">
                                                    <div class="panel-buttons">
                                                        <button class="panel-apply">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sort-by">
                                                <div class="utf_sort_by_select_item sort_by_margin">
                                                    <select data-placeholder="Sort by Listing" class="utf_chosen_select_single">
                                                        <option>Sort by Listing</option>
                                                        <option>Latest Listings</option>
                                                        <option>Popular Listings</option>
                                                        <option>Price (Low to High)</option>
                                                        <option>Price (High to Low)</option>
                                                        <option>Highest Reviewe</option>
                                                        <option>Lowest Reviewe</option>
                                                        <option>Newest Listing</option>
                                                        <option>Oldest Listing</option>
                                                        <option>Random Listings</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="sort-by">
                                                <div class="utf_sort_by_select_item sort_by_margin">
                                                    <select data-placeholder="Categories:" class="utf_chosen_select_single">
                                                        <option>Catégories</option>
                                                        <option>Hotels & Riads</option>
                                                        <option>Manger & Boire</option>
                                                        <option>Nature</option>
                                                        <option>Vie nocturne</option>
                                                        <option>Evenements</option>
                                                        <option>Restaurants</option>
                                                        <option>Parcs d'attraction</option>
                                                        <option>Monuments</option>
                                                        <option>Cinema</option>
                                                        <option>Sport</option>
                                                        <option>Activitées</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="listings-container margin-top-30">
                    <div class="row fs-switcher">
                        <div class="col-md-12">
                            <p class="showing-results">06 Results Found</p>
                        </div>
                    </div>
                    <div class="row fs-listings">
                        @foreach($listings as $listing)
                        <div class="col-lg-12 col-md-12">
                            <div class="utf_listing_item-container list-layout"> <a href="/etablissements/detail/{{$listing->id}}" class="utf_listing_item">
                                    <div class="utf_listing_item-image">
                                        <img style="width: 620px; height: 430px;" src="{{$listing->cover}}" alt="">
                                        <span class="like-icon"></span>
                                        <span class="tag"><i class="im im-icon-Hotel"></i> {{$listing->tags}}</span>
                                        <span class="featured_tag">{{$listing->listing_tags}}</span>
                                        <div class="utf_listing_prige_block utf_half_list">
                                            <span class="utf_meta_listing_price"><i class="fa fa-tag"></i>{{$listing->price}}</span>
                                            <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                        </div>
                                    </div>
                                    <span class="utf_open_now">{{$listing->status}}</span>
                                    <div class="utf_listing_item_content">
                                        <div class="utf_listing_item-inner">
                                            <h3>{{$listing->listing_title}}<i class="utf_approve_listing"></i></h3>
                                            <span><i class="sl sl-icon-location"></i>{{$listing->address}}</span>
                                            <span><i class="sl sl-icon-phone"></i>{{$listing->phone}}</span>
                                            <div class="utf_star_rating_section" data-rating="4.5">
                                                <div class="utf_counter_star_rating">(4.5)</div>
                                            </div>
                                            @php
                                                $body = substr($listing->description, 0, 150);
                                            @endphp
                                            <p>{!! $body !!}...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="utf_pagination_container_part margin-top-20 margin-bottom-0">
                                        <nav class="pagination">
                                            <ul>
                                                <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                                <li><a href="#" class="current-page">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                </div>
            </div>
        </div>
        <div class="fs-inner-container map-fixed">
            <div id="utf_map_container">
                <div id="map" data-map-zoom="9" data-map-scroll="true"> </div>
            </div>
        </div>
    </div>
</div>
<style>
    #footer.footer_sticky_part{
        display: none;
    }
</style>

@endsection
@section('custom_js')
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="scripts/infobox.min.js"></script>
    <script src="scripts/markerclusterer.js"></script>
    <script src="scripts/maps.js"></script>
@endsection


