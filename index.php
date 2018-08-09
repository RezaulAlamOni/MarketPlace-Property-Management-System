
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MarketPlace Property Management Company || Home</title>
    <link rel="icon" type="image/x-icon" href="images/hicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="MarketPlace a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/mainStyles.css" /><!-- for banner -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- Property for sale section Script-->
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 6000, //Set AutoPlay to 6 seconds
                autoPlay:true,
                items : 3,
                itemsDesktop : [640,5],
                itemsDesktopSmall : [414,4]
            });
        });
    </script>
</head>
<body>
<div class="container-fluid">
    <!-- banner -->
    <div class="banner" id="home">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="index.html"><span>Market</span>Place</a></h1>
                <i class="fa fa-home" aria-hidden="true"></i>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>
                        <li><a href="#about" class="scroll"><span data-hover="About">About</span></a></li>
                        <li><a href="#services" class="scroll"><span data-hover="Services">Services</span></a></li>
                        <li><a href="#team" class="scroll"><span data-hover="Agents">Agents</span></a></li>
                        <!--<li><a href="#testimonials" class="scroll"><span data-hover="Testimonial">Testimonial</span></a></li>-->
                        <li><a href="#contact" class="scroll"><span data-hover="Contact Us">Contact Us</span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="agileits-social top_content">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- //banner -->
    <!-- slider -->
    <div id="exampleSlider">
        <div>
            <h3 style="text-transform: none; color: black; ">Are you a renter looking for a safe and reliable apartment <span style="color:black">close to your work or your children’s school?</span></h3>
            <div class="readmore-w3">
                <a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
            </div>
        </div>

        <div>
            <h3 style="text-transform: none; color:#ff4000">Are you looking for a nicely maintained apartment<span style="color:#ff4000">that you can call “home”?</span></h3>
            <div class="readmore-w3">
                <a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
            </div>
        </div>

        <div>
            <h3 style="text-transform: none; color: black;">Are you a home/apartment owner looking to rent out your home/apartment hassle free?</h3>
            <div class="readmore-w3">
                <a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
            </div>
        </div>
        <div>
            <h3 style="text-transform: none; color: #93003e">Are you dreaming to collect your rent every month <span style="color:#85003a"> without losing your sleep? </span></h3>
            <div class="readmore-w3">
                <a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
            </div>
        </div>
        <div>
            <h3 style="text-transform: none;color: #bdff00 ">Whether you are a renter or home owner, <span style="color:#a7e000">“MarketPlace Property Management” </span><span style="color:#a4dd00">is ready to make your dream comes true.</span></h3>
            <div class="readmore-w3">
                <a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
            </div>
        </div>

    </div>
    <!-- Bootstrap modal popup -->
    <div class="modal fade " id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 style="text-transform: uppercase;"><span>Which purpose we want to help you :)</span></h3>
                    <img src="images/b.jpg" alt=" " class="img-responsive" style="height: 200px;">
                    <!--<h5>Want to be a successful landlord</h5>-->

                    <ol style="font-size: 18px;text-align: justify;">
                        <li><h5 style="color: #95009c">Are you a renter looking for a safe and reliable apartment close to your work or your children’s school?</h5></li>
                        <li><h5 style="color: #54009c">Are you looking for a nicely maintained apartment that you can call “home”?</h5></li>
                        <li><h5 style="color: #000b9c">Are you a home/apartment owner looking to rent out your home/apartment hassle free?</h5></li>
                        <li><h5 style="color: #000000">Are you dreaming to collect your rent every month without losing your sleep?</h5></li>
                        <li><h5 style="color: #00258b">Whether you are a renter or home owner, “MarketPlace Property Management”</h5></li>


                    </ol>

                </div>
            </div>
        </div>
    </div>
    <!-- about -->
    <div class="about" id="about" style="background-color: #dff0d8;">
        <h3 class="heading"><span>Who We Are</span></h3>
        <div class="container">
            <div class="services-grids ">
                <div class="col-md-6 services-grids-info ">
                    <h3 style="text-align: center; text-transform: none;">Welcome to "MarketPlace Property Management" Co.</h3>
                    <p style="color: green;text-align: justify;">
                        __Started in 2018, MarketPlace is a worry-free reliable property leasing and management company,
                        first of its kind in Bangladesh. Educated  and  experienced in managing property in the UK. MarketPlace
                        Management has learned what’s important to people when it comes to a place to call home and the services
                        that enhance the living experience. And that’s why we put our heart and soul into providing beautiful living
                        environments. We’re thankful for this privilege and take deep pride in knowing that our apartments are a place
                        where residents celebrate life’s important moments with friends and family.
                    </p>
                    <p style="color: darkorchid;text-align: justify;">
                        "__At MarketPlace, we care about our residents and clients -- and it shows. Every day, we work together
                        to make a difference. We are not set out to be a servicing company, only to be the best. Our focus on people,
                        genuine relationships, and shared values are set to create a unique and defining company culture."
                    </p>

                </div>

                <!--<div class="col-md-4 services-grids-info">-->
                <!--<img src="images/about.jpg" alt="">-->
                <!--</div>-->
                <div class="col-md-6 services-grids-info sgi1">
                    <h3 style="text-align: center; text-transform:none;">We are full service residential leasing company.</h3>
                    <ul style="color: #c7254e; font-size: 15px;text-transform: none;">
                        <li></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Perform a market analysis to determine fair market value to list for lease.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">List the property for lease and advertise your property on over different internet websitese.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Complete a tenant application.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Process tenant income verification.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Contact former landlord(s) and employers when available.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Verify National ID card.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Annual Property Inspections.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Drafting of lease documents and proper landlord disclosure statements.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Collection of rent and automatic deposits into your account.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Move-In and Move-Out checklists.</a></li>
                        <li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">We offer maintenance services and various professionals available at all times.</a></li>
                    </ul>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--services-->
    <div class="services" id="services">
        <h3 class="heading"><span>Our Services</span></h3>
        <div class="container">
            <div class="col-md-12 servicesleft">
                <h2 style="color:#000000;text-align: center;text-transform: capitalize;">Modern Apartment for your luxuries life</h2>
                <!--<h4 style="color: #fff2f2;text-align: center;">Our services include leasing and managing homes/apartments,-->
                <!--apartment buildings, commercial retail buildings, and office buildings. </h4>-->
                <div class="serviceslefttop">
                    <div class="col-md-6">
                        <div class="grid1 clr1">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <h2 >Services for Home/Apartment Owners<br></h2>

                            <p style="text-align: justify;color: #fafffb;font-size:16px;">
                                <br>___Residential property management can be time-consuming, whether you are physically close to the location
                                of the property or far away. With the increasing number of families having grown-up children living
                                abroad, renting out and managing home/apartment in Bangladesh becoming very difficult day by day.
                                Contract execution, property showings, rent collection, maintenance, and general day-today needs
                                of tenants need to be given top priority.
                            </p>
                            <p style="text-align: justify; color: #ffffff;font-size: 15px;">
                                <br>___Whether you need us to manage a vacant property, find a
                                new tenant for an existing property, or manage a property you already have occupied, we can help.
                                We have the most extensive tenant screening process available, to ensure the highest quality of
                                renters for your property. In addition, we offer maintenance services to help keep your costs to
                                a minimum.  Our maintenance team offers a wide range of repair services that keep properties in
                                good condition at an affordable cost.

                            </p>
                            <h4 style="text-align: right;"><br>-MarketPlace</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="grid1 clr2">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <h2>Services for Renters</h2>
                            <P style="text-align: justify;color: wheat;font-size: 15px;">
                                <br>
                                ___Whether you are looking for an apartment and single-family home to rent for your family or friend you can rely on us.
                                We will find your dream home that meets or exceeds your expectations.
                                <br><br>___At MarketPlace, we care about our residents and clients -- and it shows. Every day, we work together to make
                                a difference. We are not set out to be a servicing company, only to be the best. Our focus on people,
                                genuine relationships, and shared values are set to create a unique and defining company culture.
                            </P>
                            <p style="color: black;text-align: justify;text-transform: none; font-size: 15px">
                                <br>
                                Our services include leasing and managing homes/apartments, apartment buildings,
                                commercial retail buildings, and office buildings.</p>
                            <br><br>
                            <p style="font-size: 15px;color: #c7254e">
                            <li>Apartment On Premier House.</li>
                            <li>Office Buildings.</li>
                            <li>Prices are low & parking allowance.</li>
                            <li>Best design architecture.</li>
                            </p>
                            <h4 style="text-align: right;"><br>-MarketPlace</h4>
                        </div>
                        <!--<div class="grid1 clr3">-->
                        <!--<i class="fa fa-server" aria-hidden="true"></i>-->
                        <!--<h2>Full Service Residential Leasing Company</h2>-->
                        <!--<p style="text-align: justify;tab-size: 15px;color: wheat;">-->
                        <!--Many times, our clients approach us to find them a qualified tenant for their property.-->
                        <!--We are qualified to handle the entire leasing process including:-->
                        <!--</p>-->
                        <!--<div class="readmore-w3">-->
                        <!--<a class="readmore" href="#" data-toggle="modal" data-target="#myModal11">Click Here For Details</a>-->
                        <!--</div>-->
                        <!--<h4 style="text-align: right;">-MarketPlace</h4>-->
                        <!--</div>-->
                    </div>

                    <!--<div class="col-md-4">-->
                    <!--<div class="grid1 clr6">-->
                    <!--<i class="fa fa-building-o" aria-hidden="true"></i>-->
                    <!--<h4>Office value</h4>-->
                    <!--<h4>-MarketPlace</h4>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="clearfix"></div>-->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- team -->
    <div class="team" id="team">
        <h3 class="heading"><span>Meet our Leadership</span></h3>
        <div class="container">
            <div class="inner_w3l_agile_grids">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>
                            <img src="images/u.jpg" alt=" " class="img-responsive" />
                        </li>
                        <li>
                            <img src="images/oni1.jpg" alt=" " class="img-responsive" />
                        </li>
                        <li>
                            <img src="images/nasir.jpg" alt=" " class="img-responsive" />
                        </li>
                        <li>
                            <img src="images/nizam.jpg" alt=" " class="img-responsive" />
                        </li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab2">
                            <div class="col-md-6 team-img-w3-agile"></div>
                            <div class="col-md-6 team-Info-agileits">
                                <h4 style="text-transform: capitalize;">Jahirul Islam </h4>
                                <span>President & CEO</span>
                                <p style="text-align: justify; font-size: 16px;color: #7d3f98">Jahirul Islma is President & CEO of MarketPlace Property Management Company .</p>
                                <p class="phone"><b>Call me</b>  +(880) 1726887879</p>
                                <div class="w3_agileits_social_media team_agile_w3l">
                                    <ul class="social-icons3">
                                        <li class="agileinfo_share">Follow me on</li>
                                        <li><a href="https://www.facebook.com/uzl.islam" class="wthree_facebook" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <!--<li><a href="" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                        <!--<li><a href="#" class="wthree_dribbble"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                                        <li><a href="https://www.instagram.com/uzzal12/?hl=en" class="wthree_behance" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="tab1">
                            <div class="col-md-6 team-img-w3-agile">
                            </div>
                            <div class="col-md-6 team-Info-agileits">
                                <h4 style="text-transform: capitalize;">Rezaul Alam Oni</h4>
                                <span>MarketPlace leasing consultants</span> <br><span style="color: #000b9c;"> Admin</span>
                                <p style="text-align: justify; font-size: 16px;color: #7d3f98">
                                    "Rezaul Alam is a leasing consultant at MarketPlace property Management. Experienced in leasing, finding tenant and apartment that perfectly fits with your needs.
                                    Rezaul is a computer engineer and a founding member of MarketPlace Property Management".
                                </p>
                                <p class="phone"><b>Call me</b>  +(880) 1687855988</p>
                                <div class="w3_agileits_social_media team_agile_w3l">
                                    <ul class="social-icons3">
                                        <li class="agileinfo_share">Follow me on</li>
                                        <li><a href="https://www.facebook.com/Rezaul.Alam.Oni" class="wthree_facebook" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/RezaulOni" class="wthree_twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/rezaul-alam-oni-153067121/ target="_blank"" class="wthree_dribbble"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/rezaul_oni/" class="wthree_behance" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="tab3">
                            <div class="col-md-6 team-img-w3-agile">
                            </div>
                            <div class="col-md-6 team-Info-agileits">
                                <h4 style="text-transform: capitalize;">Md Nasir Uddin</h4>
                                <span>MarketPlace leasing consultants</span>
                                <p style="text-align: justify; font-size: 16px;color: #7d3f98">
                                    "Md Nasir Uddin is a leasing consultant at MarketPlace property Management.
                                    Nasir Uddin is a founding member of MarketPlace Property Management".
                                </p>
                                <p class="phone"><b>Call me</b>  +(880) 1671307583</p>
                                <div class="w3_agileits_social_media team_agile_w3l">
                                    <ul class="social-icons3">
                                        <li class="agileinfo_share">Follow me on</li>
                                        <li><a href="https://www.facebook.com/nasir.uddin.3998" class="wthree_facebook" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <!--											<li><a href="https://twitter.com/RezaulOni" class="wthree_twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                        <!--											<li><a href="https://www.linkedin.com/in/rezaul-alam-oni-153067121/" target="_blank" class="wthree_dribbble"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                                        <li><a href="https://www.instagram.com/nasir____uddin/" target="_blank" class="wthree_behance"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="tab4">
                            <div class="col-md-6 team-img-w3-agile">
                            </div>
                            <div class="col-md-6 team-Info-agileits">
                                <h4 style="text-transform: capitalize;">Nazrul Islam Nizam</h4>
                                <span>MarketPlace leasing consultants</span>
                                <p style="text-align: justify; font-size: 16px;color: #7d3f98">
                                    "Nazrul Islam is a leasing consultant at MarketPlace property Management.
                                    Nazrul Islam is a founding member of MarketPlace Property Management".									</p>
                                <p class="phone"><b>Call me</b>  +(880) 1687855988</p>
                                <div class="w3_agileits_social_media team_agile_w3l">
                                    <ul class="social-icons3">
                                        <li class="agileinfo_share">Follow me on</li>
                                        <li><a href="https://www.facebook.com/nazrul.islma.58" class="wthree_facebook" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <!--											<li><a href="https://twitter.com/RezaulOni" class="wthree_twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                        <!--											<li><a href="https://www.linkedin.com/in/rezaul-alam-oni-153067121/" target="_blank" class="wthree_dribbble"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                                        <li><a href="https://www.instagram.com/nazrul_nizam10/" class="wthree_behance" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <!--count-->
    <div class="count-agileits" id="stats">
        <h3 class="heading"><span>Our fun facts</span></h3>
        <div class="container">
            <div class="count-grids">
                <div class="count-bgcolor-w3ls">
                    <div class="col-md-3 count-grid">
                        <div class="count hvr-bounce-to-bottom">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='210' data-delay='.5' data-increment="1">210</div>
                            <span></span>
                            <h5>Professional agents</h5>
                        </div>
                    </div>
                    <div class="col-md-3 count-grid">
                        <div class="count hvr-bounce-to-bottom">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='700' data-delay='.5' data-increment="1">700</div>
                            <span></span>
                            <h5>Property for sale</h5>
                        </div>
                    </div>
                    <div class="col-md-3 count-grid">
                        <div class="count hvr-bounce-to-bottom">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='40' data-delay='.5' data-increment="1">40</div>
                            <span></span>
                            <h5>Property locations </h5>
                        </div>
                    </div>
                    <div class="col-md-3 count-grid">
                        <div class="count hvr-bounce-to-bottom">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='490' data-delay='.5' data-increment="1">490</div>
                            <h5>Rental Apartments</h5>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--count-->

    <!-- property for sale -->
    <div class="special" id="offers">
        <h3 class="heading"><span>Properties for sale</span></h3>
        <div class="container">
            <div class="agileits-special-grids">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="special-info">
                            <div class="special-info-top">
                                <div class="special-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h2 class="fa-home" style="color: #c7254e">Residential house</h2>
                            </div>
                            <div class="special-info-bottom">
                                <ul>
                                    <li>480 <span>Sqft</span></li>
                                    <li>5 <span>Rooms</span></li>
                                    <li>1 <span>Pool</span></li>
                                </ul>
                                <p>Kolabagan Dhanmondi</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="special-info special-info1">
                            <div class="special-info-top">
                                <div class="special-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <!--<i class="fa fa-star-half-o" aria-hidden="true"></i>-->
                                </div>
                                <h2 class="fa-home" style="color: #c7254e">Luxuries Apartment</h2>
                            </div>
                            <div class="special-info-bottom">
                                <ul>
                                    <li>570 <span>Sqft</span></li>
                                    <li>6 <span>Rooms</span></li>
                                    <li>3 <span>Pools</span></li>
                                </ul>
                                <p>MohammadPur Dhaka</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="special-info special-info2">
                            <div class="special-info-top">
                                <div class="special-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h2 class="fa-home" style="color: #c7254e">Office Building</h2>
                            </div>
                            <div class="special-info-bottom">
                                <ul>
                                    <li>410 <span>Sqft</span></li>
                                    <li>4 <span>Rooms</span></li>
                                    <li>2 <span>pools</span></li>
                                </ul>
                                <p>Dhanmondi 8A</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="special-info">
                            <div class="special-info-top">
                                <div class="special-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                                <h2 class="fa-home" style="color: #c7254e">Architecture Home</h2>
                            </div>
                            <div class="special-info-bottom">
                                <ul>
                                    <li>480 <span>Sqft</span></li>
                                    <li>5 <span>Rooms</span></li>
                                    <li>1 <span>Pool</span></li>
                                </ul>
                                <p>Dhanmondi 10A</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="special-info special-info1">
                            <div class="special-info-top">
                                <div class="special-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h2 class="fa-home" style="color: #c7254e">Modern Design</h2>
                            </div>
                            <div class="special-info-bottom">
                                <ul>
                                    <li>570 <span>Sqft</span></li>
                                    <li>6 <span>Rooms</span></li>
                                    <li>3 <span>Pools</span></li>
                                </ul>
                                <p>Vivamus pulvinar imperdiet lorem vel aliquam. Maecenas nunc tellus, feugiat</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="special-info special-info2">
                            <div class="special-info-top">
                                <div class="special-star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                </div>
                                <h2 class="fa-home" style="color: #c7254e">Apartment Tower</h2>
                            </div>
                            <div class="special-info-bottom">
                                <ul>
                                    <li>410 <span>Sqft</span></li>
                                    <li>4 <span>Rooms</span></li>
                                    <li>2 <span>pools</span></li>
                                </ul>
                                <p>Vivamus pulvinar imperdiet lorem vel aliquam. Maecenas nunc tellus, feugiat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //property for sale -->

    <!-- testimonials -->
    <div class="testimonials" id="testimonials">
        <div class="w3layouts_event_right">
            <h3 class="heading" style="text-transform: capitalize"><span>what people says</span></h3>
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="col-md-4 w3_event_right_grid">
                                <div class="w3_agile_event_right_grids">
                                    <div class="col-xs-4 w3_agile_event_right_grid_left">
                                        <img src="images/t1.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-xs-8 w3_agile_event_right_grid_right">
                                        <h4>Devid Williamson</h4>
                                        <p><i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="w3layouts_event_right_para">
                                    <p>This agency is most reliable and this site is trusable. </p>
                                </div>
                            </div>
                            <div class="col-md-4 w3_event_right_grid">
                                <div class="w3_agile_event_right_grids">
                                    <div class="col-xs-4 w3_agile_event_right_grid_left">
                                        <img src="images/t2.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-xs-8 w3_agile_event_right_grid_right">
                                        <h4>Jenifer</h4>
                                        <p><i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="w3layouts_event_right_para">
                                    <p>This is a usefull site for renter or owner. And i am happy to their servise. </p>
                                </div>
                            </div>
                            <div class="col-md-4 w3_event_right_grid">
                                <div class="w3_agile_event_right_grids">
                                    <div class="col-xs-4 w3_agile_event_right_grid_left">
                                        <img src="images/t3.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-xs-8 w3_agile_event_right_grid_right">
                                        <h4>Farhana Islam</h4>
                                        <p><i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="w3layouts_event_right_para">
                                    <p>This is a useful site for renter or owner. </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="col-md-4 w3_event_right_grid">
                                <div class="w3_agile_event_right_grids">
                                    <div class="col-xs-4 w3_agile_event_right_grid_left">
                                        <img src="images/t5.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-xs-8 w3_agile_event_right_grid_right">
                                        <h4>Israt Jahan</h4>
                                        <p><i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="w3layouts_event_right_para">
                                    <p>It is most useful for property owner . </p>
                                </div>
                            </div>
                            <div class="col-md-4 w3_event_right_grid">
                                <div class="w3_agile_event_right_grids">
                                    <div class="col-xs-4 w3_agile_event_right_grid_left">
                                        <img src="images/t4.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-xs-8 w3_agile_event_right_grid_right">
                                        <h4>Shanjida Islam</h4>
                                        <p><i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="w3layouts_event_right_para">
                                    <p>You can trust this site .</p>
                                </div>
                            </div>
                            <div class="col-md-4 w3_event_right_grid">
                                <div class="w3_agile_event_right_grids">
                                    <div class="col-xs-4 w3_agile_event_right_grid_left">
                                        <img src="images/t2.jpg" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-xs-8 w3_agile_event_right_grid_right">
                                        <h4>Sabrina Jahan</h4>
                                        <p><i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i></p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="w3layouts_event_right_para">
                                    <p>This is a good site for property management and it is useful site for renter or owner. </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- contact -->
    <div class="contact" id="contact">
        <h3 class="heading"><span>Get In Touch With Us</span></h3>
        <div class="col-md-4 mail">
            <h4>Contact Us</h4>
            <p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+880 1687855988 <br> <t></t>+880 1726887879 </p>
            <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <a href="market.place@mppmanagement.com">market.place@mppmanagement.com</a><br>

            </p>
        </div>
        <div class="col-md-4 social">
            <h4>Connect us</h4>
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="col-md-4 address">
            <h4>Address</h4>
            <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>2-1-2, Road :7/A, Zigatola, Dhanmondi, Dhaka-1209</p>
        </div>
        <!--<div class="col-md-3 contactimg">-->
        <!--	<img src="images/contact.png" alt="" />-->
        <!--</div>-->
        <div class="clearfix"></div>
    </div>
    <!-- map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.82239324998!2d90.27923809482249!3d23.780887455759487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1521753832574" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!-- contact form -->
    <div class="contact-form">
        <h3 class="heading"><span>Mail Us</span></h3>
        <div class="container">
            <form action="contact.php" method="post" enctype="multipart/form-data">
                <input class="as" type="text" placeholder="Name" required="" name="name">
                <input class="as" type="email" placeholder="Email" required="" name="mail">
                <input class="as" type="text" placeholder="Telephone" required="" name="phn">
                <input class="as" type="text" placeholder="Subject" required="" name="subject">
                <textarea class="as" placeholder="Message" required="" name="msg"> </textarea>
                <input class="btn btn-lg btn-success" type="submit" name="submit" value="Send Message">
            </form>




        </div>
    </div>
    <div class="footer">
        <div class="col-md-6 subscribe">
            <div>
                -----------------------
            </div>
            <div><h3 style="font-family: 'Rage Italic'">Follow us on <a href="">Facebook</a></h3></div>

        </div>
        <div class="col-md-6 copyright">
            <ul>
                <li><a href="#home" class="scroll">Home</a></li>
                <li><a href="#about" class="scroll">About</a></li>
                <li><a href="#services" class="scroll">Services</a></li>
                <li><a href="#team" class="scroll">Leadership</a></li>
                <li><a href="#testimonials" class="scroll">Testimonials</a></li>
            </ul>
            <p>© 2018 Marketplace. All Rights Reserved | Design by  <a href="../cv" target="_blank">Rezaul Alam Oni</a> </p>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //footer -->
</div>

<script type="text/javascript" src="js/numscroller-1.0.js"></script><!-- numscroller js file -->
<script src="js/owl.carousel.js"></script>
<!-- //property for sale js file-->
<!-- flexSlider --><!-- testimonials -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider --><!-- //testimonials -->
<!-- banner slider js files -->
<script src="js/mainScript.js"></script>
<script src="js/rgbSlide.min.js"></script>
<!-- // banner slider js files -->
<!--tabs--><!-- for team -->
<script src="js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!--//tabs--><!-- //for team -->

<!-- Here stars scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- Here ends scrolling -->

</body>
<!-- //Body -->
</html>