<header class="bg-gray-900 p-4">
  <div class="container mx-auto">
    <div class="flex items-center justify-between">
    <?php 
                $image_id = 32; // replace with the actual image attachment ID 
                $image_src = wp_get_attachment_image_src( $image_id, 'large' );
            ?>

            <img src="<?php echo esc_url( $image_src[0] ); ?>" alt="Virtualahan Logo" width="<?php echo esc_attr( $image_src[1] ); ?>" height="<?php echo esc_attr( $image_src[2] ); ?>">
            <p class="text-teal-800">Virtual Eskwelahan</p>
      <a href="<?php echo get_home_url(); ?>" class="font-bold text-white text-xl">My WordPress Site</a>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Login
      </button>
    </div>
  </div>
</header>