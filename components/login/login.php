
<section class="container mx-auto">
    <div class="grid grid-flow-col">
        <div>
            <h1 class="text-center font-bold text-gray-600 text-4xl leading-10"><span class="text-gray-500 text-6xl">Breaking Down</span> <br> Employment Barriers</h1>
            <?php 
                $image_id = 33; // replace with the actual image attachment ID 
                $image_src = wp_get_attachment_image_src( $image_id, 'large' );
            ?>

            <img class="mt-10" src="<?php echo esc_url( $image_src[0] ); ?>" alt="Virtualahan Logo" width="<?php echo esc_attr( $image_src[1] ); ?>" height="<?php echo esc_attr( $image_src[2] ); ?>">
        </div>
        <div class="my-auto">
        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-medium mb-4">Login</h2>
            <div class="mb-4">
            <label class="block font-medium mb-2" for="username">Username</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" aria-describedby="username-error" required>
            <p class="text-red-500 text-xs italic" id="username-error"></p>
            </div>
            <div class="mb-4">
            <label class="block font-medium mb-2" for="password">Password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password" aria-describedby="password-error" required>
            <p class="text-red-500 text-xs italic" id="password-error"></p>
            </div>
            <div class="mb-4 flex items-center">
            <input type="checkbox" class="form-checkbox mr-2" id="remember-me" name="remember-me">
            <label class="font-medium" for="remember-me">Remember Me</label>
            </div>
            <input type="hidden" name="action" value="custom_login">
            <button class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600" type="submit">Login</button>
            <hr class="my-4">
            <p class="text-center">Not a member? <a href="#" class="text-blue-500 hover:underline">Sign up</a></p>
        </form>
        </div>
    </div>
</section>