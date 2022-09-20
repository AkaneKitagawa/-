            <?php if( get_field('archive_update1') ) { ?>
            <div class="col-xs-6 col-sm-4">
                <a class="fancybox" href="<?php the_field('archive_update1'); ?>"  data-fancybox-group="gallery" title="<?php the_field('archive_update1_comment'); ?>">
                    <img src="<?php the_field('archive_update1'); ?>" class="img-responsive">
                </a>
                <br><?php the_field('archive_update1_comment'); ?>
            </div>
            <?php } ?>

            <?php if( get_field('archive_update2') ) { ?>
            <div class="col-xs-6 col-sm-4">
                <a class="fancybox" href="<?php the_field('archive_update2'); ?>"  data-fancybox-group="gallery" title="<?php the_field('archive_update2_comment'); ?>">
                    <img src="<?php the_field('archive_update2'); ?>" class="img-responsive">
                </a>
                <br><?php the_field('archive_update2_comment'); ?>
            </div>
            <?php } ?>

            <?php if( get_field('archive_update3') ) { ?>
            <div class="col-xs-6 col-sm-4">
                <a class="fancybox" href="<?php the_field('archive_update3'); ?>"  data-fancybox-group="gallery" title="<?php the_field('archive_update3_comment'); ?>">
                    <img src="<?php the_field('archive_update3'); ?>" class="img-responsive">
                </a>
                <br><?php the_field('archive_update3_comment'); ?>
            </div>
            <?php } ?>

            <?php if( get_field('archive_update4') ) { ?>
            <div class="col-xs-6 col-sm-4">
                <a class="fancybox" href="<?php the_field('archive_update4'); ?>"  data-fancybox-group="gallery" title="<?php the_field('archive_update4_comment'); ?>">
                    <img src="<?php the_field('archive_update4'); ?>" class="img-responsive">
                </a>
                <br><?php the_field('archive_update4_comment'); ?>
            </div>
            <?php } ?>