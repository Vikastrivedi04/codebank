<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monst
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="section section-hero">
        <div class="section-future text-center mb-100">
            <?php if (get_field('hero_title')): ?>
                <h2>
                    <?php the_field('hero_title'); ?>
                </h2>
            <?php endif; ?>
            <?php if (get_field('future_p')): ?>
                <p>
                    <?php the_field('future_p'); ?>,
                </p>
            <?php endif; ?>
            <span id="typed" class="text-dark"></span>
            </p>
            <div class="pt">
                <?php
                $link = get_field('links');
                if ($link): ?>
                    <a class="btn btn--key" href="<?php echo esc_url($link); ?>">key feture</a>
                <?php endif;
                ?>
                <?php
                $link = get_field('work');
                if ($link): ?>
                    <a class="btn btn-know" href="<?php echo esc_url($link); ?>">how we work</a>
                <?php endif;
                ?>
            </div>
        </div>
    </section>
    <Section class="section section-dashboard">
        <div class="wrap">
            <div class="dashboard-img">
                <?php
                $image = get_field('dashboard_img');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }
                ?>
            </div>
        </div>
    </Section>
    <section class="section section-blog">
        <div class="wrap">
            <div class="row">
                <div class="col-3 col-md-6">
                    <div class="blog-part flex">
                        <div class="blog">
                            <?php
                            $image = get_field('blog_img');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>
                        <div class="blog-descrisation">
                            <?php if (get_field('blog_descrisation')): ?>
                                <h2>
                                    +<span class="counter" data-target="<?php the_field('blog_descrisation'); ?>">
                                        <?php the_field('blog_descrisation'); ?>
                                    </span>k
                                </h2>
                            <?php endif; ?>
                            <?php if (get_field('descrisation_p')): ?>
                                <p>
                                    <?php the_field('descrisation_p'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6">
                    <div class="blog-part flex">
                        <div class="blog">
                            <?php
                            $image = get_field('blog_img_2');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>
                        <div class="blog-descrisation">
                            <?php if (get_field('blog_descrisation')): ?>
                                <h2>
                                    +<span class="counter" data-target="<?php the_field('blog_descrisation_2'); ?>">
                                        <?php the_field('blog_descrisation_2'); ?>
                                    </span>k
                                </h2>
                            <?php endif; ?>

                            <?php if (get_field('descrisation_p_2')): ?>
                                <p>
                                    <?php the_field('descrisation_p_2'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 mt-md-20 ">
                    <div class="blog-part flex">
                        <div class="blog">
                            <?php
                            $image = get_field('blog_img_3');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>
                        <div class="blog-descrisation">
                            <?php if (get_field('blog_descrisation_3')): ?>
                                <h2>
                                    +<span class="counter" data-target="<?php the_field('blog_descrisation_3'); ?>">
                                        <?php the_field('blog_descrisation_3'); ?>
                                    </span>k
                                </h2>
                            <?php endif; ?>
                            <?php if (get_field('descrisation_p_3')): ?>
                                <p>
                                    <?php the_field('descrisation_p_3'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 mt-md-20 ">
                    <div class="blog-part flex">
                        <div class="blog">
                            <?php
                            $image = get_field('blog_img_4');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>

                        <div class="blog-descrisation">
                            <?php if (get_field('blog_descrisation_4')): ?>
                                <h2>
                                    +<span class="counter" data-target="<?php the_field('blog_descrisation_4'); ?>">
                                        <?php the_field('blog_descrisation_4'); ?>
                                    </span>k
                                </h2>
                            <?php endif; ?>
                            <?php if (get_field('descrisation_p_4')): ?>
                                <p>
                                    <?php the_field('descrisation_p_4'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-key mt-30 " id="key">
        <div class="wrap">
            <div class="row">
                <div class="col-5 col-md-12">
                    <div class="key-future">
                        <?php if (get_field('why_choose_us')): ?>
                            <span>
                                <?php the_field('why_choose_us'); ?>
                            </span>
                        <?php endif; ?>
                        <?php if (get_field('key_features')): ?>
                            <h3 class="mt-30 mb-30">
                                <?php the_field('key_features'); ?>
                            </h3>
                        <?php endif; ?>
                    </div>
                    <div class="key-future-details flex">
                        <div>
                            <?php
                            $image = get_field('key_future_img');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>
                        <div class="future-details">
                            <?php if (get_field('future_details_title')): ?>
                                <h6 class="mt-10">
                                    <?php the_field('future_details_title'); ?>
                                </h6>
                            <?php endif; ?>
                            <?php if (get_field('future_details_p')): ?>
                                <p>
                                    <?php the_field('future_details_p'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="key-future-details flex mt-30">
                        <div>
                            <?php
                            $image = get_field('key_future_img');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>
                        <div class="future-details">
                            <?php if (get_field('future_details_title_1')): ?>
                                <h6 class="mt-10">
                                    <?php the_field('future_details_title_1'); ?>
                                </h6>
                            <?php endif; ?>
                            <?php if (get_field('future_details_p')): ?>
                                <p>
                                    <?php the_field('future_details_p'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="key-future-details flex mt-30">
                        <div>
                            <?php
                            $image = get_field('key_future_img');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </div>
                        <div class="future-details">
                            <?php if (get_field('future_details_title_2')): ?>
                                <h6 class="mt-10">
                                    <?php the_field('future_details_title_2'); ?>
                                </h6>
                            <?php endif; ?>
                            <?php if (get_field('future_details_p')): ?>
                                <p>
                                    <?php the_field('future_details_p'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-md-12">
                    <div class="key-img mb-48">
                        <?php
                        $image = get_field('key__img');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if ($image) {
                            echo wp_get_attachment_image($image, $size);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section how-we-work" id="works">
        <div class="wrap">
            <div class="how-work-title">
                <div class="row">
                    <div class="col-6 col-md-12">
                        <?php if (get_field('work_title')): ?>
                            <h3>
                                <?php the_field('work_title'); ?>
                            </h3>
                        <?php endif; ?>
                    </div>
                    <div class="col-6 col-md-12">
                        <?php if (get_field('work_p')): ?>
                            <p>
                                <?php the_field('work_p'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="work-part mt-48">
                <div class="row">
                    <div class="col-4 col-md-6 col-sm-12">
                        <div class="blog-details text-center">
                            <span>1</span>
                            <?php
                            $image = get_field('work_img_1');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size, "", ["class" => "eating-img"]);
                            }
                            ?>
                            <?php if (get_field('work_blog_title_1')): ?>
                                <h6>
                                    <?php the_field('work_blog_title_1'); ?>
                                </h6>
                            <?php endif; ?>
                            <?php if (get_field('work__blog_p')): ?>
                                <p>
                                    <?php the_field('work__blog_p'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-4 col-md-6 col-sm-12 mt-sm-25">
                        <div class="blog-details text-center">
                            <span>2</span>
                            <?php
                            $image = get_field('work_img_2');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size, "", ["class" => "space-img "]);
                            }
                            ?>
                            <?php if (get_field('work_blog_title_2')): ?>
                                <h6>
                                    <?php the_field('work_blog_title_2'); ?>
                                </h6>
                            <?php endif; ?>
                            <?php if (get_field('work__blog_p')): ?>
                                <p>
                                    <?php the_field('work__blog_p'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-4 col-md-12 mt-md-20 col-sm-12">
                        <div class="blog-details text-center">
                            <span>3</span>
                            <?php
                            $image = get_field('work_img_3');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size, "", ["class" => "task-img "]);
                            }
                            ?>
                            <?php if (get_field('work_blog_title_2')): ?>
                                <h6>
                                    <?php the_field('work_blog_title_2'); ?>
                                </h6>
                            <?php endif; ?>
                            <?php if (get_field('work__blog_p')): ?>
                                <p>
                                    <?php the_field('work__blog_p'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section Connections mt-0 ">
        <div class="wrap">
            <div class="row">
                <div class="col-3 col-md-12">
                    <div class="title-connection ">
                        <?php if (get_field('connections_title')): ?>
                            <h3>
                                <?php the_field('connections_title'); ?>
                            </h3>
                        <?php endif; ?>
                        <?php if (get_field('connections_p')): ?>
                            <p>
                                <?php the_field('connections_p'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-9 col-md-12 mt-sm-25">
                    <div class="slider-1 owl-carousel owl-themeb col-sm-12">
                        <div class="card-slider">
                            <?php
                            $image = get_field('card_slider_1');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                            <div class="silder-details flex">
                                <div class="text-details mt-md-20">
                                    <?php if (get_field('card_slider_title_1')): ?>
                                        <h6 class="mt-10 text-blue">
                                            <?php the_field('card_slider_title_1'); ?>
                                        </h6>
                                    <?php endif; ?>
                                    <p>Harvard university</p>
                                </div>
                                <a href="#" class="btn btn--transparent mt-30">view more</a>
                            </div>
                        </div>
                        <div class="card-slider">
                            <?php
                            $image = get_field('card_slider_2');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                            <div class="silder-details flex">
                                <div class="text-details mt-md-20">
                                    <?php if (get_field('card_slider_title_2')): ?>
                                        <h6 class="mt-10 text-blue">
                                            <?php the_field('card_slider_title_2'); ?>
                                        </h6>
                                    <?php endif; ?>
                                    <p>Cocacola., Co</p>
                                </div>
                                <a href="#" class="btn btn--transparent mt-30 mt-md-20">view more</a>
                            </div>
                        </div>
                        <div class="card-slider">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/img-2.jpg"
                                alt="loading">
                            <div class="silder-details flex">
                                <div class="text-details mt-md-20">
                                    <h6 class="use-growth mt-10">User growth</h6>
                                    <p>Harvard university</p>
                                </div>
                                <a href="#" class="btn btn--transparent mt-30 mt-md-20">view more</a>
                            </div>
                        </div>
                        <div class="card-slider">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/img-3.jpg"
                                alt="loading">
                            <div class="silder-details flex">
                                <div class="text-details">
                                    <h6 class="use-growth mt-10">Products</h6>
                                    <p>Cocacola., Co</p>
                                </div>
                                <a href="#" class="btn btn--transparent mt-30">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section future-plan">
        <div class="wrap">
            <div class="future-plan-title text-center">
                <h3>Start saving time today<br> and <span class="text-blue">choose</span> your best plan </h3>
                <p class="text-white mb-48">Best for freelance developers who need to<br> save their time </p>
            </div>
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="future-blog">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/startup.svg"
                            alt="loading">
                        <h4 class="mb-0">Startup</h4>
                        <span class="text-blue">$45.99 </span>
                        <p class="text-white mt-10">user per month </p>
                        <div class="mob-nav-2">
                            <ul>
                                <li>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">3 Emails
                                </li>
                                <li>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">1 Datebases
                                </li>
                                <li>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">Unlimited Domains
                                </li>
                                <li>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">10 GB Storage
                                </li>
                            </ul>
                        </div>
                        <div class="purchase flex mt-30">
                            <a href="#" class="btn btn--yellow">Start Free Trial</a>
                            <a href="#" class="btn btn--transparent">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-sm-12 mt-sm-25">
                    <div class="future-blog text-b-white bg-color-blue">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/agency.svg"
                            alt="loading">
                        <h4 class="mb-0 text-b-white">Agency</h4>
                        <span>$45.99</span>
                        <p class="mt-10">user per month </p>
                        <div class="mob-nav-2">
                            <ul>
                                <li class="text-b-white">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">6 Emails
                                </li>
                                <li class="text-b-white">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">4 Datebases
                                </li>
                                <li class="text-b-white">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">Unlimited Domains
                                </li>
                                <li class="text-b-white">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">35 GB Storage
                                </li>
                            </ul>
                        </div>
                        <div class="purchase2 flex mt-30">
                            <a href="#" class="btn btn--yellow">Start Free Trial</a>
                            <a href="#" class="btn btn--transparent">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-12 mt-md-20 mt-sm-25">
                    <div class="future-blog">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/enterprise.svg"
                            alt="loading">
                        <h4 class="mb-0">Enterprise </h4>
                        <span class="text-blue">$85.99 </span>
                        <p class="text-white mt-10">user per month </p>
                        <div class="mo-view">
                            <ul>
                                <li>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">12 Emails
                                </li>
                                <li>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">8 Datebases
                                </li>
                                <li>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">Unlimited Domains
                                </li>
                                <li>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/cheked.png"
                                        alt="loading">50 GB Storage
                                </li>
                            </ul>
                        </div>
                        <div class="purchase flex mt-30">
                            <a href="#" class="btn btn--yellow">Start Free Trial</a>
                            <a href="#" class="btn btn--transparent">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-form">
        <div class="wrap">
            <div class="form-title text-center">
                <h3>Subscribe now to<span class="text-blue"> Our<br> Newsletter</span> and get the<br> Coupon code.
                </h3>
                <p class="text-white">All your information is completely confidential </p>

            </div>
            <div class="from mt-48">
                <form action="" method="post">
                    <input class="mail-input" type="text" name="mail" id="" placeholder="Type your e-mail">
                    <button class="btn btn--yellow">sign-up</button>
                </form>
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php

get_footer();