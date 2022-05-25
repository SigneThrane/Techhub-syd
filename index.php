<?php get_header() ?>

<main>
    <div id="hero" class="px-4 py-5 text-center">
        <h1 class="display-5 fw-bold"><?php bloginfo("name") ?></h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4"><?php bloginfo("description") ?></p>
        </div>
    </div>
    <div class="container">

                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post() ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No content found</p>
                <?php endif; ?>
                <div class="container-fluid p-0 pt-3">
                    <div class="row">
                        <div class="col-4 p-0">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/images/hotel1.jpg" alt="">
                        </div>
                        <div class="col-4 p-0">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/images/hotel2.jpg" alt="">
                        </div>
                        <div class="col-4 p-0">
                            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/images/hotel3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


<?php get_footer() ?>
