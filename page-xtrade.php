<?php

/*
    Template Name: xTrade

*/

wp_head(); // wp foot
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>

    <header>
        <!-- Top Header -->
        <section class="py-6 bg-[#020E28]">
            <div class="flex justify-end px-4 md:justify-center">
                <div class="grid items-center grid-cols-12 justify-items-end">
                    <a class="col-span-12 md:col-span-5 w-fit text-[#e1e1e1] hover:text-yellow-500 text-sm" href="tel:+786-842-0320">
                        <span class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="w-3.5 h-3.5" style="stroke:#027AFB;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            &nbsp;786-842-0320
                        </span>
                    </a>
                    <span class="hidden md:block md:mx-auto md:col-span-1">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                    <a class="col-span-12 md:col-span-5 w-fit text-[#e1e1e1] hover:text-yellow-500 text-sm" href="mailto:sales@anncarequipment.com">
                        <span class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="w-3.5 h-3.5" style="stroke:#027AFB;">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            &nbsp;sales@anncarequipment.com
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Menu Section -->
        <section class="w-3/4 mx-auto">
            <div class="grid items-center grid-cols-12 gap-4 py-4 md:py-0">
                <!-- Logo -->
                <div class="flex justify-center col-span-8 my-4 md:justify-start md:my-auto md:col-span-2 2xl:col-span-2">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php
                            if ( has_custom_logo() ) {
                                the_custom_logo();
                            } else {
                                echo get_bloginfo('name');
                            }
                        ?>
                    </a>
                </div>

                <!-- Nav -->
                <div class="relative flex justify-end col-span-4 my-4 md:my-auto xTradeNav md:col-span-7 2xl:col-span-8">
                    
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'xtradeMenu',
                            'menu_id' => 'xtrade-menu',
                            'container' => 'nav',
                            'container_class' => 'menu-class md:block z-30', // Add a custom class to the container if desired
                            'menu_class' => 'menu-list-class hidden md:flex md:justify-center', // Add a custom class to the menu ul if desired
                        ));
                    ?>

                    <!-- Toogle Nave -->
                    <a id="menu_toggle" class="md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </a>
                </div>

                <div class="flex justify-end col-span-12 my-4 md:my-auto md:col-span-3 2xl:col-span-2">
                    <button
                        class="flex bg-gradient-to-r from-yellow-500 from-10% to-blue-500 py-4 px-6 text-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                        </svg>
                        &nbsp;Need Estimate?
                    </button>
                </div>

            </div>
        </section>
    </header>

    <!-- Slider main container -->
    <div id="xTradeSlider" class="bg-[#020e28] relative">
        <div class="relative bg-center bg-no-repeat bg-cover xTradeSliderItems"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/tradella-international-Home-page.png);">
            <div class="w-3/4 py-6 mx-auto">
                <div class="grid grid-cols-12 gap-4 md:h-full">

                    <!-- Left Side -->
                    <div class="col-span-7 pt-10 font-bold uppercase md:pt-28 md:col-span-7">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <h1 class="pb-4 text-xl leading-normal text-white md:text-6xl"><span
                                            class="text-yellow-400">Grow</span> Your <br> Business <span class="text-blue-400">With <br>
                                            Anncar</span></h1>
                                    <h3 class="text-sm text-white">High Quality Heavy Equipment Spare Parts Supplier</h3>
                                </div>

                                <div class="swiper-slide">
                                    <h1 class="pb-4 text-xl leading-normal text-white md:text-6xl"><span
                                            class="text-yellow-400">2 Grow</span> Your <br> Business <span class="text-blue-400">With <br>
                                            Anncar</span></h1>
                                    <h3 class="text-sm text-white">High Quality Heavy Equipment Spare Parts Supplier</h3>
                                </div>


                                <div class="swiper-slide">
                                    <h1 class="pb-4 text-xl leading-normal text-white md:text-6xl"><span
                                            class="text-yellow-400">3 Grow</span> Your <br> Business <span class="text-blue-400">With <br>
                                            Anncar</span></h1>
                                    <h3 class="text-sm text-white">High Quality Heavy Equipment Spare Parts Supplier</h3>
                                </div>

                            </div>
                        </div>    
                    </div>

                    <!-- Right Side -->
                    <div class="relative col-span-5 md:col-span-5">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="absolute image-layer" style="width:70%; top:20%; right:20%;"
                                        src="<?php echo  get_template_directory_uri() ;?>/assets/images/tradella-international-Home-page-l01.png"
                                        alt="">
                                    <img class="absolute image-layer" style="width: 70%; top:13%; right:24%;"
                                        src="<?php echo  get_template_directory_uri() ;?>/assets/images/tradella-international-Home-page-l1.png"
                                        alt="">
                                </div>
    
                                <div class="swiper-slide">
                                    <img class="absolute image-layer" style="width:70%; top:20%; right:20%;"
                                        src="<?php echo  get_template_directory_uri() ;?>/assets/images/s2.png"
                                        alt="">
                                </div>
    
                                <div class="swiper-slide">
                                    <img class="absolute image-layer" style="width:70%; top:20%; right:20%;"
                                        src="<?php echo  get_template_directory_uri() ;?>/assets/images/tradella-international-Home-page-l01.png"
                                        alt="">
                                    <img class="absolute image-layer" style="width: 70%; top:13%; right:24%;"
                                        src="<?php echo  get_template_directory_uri() ;?>/assets/images/tradella-international-Home-page-l1.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <main class="w-3/4 py-6 mx-auto">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <?php while (have_posts()): the_post(); ?>

                <h1 class="py-10 text-4xl font-bold uppercase"><?php the_title(); ?></h1>

                <?php the_content(); ?>

                <!-- Authore -->
                <div id="author" class="px-8 py-8 mt-10 bg-gray-200 md:w-3/4">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 md:col-span-4">
                          <?php
                              // Authoure Data
                              $author_id = get_the_author_meta('ID'); // Get the author's user ID
                              $author_email = get_the_author_meta('user_email', $author_id); // Get the author's email address

                              if (!empty($author_email)) {
                                $author_emailHash = md5(strtolower(trim($author_email)));
                              }else{
                                $author_emailHash = md5(strtolower(trim('hell@asifulmamun.info.bd')));
                              }

                              $gravatarUrl = 'https://www.gravatar.com/avatar/' . $author_emailHash . '?s=150';


                              // Link Scrap
                              $dribbble_url = get_the_author_meta('dribbble_url', $author_id);
                              $twitter_url = get_the_author_meta('twitter_url', $author_id);
                              $discord_url = get_the_author_meta('discord_url', $author_id);

                              // Function to generate social media links or #
                              function generateSocialLink($url, $name) {
                                return !empty($url) ? esc_url($url) : "#";
                              }
                            ?>

                            <!-- Authore Image -->
                            <img class="transition ease-in-out rounded-full hover:scale-110" src="<?php echo $gravatarUrl; ?>" alt="Gravatar Image"><br>


                            <!-- Social Media -->
                            <div class="flex authore_social pl-9">
                                <a href="<?php echo generateSocialLink($discord_url, "Discord");?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z" />
                                        </svg>
                                </a>
                                <a href="<?php echo generateSocialLink($twitter_url, "Twitter") . ' '; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                        </svg>
                                </a>
                                <a href="<?php echo generateSocialLink($dribbble_url, "Dribbble") . ' '; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z" />
                                        </svg>
                                </a>
                            </div>
                        </div>


                        <!-- INFO - Author -->
                        <div class="col-span-12 md:col-span-8">
                            <!-- Right column with dummy data -->
                            <h2 class="py-2 text-2xl font-bold"><?php the_author(); ?></h2>
                            <p class="text-sm leading-9"><?php the_author_meta('description'); ?></p>
                            <!-- Add more author bio content here -->
                        </div>
                    </div>
                </div>

                <?php  endwhile; ?>
            </div>
        </div>
    </main>








<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    // Slider
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        spaceBetween: '30%',
        parallaxed: true,
        loop: true,

        grabCursor: true,
        centeredSlides: true,
        // slidesPerView: 'auto',
        
        
        // effect: 'coverflow',
        // coverflowEffect: {
            // rotate: 50,
            // stretch: 0,
            // depth: 100,
            // modifier: 1,
        // slideShadows: true,
        // },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        on: {
            slideChangeTransitionStart: function () {
                var layers = this.slides[this.activeIndex].querySelectorAll('.text-layer, .image-layer');
                layers.forEach(function (layer) {
                    layer.style.transform = 'translateX(0)';
                });
            },
        },


        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },

    });


    // Menu
    var x = document.getElementById("xtrade-menu");
    var toggleButton = document.getElementById("menu_toggle");

    // Function to toggle the class
    function toggleMenuClass() {
        if (x.classList.contains("hidden")) {
            x.classList.remove("hidden");
            x.classList.add("block");
        } else {
            x.classList.remove("block");
            x.classList.add("hidden");
        }
    }

    // Add an event listener to the toggle button
    toggleButton.addEventListener("click", toggleMenuClass);
</script>

</body>
</html>
<?php 	wp_footer(); // wp head ?>