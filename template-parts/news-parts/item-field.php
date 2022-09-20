            <?php if( get_field('item1') ) { ?>
            <div class="col-xs-6">
            <?php $relational = get_field('item1_link');
                foreach( (array)$relational as $value) { ?>
                    <a href="<?php echo $value; ?>">
                        <?php $imgid = get_field('item1');
		$img = wp_get_attachment_image_src( $imgid , 'litemlist' ); ?>
	<img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" alt="<?php the_title_attribute(); ?>">
                
                    </a>
                    <br><?php the_field('item1_comment'); ?>
                <?php } ?>
            </div>
            <?php } ?>
            

            
            <?php if( get_field('item2') ) { ?>
            <div class="col-xs-6">
            <?php $relational = get_field('item2_link');
                foreach( (array)$relational as $value) { ?>
                    <a href="<?php echo $value; ?>">
                        <?php $imgid = get_field('item2');
		$img = wp_get_attachment_image_src( $imgid , 'litemlist' ); ?>
	<img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" alt="<?php the_title_attribute(); ?>">
                
                    </a>
                    <br><?php the_field('item2_comment'); ?>
                <?php } ?>
            </div>
            <?php } ?>
            

            
            <?php if( get_field('item3') ) { ?>
            <div class="col-xs-6">
            <?php $relational = get_field('item3_link');
                foreach( (array)$relational as $value) { ?>
                    <a href="<?php echo $value; ?>">
                        <?php $imgid = get_field('item3');
		$img = wp_get_attachment_image_src( $imgid , 'litemlist' ); ?>
	<img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" alt="<?php the_title_attribute(); ?>">
                
                    </a>
                    <br><?php the_field('item3_comment'); ?>
                <?php } ?>
            </div>
            <?php } ?>
            

            
            <?php if( get_field('item4') ) { ?>
            <div class="col-xs-6">
            <?php $relational = get_field('item4_link');
                foreach( (array)$relational as $value) { ?>
                    <a href="<?php echo $value; ?>">
                        <?php $imgid = get_field('item4');
		$img = wp_get_attachment_image_src( $imgid , 'litemlist' ); ?>
	<img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" alt="<?php the_title_attribute(); ?>">
                
                    </a>
                    <br><?php the_field('item4_comment'); ?>
                <?php } ?>
            </div>
            <?php } ?>
            

            
            <?php if( get_field('item5') ) { ?>
            <div class="col-xs-6">
            <?php $relational = get_field('item5_link');
                foreach( (array)$relational as $value) { ?>
                    <a href="<?php echo $value; ?>">
                        <?php $imgid = get_field('item5');
		$img = wp_get_attachment_image_src( $imgid , 'litemlist' ); ?>
	<img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" alt="<?php the_title_attribute(); ?>">
                
                    </a>
                    <br><?php the_field('item5_comment'); ?>
                <?php } ?>
            </div>
            <?php } ?>
            

            
            <?php if( get_field('item6') ) { ?>
            <div class="col-xs-6">
            <?php $relational = get_field('item6_link');
                foreach( (array)$relational as $value) { ?>
                    <a href="<?php echo $value; ?>">
                        <?php $imgid = get_field('item6');
		$img = wp_get_attachment_image_src( $imgid , 'litemlist' ); ?>
	<img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" alt="<?php the_title_attribute(); ?>">
                
                    </a>
                    <br><?php the_field('item6_comment'); ?>
                <?php } ?>
            </div>
            <?php } ?>
            

            
            <?php if( get_field('item7') ) { ?>
            <div class="col-xs-6">
            <?php $relational = get_field('item7_link');
                foreach( (array)$relational as $value) { ?>
                    <a href="<?php echo $value; ?>">
                        <?php $imgid = get_field('item7');
		$img = wp_get_attachment_image_src( $imgid , 'litemlist' ); ?>
	<img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" alt="<?php the_title_attribute(); ?>">
                
                    </a>
                    <br><?php the_field('item7_comment'); ?>
                <?php } ?>
            </div>
            <?php } ?>

            <?php if( get_field('item8') ) { ?>
            <div class="col-xs-6">
            <?php $relational = get_field('item8_link');
                foreach( (array)$relational as $value) { ?>
                    <a href="<?php echo $value; ?>">
                        <?php $imgid = get_field('item1');
		$img = wp_get_attachment_image_src( $imgid , 'litemlist' ); ?>
	<img src="<?php echo $img[0]; ?>" width="<?php echo $img[1]; ?>" height="<?php echo $img[2]; ?>" alt="<?php the_title_attribute(); ?>">
                
                    </a>
                    <br><?php the_field('item7_comment'); ?>
                <?php } ?>
            </div>
            <?php } ?>