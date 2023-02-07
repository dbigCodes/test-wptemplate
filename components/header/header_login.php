<header class="bg-teal-800 p-4">
  <div class="container mx-auto">
    <div class="grid grid-flow-col justify-start items-center">
    <?php 
                $image_id = 32; // replace with the actual image attachment ID 
                $image_src = wp_get_attachment_image_src( $image_id, 'large' );
            ?>

            <img src="<?php echo esc_url( $image_src[0] ); ?>" alt="Virtualahan Logo" width="<?php echo esc_attr( $image_src[1] ); ?>" height="<?php echo esc_attr( $image_src[2] ); ?>">
            <p class="text-white text-4xl">Virtual Eskwelahan</p>
      
    </div>
  </div>
</header>