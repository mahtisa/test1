<?php
/* Template name: shop_land */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php wp_title(' | ',true,'right'); ?><?php bloginfo('name') ?></title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
    <script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<div class="landing">
    <div id="side_menu" class="side_menu">
        <div class="side_top">
            <span onclick="closeSideMenu();"><i class="fas fa-times"></i></span>
            <img src="img/logo_white.png">
            <div class="txt">به وب ریما خوش آمدید!</div>
        </div>
        <div class="menu">
            <a href="#">صفحه نخست</a>
            <a href="#">درباره ما</a>
            <a href="#">محصولات</a>
            <a href="#">بلاگ</a>
            <a href="#">تماس با ما</a>
        </div>
    </div>
    <div class="header_holder">
        <div class="social_holder">
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-telegram-plane"></i>
            <i class="fab fa-whatsapp"></i>
        </div>
        <div class="container">
            <div class="menu_bar">
                <i class="fas fa-bars" onclick="openSideMenu();"></i>
                <a href="#"><img src="img/logo.png" alt=" لوگو طراحی سایت فروشگاه اینترنتی"></a>
                <div class="menu">
                    <ul>
                        <li><a class="sub_menu" href="#">صفحه نخست</a></li>
                        <li><a class="sub_menu" href="#">درباره ما</a></li>
                        <li><a class="sub_menu" href="#">محصولات</a></li>
                        <li><a class="sub_menu" href="#">بلاگ</a></li>
                        <li><a class="sub_menu" href="#">تماس با ما</a></li>
                    </ul>
                </div>
            </div>
            <div class="header_context">
                <h1>فروشگاه اینترنتی خودت رو راه بنداز!</h1>
                <i class="fas fa-quote-right"></i>
                <p>نیاز به فروشگاه اینترنتی امروزه خیلی احساس میشه
                    اما برای ایجاد یک فروشگاه اینترنتی بهترین روش کدومه</p>
                <div class="btn">درخواست مشاوره رایگان</div>
            </div>
            <img class="header_img" src="img/header_pic.png" alt="تصویر فروشگاه اینترنتی">
        </div>
    </div>
    <div class="define_holder">
        <div class="container">
            <img class="wow animate__fadeInRightBig" data-wow-duration="1s" src="<?php echo get_template_directory_uri();?>/img/define.png"  alt="طراحی سایت فروشگاهی">
            <div class="wow animate__fadeInLeftBig context_holder" data-wow-duration="1s">
                <div class="define_context">
                    <h2>وب سایت فروشگاهی، فصل جدیدی از مدل کسب وکار!</h2>
                    <p>متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن
                        نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن
                        نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن
                        نمونه متن</p>
                </div>
            </div>
        </div>
    </div>
    <div class="service_holder">
        <div class="container">
            <div class="title">
                <h2>چرا به یک فروشگاه اینترنتی نیازه؟</h2>
                <div class="under_line"></div>
            </div>
            <div class="wow animate__animated animate__zoomIn service_item" data-wow-duration="1.5s">
                <img src="<?php  echo get_template_directory_uri()?>/img/service_cart.png" alt="امکان ثبت سفارش چندین کالا">
                <h3 class="text">امکان ثبت سفارش چندین کالا</h3>
            </div>
            <div class="wow animate__animated animate__zoomIn service_item" data-wow-duration="1.5s">
                <img src="<?php  echo get_template_directory_uri()?>/img/service_payment.png" alt="پرداخت آسان هزینه محصول">
                <h3 class="text">پرداخت آسان هزینه محصول</h3>
            </div>
            <div class="wow animate__animated animate__zoomIn service_item" data-wow-duration="1.5s">
                <img src="<?php  echo get_template_directory_uri()?>/img/service_platform.png" alt="ثبت سفارش در هر پلتفرمی">
                <h3 class="text">ثبت سفارش در هر پلتفرمی</h3>
            </div>
            <div class="wow animate__animated animate__zoomIn service_item" data-wow-duration="1.5s">
                <img src="<?php  echo get_template_directory_uri()?>/img/service_hollyDay.png" alt="امکان فروش کالا حتی در ایام تعطیل">
                <h3 class="text">امکان فروش کالا حتی در ایام تعطیل</h3>
            </div>
            <div class="wow animate__animated animate__zoomIn service_item" data-wow-duration="1.5s">
                <img src="<?php  echo get_template_directory_uri()?>/img/service_report.png" alt="در اختیار داشتن گزارش های مختلف">
                <h3 class="text">در اختیار داشتن گزارش های مختلف</h3>
            </div>
            <div class="wow animate__animated animate__zoomIn service_item" data-wow-duration="1.5s">
                <img src="<?php  echo get_template_directory_uri()?>/img/service_support.png" alt="پاسخگویی 24 ساعته">
                <h3 class="text">پاسخگویی 24 ساعته</h3>
            </div>
        </div>
    </div>
    <div class="adv">
        <div class="container">
            <img class="wow animate__lightSpeedInRight" data-wow-duration="1.5s" src="<?php echo get_template_directory_uri();?>/img/adv_img.png" alt="مزایای داشتن فروشگاه اینترنتی">
            <div class="wow animate__lightSpeedInLeft adv_context" data-wow-duration="1.5s">
                <div class="title">
                    <h2>چرا به یک فروشگاه اینترنتی نیازه؟</h2>
                    <div class="under_line"></div>
                </div>
                <p>متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمون
                    ه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمون
                    ه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه </p>
            </div>
        </div>
    </div>
    <div class="padcast">
        <div class="container">
            <div class="title">
                <h2>جواب سوالات رو از وب ریما بشنو!</h2>
                <div class="under_line"></div>
            </div>
            <div class="wow animate__flipInY padcast_item" data-wow-duration="1.5s">
                <div class="padcast_top">
                    <i class="fas fa-check"></i>
                    <div class="question">چطور میتونم متوجه بشم که
                        کدوم سایت واسه کسب و کار من
                        مناسبترهه؟
                    </div>
                </div>
                <div class="padcast_down"></div>
            </div>
            <div class="wow animate__flipInY padcast_item" data-wow-duration="1.5s">
                <div class="padcast_top">
                    <i class="fas fa-check"></i>
                    <div class="question">چطور میتونم متوجه بشم که
                        کدوم سایت واسه کسب و کار من
                        مناسبترهه؟
                    </div>
                </div>
                <div class="padcast_down"></div>
            </div>
            <div class="wow animate__flipInY padcast_item" data-wow-duration="1.5s">
                <div class="padcast_top">
                    <i class="fas fa-check"></i>
                    <div class="question">چطور میتونم متوجه بشم که
                        کدوم سایت واسه کسب و کار من
                        مناسبترهه؟
                    </div>
                </div>
                <div class="padcast_down"></div>
            </div>
        </div>
    </div>
    <div class="adv why">
        <div class="container">
            <div class="wow animate__lightSpeedInRight adv_context" data-wow-duration="1.5s">
                <div class="title">
                    <h2>چرا به یک فروشگاه اینترنتی نیازه؟</h2>
                    <div class="under_line"></div>
                </div>
                <p>متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمون
                    ه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمون
                    ه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه </p>
            </div>
            <img class="wow animate__lightSpeedInLeft" data-wow-duration="1.5s" src="<?php echo get_template_directory_uri();?>/img/adv_img3.png" alt="اگر فروشگاه اینترنتی نداشته باشیم چه می شود؟">
        </div>
    </div>
    <div class="cv_holder">
        <div class="container">
            <div class="title">
                <h2>نمونه کار های وب ریما</h2>
                <div class="under_line"></div>
            </div>
			<?php
			$resumeQuery=new WP_Query(array('cat'=>1,'posts_per_page'=>9));
			if($resumeQuery->have_posts()):

				while ($resumeQuery->have_posts()) {
					$resumeQuery->the_post();
					?>

                    <div class="wow animate__flipInY cv_item_l" data-wow-duration="1.5s">
                        <div class="img">
							<?php
							if(has_post_thumbnail()) {
								the_post_thumbnail('full',array('class'=>''));
							}
							?>
                            <div class="cover">
                                <i class="fas fa-search-plus btn_more"></i>
                            </div>
                        </div>
                        <div class="item_title">
                            <i class="fas fa-circle"></i>
                            <span><?php the_title(); ?></span>
                        </div>
                    </div>
					<?php
					wp_reset_postdata();
				}
			else:?>
                <p>پستی یافت نشد!</p>
			<?php
			endif;
			?>
            <div class="btn">مشاهده کامل نمونه کار ها</div>
        </div>
    </div>
    <div class="contact_holder">
        <div class="title">
            <h2>مشاوره برای سایت فروشگاهی</h2>
            <div class="under_line"></div>
        </div>
        <div class="container">
            <img class="wow animate__rotateInDownRight" data-wow-duration="1.5s" src="<?php  echo get_template_directory_uri()?>/img/form.png" alt="تماس با ما">
            <div class="wow animate__lightSpeedInLeft contact_info">
                <p>متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه
                    متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه </p>
                <div class="form_title">شماره تماس خود را اینجا وارد نمایید.</div>
                <input type="text" placeholder="09xxxxxxxxx">
                <div class="btn">ارسال</div>
            </div>
            <div class="contact_number">تماس با وب ریما</div>
            <div class="btn orange">۰۹۱۱۹۱۲۳۴۵۵</div>
        </div>
    </div>
    <div class="cost">
        <div class="container">
            <div class="cost_right">
                <div class="wow animate__animated animate__fadeInRightBig cost_item" data-wow-duration="1.5s">
                    <h3>تعرفه سایت فروشگاهی</h3>
                    <div class="cost_box">7,500,000 تومان</div>
                    <div class="clear"></div>
                    <ul>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                        <li><i class="fas fa-circle"></i>ارایه هاست رایگان برای یکسال</li>
                    </ul>
                    <hr>
                    <img src="<?php echo get_template_directory_uri();?>/img/cost_shape.png" alt="تصویر پس زمینه برای تعرفه های فروشگاه اینترنتی">
                </div>
            </div>
            <div class="wow animate__animated animate__fadeInLeftBig cost_left" data-wow-duration="1.5s">
                <div class="circle_m">
                    <div class="circle"></div>
                </div>
                <div class="circle_l"></div>
                <div class="circle_s">
                    <div class="circle"></div>
                </div>
                <div class="site">
                    <img src="<?php echo get_template_directory_uri();?>/img/online%20shop.png" alt="قالب سایت فروشگاهی">
                </div>
                <img class="site_bg" src="<?php echo get_template_directory_uri();?>/img/cost_site.png" alt="تصیر پس زمینه فروشگاه اینترنتی">
            </div>
        </div>
    </div>
    <div class="customer_holder">
        <div class="container">
            <div class="title">
                <h2>مشاوره برای سایت فروشگاهی</h2>
                <div class="under_line"></div>
            </div>
            <i class="fas fa-quote-left"></i>
            <div class="slider_holder" id="slider_holder_customer">
                <div class="slider" id="slider_customer" style="width: calc(365px * 6);">
					<?php
					$resumeQuery=new WP_Query(array('cat'=>1,'posts_per_page'=>9));
					if($resumeQuery->have_posts()):

						while ($resumeQuery->have_posts()) {
							$resumeQuery->the_post();
							?>
                            <div class="customer_item">
								<?php
								if(has_post_thumbnail()) {
									the_post_thumbnail('full',array('class'=>''));
								}
								?>
                                <div class="name">
                                    <h3>مهندس ممد ممدی</h3>
                                    <div class="under_line"></div>
                                </div>
                                <p> متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه </p>
                            </div>
							<?php
							wp_reset_postdata();
						}
					else:?>
                        <p>پستی یافت نشد!</p>
					<?php
					endif;
					?>


                </div>
            </div>
            <i class="fas fa-chevron-right chevron" onclick="nextSlide('customer',315,6)"></i>
            <div class="line"></div>
            <i class="fas fa-chevron-left chevron" onclick="prevSlide('customer',315)"></i>

        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="about_col">
                <img src="<?php  echo get_template_directory_uri()?>/img/logo_white.png" alt="لوگو طراحی سایت">
                <h1 class="footer_title">طراحی سایت وب ریما</h1>
                <p class="text"> در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                    صنعت چاپ،
                    و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                    است،
                </p>
            </div>
            <div class="link_col">
                <div class="title_footer">
                    لینک های مفید
                    <div class="under_line"></div>
                </div>
				<?php
				wp_nav_menu(array('theme_location' =>'footer_menu'));
				?>
            </div>
            <div class="tag_col">
                <div class="title_footer">
                    برچسب ها
                    <div class="under_line"></div>
                </div>
                <div class="tags">
					<?php
					$postTags=get_tags();
					if(!empty($postTags))
					{
						$num=0;
						foreach ($postTags as $postTag) {
							echo '<a href="' . get_tag_link($postTag) . '" class="tag">' . $postTag->name . '</a>';

							$num++;
							if ($num == 8) {
								break;
							}
						}
					}
					?>

                </div>
                <div class="social_footer">
                    <div class="title_footer">شبکه های اجتماعی ما</div>
                    <div class="social">
                        <i class="fab fa-telegram-plane"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin-in"></i>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="end_footer">تمام حقوق این سایت متعلق به مجموعه <a href="#">وب ریما</a> می باشد.</div>

    </div>

    <script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
	<?php
	wp_footer();
	?>
</body>
</html>