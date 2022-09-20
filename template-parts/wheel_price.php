<section class="wheel_tableArea">
  <p>※スマートフォン等で確認する場合は、横にスライドしてください。</p>

<?php if( have_rows('price') ): ?>
  <?php while ( have_rows('price') ) : the_row(); ?>

    <?php if(wp_is_phone())://スマートフォン ?>
        <?php $table = get_sub_field( 'price_list' );
          if ( ! empty ( $table ) ) {
          echo '<table border="0" data-simplebar data-simplebar-auto-hide="false">';
            if ( ! empty( $table['caption'] ) ) {
            echo '<caption>' . $table['caption'] . '</caption>';
            }
            if ( ! empty( $table['header'] ) ) {
            echo '<thead>';
              echo '<tr>';
                foreach ( $table['header'] as $th ) {
                echo '<th>';
                  echo $th['c'];
                  echo '</th>';
                }
                echo '</tr>';
              echo '</thead>';
            }
            echo '<tbody>';
              foreach ( $table['body'] as $tr ) {
              echo '<tr>';
                foreach ( $tr as $td ) {
                echo '<td>';
                  echo $td['c'];
                  echo '</td>';
                }
                echo '</tr>';
              }
              echo '</tbody>';
            echo '</table>';
          } ?>
    <?php else://PC ?>
        <?php $table = get_sub_field( 'price_list' );
          if ( ! empty ( $table ) ) {
          echo '<table border="0">';
            if ( ! empty( $table['caption'] ) ) {
            echo '<caption>' . $table['caption'] . '</caption>';
            }
            if ( ! empty( $table['header'] ) ) {
            echo '<thead>';
              echo '<tr>';
                foreach ( $table['header'] as $th ) {
                echo '<th>';
                  echo $th['c'];
                  echo '</th>';
                }
                echo '</tr>';
              echo '</thead>';
            }
            echo '<tbody>';
              foreach ( $table['body'] as $tr ) {
              echo '<tr>';
                foreach ( $tr as $td ) {
                echo '<td>';
                  echo $td['c'];
                  echo '</td>';
                }
                echo '</tr>';
              }
              echo '</tbody>';
            echo '</table>';
          } ?>
    <?php endif; ?>

  <?php endwhile; ?>
<?php endif; ?>
</section>

