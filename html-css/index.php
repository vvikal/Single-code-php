<!DOCTYPE html>
<?php include("header.html") ?>
<html lang="en">

<body>
    <!-- **** Header Area End **** -->

    <!-- **** Welcome Maps Area Start **** -->
    <div class="welcome-area wow fadeInUp" data-wow-delay="200ms">
        <div class="google-maps">
            <iframe src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=New%20Delhi%2C%20India+(%E0%A4%B6%E0%A5%80%E0%A4%B0%E0%A5%8D%E0%A4%B7%E0%A4%95)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" allowfullscreen></iframe>
        </div>
    </div>
    <!-- **** Welcome Maps Area End **** -->

    <!-- **** Location Search Form Area **** -->
    <div class="rehomes-search-form-area wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="rehomes-search-form">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="location" id="location" class="form-control">
                                        <option value="location">Location</option>
                                        <option value="Lucknow">Lucknow</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Kolkata">Kolkata</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Jaipur">Jaipur</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="types" id="types" class="form-control">
                                        <option value="all-types">All Types</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="office">Office</option>
                                        <option value="villa">Villa</option>
                                        <option value="apartment">Apartment</option>
                                        <option value="condominium">Condominium</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="city" id="city" class="form-control">
                                        <option value="01">All City</option>
                                        <option value="02">Himachal Pradesh</option>
                                        <option value="03">Delhi</option>
                                        <option value="04">Singapore</option>
                                        <option value="05">Uttar Pradesh</option>
                                        <option value="06">Kerala</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="all" id="all" class="form-control">
                                        <option value="01">For All</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="bedrooms" id="bedrooms" class="form-control">
                                        <option value="bedrooms">Bedrooms</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <select name="bathroom" id="bathroom" class="form-control">
                                        <option value="Bathroom">Bathroom</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="slider-range mb-15">
                                        <div class="range-price text-white">Price ₹[30000 - 150000]</div>
                                        <div class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="0" data-max="200000" data-unit="$" data-value-min="30000" data-value-max="150000" data-label-result="Price">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="slider-range mb-15">
                                        <div class="range-size text-white">Size [9762 - 72063]sqFt</div>
                                        <div data-min="0" data-max="98623" data-unit="sqFt" class="slider-range-size ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="9762" data-value-max="72063" data-label-result="Size">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <button type="submit" class="btn rehomes-search-btn">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- **** Location Search Form Area **** -->

    <!-- **** Sale area Start **** -->
    <section class="rehome-house-sale-area section-padding-100-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                        <h2>Top New In <span>Delhi</span></h2>
                        <p>These are the best deals and deals. All in Delhi and nearby area</p>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/1.jpg" alt="best homes in delhi">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>7660 Sainik Colony</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Ashram</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>RanaVijay</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price">₹16,599/month</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/2.jpg" alt="best homes in delhi, besthouses">
                        </div>
                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>736 Ashram</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Delhi</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>KamalNath</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-sale">For Rent</p>
                            <p class="price">₹20,120.000</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/3.jpg" alt="best homes in delhi">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>170 Yamuna Nagar</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Delhi</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Dharmendra</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price">₹19,599/month</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/4.jpg" alt="best homes in delhi">
                        </div>
                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>58 Sainik Colony</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Delhi</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>RanaVijay</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-sale">For Rent</p>
                            <p class="price">₹23,120.000</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/5.jpg" alt="best homes in delhi">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>8332 Ramiro Village</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Delhi</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Kamalnath</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-sale">For Rent</p>
                            <p class="price">₹23,120.000</p>
                        </div>
                    </div>
                </div>

                <!-- Single Property Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/6.jpg" alt="best homes in delhi">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>221 Anand Vihar</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Delhi</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Kamalnath</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price">₹10,599/month</p>
                        </div>
                    </div>
                </div>
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/a1.jpg" alt="best homes in delhi">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>221 Anand Vihar</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Delhi</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Kamalnath</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price">₹10,599/month</p>
                        </div>
                    </div>
                </div> <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/a2.jpg" alt="best homes in delhi">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>221 Anand Vihar</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Delhi</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Kamalnath</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price">₹10,599/month</p>
                        </div>
                    </div>
                </div> 
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="img/bg-img/a1.jpg" alt="best homes in delhi">
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4>221 Anand Vihar</h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> GA 125, Delhi</p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6>Kamalnath</h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span>1420 m2</span></p>
                                <p>Garage: <span>2</span></p>
                                <p>Baths: <span>05</span></p>
                                <p>Baths: <span>06</span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price">₹20,599/month</p>
                        </div>
                    </div>
                </div>
               <?php 
                    $conn = mysqli_connect('localhost','root','','estate');

                 $query=mysqli_query($conn,"select * from property");
                 $cnt=1;
                  while($row=mysqli_fetch_array($query))
                 {
                 ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                         
                        <div class="property-thumb">
                           <?php echo 
                                 "<img src=\"images/" . $row['image'] . "\" />"  ?>
                        </div>

                        <!-- Property Description -->
                        <div class="property-desc-area">
                            <!-- Property Title & Seller -->
                            <div class="property-title-seller d-flex justify-content-between">
                                <!-- Title -->
                                <div class="property-title">
                                    <h4><?php echo $row['1']; ?></h4>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row['2'];?></p>
                                </div>
                                <!-- Seller -->
                                <div class="property-seller">
                                    <p>Seller:</p>
                                    <h6><?php echo $row['3'];?></h6>
                                </div>
                            </div>
                            <!-- Property Info -->
                            <div class="property-info-area d-flex flex-wrap">
                                <p>Sqft: <span><?php echo $row['4']," m2";?></span></p>
                                <p>Garage: <span><?php echo $row['5'];?></span></p>
                                <p>Baths: <span><?php echo $row['6'];?></span></p>
                                <p>Baths: <span><?php echo $row['7'];?></span></p>
                            </div>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">For Rent</p>
                            <p class="price"><?php echo "₹",$row['8'],"/month";?></p>
                        </div>
                    </div>
                </div>
                        <?php
                    $cnt=$cnt+1;
                     } ?>
            </div>
        </div>
    </section>
    <!-- **** Sale Area End **** -->

    <!-- **** Choose Us Area Start **** -->
    <section class="rehomes-choose-us-area section-padding-100-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                        <h2><span>Why</span> Choose Us?</h2>
                        <p>We have over 8 years of experience and knowledge on how to sell more.</p>
                    </div>
                </div>

                <!-- Single choose us content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-choose-us-content wow fadeInUp" data-wow-delay="200ms">
                        <!-- Choose us Icon -->
                        <div class="choose-us-icon">
                            <i class="icon_search"></i>
                        </div>
                        <h5>Find Your Home</h5>
                        <p>Quis ipsum suspendisse ultrices, risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                </div>

                <!-- Single choose us content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-choose-us-content wow fadeInUp" data-wow-delay="200ms">
                        <!-- Choose us Icon -->
                        <div class="choose-us-icon">
                            <i class="icon_building"></i>
                        </div>
                        <h5>Transportation support</h5>
                        <p>Quis ipsum suspendisse ultrices, risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                </div>

                <!-- Single choose us content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-choose-us-content wow fadeInUp" data-wow-delay="200ms">
                        <!-- Choose us Icon -->
                        <div class="choose-us-icon">
                            <i class="icon_creditcard"></i>
                        </div>
                        <h5>Save Your Money</h5>
                        <p>Quis ipsum suspendisse ultrices, risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- **** Choose Us Area End **** -->

    <!-- **** Categories By Property Area Start **** -->
    <section class="rehomes-categories-property-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                        <h2>Categories By <span>Property</span></h2>
                        <p>We have over 8 years of experience and knowledge on how to sell more.</p>
                    </div>
                </div>

                <!-- Single Categories and Property Content -->
                <div class="col-12 col-md-8">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img src="img/bg-img/7.jpg" alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">25 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Villa In Delhi</a>
                            <p>From ₹2800000</p>
                        </div>
                    </div>
                </div>

                <!-- Single Categories and Property Content -->
                <div class="col-12 col-md-4">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img src="img/bg-img/8.jpg" alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">25 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Home In Gurgaon</a>
                            <p>From ₹1000000</p>
                        </div>
                    </div>
                </div>

                <!-- Single Categories and Property Content -->
                <div class="col-12 col-md-4">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img src="img/bg-img/9.jpg" alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">25 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Home In Noida</a>
                            <p>From ₹1600000</p>
                        </div>
                    </div>
                </div>

                <!-- Single Categories and Property Content -->
                <div class="col-12 col-md-8">
                    <div class="single-categories-property-area bg-gradient-overlay wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <a href="#"><img src="img/bg-img/10.jpg" alt=""></a>
                        </div>
                        <!-- Title -->
                        <a class="categories-title" href="#">25 Properties</a>
                        <!-- Property Name and Price -->
                        <div class="property-name-price-text">
                            <a href="#">Villa In Haryana</a>
                            <p>From ₹3600000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- **** Categories By Property Area End **** -->

    <!-- **** Call to Action Area Start **** -->
    <section class="rehome-call-to-action-area bg-overlay bg-img jarallax section-padding-100" style="background-image: url(img/bg-img/11.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <!-- Call to Action Content -->
                    <div class="call-to-action-content wow fadeInUp" data-wow-delay="200ms">
                        <h2>Download app &amp; join now!</h2>
                        <p>Download and sign up to receive all the latest real estate news.</p>
                        <!-- Button -->
                        <div class="download-btn">
                            <a class="mr-2" href="#"><img src="img/bg-img/12.png" alt=""></a>
                            <a href="#"><img src="img/bg-img/13.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **** Call to Action Area End **** -->

    <!-- **** Blog area Start **** -->
    <section class="rehome-blog-area section-padding-100-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="200ms">
                        <h2>Latest <span>News</span></h2>
                        <p>Sign up for the latest real estate information and more.</p>
                    </div>
                </div>

                <!-- Single blog content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="img/bg-img/14.jpg" alt="">
                        </div>
                        <a class="post-title" href="#">Benjamin Franklin S Method Of Habit Formation</a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-author" href="#">By Polly Williams</a>
                            <a class="post-date" href="#">Dec 19, 2018</a>
                            <a class="post-comment" href="#">3 Comment</a>
                        </div>
                    </div>
                </div>

                <!-- Single blog content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="img/bg-img/15.jpg" alt="">
                        </div>
                        <a class="post-title" href="#">How To Set Intentions That Energize You</a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-author" href="#">By Mattie Ramirez </a>
                            <a class="post-date" href="#">Dec 19, 2018</a>
                            <a class="post-comment" href="#">3 Comment</a>
                        </div>
                    </div>
                </div>

                <!-- Single blog content -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="img/bg-img/16.jpg" alt="">
                        </div>
                        <a class="post-title" href="#">Burning Desire Golden Key Or Red Herring</a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a class="post-author" href="#">By Nicholas Brewer</a>
                            <a class="post-date" href="#">Dec 19, 2018</a>
                            <a class="post-comment" href="#">3 Comment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **** Blog area End **** -->

    <!-- **** Partner Area Start **** -->
    <div class="partner-area wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-slide owl-carousel">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="100ms"><img src="img/core-img/1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="300ms"><img src="img/core-img/2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="500ms"><img src="img/core-img/3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="700ms"><img src="img/core-img/4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo wow fadeInUp" data-wow-delay="900ms"><img src="img/core-img/5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- **** Partner Area End **** -->

    <!-- **** Footer Area Start **** -->
    <?php include("footer.html") ?>
    <!-- **** Footer Area End **** -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/rehomes.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>