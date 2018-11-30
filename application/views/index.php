<!DOCTYPE html>
 <html lang="zxx">


<!-- Mirrored from www.innovationplans.com/idesign/arco/particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Nov 2018 04:59:29 GMT -->
<head>

    	<!-- Metas -->
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="keywords" content="HTML5 Template Arco onepage themeforest" />
		<meta name="description" content="Arco - Onepage Multi-Purpose HTML5 Template" />
		<meta name="author" content="" />

		<!-- Title  -->
		<title>Arco</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url("assets");?>/img/favicon.ico" />

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

		<!-- Plugins -->
		<link rel="stylesheet" href="<?php echo base_url("assets");?>/css/plugins.css" />

        <!-- Core Style Css -->
        <link rel="stylesheet" href="<?php echo base_url("assets");?>/css/style.css" />

    </head>

    <body>

    	<!-- =====================================
    	==== Start Loading -->

    	<!-- <div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div> -->

    	<!-- End Loading ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Navbar -->

		<nav class="navbar navbar-expand-lg">
			<div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="<?php echo base_url("assets");?>/img/logo-light.png" alt="logo">
            </a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

			  <!-- navbar links -->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
			      </li>
			      <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                  </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="2">Services</a>
			      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Portfolio</a>
                  </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="4">Price</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="5">Blog</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
			      </li>
			    </ul>
			  </div>
			</div>
		</nav>

    	<!-- End Navbar ====
    	======================================= -->


    	<!-- =====================================
    	==== Start Header -->

    	<header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?php echo base_url("assets");?>/img/<?php echo $thisiskey->background_Image; ?>" data-stellar-background-ratio="0.5">

            <!-- particles -->
            <div id="particles-js"></div>

    		<div class="container">
    			<div class="row">
    				<div class="full-width text-center caption mt-30">
    					<h4><?php echo $thisiskey->first_headding; ?></h4>
                <h1><?php echo $thisiskey->sec_headding; ?></h1>
                <p><?php echo $thisiskey->third_Headding;?></p>
                <a href="#0" class="butn butn-light mt-30">
                    <span>Learn More</span>
                </a>
                <a href="#0" class="butn butn-bg mt-30">
                    <span>Get Started</span>
                </a>
    				</div>
    			</div>
    		</div>
    	</header>

    	<!-- End Header ====
    	======================================= -->


        <!-- =====================================
        ==== Start Hero -->

        <section class="hero section-padding" data-scroll-index="1">
            <div class="container">
                <div class="row">

                    <div class="intro offset-lg-1 col-lg-10 text-center mb-80">
                        <h3><?php echo $secondValue->first_headding; ?></h3>
                        <h4><?php echo $secondValue->sec_headding; ?></h4>
                        <p><?php echo $secondValue->third_pragraph; ?></p>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center mb-md50">
                            <span class="icon <?php echo $seccondServiceValue[0]->icon; ?>"></span>
                            <h5><?php echo $seccondServiceValue[0]->tittle; ?></h5>
                            <p><?php echo $seccondServiceValue[0]->text; ?></p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center mb-md50">
                            <span class="icon <?php echo $seccondServiceValue[1]->icon; ?>"></span>
                            <h5><?php echo $seccondServiceValue[1]->tittle; ?></h5>
                            <p><?php echo $seccondServiceValue[1]->text; ?></p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item text-center">
                            <span class="icon <?php echo $seccondServiceValue[2]->icon; ?>"></span>
                            <h5><?php echo $seccondServiceValue[2]->tittle; ?></h5>
                            <p><?php echo $seccondServiceValue[2]->text; ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Hero ====
        ======================================= -->


        <!-- =====================================
        ==== Start Section-box -->

        <section class="section-box" data-scroll-index="1">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 bg-img half-img bgimg-height" data-background="<?php echo base_url("assets");?>/img/<?php echo $skillData->image; ?>"></div>

                    <div class="col-lg-6 half-content bg-gray">
                        <div class="box-white">

                            <div class="content mb-50">
                                <h3 class="mb-15 lg-line-height"><?php echo $skillData->tittle; ?></h3>
                                <p><?php echo $skillData->text; ?></p>
                            </div>

                            <!-- Skills -->

                            <div class="skills">
                                <div class="skill-item">
                                    <h6><?php echo $skillData->skill1; ?></h6>
                                    <div class="skill-progress">
                                        <div class="progres" data-value="<?php echo $skillData->skill1_value; ?>"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h6><?php echo $skillData->skill2; ?></h6>
                                    <div class="skill-progress">
                                        <div class="progres" data-value="<?php echo $skillData->skill2_value; ?>"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h6><?php echo $skillData->skill3; ?></h6>
                                    <div class="skill-progress">
                                        <div class="progres" data-value="<?php echo $skillData->skill3_value; ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Section-box ====
        ======================================= -->


        <!-- =====================================
        ==== Start Services -->

        <section class="services section-padding" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="section-head text-center col-sm-12">
                        <h4><?php echo $ourServiceHeaddingData->first_headding; ?></h4>
                        <h6><?php echo $ourServiceHeaddingData->sec_headding; ?></h6>
                    </div>
                    <?php foreach($ourServiceFeaturedData as $data) {
                      $i=0;
                      ?>
                      <?php if ($data->feature_ID==2 or $data->feature_ID==5 ) {
                        ?>
                        <div class="col-lg-4 col-md-6 bord">
                          <div class="item mb-md50">
                              <span class="icon <?php echo $data->icon;?>"></span>
                              <h6><?php echo $data->tittle; ?></h6>
                              <p><?php echo $data->text; ?></p>
                          </div>
                      </div>
                        <?php
                      }else{
                        ?>
                        <div class="col-lg-4 col-md-6">
                          <div class="item mb-md50">
                              <span class="icon <?php echo $data->icon;?>"></span>
                              <h6><?php echo $data->tittle; ?></h6>
                              <p><?php echo $data->text; ?></p>
                          </div>
                      </div>
                        <?php
                      } ?>
                  <?php
                }?>
                </div>
            </div>
        </section>

        <!-- End Services ====
        ======================================= -->


        <!-- =====================================
        ==== Start Numbers -->

        <div class="numbers section-padding bg-img bg-fixed" data-scroll-index="2" data-overlay-dark="8" data-background="<?php echo base_url("assets");?>/img/bg3.jpg">
            <div class="container">
                <div class="row">
                  <?php foreach ($counterData as $data) :?>
                    <div class="col-lg-3 col-md-6">
                        <div class="item text-center mb-md50">
                            <span class="icon <?php echo $data->icon; ?>"></span>
                            <h3 class="count"><?php echo $data->tittle; ?></h3>
                            <h6><?php echo $data->text; ?></h6>
                        </div>
                    </div>
                  <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- End Numbers ====
        ======================================= -->


        <!-- =====================================
        ==== Start Works -->

        <section class="works section-padding" data-scroll-index="3">
            <div class="container-fluid">
                <div class="row">

                    <div class="section-head text-center col-sm-12">
                        <h4><?php echo $portfolioHeaddingData->first_headding; ?></h4>
                        <h6><?php echo $portfolioHeaddingData->sec_headding; ?></h6>
                    </div>

                    <!-- filter links -->
                    <div class="filtering text-center mb-30 col-sm-12">
                        <div class="filter">
                            <span data-filter='*' class="active">All</span>
                            <?php foreach ($headdingGrouping as $data) :?>
                            <span data-filter='.<?php echo strtolower($data->category_name);?>'><?php echo $data->category_name;?></span>
                          <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- gallery -->
                    <div class="gallery text-center full-width">

                        <!-- gallery item -->
                        <?php foreach ($getPortfolioImageData as $data) :?>
                        <div class="col-lg-3 col-md-6 items <?php echo strtolower($data->category_name); ?>">
                            <div class="item-img">
                                <img src="<?php echo base_url("assets");?>/img/portfolio/<?php echo $data->image; ?>" alt="image">
                                <div class="item-img-overlay valign">
                                    <div class="overlay-info full-width vertical-center">
                                        <p><?php echo $data->tittle;?></p>
                                        <h6><?php echo $data->text;?></h6>
                                        <a href="<?php echo base_url("assets");?>/img/portfolio/<?php echo $data->image; ?>" class="popimg">
                                            <span class="icon icon-basic-eye"></span>
                                        </a>
                                        <a href="#0">
                                            <span class="icon icon-basic-link"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php endforeach; ?>



                    </div>

                </div>
            </div>
        </section>

        <!-- End Works ====
        ======================================= -->


        <!-- =====================================
        ==== Start Section-box -->

        <section class="section-box">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 half-content bg-gray">
                        <div class="box-white">

                            <div class="content mb-50">
                                <h3 class="mb-15"><?php echo $whyChooseUsHeaddingImage->headding; ?></h3>
                                <p><?php echo $whyChooseUsHeaddingImage->text; ?></p>
                            </div>

                            <!-- accordion -->

                            <div class="accordion">
                              <?php foreach ($acrodionText as $data): ?>
                                <?php if($data->acrodion_id==1): ?>
                                <div class="item active">
                                    <div class="title">
                                        <h6><?php echo $data->headding; ?></h6>
                                    </div>
                                    <div class="accordion-info active">
                                        <p><?php echo $data->text; ?> ?></p>
                                    </div>
                                </div>
                              <?php else:?>
                                <div class="item">
                                    <div class="title">
                                        <h6><?php echo $data->headding; ?></h6>
                                    </div>
                                    <div class="accordion-info">
                                        <p><?php echo $data->text; ?> ?></p>
                                    </div>
                                </div>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 bg-img half-img bgimg-height valign" data-background="<?php echo base_url("assets");?>/img/<?php echo $whyChooseUsHeaddingImage->image; ?>">
                        <a class="vid text-center full-width" href="<?php echo $whyChooseUsHeaddingImage->video_link;?>">
                            <span class="vid-butn">
                                <i class="fas fa-play-circle"></i>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Section-box ====
        ======================================= -->


        <!-- =====================================
        ==== Start Teams -->

        <section class="team section-padding">
            <div class="container">
                <div class="row">

                    <div class="section-head text-center col-sm-12">
                        <h4>Our Team</h4>
                        <h6>The Talent Crew</h6>
                    </div>

                    <?php foreach($getTeamData as $data): ?>
                    <div class="col-lg-6">
                        <div class="item mb-50">
                            <div class="team-img">
                                <img src="<?php echo base_url("assets");?>/img/team/<?php echo $data->image;?>" alt="">
                            </div>
                            <div class="info">
                                <h6><?php echo $data->name;?></h6>
                                <span><?php echo $data->role;?></span>
                                <p><?php echo $data->text;?></p>
                                <div class="social">
                                    <a href="#0" class="icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#0" class="icon">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#0" class="icon">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- End Teams ====
        ======================================= -->


        <!-- =====================================
        ==== Start Price -->

        <section class="price section-padding bg-gray" data-scroll-index="4">
            <div class="container">
                <div class="row">

                    <div class="section-head text-center col-sm-12">
                        <h4>Our Pricing</h4>
                        <h6>Chooes Our Offers</h6>
                    </div>

                    <div class="pricing-tables full-width">

                        <div class="row">
                          <?php foreach($getpriceData as $data): ?>
                            <?php if($data->prive_id ==2): ?>
                            <div class="col-lg-4">
                                <div class="item text-center active mb-md50" data-background="<?php echo base_url("assets");?>/img/03.jpg">
                                    <div class="type">
                                        <h4><?php echo $data->price_name; ?></h4>
                                    </div>

                                    <div class="value">
                                        <h3><?php echo $data->ammount; ?><span>$</span></h3>
                                        <span class="per">Per Of Month</span>
                                    </div>
                                    <?php foreach($getPriceTableData as $datas):?>
                                    <?php while($data->prive_id == $datas->price_cat){
                                      ?>
                                      <div class="features">
                                        <ul>
                                            <li><?php echo $datas->feature_name; ?><i class="true fas fa-check"></i></li>

                                        </ul>
                                    </div>

                                      <?php
                                      break;
                                    } ?>
                                  <?php endforeach; ?>
                                    <div class="order">
                                        <a href="#0" class="butn butn-bg">
                                            <span>Purchase Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                          <?php else: ?>
                            <div class="col-lg-4">
                                <div class="item text-center  mb-md50">
                                    <div class="type">
                                        <h4><?php echo $data->price_name; ?></h4>
                                    </div>

                                    <div class="value">
                                        <h3><?php echo $data->ammount; ?><span>$</span></h3>
                                        <span class="per">Per Of Month</span>
                                    </div>
                                    <?php foreach($getPriceTableData as $datas):?>
                                    <?php while($data->prive_id == $datas->price_cat){
                                      ?>
                                      <div class="features">
                                        <ul>
                                            <li><?php echo $datas->feature_name; ?><i class="true fas fa-check"></i></li>

                                        </ul>
                                    </div>

                                      <?php
                                      break;
                                    } ?>
                                  <?php endforeach; ?>
                                    <div class="order">
                                        <a href="#0" class="butn butn-bg">
                                            <span>Purchase Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                          <?php endif; ?>
                          <?php endforeach; ?>



                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- End Price ====
        ======================================= -->


        <!-- =====================================
        ==== Start Testimonials -->

        <section class="testimonials carousel-single section-padding bg-img bg-fixed" data-overlay-dark="7" data-background="<?php echo base_url("assets");?>/img/bg4.jpg">
            <div class="container">
                <div class="row">

                    <div class="offset-lg-1 col-lg-10">

                        <div class="owl-carousel owl-theme text-center">
                          <?php foreach ($getTestimonialData as $data):?>
                            <div class="item">
                                <div class="client-img">
                                    <img src="<?php echo base_url("assets");?>/img/clients/<?php echo $data->image; ?>" alt="">
                                </div>
                                <div class="info">
                                    <h6><?php echo $data->name; ?> <span><?php echo $data->role; ?></span></h6>
                                </div>
                                <p><?php echo $data->text; ?></p>
                            </div>
                          <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Testimonials ====
        ======================================= -->


        <!-- =====================================
        ==== Start Blog -->

        <section class="blog section-padding" data-scroll-index="5">
            <div class="container">
                <div class="row">

                    <div class="section-head text-center col-sm-12">
                        <h4>Our Blog</h4>
                        <h6>Latest News</h6>
                    </div>
                    <?php foreach ($getBlogData as $data): ?>
                    <div class="col-lg-4">
                        <div class="item text-center mb-md50">
                            <div class="post-img">
                                <div class="img">
                                    <img src="<?php echo base_url("assets");?>/img/blog/<?php echo $data->author_image; ?>" alt="">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="info">
                                    <a href="#0">By : <?php echo $data->author_name; ?></a>
                                    <a href="#0"><?php echo date("d M y",strtotime($data->date)); ?></a>
                                    <a href="#0"><?php echo $data->blog_type; ?></a>
                                </div>
                                <h6><a href="#0"><?php echo $data->blog_tittle; ?></a></h6>
                                <p><?php echo substr($data->text,0,100)."........"; ?></p>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- End Blog ====
        ======================================= -->


        <!-- =====================================
        ==== Start Subscribe -->

        <div class="subscribe section-padding bg-gray bg-img" data-scroll-index="5" data-background="<?php echo base_url("assets");?>/img/pattern.png">
            <div class="container">
                <div class="row">

                    <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 text-center">
                        <h4>Join To Our Newsletter</h4>
                        <form action="<?php base_url(); ?>Controller/newsLetter" method="post">
                            <input type="email" name="email" placeholder="Your E-mail">
                            <input type="submit" name="submit" value="Subscribe" class="butn butn-bg">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- End Subscribe ====
        ======================================= -->


        <!-- =====================================
        ==== Start Clients -->

        <div class="clients text-center pt-50 pb-50">
            <div class="container">
                <div class="row">

                    <div class="owl-carousel owl-theme col-sm-12">
                        <a href="#0">
                            <img src="<?php echo base_url("assets");?>/img/clients-logo/1.png" alt="">
                        </a>
                        <a href="#0">
                            <img src="<?php echo base_url("assets");?>/img/clients-logo/1.png" alt="">
                        </a>
                        <a href="#0">
                            <img src="<?php echo base_url("assets");?>/img/clients-logo/1.png" alt="">
                        </a>
                        <a href="#0">
                            <img src="<?php echo base_url("assets");?>/img/clients-logo/1.png" alt="">
                        </a>
                        <a href="#0">
                            <img src="<?php echo base_url("assets");?>/img/clients-logo/1.png" alt="">
                        </a>
                        <a href="#0">
                            <img src="<?php echo base_url("assets");?>/img/clients-logo/1.png" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- End Clients ====
        ======================================= -->


        <!-- =====================================
        ==== Start Contact-Info -->

        <div class="contact-info section-box" data-scroll-index="6">
            <div class="container-fluid">
                <div class="row">

                    <!-- Contact Info -->

                    <div class="info bg-img col-md-6" data-overlay-dark="8" data-background="<?php echo base_url("assets");?>/img/bg3.jpg">

                        <div class="gradient">

                            <div class="item">
                                <span class="icon icon-basic-smartphone"></span>
                                <div class="cont">
                                    <h6>Phone : </h6>
                                    <p>+20 010 2517 8918</p>
                                </div>
                            </div>

                            <div class="item">
                                <span class="icon icon-basic-geolocalize-05"></span>
                                <div class="cont">
                                    <h6>Address : </h6>
                                    <p>75 New York - Bourbon Street 10/555</p>
                                    <p>3rd Avenue, Upper East Side, San Francisco</p>
                                </div>
                            </div>

                            <div class="item">
                                <span class="icon icon-basic-mail"></span>
                                <div class="cont">
                                    <h6>Email : </h6>
                                    <p>email@youradress.com</p>
                                    <p>email_support@youradress.com</p>
                                </div>
                            </div>

                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- The Map -->

                    <div class="map col-md-6 bgimg-height-sm">
                        <div id="ieatmaps"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- End Contact-Info ====
        ======================================= -->


        <!-- =====================================
        ==== Start Contact -->

        <section class="contact section-padding" data-scroll-index="6">
            <div class="container">
                <div class="row">

                    <div class="section-head text-center col-sm-12">
                        <h4>Get In Touch</h4>
                        <h6>Feel Free To Contact Us</h6>
                    </div>

                    <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">
                        <form class="form" id="contact-form" method="post" action="<?php echo base_url("Controller/getFromData"); ?>">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <input type="submit" name="submit" value="send">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <!-- End Contact ====
        ======================================= -->


        <!-- =====================================
        ==== Start Footer -->

        <footer class="text-center">
            <div class="container">

                <!-- Logo -->
                <a class="logo" href="#">
                    <img src="<?php echo base_url("assets");?>/img/logo-light.png" alt="logo">
                </a>

                <div class="social">
                    <a href="#0" class="icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-behance"></i>
                    </a>
                    <a href="#0" class="icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

                <p>&copy; 2018 UI-ThemeZ. All Rights Reserved.</p>

            </div>
        </footer>

        <!-- End Footer ====
        ======================================= -->





        <!-- jQuery -->
        <script src="<?php echo base_url("assets");?>/js/jquery-3.0.0.min.js"></script>
        <script src="<?php echo base_url("assets");?>/js/jquery-migrate-3.0.0.min.js"></script>

        <!-- popper.min -->
        <script src="<?php echo base_url("assets");?>/js/popper.min.js"></script>

        <!-- bootstrap -->
        <script src="<?php echo base_url("assets");?>/js/bootstrap.min.js"></script>

        <!-- scrollIt -->
        <script src="<?php echo base_url("assets");?>/js/scrollIt.min.js"></script>

        <!-- jquery.waypoints.min -->
        <script src="<?php echo base_url("assets");?>/js/jquery.waypoints.min.js"></script>

        <!-- jquery.counterup.min -->
        <script src="<?php echo base_url("assets");?>/js/jquery.counterup.min.js"></script>

        <!-- owl carousel -->
        <script src="<?php echo base_url("assets");?>/js/owl.carousel.min.js"></script>

        <!-- jquery.magnific-popup js -->
        <script src="<?php echo base_url("assets");?>/js/jquery.magnific-popup.min.js"></script>

        <!-- stellar js -->
        <script src="<?php echo base_url("assets");?>/js/jquery.stellar.min.js"></script>

        <!-- isotope.pkgd.min js -->
        <script src="<?php echo base_url("assets");?>/js/isotope.pkgd.min.js"></script>

        <!-- YouTubePopUp.jquery -->
        <script src="<?php echo base_url("assets");?>/js/YouTubePopUp.jquery.js"></script>

        <!-- particles.min js -->
        <script src="<?php echo base_url("assets");?>/js/particles.min.js"></script>

        <!-- app js -->
        <script src="<?php echo base_url("assets");?>/js/app.js"></script>

        <!-- Map -->
        <script src="<?php echo base_url("assets");?>/js/map.js"></script>

        <!-- validator js -->
        <script src="<?php echo base_url("assets");?>/js/validator.js"></script>

        <!-- custom scripts -->
        <script src="<?php echo base_url("assets");?>/js/scripts.js"></script>

        <!-- google map api -->
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK7lXLHQgaGdP3IvMPi1ej0B9JHUbcqB0&amp;callback=initMap">
        </script>

    </body>

<!-- Mirrored from www.innovationplans.com/idesign/arco/particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Nov 2018 05:00:17 GMT -->
</html>
