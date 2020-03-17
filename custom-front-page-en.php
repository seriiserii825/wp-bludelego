<?php
	/**
	 * Template name: Home English
	 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/custom-assets/css/my.css">
    <title>Main</title>
</head>
<body>
<div class="hidden">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <symbol viewBox="264.2 371 20.3 18.8" id="basket" xmlns="http://www.w3.org/2000/svg">
            <path class="st0"
                  d="M283.7 378.2h-3.2l-3.4-6.8c-.2-.4-.6-.5-1-.3s-.5.6-.3 1l3.1 6.1h-9.1l3.1-6.1c.2-.4 0-.8-.3-1-.4-.2-.8 0-1 .3l-3.4 6.8H265c-.4 0-.8.3-.8.8 0 .4.3.8.8.8h.2l.9 3c-.2.1-.3.3-.3.6 0 .4.3.7.7.7l1.7 5.8h12.7l1.7-5.8c.4 0 .7-.3.7-.7 0-.2-.1-.5-.3-.6l.9-3h.2c.4 0 .8-.3.8-.8-.4-.5-.7-.8-1.2-.8zm-4.1 10.1h-10.4L268 384h12.9l-1.3 4.3zm1.6-5.8h-13.7l-.8-2.8H282l-.8 2.8z"/>
        </symbol>
    </svg>
</div>
<div class="main-header"
     style="background-image: url('<?php echo get_template_directory_uri(); ?>/custom-assets/i/bludelego_home_new.jpg')">
    <div class="main-header__top">
        <div class="main-header__top-wrap">
            <a class="btn-emergency" href="https://bludelego.it/emergenza-sanitaria/"
               aria-hidden="false">Emergenza Sanitaria
            </a>
            <a class="logo" href="">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/bludelego-white-.png" alt="logo">
            </a>
            <div class="show-menu" id="js-show-menu">
                <span>Menu</span>
                <div class="sandwitch-wrap" id="js-sandwitch-wrap">
                    <div class="sandwitch">
                        <div class="sandwitch__line sandwitch__line--top"></div>
                        <div class="sandwitch__line sandwitch__line--middle"></div>
                        <div class="sandwitch__line sandwitch__line--bottom"></div>
                    </div>
                </div>
            </div>
            <div class="main-menu__wrap" id="js-main-menu__wrap">
                <ul class="main-menu">
                    <li>
                        <a href="https://bludelego.it/soluzioni/?lang=en">Solutions</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/soluzioni/web-digital-it/portfolio/">Portfolio</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/chi-siamo/?lang=en">About us</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/clienti/?lang=en">Our clients</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/contatti/?lang=en">Contact</a>
                    </li>
                </ul>
                <ul class="main-menu__buttons">
                    <li>
                        <a id="js-show-riservata-popup" class="main-header__button" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="20pt" height="20pt" viewBox="0 0 20 20" version="1.1">
                                <g id="surface1">
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                                          d="M 10.859375 12.160156 C 10.679688 11.855469 10.355469 11.667969 10 11.667969 C 9.449219 11.667969 9.003906 12.117188 9.003906 12.671875 C 9.007812 13.023438 9.195312 13.351562 9.5 13.53125 L 9.667969 13.625 L 9.667969 15 C 9.667969 15.183594 9.816406 15.332031 10 15.332031 C 10.183594 15.332031 10.332031 15.183594 10.332031 15 L 10.332031 13.625 L 10.5 13.53125 C 10.976562 13.25 11.136719 12.636719 10.859375 12.160156 Z M 10.859375 12.160156 "/>
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                                          d="M 15.332031 9.332031 C 14.953125 8.828125 14.503906 8.378906 14 8 L 14 4 C 14 1.789062 12.210938 0 10 0 C 7.789062 0 6 1.789062 6 4 L 6 8 C 3.054688 10.207031 2.457031 14.386719 4.667969 17.332031 C 6.875 20.277344 11.054688 20.875 14 18.667969 C 16.945312 16.457031 17.542969 12.277344 15.332031 9.332031 Z M 8 4 C 8 2.894531 8.894531 2 10 2 C 11.105469 2 12 2.894531 12 4 L 12 6.972656 L 11.90625 6.945312 L 11.78125 6.914062 C 11.625 6.867188 11.464844 6.832031 11.308594 6.800781 L 11.203125 6.78125 C 11.019531 6.746094 10.832031 6.71875 10.648438 6.703125 L 10.617188 6.703125 C 10.417969 6.667969 10.210938 6.667969 10 6.667969 C 9.789062 6.667969 9.585938 6.667969 9.378906 6.695312 L 9.332031 6.695312 C 9.148438 6.714844 8.964844 6.738281 8.785156 6.773438 L 8.675781 6.792969 C 8.519531 6.824219 8.363281 6.859375 8.210938 6.902344 L 8.078125 6.941406 L 7.988281 6.964844 Z M 10 17.332031 C 7.789062 17.332031 6 15.542969 6 13.332031 C 6 11.125 7.789062 9.332031 10 9.332031 C 12.210938 9.332031 14 11.125 14 13.332031 C 14 15.542969 12.210938 17.332031 10 17.332031 Z M 10 17.332031 "/>
                                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                                          d="M 10 10 C 8.160156 10 6.667969 11.492188 6.667969 13.332031 C 6.667969 15.175781 8.160156 16.667969 10 16.667969 C 11.839844 16.667969 13.332031 15.175781 13.332031 13.332031 C 13.332031 11.492188 11.839844 10 10 10 Z M 11.332031 13.667969 C 11.238281 13.792969 11.125 13.90625 11 14 L 11 15 C 11 15.550781 10.550781 16 10 16 C 9.449219 16 9 15.550781 9 15 L 9 14 C 8.261719 13.449219 8.113281 12.402344 8.667969 11.667969 C 9.21875 10.929688 10.261719 10.78125 11 11.332031 C 11.738281 11.886719 11.886719 12.929688 11.332031 13.667969 Z M 11.332031 13.667969 "/>
                                </g>
                            </svg>
                            <span>Private area</span>
                        </a>
                    </li>
                    <li>
                        <ul class="languages">
                            <li>
                                <a href="#">Italiano</a>
                            </li>
                            <li>
                                <a href="#">English</a>
                            </li>
                            <li>
                                <a href="#">Romana</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/showcase/bludelego/">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="30pt" height="30pt" viewBox="0 0 30 30" version="1.1">
                                <g id="surface1">
                                    <path style=" stroke:none;fill-rule:nonzero;fill:white;fill-opacity:1;"
                                          d="M 28.402344 0 L 1.597656 0 C 0.714844 0 0 0.714844 0 1.597656 L 0 28.402344 C 0 29.285156 0.714844 30 1.597656 30 L 28.402344 30 C 29.285156 30 30 29.285156 30 28.402344 L 30 1.558594 C 30 0.679688 29.285156 -0.0351562 28.402344 -0.0351562 Z M 8.4375 26.867188 L 3.503906 26.867188 L 3.503906 11.003906 L 8.4375 11.003906 Z M 5.976562 8.867188 C 4.398438 8.867188 3.121094 7.589844 3.121094 6.011719 C 3.121094 4.433594 4.398438 3.15625 5.976562 3.15625 C 7.554688 3.15625 8.832031 4.433594 8.832031 6.011719 C 8.832031 7.589844 7.554688 8.867188 5.976562 8.867188 Z M 26.902344 26.867188 L 21.972656 26.867188 L 21.972656 19.152344 C 21.972656 17.316406 21.972656 14.941406 19.402344 14.941406 C 16.835938 14.941406 16.453125 16.945312 16.453125 19.007812 L 16.453125 26.855469 L 11.519531 26.855469 L 11.519531 11.003906 L 16.246094 11.003906 L 16.246094 13.175781 L 16.320312 13.175781 C 17.285156 11.523438 19.078125 10.539062 20.988281 10.609375 C 25.980469 10.609375 26.902344 13.894531 26.902344 18.167969 Z M 26.902344 26.867188 "/>
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-header__center">
        <div class="container">
            <div class="main-header__center__wrap">
                <h2 class="main-header__subtitle">Let your company<br> take off</h2>
                <h1 class="main-header__title">Our services cut your company’s<br>
                    <strong>costs and increase your productivity</strong></h1>
                <a target="_blank" class="download-button"
                   href="<?php echo get_template_directory_uri(); ?>/custom-assets/files/bludelego-presentazione_web.pdf">
                    <span>Scarica la brochure</span>
                    <div class="download-button__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/download.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<section class="we-can">
    <h2 class="we-can__title">With Bludelego you can:</h2>
    <div class="container">
        <div class="we-can__wrap">
            <img class="we-can__image" src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/we-can-eng.jpg" alt="we can image">
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="features__wrap">
            <div class="features__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150"
                     preserveAspectRatio="xMidYMid meet">
                    <defs>
                        <clipPath id="animationMask_0vHe7iUniF">
                            <rect width="150" height="150" x="0" y="0"></rect>
                        </clipPath>
                    </defs>
                    <g clip-path="url(#animationMask_0vHe7iUniF)">
                        <g transform="matrix(1,0,0,1,0,0)" opacity="1" style="user-select: none;">
                            <g opacity="1" transform="matrix(1,0,0,1,74.996,75.001)">
                                <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0"
                                      stroke="rgb(29,112,182)" stroke-opacity="1" stroke-width="8"
                                      d=" M59.745,-0.001 C59.745,-0.001 48.335,15.704 48.335,15.704 C48.335,15.704 48.335,35.117 48.335,35.117 C48.335,35.117 29.872,41.115 29.872,41.115 C29.872,41.115 18.462,56.82 18.462,56.82 C18.462,56.82 0.001,50.822 0.001,50.822 C0.001,50.822 -18.462,56.82 -18.462,56.82 C-18.462,56.82 -29.872,41.115 -29.872,41.115 C-29.872,41.115 -48.335,35.117 -48.335,35.117 C-48.335,35.117 -48.335,15.706 -48.335,15.706 C-48.335,15.706 -59.745,0.001 -59.745,0.001 C-59.745,0.001 -48.335,-15.704 -48.335,-15.704 C-48.335,-15.704 -48.335,-35.117 -48.335,-35.117 C-48.335,-35.117 -29.872,-41.116 -29.872,-41.116 C-29.872,-41.116 -18.463,-56.82 -18.463,-56.82 C-18.463,-56.82 -0.001,-50.822 -0.001,-50.822 C-0.001,-50.822 18.462,-56.82 18.462,-56.82 C18.462,-56.82 29.872,-41.116 29.872,-41.116 C29.872,-41.116 48.333,-35.118 48.333,-35.118 C48.333,-35.118 48.335,-15.706 48.335,-15.706 C48.335,-15.706 59.745,-0.001 59.745,-0.001z"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,74.996,75.001)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(59,176,253)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M10.986,-16.251 C10.986,-16.251 -2.86,-16.251 -2.86,-16.251 C-7.348000000000001,-16.251 -10.986,-12.613 -10.986,-8.126 C-10.986,-3.637999999999999 -7.348000000000001,0.001 -2.86,0.001 C-2.86,0.001 2.861,0.001 2.861,0.001 C7.348000000000001,0.001 10.986,3.637999999999999 10.986,8.126 C10.986,12.613 7.348000000000001,16.251 2.861,16.251 C2.861,16.251 -10.986,16.251 -10.986,16.251"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(59,176,253)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M74.996,58.751 C74.996,58.751 74.996,48.563 74.996,48.563"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(59,176,253)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M74.996,91.251 C74.996,91.251 74.996,101.439 74.996,101.439"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <h3 class="features__title">Conveniente</h3>
                <div class="features__text">Paghi solo le risorse che realmente ti servono e quando ti servono</div>
            </div>
            <div class="features__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150"
                     preserveAspectRatio="xMidYMid meet">
                    <defs>
                        <clipPath id="animationMask_Q32X7fVfC9">
                            <rect width="150" height="150" x="0" y="0"></rect>
                        </clipPath>
                    </defs>
                    <g clip-path="url(#animationMask_Q32X7fVfC9)">
                        <g transform="matrix(1,0,0,1,0,0)" opacity="1" style="user-select: none;">
                            <g opacity="1" transform="matrix(1,0,0,1,73.834,76.699)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(29,112,182)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M30.12,0 C30.12,16.635 16.635,30.12 0,30.12 C-16.635,30.12 -30.12,16.635 -30.12,0 C-30.12,-16.635 -16.635,-30.12 0,-30.12 C16.635,-30.12 30.12,-16.635 30.12,0z"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,73.835,76.699)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(29,112,182)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M54.76,0 C54.76,30.243 30.243,54.76 0,54.76 C-30.243,54.76 -54.76,30.243 -54.76,0 C-54.76,-30.243 -30.243,-54.76 0,-54.76 C30.243,-54.76 54.76,-30.243 54.76,0z"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,93.195,57.338)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(59,176,253)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M-19.361,19.361 C-19.361,19.361 19.361,-19.361 19.361,-19.361"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,114.903,28.801)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(59,176,253)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M-2.348,9.176 C-2.348,9.176 2.348,-9.176 2.348,-9.176"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,121.897,35.312)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(59,176,253)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M-9.341,2.665 C-9.341,2.665 9.341,-2.665 9.341,-2.665"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <h3 class="features__title">Flexible</h3>
                <div class="features__text">Real time management of workloads and seasonality</div>
            </div>
            <div class="features__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150"
                     preserveAspectRatio="xMidYMid meet">
                    <defs>
                        <clipPath id="animationMask_ShS6ltKFQ0">
                            <rect width="150" height="150" x="0" y="0"></rect>
                        </clipPath>
                    </defs>
                    <g clip-path="url(#animationMask_ShS6ltKFQ0)">
                        <g transform="matrix(1,0,0,1,0,0)" opacity="1" style="user-select: none;">
                            <g opacity="1" transform="matrix(1,0,0,1,74.988,74.993)">
                                <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0"
                                      stroke="rgb(29,112,182)" stroke-opacity="1" stroke-width="8"
                                      d=" M39.566,14.913 C30.639000000000003,33.454 19.027,40.771 0.009,55.942 C-18.956,40.815 -30.615000000000002,33.467 -39.549,14.913 C-48.582,-3.847999999999999 -46.955,-17.319000000000003 -46.955,-44.795 C-46.955,-44.795 0.008,-55.942 0.008,-55.942 C0.008,-55.942 46.972,-44.795 46.972,-44.795 C46.972,-17.259 48.582,-3.812000000000001 39.566,14.913z"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,88.552,76.962)">
                                <path fill="rgb(59,176,253)" fill-opacity="1"
                                      d=" M29.415,-43.601 C29.415,-43.601 7.228,-48.867 7.228,-48.867 C8.414,-43.458999999999996 9.014000000000001,-37.052 8.073,-30.008 C7.2010000000000005,-23.427 9.14,-17.595 13.74,-12.538 C17.315,-8.603 17.163,-8.408 12.285,-5.872 C11.052,-5.221 10.442,-4.335 11.73,-3.227 C12.908000000000001,-2.215 12.52,-1.175 11.924,-0.178 C11.439,0.6120000000000001 10.734000000000002,1.263 10.069,2.053 C10.249,2.455 10.457,2.884 10.609,3.314 C11.62,5.974 11.233,6.5969999999999995 8.738,8.01 C7.920999999999999,8.481 7.339,9.743 7.131,10.74 C6.937,11.655000000000001 7.3389999999999995,12.707 7.547,13.691 C8.225999999999999,17.099 6.84,19.801 3.39,20.674 C0.9790000000000001,21.27 -1.6389999999999998,21.492 -4.133,21.326 C-8.498000000000001,21.063 -12.848999999999998,20.326999999999998 -17.214,19.842 C-19.985,19.538 -22.299,20.536 -23.712,22.878 C-25.097,25.164 -26.413,27.561 -27.341,30.055 C-28.079,32.049 -28.886,34.009 -29.749,35.943 C-26.352,38.826 -22.586,41.783 -18.32,45.124 C-16.787,46.325 -15.200000000000001,47.568 -13.557,48.867 C-11.912,47.568 -10.325,46.324000000000005 -8.792,45.124 C6.086,33.471000000000004 15.065,26.438000000000002 22.398,11.21 C29.75,-4.059999999999999 29.650000000000002,-15.389999999999997 29.469,-35.958 C29.448,-38.382 29.426,-40.924 29.415,-43.601z"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <h3 class="features__title">Reliable</h3>
                <div class="features__text">Efficient operation  guaranteed every day, without interruption for holidays, sickness and permits</div>
            </div>
            <div class="features__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150"
                     preserveAspectRatio="xMidYMid meet">
                    <defs>
                        <clipPath id="animationMask_kmmk3HS6jy">
                            <rect width="150" height="150" x="0" y="0"></rect>
                        </clipPath>
                    </defs>
                    <g clip-path="url(#animationMask_kmmk3HS6jy)">
                        <g transform="matrix(1,0,0,1,0,0)" opacity="1" style="user-select: none;">
                            <g opacity="1" transform="matrix(1,0,0,1,75,77.907)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(59,176,253)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M-12.411,0.161 C-12.411,0.161 -4.244,8.327 -4.244,8.327 C-4.244,8.327 12.411,-8.327 12.411,-8.327"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,75,78.018)">
                                <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0"
                                      stroke="rgb(29,112,182)" stroke-opacity="1" stroke-width="8"
                                      d=" M10.563,-53.685 C10.563,-53.685 40.5,-53.685 40.5,-53.685 C40.5,-53.685 40.5,53.685 40.5,53.685 C40.5,53.685 -40.5,53.685 -40.5,53.685 C-40.5,53.685 -40.5,-53.685 -40.5,-53.685 C-40.5,-53.685 -10.862,-53.685 -10.862,-53.685"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,74.851,27.718)">
                                <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0"
                                      stroke="rgb(29,112,182)" stroke-opacity="1" stroke-width="8"
                                      d=" M10.713,-9.219 C10.713,-9.219 -10.713,-9.219 -10.713,-9.219 C-10.713,-9.219 -10.713,9.219 -10.713,9.219 C-10.713,9.219 10.713,9.219 10.713,9.219 C10.713,9.219 10.713,-9.219 10.713,-9.219z"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,74.85,77.968)">
                                <path stroke-linecap="round" stroke-linejoin="round" fill-opacity="0"
                                      stroke="rgb(29,112,182)" stroke-opacity="1" stroke-width="8"
                                      d=" M26.9,40.532 C26.9,40.532 -26.9,40.532 -26.9,40.532 C-26.9,40.532 -26.9,-40.532 -26.9,-40.532 C-26.9,-40.532 26.9,-40.532 26.9,-40.532 C26.9,-40.532 26.9,40.532 26.9,40.532z"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <h3 class="features__title">Simple</h3>
                <div class="features__text">We provide a single contact point for all your activities</div>
            </div>
            <div class="features__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150"
                     preserveAspectRatio="xMidYMid meet">
                    <defs>
                        <clipPath id="animationMask_wo61OdGXuQ">
                            <rect width="150" height="150" x="0" y="0"></rect>
                        </clipPath>
                    </defs>
                    <g clip-path="url(#animationMask_wo61OdGXuQ)">
                        <g transform="matrix(1,0,0,1,0,0)" opacity="1" style="user-select: none;">
                            <g opacity="1" transform="matrix(1,0,0,1,79.527,47.027)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(59,176,253)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M-16.188,9.39 C-10.572,-5.01 4.835000000000001,-9.39 16.189,-5.092"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,85.459,65.005)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(29,112,182)" stroke-opacity="1"
                                      stroke-width="8"
                                      d=" M39.264,0 C39.264,21.685 21.685,39.264 0,39.264 C-21.685,39.264 -39.264,21.685 -39.264,0 C-39.264,-21.685 -21.685,-39.264 0,-39.264 C21.685,-39.264 39.264,-21.685 39.264,0z"></path>
                            </g>
                            <g opacity="1" transform="matrix(1,0,0,1,42.375,108.792)">
                                <path stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0"
                                      stroke-miterlimit="10" stroke="rgb(29,112,182)" stroke-opacity="1"
                                      stroke-width="14"
                                      d=" M13.542,-13.542 C13.542,-13.542 -13.542,13.542 -13.542,13.542"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <h3 class="features__title">Under control</h3>
                <div class="features__text">Real time monitoring of performance and results</div>
            </div>
        </div>
    </div>
</section>
<section class="solutions">
    <h2 class="section__title">Solutions for your business</h2>
    <div class="container">
        <div class="solutions__wrap">
            <div class="solutions__item">
                <div class="solutions__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/frontoffice-e-call-center.jpg">
                </div>
                <h3 class="solutions__item-title title">Frontoffice & Call Center</h3>
                <p>Bludelego solutions for managing contacts with customers always ensure fast, effective and professional responses: customer care and satisfaction, secretary service, surveys, welcome calls, management of toll-free numbers at any time and 365 days a year!</p>
                <a class="btn" href="https://bludelego.it/soluzioni/frontoffice/">Learn more</a>
            </div>
            <div class="solutions__item">
                <div class="solutions__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/backoffice-e-order-entry.jpg">
                </div>
                <h3 class="solutions__item-title title">Backoffice and Order Entry</h3>
                <p>Our highly qualified personnel carries out all data entry and processing operations (order processing, tax documents processing, order entry, etc.) using our own systems as well as customer systems.</p>
                <a class="btn" href="https://bludelego.it/soluzioni/backoffice/">Learn more</a>
            </div>
            <div class="solutions__item">
                <div class="solutions__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/web-e-digital.jpg">
                </div>
                <h3 class="solutions__item-title title">Web & Digital</h3>
                <p>The Bludelego Digital Team develops digital solutions tailored to your company, both in the web and social sectors (websites, ecommerce, social media, web and social marketing) and in the design and development of applications (apps for smartphones, CRM, Web applications). </p>
                <a class="btn" href="https://bludelego.it/soluzioni/web-digital-it/">Learn more</a>
            </div>
            <div class="solutions__item">
                <div class="solutions__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/gestione-documentale.jpg">
                </div>
                <h3 class="solutions__item-title title">Document management</h3>
                <p>We deal with digitization of documents, paper dematerialization and electronic archiving with scalable, effective and technologically advanced solutions that guarantee maximum security and confidentiality of data.</p>
                <a class="btn"
                   href="https://bludelego.it/soluzioni/bluperizie-outsourcing-perizie-assicurative/">Learn more
                </a>
            </div>
        </div>
    </div>
</section>
<section class="success">
    <h2 class="success__title section__title">4 passi verso il successo!</h2>
    <div class="container">
        <div class="success__wrap">
            <div class="success__item">
                <div class="success__img-wrap">
                    <div class="success__icon">1</div>
                    <div class="success__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/analisi.jpg">
                    </div>
                </div>
                <h3 class="success__item-title title">Analisi</h3>
                <div class="success__text">Un nostro professionista raccoglie le tue esigenze e concorda con te il piano delle attività</div>
            </div>
            <div class="success__item">
                <div class="success__img-wrap">
                    <div class="success__icon">2</div>
                    <div class="success__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/preparazione.jpg">
                    </div>
                </div>
                <h3 class="success__item-title title">Preparazione
                    <div class="success__text">Selezioniamo e formiamo le risorse professionali più adatte alle tue esigenze e predisponiamo le infrastrutture tecnologiche e di comunicazione</div>
                </h3>
            </div>
            <div class="success__item">
                <div class="success__img-wrap">
                    <div class="success__icon">3</div>
                    <div class="success__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/svolgimento.jpg">
                    </div>
                </div>
                <h3 class="success__item-title title">Svolgimento
                    <div class="success__text">Svolgiamo le attività previste dal progetto in stretto raccordo con il tuo personale, rendicontandoti giornalmente le ore svolte e i risultati raggiunti</div>
                </h3>
            </div>
            <div class="success__item">
                <div class="success__img-wrap">
                    <div class="success__icon">4</div>
                    <div class="success__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/flessibilita.jpg">
                    </div>
                </div>
                <h3 class="success__item-title title">Flessibilità
                    <div class="success__text">Contattando il tuo referente, puoi aumentare o diminuire le ore di lavoro, cambiare gli orari e le attività, attivare l’opzione “soddisfatto o rimborsato” o richiedere qualsiasi altra variazione</div>
                </h3>
            </div>
        </div>
    </div>
</section>
<footer class="main-footer">
    <div class="container">
        <form method="POST" action="mail.php" id="js-form" class="form main-footer__form">
            <header class="form__header">
                <h2 class="form__title">Contattaci</h2>
            </header>
            <div class="form-group">
                <input type="text" name="name" placeholder="Nominativo*">
            </div>
            <div class="form-group form-group-double">
                <div class="form-group">
                    <input type="text" name="phone" placeholder="Telefono">
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email*">
                </div>
            </div>
            <div class="form-group">
                <textarea name="messaggio" placeholder="Messagio*"></textarea>
            </div>
            <div class="privacy">
                <input class="checkbox" type="checkbox" name="check" id="check">
                <label for="check">Cliccando su invia confermi di aver preso visione dell’<a href="https://bludelego.it/privacy-e-cookie-policy/">informativa sulla privacy</a></label>
            </div>
            <input type="submit" value="Invia" class="form-submit-btn">
            <div id="submit-ajax"></div>
        </form>
        <div class="main-footer__socials">
            <div class="main-footer__socials-item main-footer__socials-item--center">
                <span>Seguici sui nostri socia</span>
                <a target="_blank" href="https://www.facebook.com/bludelego">
                    <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/facebook.png" alt="facebook">
                </a>
                <a target="_blank" href="https://www.linkedin.com/showcase/bludelego">
                    <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/linkedin.png" alt="linkedin">
                </a>
                <a target="_blank" href="https://www.youtube.com/channel/UCFv-plWcKdKZyiajpGRerfA">
                    <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/youtube.png" alt="youtube">
                </a>
            </div>
            <div class="main-footer__socials-item">
                <a href="#">+39 340 665 4100</a>
            </div>
            <div class="main-footer__socials-item">
                <a href="#">info@bludelego.it</a>
            </div>
        </div>
    </div>
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom-wrap">
                <ul class="main-footer__languages">
                    <li>
                        <a href="#">Italiano</a>
                    </li>
                    <li>
                        <a href="#">English</a>
                    </li>
                    <li>
                        <a href="#">Română</a>
                    </li>
                </ul>
                <ul class="main-footer__menu">
                    <li>
                        <a href="https://bludelego.it/">Home</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/contatti/">Contatti</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/privacy-e-cookie-policy/">Privacy and cookies policy</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/soluzioni/frontoffice/">Front Office and Call Center</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/soluzioni/backoffice/">Back Office and Order Entry</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/soluzioni/web-digital-it/">Web and Digital</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/soluzioni/gestione-documentale/">Gestione Documentale</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/chi-siamo/">Chi siamo</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/clienti/">Our Clienti</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/contatti/">Contatti</a>
                    </li>
                    <li>
                        <a href="https://bludelego.it/#popmake-3768">Area Riservata</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="riservata-popup" id="js-riservata-popup">
        <a id="js-riservata-popup__close" class="riservata-popup__close" href="#">X</a>
        <div class="riservata-popup__content">
            <div class="riservata-popup__title">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/lock.png" alt="">
                <h3>AREA RISERVATA</h3>
            </div>
            <a class="riservata-popup__item" href="http://blupoint.bludelego.it/">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/bluepoint.png" alt="">
            </a>
            <a class="riservata-popup__item" href="http://wt.blupoint.ml/login">
                <img src="<?php echo get_template_directory_uri(); ?>/custom-assets/i/worktime.png" alt="">
            </a>
        </div>
    </div>
</footer><!--[if lt IE 9]>
<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/custom-assets/libs/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/custom-assets/js/main.js"></script>
</body>
</html>

