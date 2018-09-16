<?php
/*
Template Name: level-booking
*/

get_header();
?>
<main class="site-main">
    <div class="primary-mobile-content">
        <!--start of type level video-->    
        <section class="cl-video-player cl-video-player-container">
            <div class="video-player"></div>
            <div class="players-container">
                <?php
                    $image = get_field('class_hero_image');
                    if( !empty($image) ): 
                ?>
                <div class="cl-poster" style="background-image: url(<?php echo $image['url']; ?>);"></div>
                <?php endif; 
                ?>
            </div>
        </section>
        <!--end of type level video-->
        <!--start of course summary-->
        <section class="class-summary">
            <div class="margin-bottom-xl margin-top-xl">
                <?php the_field('class_summary'); ?>
            </div>
        </section>
        <!--end of course summary-->
        <!--start of courses timetable-->
        <section id="main-courses-timetable" class="courses-timetable">
            <h3 class="text-uppercase">Courses Timetable</h3>
            <p id="grid1Label" ><?php the_field('class_timetable_summary'); ?></p>
            <p class="booking-note"><?php the_field('class_timetable_note'); ?></p>   
            <div class="margin-bottom-xl"><!--summary class booking table-->
                <table role="grid" aria-labelledby="grid1Label" class="data">
                    <thead>
                        <tr>
                            <th class="buy-table-col-1">
                                Course
                            </th>
                            <th class="buy-table-col-2">
                                Day
                            </th>
                            <th class="buy-table-col-3">
                                Date
                            </th>
                            <th class="buy-table-col-4">
                                Location
                            </th>
                            <th class="buy-table-col-5">
                                Price
                            </th>
                            <th class="buy-table-col-6">
                                Book
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php the_field('class_timetable'); ?>
                    </tbody>
                </table>
            </div><!--end of summary class booking table-->
        </section>
        <!-- end of courses timetable block-->
        <!--start of more table-->
        <section class="details-group margin-top-xl additional-data-table">
            <details class="details">
                <summary class="details__summary">
                    <h3 class=" text-uppercase btn btn-block btn-primary">Click for More Dates</h3>
                </summary>
                <div class="details__content">
                    <table role="grid" aria-labelledby="grid1Label" class="data">
                        <?php the_field('class_more_timetable'); ?>
                    </table>
                </div>
            </details>
        </section>
        <!--end of more table-->
        <!--start of class description-->
        <section>
            <?php
                if (have_posts()):
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else:
                        echo '<p></p>';
                endif;
            ?>
        </section>
        <!-- end of class description block-->
    </div>
    <div class="secondary-mobile-content">
        <!--start of top-reviews-->
        <section class="top-reviews margin-top-xl">
            <div>
                <div class="cl-review featured-review flexbox">
                    <div class="big-quote">
                        &#8220;
                    </div>
                    <div>
                        <p class="comment overflow-hidden review-comment clickable"><?php the_field('class_top_review'); ?></p>
                            <div class="db-reviewer">
                                <h6 class="xs-margin-none"><?php the_field('class_top_review_name'); ?></h6>
                                </p>
                            </div>
                    </div>
                    <div class="big-quote">
                        &#8220;
                    </div>
                </div>
            </div>
        </section>
        <!--End top reviews-->
        <!--start of alternative advert 2-->
        <section>
            <div class="horizontal-center vertical-middle advert-text-only-box text-center">
                <a class="lets-go-cta" style="" href="<?php the_field('class_taster_url_page'); ?>">
                    <h2 class="white margin-top-xl margin-bottom-xl text-uppercase"><?php the_field('class_taster_title'); ?></h2>
                    <h4 class="white margin-top-s margin-bottom-xl"></h4>
                    <p class="white margin-top-l margin-bottom-s"><?php the_field('class_taster_strap_line'); ?></p>
                    <span class="btn btn-primary margin-top-l vertical-bg">Find out More</span>
                </a>
            </div>
        </section>
        <!--end of alternative advert 2-->
        <!--start of venues-->
        <section id="venues" class="details-group margin-top-xl">
            <details class="details">
                <summary class="details__summary">
                    <h3 class="text-uppercase" >Locations</h3>
                </summary>
                <div class="details__content">
                    <ul>
                        <?php the_field('class_venues'); ?>
                    </ul>
                </div>
            </details>
        </section>
        <!--end of venues-->
        <!--start of instructors-->
        <section id="course-instructors" class="details-group margin-top-xl">
            <details class="details">
                <summary class="details__summary">
                    <h3 class=" text-uppercase">Instructors</h3>
                </summary>
                <div class="details__content">
                    <ul>
                        <?php the_field('class_instructors'); ?>
                    </ul>
                </div>
            </details>
        </section>
        <!--end of instructors-->
        <!--start of faq-->
        <section id="faq" class="details-group margin-top-xl">
            <details class="details">
                <summary class="details__summary">
                    <h3 class=" text-uppercase">FAQs</h3>
                </summary>
                <div class="details__content">
                    <ul>
                        <?php the_field('class_faqs'); ?>
                    </ul>
                </div>
            </details>
        </section>
        <!--end of faq-->
    </div>
    <aside class="site-aside"></aside>
</main><!--end of main content-->
<?php
get_footer();
?>




