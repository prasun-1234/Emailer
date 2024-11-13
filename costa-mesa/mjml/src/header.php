<!DOCTYPE html>
<html lang="en">

<head>
   
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/main.css">
    <?php gravity_form_enqueue_scripts(1, true); ?>
    <?php wp_head(); ?>
    <?php if(is_page("belflower") || is_home()){ ?>
    <style>
        #schedule-modal .close-btn {
            background-image: url('<?php echo get_theme_file_uri("/assets/images/belflower/svg/close-btn.svg") ?>');
        }
    </style>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NCG9663T');</script>
<!-- End Google Tag Manager -->
     <?php }; ?>
    <?php if(is_page("brain-mri")){ ?>
        <style>
    #schedule-modal .close-btn {
      background-image: url('<?php echo get_theme_file_uri("/assets/images/brain-mri/svg/close-btn.svg") ?>');
    }
  </style>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PNLHX5BS');</script>
<!-- End Google Tag Manager -->
     <?php }; ?>
     <?php if(is_page("breast-cancer")){ ?>
     <style>
    #schedule-modal .close-btn {
      background-image: url('<?php echo get_theme_file_uri("/assets/images/breast-cancer/svg/close-btn.svg") ?>');
    }
  </style>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KGQTND99');</script>
<!-- End Google Tag Manager -->

    <?php }; ?>
    <?php if(is_page("calcium-scoring")){ ?>
    <style>
    .social_menu li.facebook {
      background-image: url('<?php echo get_theme_file_uri('assets/images/calcium-scoring/facebook.svg') ?>');
    }

    .social_menu li.instagram {
      background-image: url('<?php echo get_theme_file_uri('assets/images/calcium-scoring/instagram.svg') ?>');
    }

    .social_menu li.linkedin {
      background-image: url('<?php echo get_theme_file_uri('assets/images/calcium-scoring/linkedin.svg') ?>');
    }

    .social_menu li.youtube {
      background-image: url('<?php echo get_theme_file_uri('assets/images/calcium-scoring/youtube.svg') ?>');
    }

    .social_menu li.twitter {
      background-image: url('<?php echo get_theme_file_uri('assets/images/calcium-scoring/twitter.svg') ?>');
    }

    .quote {
      background-image: url('<?php echo get_theme_file_uri('assets/images/calcium-scoring/quote.svg') ?>');
    }
  </style>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WM3ZHHBT');</script>
<!-- End Google Tag Manager -->
     <?php }; ?>
     <?php if(is_page("cashprice")){ ?>
     <style>
    #schedule-modal .close-btn {
      background-image: url('<?php echo get_theme_file_uri("/assets/images/cashprice/svg/close-btn.svg") ?>');
    }
  </style>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M3HH3DCZ');</script>
<!-- End Google Tag Manager -->
   <?php }; ?>
   <?php if(is_page("ct-scan")){ ?>
   <style>
    .google-btn:before{
       background-image: url('<?php echo get_theme_file_uri('assets/images/ct-scan/icon-google.png') ?>');
    }

    .google-btn span:before{
       background-image: url('<?php echo get_theme_file_uri('assets/images/ct-scan/icon-star.png') ?>');
    }
    
    .button-primary:after{
      background-image: url('<?php echo get_theme_file_uri('assets/images/ct-scan/icon-chevron.png') ?>');
    }
    #schedule-modal .gform_footer:before{
      background-image: url('<?php echo get_theme_file_uri('assets/images/ct-scan/arrow_main.svg') ?>');
    }
    .Cutting-edge::before{
      background: url('<?php echo get_theme_file_uri('/assets/images/ct-scan/cutting-img.png') ?>') no-repeat bottom right;
    }
  </style>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PZDBM5VD');</script>
<!-- End Google Tag Manager -->
      <?php }; ?>
      <?php if(is_page("lowdose")){ ?>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PJ7PZPP2');</script>
<!-- End Google Tag Manager -->
        <?php }; ?>
      <?php if(is_page("open-mri")){ ?>
      <style>
        #schedule-modal .close-btn {
            background-image: url('<?php echo get_theme_file_uri("/assets/images/open-mri/svg/close-btn.svg") ?>');
        }
    </style>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NDB6RN9G');</script>
<!-- End Google Tag Manager -->
     <?php }; ?>
     <?php if(is_page("standup-mri")){ ?>
     <style>
        #schedule-modal .close-btn {
            background-image: url('<?php echo get_theme_file_uri("/assets/images/standup-mri/svg/close-btn.svg") ?>');
        }
    </style>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5R9DC77K');</script>
<!-- End Google Tag Manager -->
       <?php }; ?>
       <?php if(is_page("x-ray")){ ?>
       <style>
        #schedule-modal .close-btn {
            background-image: url('<?php echo get_theme_file_uri("/assets/images/x-ray/svg/close-btn.svg") ?>');
        }
    </style>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKFHD9BZ');</script>
<!-- End Google Tag Manager -->
        <?php }; ?>
        <?php if(is_page("x-ray-cash")){ ?>
          <style>
            #schedule-modal .close-btn {
              background-image: url('<?php echo get_theme_file_uri("/assets/images/x-ray-cash/svg/close-btn.svg") ?>');
            }
            </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWXM2Z2B');</script>
<!-- End Google Tag Manager -->
<?php }; ?>
<?php if(is_page("claustrophobia")){ ?>
  <style>
    form .ginput_container_date:after{
       background-image: url('<?php echo get_theme_file_uri('assets/images/claustrophobia/png/icon-calendar.png'); ?>');
    }

    form select{
      background-image: url('<?php echo get_theme_file_uri('assets/images/png/claustrophobia/icon-chevron.png'); ?>') !important;
    }
  </style>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K59KRWLN');</script>
<!-- End Google Tag Manager -->
       <?php }; ?>
	
	       <?php if(is_page("costa-mesa")){ ?>

        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PX9FQGBB');</script>
<!-- End Google Tag Manager -->
 
        <?php }; ?>
	
</head>

<body>  

<!-- Belflower -->

    <?php if(is_page("belflower") || is_home()){ ?>
    <div id="schedule-modal">
        <?php
echo do_shortcode('[gravityform id="1" title="true" description="false" ajax="true"]');
        ?>
    </div>
    <header class=" left-0 top-0 w-full z-50">
        <nav>
            <div class="container py-5 flex justify-between">
                <ul class="flex gap-10 items-center">
                    <li><a class="flex items-center gap-2 font-semibold" href="#"><img class="logo-img sm:max-w-[220px] max-w-[120px]" src="<?php echo get_theme_file_uri("/assets/images/belflower/png/logo.png") ?>" alt="logo"></a></li>
                    <li class="lg:block hidden switchElement"><a class="flex items-center gap-2" href="#"> <span><img src="<?php echo get_theme_file_uri("/assets/images/belflower/png/map-icon.png") ?>" alt="map-icon"></span> Culver City, USA</a></li>
                </ul>
                <ul class="flex md:gap-7 items-center">
                    <li class="select-icon relative hidden">
                        <select class="border border-[#A1A1AA] rounded py-3 pl-7 pr-10 appearance-none" id="selectLandingPage" name="Landing Page" onchange="location = this.value;">
                            <option value="https://clientstaging.space/lp-fb-ic/">Full Body Imaging</option>
                            <option value="https://clientstaging.space/lp-fb-sm/">Standup MRI</option>
                            <option value="https://clientstaging.space/lp-fb-bc/">Breast Cancer</option>
                            <option value="3T MRI">3T MRI</option>
                        </select>
                        <span class="absolute top-0 right-5 h-full flex items-center pointer-events-none"><img class="w-4 h-4" src="<?php echo get_theme_file_uri("/assets/images/belflower/png/arrow-down.png") ?>" alt="arrow-down"></span>
                    </li>
                    <li class="">
                        <a class="yellow-button call-button flex bg-yellow-300 hover:bg-amber-100 duration-300 py-3 md:px-10 sm:px-5 px-2 rounded items-center gap-2 font-semibold" href="tel:(866) 561-2605">
                            <span class="xs:block hidden"><img src="<?php echo get_theme_file_uri("/assets/images/belflower/png/tel.png") ?>" alt="tel-icon"></span> (866) 561-2605
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php } elseif(is_page("brain-mri")){ ?>

      <!-- Brain MRI -->

    <div id="schedule-modal">
    <?php
echo do_shortcode('[gravityform id="12" title="true" description="false" ajax="true"]');
    ?>
  </div>
    <header class=" left-0 top-0 w-full z-50">
        <nav class="">
            <div class="container py-5 flex justify-between">
                <ul class="flex gap-10 items-center">
                    <li><a class="flex items-center gap-2 font-semibold" href="#"><img class="logo-img xs:max-w-[220px] max-w-[120px]" src="<?php echo get_theme_file_uri("/assets/images/brain-mri/png/logo.png") ?>" alt="logo"></a></li>
                    <li class="lg:block hidden switchElement"><a class="flex items-center gap-2" href="#"> <span><img src="<?php echo get_theme_file_uri("/assets/images/brain-mri/png/map-icon.png") ?>" alt="map-icon"></span>Costa Mesa, USA</a></li>
                </ul>
                <ul class="flex md:gap-7 items-center">
                    <li class="select-icon relative hidden">
                        <select class="border border-[#A1A1AA] rounded py-3 pl-7 pr-10 appearance-none" id="selectLandingPage" name="Landing Page" onchange="location = this.value;">
                            <option value="https://clientstaging.space/lp-fb-ic/">Full Body Imaging</option>
                            <option value="https://clientstaging.space/lp-fb-sm/">Standup MRI</option>
                            <option value="https://clientstaging.space/lp-fb-bc/">Breast Cancer</option>
                            <option value="3T MRI">3T MRI</option>
                        </select>
                        <span class="absolute top-0 right-5 h-full flex items-center pointer-events-none"><img class="w-4 h-4" src="<?php echo get_theme_file_uri("/assets/images/brain-mri/png/arrow-down.png") ?>" alt="arrow-down"></span>
                    </li>
                    <li class="">
                        <a class="yellow-button call-button flex bg-blue-600 hover:bg-blue-400 duration-300 py-3 md:px-10 sm:px-5 px-2 rounded items-center gap-2 font-semibold text-white"  href="tel:(866) 561-2605"> 
                            <span class="xs:block hidden"><img src="<?php echo get_theme_file_uri("/assets/images/brain-mri/png/tel.png") ?>" alt="tel-icon"></span> (866) 561-2605
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php } elseif(is_page("breast-cancer")){ ?>

    <!-- Breast Cancer -->
    <div id="schedule-modal">
    <?php
echo do_shortcode('[gravityform id="13" title="true" description="false" ajax="true"]');
    ?>
  </div>
  <header class=" left-0 top-0 w-full z-[9999]">
    <nav class="">
      <div class="container md:py-8 py-4 flex justify-between">
        <ul class="flex gap-10 items-center">
          <li><a rel="nofollow" class="" href="#">
              <h1><img class="sm:max-w-[220px] max-w-[120px] " src="<?php echo get_theme_file_uri("/assets/images/breast-cancer/png/logo.png") ?>" alt="logo"></h1>
            </a></li>
          <li class="lg:block hidden switchElement"><a class="flex items-center gap-2" href="#">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.00007 17.3574C9.00007 17.3574 14.7858 9.63021 14.7858 6.42878C14.7858 4.89431 14.1762 3.42269 13.0912 2.33766C12.0062 1.25263 10.5345 0.643066 9.00007 0.643066C7.4656 0.643066 5.99398 1.25263 4.90895 2.33766C3.82392 3.42269 3.21436 4.89431 3.21436 6.42878C3.21436 9.63021 9.00007 17.3574 9.00007 17.3574ZM10.9284 6.42857C10.9284 7.49369 10.065 8.35714 8.99986 8.35714C7.93474 8.35714 7.07129 7.49369 7.07129 6.42857C7.07129 5.36345 7.93474 4.5 8.99986 4.5C10.065 4.5 10.9284 5.36345 10.9284 6.42857Z" fill="#3F3F46" />
              </svg>
              Culver City, USA</a></li>
        </ul>
        <ul class="flex md:gap-7 items-center">
          <li class="select-icon relative  hidden">
            <select class="border border-zinc-400  rounded py-3 pl-5 pr-16 appearance-none" name="services" id="services">
              <option value="breast-mri">Breast MRI</option>
              <option value="3t-mri">3T MRI</option>
              <option value="front-open-mri">Front Open MRI</option>
              <option value="ultrasound">Ultrasound</option>
            </select>
            <span class="absolute top-0 right-4 h-full flex items-center pointer-events-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 19 18" fill="none">
                <g clip-path="url(#clip0_210_3793)">
                  <path d="M1.33569 4.94995L9.24284 12.8571C9.30055 12.9186 9.37026 12.9676 9.44766 13.0011C9.52505 13.0346 9.6085 13.0519 9.69284 13.0519C9.77718 13.0519 9.86062 13.0346 9.93802 13.0011C10.0154 12.9676 10.0851 12.9186 10.1428 12.8571L18.05 4.94995" stroke="#000001" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_210_3793">
                    <rect width="18" height="18" fill="white" transform="translate(0.692871)" />
                  </clipPath>
                </defs>
              </svg>
            </span>
          </li>
          <li class="switchElement">
            <a href="tel:(866) 561-2605" class="flex primary-button py-3.5 md:px-10 sm:px-5 px-2 rounded items-center gap-2 font-semibold h-12">
              <img class="tel-icon" src="<?php echo get_theme_file_uri("assets/images/breast-cancer/svg/call.svg") ?>" alt="tel-icon">
              (866) 561-2605
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php } elseif(is_page("calcium-scoring")){ ?>

  <!-- Calcium Scoring -->
  <div id="schedule-modal">
    <div class="modal_inner w-full h-full">
      <button type="button" class="close_modal absolute right-5 md:top-10 top-3"><?php include get_template_directory() . '/assets/images/calcium-scoring/icon-close.svg' ?></button>
      <div class="lg:grid flex flex-col lg:grid-cols-12 gap-10 w-full h-full">
        <div class="col-span-12 lg:col-span-5 relative overflow-hidden hidden lg:block">
          <figure class="w-full h-full modal_image">
            <img src="<?php echo get_theme_file_uri('assets/images/calcium-scoring/modal_bg_image.jpg') ?>" class="w-full h-full object-cover" alt="Modal image" loading="lazy">
            <div class="content">
              <h4>California's Premier</h4>
              <h2>Diagnostic Imaging Service Provider</h2>
              <p class="text-body">We’re on Social media</p>
              <div class="flex items-center gap-4 mt-5">
                <a href="https://www.facebook.com/expertmri/" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/calcium-scoring/icon-facebook.svg" ?>
                </a>
                <a href="https://www.instagram.com/ExpertMRI/" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/calcium-scoring/icon-instagram.svg" ?>
                </a>
                <a href="https://www.youtube.com/channel/UCN8HBDqaOvN8gf2pJ48_ZNQ" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/calcium-scoring/icon-linkedin.svg" ?>
                </a>
                <a href="https://www.linkedin.com/company/expert-mri-medical-diagnostics/" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/calcium-scoring/icon-youtube.svg" ?>
                </a>
                <a href="https://twitter.com/Expert_MRI" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/calcium-scoring/icon-twitter.svg" ?>
                </a>
              </div>
            </div>
          </figure>

        </div>
        <div class="col-span-12 lg:col-span-7 flex items-center pt-[60px] md:pt-[80px] pb-5 max-h-screen pr-5 lg:pl-0 pl-5">
          <?php
echo do_shortcode('[gravityform id="14" title="true" description="false" ajax="true"]');
          ?>
        </div>
      </div>

    </div>
  </div>

  <header class="fixed top-0 left-0 w-full z-[99]">
    <nav class="container mx-auto flex items-center justify-between gap-5 pt-4 pb-4">
      <h1>
        <a href="<?php echo home_url(); ?>">
          <img class="logo" src="<?php echo get_theme_file_uri('assets/images/calcium-scoring/logo.svg') ?>" alt="Logo" loading="lazy">
        </a>
      </h1>
      <div>
        <p class="!font-bold">Call us at</p>
        <a class="link_btn" href="tel:(877) 674-8888">(877) 674-8888</a>
      </div>
    </nav>
  </header>
  <?php } elseif(is_page("cashprice")){ ?>


  <!-- Cashprice -->
  <div id="schedule-modal">
    <?php
echo do_shortcode('[gravityform id="15" title="true" description="false" ajax="true"]');
    ?>
  </div>
  <header class="left-0 top-0 w-full z-[999] bg-white">
    <nav>
      <div class="container md:py-8 py-4 flex justify-between">
        <ul class="flex gap-10 items-center">
          <li><a rel="nofollow" class="" href="#">
              <h1><img class="max-w-[120px] sm:max-w-[220px]" src="<?php echo get_theme_file_uri("/assets/images/cashprice/png/logo.png") ?>" alt="logo"></h1>
            </a></li>
          <li class="lg:block hidden switchElement"><a class="flex items-center gap-2" href="#">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.00007 17.3574C9.00007 17.3574 14.7858 9.63021 14.7858 6.42878C14.7858 4.89431 14.1762 3.42269 13.0912 2.33766C12.0062 1.25263 10.5345 0.643066 9.00007 0.643066C7.4656 0.643066 5.99398 1.25263 4.90895 2.33766C3.82392 3.42269 3.21436 4.89431 3.21436 6.42878C3.21436 9.63021 9.00007 17.3574 9.00007 17.3574ZM10.9284 6.42857C10.9284 7.49369 10.065 8.35714 8.99986 8.35714C7.93474 8.35714 7.07129 7.49369 7.07129 6.42857C7.07129 5.36345 7.93474 4.5 8.99986 4.5C10.065 4.5 10.9284 5.36345 10.9284 6.42857Z" fill="#3F3F46" />
              </svg>
              Clover City, USA</a></li>
        </ul>
        <ul class="flex md:gap-7 items-center">
          <li class="switchElement">
            <a href="tel:(866) 561-2605" rel="nofollow">
              <a href="#" class="flex primary-button py-3.5 md:px-10 sm:px-5 px-2 rounded items-center gap-2 font-semibold h-12">
                <img class="sm:block hidden" src="<?php echo get_theme_file_uri("assets/images/cashprice/svg/call.svg") ?>" alt="tel-icon">
                (866) 561-2605
              </a>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php } elseif(is_page("lowdose")){ ?>

  <!-- Lowdose -->
  <div id="schedule-modal">
        <div class="modal_inner w-full h-full">
            <button type="button" class="close_modal absolute right-5 md:top-10 top-3"><?php include get_template_directory() . '/assets/images/lowdose/svg/icon-close.svg' ?></button>
            <div class="lg:grid flex flex-col lg:grid-cols-12 gap-10 w-full h-full">
                <div class="col-span-12 lg:col-span-5 relative overflow-hidden hidden lg:block">
                    <figure class="w-full h-full modal_image">
                        <img src="<?php echo get_theme_file_uri('assets/images/lowdose/jpg/modal_bg_image.jpg') ?>" class="w-full h-full object-cover" alt="Modal image">
                        <div class="content">
                            <h4>California's Premier</h4>
                            <h2>Diagnostic Imaging Service Provider</h2>
                            <p class="text-body">We’re on Social media</p>
                            <div class="flex items-center gap-4 mt-5">
                                <a href="#" class="social-icon-link">
                                    <?php include get_template_directory() . "/assets/images/lowdose/svg/icon-facebook.svg" ?>
                                </a>
                                <a href="#" class="social-icon-link">
                                    <?php include get_template_directory() . "/assets/images/lowdose/svg/icon-instagram.svg" ?>
                                </a>
                                <a href="#" class="social-icon-link">
                                    <?php include get_template_directory() . "/assets/images/lowdose/svg/icon-linkedin.svg" ?>
                                </a>
                                <a href="#" class="social-icon-link">
                                    <?php include get_template_directory() . "/assets/images/lowdose/svg/icon-youtube.svg" ?>
                                </a>
                                <a href="#" class="social-icon-link">
                                    <?php include get_template_directory() . "/assets/images/lowdose/svg/icon-twitter.svg" ?>
                                </a>
                            </div>
                        </div>
                    </figure>

                </div>
                <div class="col-span-12 lg:col-span-7 flex items-center pt-[60px] md:pt-[80px] pb-5 md:pb-10 max-h-screen pr-5 lg:pl-0 pl-5">
                    <?php
echo do_shortcode('[gravityform id="17" title="true" description="false" ajax="true"]');
                    ?>
                </div>
            </div>

        </div>
    </div>
    <header class="left-0 top-0 w-full z-50">
        <nav>
            <div class="container py-5 flex items-center gap-4 justify-between">
                        <h1><a class="flex items-center gap-2" href="#"><img class="logo-img sm:max-w-xs max-w-[120px] object-contain" src="<?php echo get_theme_file_uri("/assets/images/lowdose/png/logo.png") ?>" alt="logo"></a></h1>                  
                    <div class="flex flex-col sm:text-left text-center call-div">
                        <span class="sm:text-right text-left sm:inline-block hidden">Request An Appointment</span>
                        <a href="tel:(877) 674-8888" rel="nofollow">
                            <button class="call-button">
                                (877) 674-8888
                            </button>
                        </a>
                    </div>
            </div>
        </nav>
    </header>
    <?php } elseif(is_page("ct-scan")){ ?>


    <!-- CT Scan -->
    <div id="schedule-modal">
    <div class="modal_inner w-full h-full">
      <button type="button" class="close_modal absolute right-5 md:top-10 top-3"><?php include get_template_directory() . '/assets/images/ct-scan/icon-close.svg' ?></button>
      <div class="lg:grid flex flex-col lg:grid-cols-12 gap-10 w-full h-full">
        <div class="col-span-12 lg:col-span-5 relative overflow-hidden hidden lg:block">
          <figure class="w-full h-full modal_image">
            <img src="<?php echo get_theme_file_uri('assets/images/ct-scan/modal_bg_image.jpg') ?>" class="w-full h-full object-cover" alt="Modal image" loading="lazy">
            <div class="content">
              <h4>California's Premier</h4>
              <h2>Diagnostic Imaging Service Provider</h2>
              <p class="text-body">We’re on Social media</p>
              <div class="flex items-center gap-4 mt-5">
                <a href="https://www.facebook.com/expertmri/" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/ct-scan/icon-facebook.svg" ?>
                </a>
                <a href="https://www.instagram.com/ExpertMRI/" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/ct-scan/icon-instagram.svg" ?>
                </a>
                <a href="https://www.youtube.com/channel/UCN8HBDqaOvN8gf2pJ48_ZNQ" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/ct-scan/icon-linkedin.svg" ?>
                </a>
                <a href="https://www.linkedin.com/company/expert-mri-medical-diagnostics/" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/ct-scan/icon-youtube.svg" ?>
                </a>
                <a href="https://twitter.com/Expert_MRI" class="social-icon-link">
                  <?php include get_template_directory() . "/assets/images/ct-scan/icon-twitter.svg" ?>
                </a>
              </div>
            </div>
          </figure>

        </div>
        <div class="col-span-12 lg:col-span-7 flex items-center pt-[60px] md:pt-[80px] pb-5 max-h-screen pr-5 lg:pl-0 pl-5">
          <?php
echo do_shortcode('[gravityform id="16" title="true" description="false" ajax="true"]');
          ?>
        </div>
      </div>

    </div>
  </div>

<header class="absolute left-0 top-0 flex items-center w-full h-[100px]">
    <div class="container mx-auto">
        <div class="flex items-center justify-between gap-5">
            <h1><a href="<?php echo site_url(); ?>">
				<svg width="249" height="49" viewBox="0 0 249 49" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo_main max-w-[140px] lg:max-w-[330px]">
<path fill-rule="evenodd" clip-rule="evenodd" d="M30.889 24.5593C30.8183 24.2831 30.5827 23.9005 30.4808 23.7768C30.3991 23.6966 30.3166 23.5605 30.27 23.3878L30.2793 23.1732L30.3602 21.5297L30.3641 21.5056C30.3975 21.2629 30.5647 20.0214 30.5647 19.3712C30.5647 18.7288 30.1565 17.8755 30.07 17.7028C30.2179 16.4591 30.1316 14.4647 30.1222 14.3036C30.1393 14.1956 30.2544 13.3531 30.2544 13.0234C30.2544 12.6975 30.2544 12.1515 29.7737 11.4126C29.2666 10.6316 28.5308 10.5655 27.7645 10.5655C27.7623 10.5655 27.76 10.5655 27.7583 10.5655C27.634 10.5476 26.6881 10.0793 26.0199 9.73711L26.0456 8.88306C26.1934 8.68083 26.2028 8.60149 26.2058 8.57505C26.2137 8.51204 26.2588 8.18146 26.3054 7.83145L26.3062 7.82445C26.5154 7.72488 26.6717 7.45265 26.7052 7.30875C26.7114 7.28075 26.72 7.25042 26.727 7.21853C26.797 6.94085 26.8756 6.62426 26.6889 6.52704C26.6725 6.51848 26.6554 6.51148 26.6383 6.5076C26.6912 6.24936 26.7185 5.89545 26.615 5.2522C26.4951 4.50704 25.551 4.24414 24.7808 4.24414H24.7583C23.9735 4.24414 23.0261 4.5086 22.9444 5.25763C22.8838 5.8169 22.8744 6.22914 22.9149 6.50837C22.8993 6.51304 22.8822 6.51927 22.8675 6.52704C22.68 6.62426 22.7585 6.94085 22.8285 7.21853C22.8356 7.25042 22.8441 7.28075 22.8503 7.30875C22.8869 7.47054 23.0471 7.721 23.2392 7.81978L23.2408 7.83611C23.289 8.1838 23.3334 8.51204 23.3403 8.57505C23.3457 8.62171 23.3676 8.67616 23.4088 8.74695L23.4554 9.73867C22.7873 10.0809 21.8423 10.5484 21.7241 10.5663C20.9493 10.5663 20.212 10.6308 19.7025 11.4133C19.2211 12.153 19.2211 12.6983 19.2211 13.0241C19.2211 13.3531 19.337 14.1963 19.3525 14.3045C19.3447 14.4654 19.2583 16.4598 19.4053 17.7036C19.3183 17.8755 18.9106 18.7288 18.9106 19.372C18.9106 20.0223 19.0786 21.2644 19.1113 21.5063L19.1145 21.5305L19.2031 23.3101C19.1619 23.5201 19.067 23.685 18.9729 23.7783C18.8694 23.902 18.6353 24.2847 18.5653 24.5608C18.465 24.998 18.041 25.6793 18.0644 25.7882C18.1399 25.9306 18.2674 25.9826 18.3825 25.9142C18.5086 25.8287 18.8018 25.5199 18.8406 25.3667C18.8966 25.5557 19.1393 26.9247 19.2334 27.0911C19.2669 27.2458 19.3688 27.3851 19.4855 27.3882C19.5928 27.3501 19.6581 27.2995 19.6581 27.2995C19.6909 27.4512 19.7484 27.6402 19.9576 27.6519C20.0594 27.6355 20.1015 27.5624 20.0937 27.4628C20.1738 27.4893 20.3729 27.4333 20.4281 27.2902C20.474 27.1657 20.5052 27.0071 20.5184 26.9269C20.5238 26.8974 20.5169 26.9052 20.5184 26.9269C20.5215 26.958 20.5549 26.997 20.632 27.0009C20.7097 26.99 20.7697 26.9432 20.7961 26.6539C20.814 26.4696 20.8101 25.9228 20.8039 25.8948C20.7976 25.8668 20.7689 25.4693 20.758 25.2834C20.8124 25.0695 20.782 24.3967 20.7549 24.2738C20.7245 24.1353 20.6732 24.0303 20.4974 23.7511C20.5137 23.5123 20.5191 23.3148 20.5223 23.2386C20.5277 23.1678 20.5332 23.0923 20.5356 23.0324C20.5519 22.7221 20.5751 22.4008 20.5783 22.3362C20.6079 22.2375 20.667 22.0905 20.7369 21.9201C20.9478 21.4067 21.2683 20.6281 21.2543 19.8939C21.2449 19.3486 21.2301 18.8928 21.2215 18.6711C21.2161 18.5125 21.2099 18.385 21.2067 18.2978C21.2029 18.2481 21.2021 18.2067 21.1966 18.1741L21.1998 18.1516C21.2526 17.667 21.3537 16.7274 21.3951 16.0585C21.5381 16.4668 21.7567 17.0066 22.0476 17.4974C22.0469 18.1983 22.0258 18.6424 22.0095 18.9994C21.9978 19.2211 21.99 19.3999 21.9885 19.5828C21.8921 19.7298 21.4915 20.4096 21.4868 21.4177C21.3273 22.001 21.1648 22.6497 21.1562 23.0519V23.0573V23.0612C21.1601 23.104 21.4533 27.3306 21.7715 28.4585C21.829 28.6599 21.896 28.8809 21.966 29.1135C22.2452 30.0421 22.5929 31.198 22.5656 31.8902C22.5555 32.1749 22.4731 32.4192 22.3789 32.7015C22.19 33.2608 21.9769 33.897 22.2319 35.1003C22.442 36.0874 22.5843 36.5222 22.7212 36.9446C22.834 37.2953 22.9422 37.6258 23.086 38.2512C23.1491 38.5243 23.2004 38.7475 23.2439 38.9342C23.412 39.6553 23.4485 39.81 23.4524 40.0682C23.3963 40.1064 23.3146 40.1732 23.2611 40.2721C23.2073 40.37 23.2051 40.5209 23.2603 40.629C23.1521 40.7294 23.03 40.8282 22.9585 40.8756C22.862 40.9441 22.7197 41.0941 22.6823 41.1362C22.6209 41.1836 22.596 41.2576 22.5843 41.3128C22.5237 41.3524 22.4871 41.41 22.4855 41.48C22.4832 41.5772 22.5493 41.6714 22.6426 41.7094C22.6995 41.7304 22.7601 41.7343 22.806 41.7257C22.8418 41.746 22.8931 41.7615 22.9662 41.7678C23.0487 41.7763 23.107 41.7662 23.1521 41.7514C23.1848 41.7701 23.2307 41.781 23.2906 41.781C23.3831 41.781 23.4493 41.7654 23.4967 41.7422C23.5387 41.7755 23.5955 41.8012 23.674 41.8012H23.6951C23.8631 41.8012 23.9727 41.7546 24.0389 41.7048C24.1159 41.7577 24.2449 41.8066 24.469 41.7857C24.5857 41.7748 24.675 41.7467 24.7366 41.7048C24.7988 41.7476 24.8874 41.7755 25.0057 41.7857C25.2289 41.8059 25.358 41.7577 25.4358 41.7048C25.5027 41.7546 25.61 41.8012 25.7789 41.8012H25.7983C25.8761 41.8012 25.9352 41.7755 25.9764 41.7422C26.0238 41.7654 26.0907 41.781 26.1794 41.781H26.1888C26.2463 41.781 26.2899 41.7701 26.3225 41.7514C26.3676 41.767 26.426 41.7756 26.5061 41.7678C26.5784 41.7615 26.6305 41.7467 26.6655 41.7257C26.7114 41.7351 26.7752 41.7312 26.8312 41.7094C26.9238 41.6714 26.9906 41.5772 26.9883 41.48C26.9859 41.41 26.9494 41.3524 26.888 41.3128C26.8779 41.2583 26.8522 41.1836 26.7908 41.1362C26.7543 41.0941 26.6118 40.9441 26.5154 40.8756C26.4446 40.8275 26.3225 40.7294 26.2144 40.629C26.2697 40.5209 26.268 40.37 26.2137 40.2721C26.1592 40.1732 26.0783 40.1064 26.0215 40.0682C26.0262 39.81 26.062 39.6553 26.2307 38.9342C26.2743 38.7475 26.3264 38.5243 26.3902 38.2512C26.5326 37.6258 26.6406 37.2953 26.755 36.9446C26.8927 36.5222 27.0335 36.0866 27.2419 35.1003C27.4978 33.897 27.2847 33.2608 27.0964 32.7015C27.0024 32.4192 26.9198 32.1749 26.909 31.8902C26.8825 31.1972 27.2295 30.0421 27.5095 29.1135C27.5795 28.8809 27.6456 28.6599 27.7024 28.4585C28.0229 27.3306 28.3145 23.1032 28.3169 23.0612V23.0573V23.0519C28.3083 22.6497 28.1465 22.001 27.987 21.4177C27.9832 20.4103 27.5818 19.7306 27.4853 19.5828C27.4846 19.3999 27.476 19.2211 27.4651 18.9994C27.448 18.6424 27.4263 18.1983 27.4254 17.4974C27.7179 17.0066 27.9357 16.4668 28.078 16.0585C28.1201 16.7274 28.2204 17.667 28.274 18.1516L28.2764 18.1741C28.271 18.2067 28.2701 18.2481 28.2671 18.2978C28.2639 18.385 28.2585 18.5125 28.2515 18.6711C28.2453 18.8928 28.2289 19.3486 28.2196 19.8939C28.2049 20.6281 28.5253 21.4067 28.7361 21.9201C28.8053 22.0896 28.866 22.2375 28.8955 22.3362C28.8987 22.4124 28.9173 22.8201 28.9259 23.1615C28.929 23.2611 28.9313 23.433 28.9313 23.433L28.9352 23.4354C28.9391 23.5247 28.9438 23.6329 28.9523 23.7511C28.7757 24.0303 28.7236 24.1353 28.6957 24.2738C28.6684 24.3967 28.6373 25.0695 28.6918 25.2834C28.6802 25.4693 28.6528 25.8668 28.6467 25.8948C28.6405 25.922 28.6365 26.4689 28.6536 26.6539C28.6809 26.9432 28.7416 26.9908 28.8186 27.0009C28.8955 26.997 28.929 26.958 28.9313 26.9269C28.9329 26.9052 28.9259 26.8974 28.9313 26.9269C28.9461 27.0071 28.9764 27.1657 29.0215 27.2902C29.0775 27.4333 29.2783 27.4893 29.356 27.4628C29.3483 27.5624 29.3895 27.6364 29.4921 27.6519C29.7037 27.6402 29.7605 27.4512 29.7924 27.2995C29.7924 27.2995 29.8585 27.3501 29.9651 27.3882C30.081 27.3851 30.1836 27.2458 30.2162 27.0911C30.3104 26.9247 30.5523 25.5557 30.6098 25.3667C30.6488 25.5199 30.9428 25.8287 31.0688 25.9142C31.1832 25.9826 31.3107 25.9306 31.3862 25.7882C31.4126 25.6785 30.9894 24.9964 30.889 24.5593ZM24.6767 28.6281C24.6767 28.6227 24.7016 28.3161 24.7334 27.9607L24.8003 28.6257C24.8244 29.0901 24.7855 29.6711 24.7381 30.19C24.6922 29.6711 24.6533 29.0901 24.6767 28.6281ZM24.8595 40.92C24.8703 40.9643 24.8081 41.0849 24.7458 41.1658C24.7435 41.1673 24.7411 41.1696 24.7374 41.1728C24.735 41.1696 24.7327 41.1673 24.731 41.1658C24.6681 41.0849 24.6067 40.9636 24.6175 40.92C24.7467 40.4082 24.6393 40.1204 24.6362 40.1126C24.5553 39.8676 24.4176 37.7131 24.532 37.1436L24.5584 37.0129C24.6338 36.6341 24.7039 36.292 24.7374 35.8602C24.7731 36.2927 24.8415 36.6341 24.9186 37.0129L24.9434 37.1436C25.0578 37.7131 24.9209 39.8676 24.8415 40.1095C24.8377 40.1196 24.7303 40.4074 24.8595 40.92Z" fill="#388DCA"/>
<path d="M49.4529 48.8037C41.9275 46.6522 36.2292 36.5677 36.2292 24.44C36.2292 12.3121 41.9275 2.22845 49.4529 0.0754482V0C39.6361 1.98734 32.1572 12.1674 32.1572 24.44C32.1572 36.7109 39.6352 46.8909 49.4521 48.8782L49.4529 48.8037Z" fill="#231F20"/>
<path d="M0 0.0746646C7.52542 2.22845 13.2237 12.3121 13.2237 24.4392C13.2237 36.5677 7.52465 46.6522 0 48.8037V48.8782C9.81689 46.8909 17.2948 36.7109 17.2948 24.4392C17.2948 12.1674 9.81689 1.98734 0 0V0.0746646Z" fill="#231F20"/>
<path d="M64.3456 12.052H50.7127V18.3181H62.7969V22.1054H50.7127V28.5769H64.5183V32.3649H46.4775V8.26562H64.3456V12.052Z" fill="#388DCA"/>
<path d="M86.6804 32.3648L79.8745 23.1173L73.0298 32.3648H67.8145L77.2471 19.9422L68.1847 7.94043H73.5485L79.985 16.6979L86.458 7.94043H91.6741L82.6483 19.873L92.0435 32.3656L86.6804 32.3648Z" fill="#388DCA"/>
<path d="M105.527 24.6177H100.742V32.3649H96.5078V8.26562H106.01C111.622 8.26562 115.167 11.433 115.167 16.3557C115.167 21.7943 110.829 24.6177 105.527 24.6177ZM105.664 12.1221H100.741V20.7971H105.664C108.867 20.7971 110.863 19.0416 110.863 16.4592C110.864 13.6015 108.832 12.1221 105.664 12.1221Z" fill="#388DCA"/>
<path d="M137.374 12.052H123.739V18.3181H135.824V22.1054H123.739V28.5769H137.546V32.3649H119.506V8.26562H137.374V12.052Z" fill="#388DCA"/>
<path d="M158.027 32.3649L152.107 23.9636H146.805V32.3649H142.57V8.26562H153.313C158.855 8.26562 162.265 11.1918 162.265 15.9085C162.265 19.9026 159.889 22.3115 156.514 23.2417L163.021 32.3656L158.027 32.3649ZM152.968 12.1221H146.805V20.2114H153.002C156.031 20.2114 157.96 18.6278 157.96 16.1488C157.96 13.4988 156.101 12.1221 152.968 12.1221Z" fill="#388DCA"/>
<path d="M177.549 32.3649H173.282V12.1897H165.638V8.26562H185.192V12.1897H177.551V32.3649H177.549Z" fill="#388DCA"/>
<path d="M201.513 26.4421H201.375L193.836 15.1504V32.3644H189.671V8.26514H194.181L201.514 19.6602L208.846 8.26514H213.356V32.3651H209.122V15.082L201.513 26.4421Z" fill="#231F20"/>
<path d="M234.148 32.3644L228.226 23.9631H222.925V32.3644H218.692V8.26514H229.432C234.976 8.26514 238.384 11.1913 238.384 15.908C238.384 19.9021 236.009 22.311 232.634 23.2412L239.142 32.3651L234.148 32.3644ZM229.087 12.1216H222.925V20.2109H229.123C232.154 20.2109 234.08 18.6273 234.08 16.1484C234.08 13.4983 232.222 12.1216 229.087 12.1216Z" fill="#231F20"/>
<path d="M248.058 8.26514V32.3651H243.823V8.26514H248.058Z" fill="#231F20"/>
<path d="M62.4551 36.7153H67.6347L67.5164 37.2887H65.2631L63.8692 43.8324H63.1972L64.5911 37.2887H62.3369L62.4551 36.7153Z" fill="black"/>
<path d="M68.7126 41.4102C68.6536 41.6879 68.6333 41.9492 68.6536 42.1974C68.673 42.4447 68.736 42.6593 68.841 42.8391C68.946 43.0211 69.0968 43.1657 69.2906 43.2754C69.485 43.3835 69.7246 43.4379 70.0078 43.4379C70.3967 43.4379 70.7506 43.3361 71.0702 43.1315C71.3899 42.9269 71.6357 42.6361 71.8068 42.2619H72.4696C72.3436 42.5054 72.2004 42.7318 72.0393 42.9385C71.8784 43.1455 71.6917 43.3259 71.4809 43.4823C71.2693 43.6362 71.0321 43.7576 70.7684 43.8424C70.5055 43.928 70.2115 43.9716 69.8887 43.9716C69.4803 43.9716 69.1428 43.9023 68.8753 43.7639C68.6084 43.6246 68.4047 43.4357 68.2631 43.1945C68.1207 42.9542 68.0407 42.6718 68.0204 42.3444C68.001 42.0184 68.0305 41.6676 68.1098 41.2927C68.1884 40.9162 68.3175 40.5632 68.4948 40.2342C68.673 39.905 68.8884 39.6165 69.1428 39.3708C69.3964 39.1234 69.6825 38.9281 70.0023 38.7866C70.3212 38.6442 70.6658 38.5742 71.0352 38.5742C71.7407 38.5742 72.2432 38.8177 72.5426 39.3023C72.8428 39.7861 72.8903 40.4892 72.6857 41.4109L68.7126 41.4102ZM72.1623 40.9171C72.2151 40.6673 72.2299 40.4308 72.2065 40.2108C72.184 39.9906 72.1226 39.7994 72.0238 39.6383C71.9251 39.4758 71.7827 39.3474 71.5991 39.2525C71.414 39.1568 71.1908 39.1094 70.927 39.1094C70.6634 39.1094 70.4215 39.1584 70.1999 39.2564C69.9789 39.3567 69.7799 39.4882 69.6024 39.6523C69.4243 39.8164 69.2696 40.0078 69.1382 40.2248C69.0067 40.4418 68.9009 40.6735 68.8215 40.9171H72.1623Z" fill="black"/>
<path d="M78.5374 40.3255C78.518 39.942 78.4028 39.6441 78.1912 39.431C77.9804 39.2172 77.6771 39.1098 77.2819 39.1098C76.9786 39.1098 76.7048 39.172 76.4614 39.2973C76.2179 39.4225 76.0032 39.5889 75.8197 39.7967C75.6345 40.0043 75.4828 40.2369 75.3646 40.4974C75.2465 40.758 75.157 41.021 75.0978 41.2846C75.0388 41.5552 75.0139 41.8174 75.0233 42.0748C75.0334 42.3323 75.0862 42.5626 75.1819 42.7671C75.2776 42.9717 75.4206 43.135 75.6112 43.2564C75.8026 43.3777 76.053 43.4392 76.3625 43.4392C76.8044 43.4392 77.1847 43.3171 77.5044 43.0744C77.8241 42.8302 78.0629 42.4933 78.2208 42.0647H78.8532C78.7412 42.3471 78.6035 42.6061 78.4378 42.8403C78.2736 43.0759 78.0824 43.2766 77.8645 43.4431C77.6476 43.6118 77.4033 43.741 77.1334 43.8335C76.8634 43.926 76.5664 43.9728 76.2436 43.9728C75.8352 43.9728 75.4976 43.9035 75.23 43.765C74.9633 43.6258 74.7595 43.4369 74.6179 43.1957C74.4756 42.9553 74.3954 42.6707 74.3752 42.3409C74.355 42.0111 74.3853 41.6587 74.4647 41.2846C74.537 40.9268 74.6591 40.5869 74.8302 40.2618C75.0014 39.9351 75.2122 39.6465 75.4626 39.396C75.7131 39.1449 76.0017 38.9473 76.3277 38.7979C76.6543 38.6494 77.0082 38.5754 77.3909 38.5754C77.9843 38.5754 78.4332 38.717 78.7404 39.0001C79.0468 39.2833 79.1799 39.7259 79.141 40.3263L78.5374 40.3255Z" fill="black"/>
<path d="M80.5029 43.8337L82.015 36.7166H82.6086L82.0352 39.4257C82.3254 39.1752 82.614 38.9707 82.9002 38.8136C83.1872 38.6533 83.5085 38.5747 83.8639 38.5747C84.1806 38.5747 84.4628 38.6299 84.7094 38.7389C84.956 38.847 85.1427 39.0368 85.2679 39.3067C85.3535 39.4911 85.3876 39.6793 85.3713 39.8737C85.355 40.069 85.3232 40.2719 85.2773 40.482L84.5656 43.8328H83.9729L84.6845 40.4921C84.7833 40.03 84.7553 39.684 84.6006 39.4537C84.4457 39.2242 84.1315 39.1091 83.657 39.1091C83.4727 39.1091 83.2984 39.1355 83.1336 39.1915C82.9694 39.2484 82.8155 39.3222 82.6739 39.4132C82.5315 39.5074 82.4047 39.6124 82.2935 39.7306C82.1815 39.8497 82.0889 39.9748 82.0166 40.1055C81.924 40.2712 81.8549 40.4283 81.809 40.58C81.7622 40.7316 81.7195 40.8958 81.6798 41.0754L81.0965 43.832H80.5029V43.8337Z" fill="black"/>
<path d="M87.4344 43.833H86.8408L87.9282 38.7127H88.5218L88.374 39.4252C88.6641 39.1747 88.9519 38.9702 89.2389 38.813C89.5259 38.6528 89.8471 38.5742 90.2026 38.5742C90.5192 38.5742 90.8008 38.6295 91.048 38.7384C91.2954 38.8465 91.4813 39.0363 91.6066 39.3062C91.6921 39.4905 91.7264 39.6788 91.71 39.8732C91.6937 40.0685 91.6618 40.2715 91.6159 40.4814L90.9034 43.8323H90.3108L91.0224 40.4915C91.122 40.0295 91.0932 39.6835 90.9385 39.4532C90.7836 39.2238 90.4694 39.1086 89.9949 39.1086C89.8106 39.1086 89.6363 39.135 89.4715 39.191C89.3066 39.2478 89.1534 39.3217 89.0118 39.4127C88.8695 39.5069 88.7426 39.6118 88.6313 39.7301C88.5194 39.849 88.4268 39.9743 88.3545 40.105C88.2619 40.2707 88.1928 40.4278 88.1469 40.5795C88.1001 40.7312 88.0574 40.8952 88.0177 41.075L87.4344 43.833Z" fill="black"/>
<path d="M95.1828 43.9716C94.8531 43.9654 94.5583 43.9055 94.2986 43.7935C94.0379 43.6823 93.8241 43.5142 93.6552 43.2902C93.4872 43.067 93.3768 42.7854 93.3247 42.4502C93.2717 42.1133 93.2921 41.7214 93.3838 41.2725C93.4631 40.8976 93.5868 40.5468 93.7548 40.2201C93.9228 39.8927 94.1321 39.6088 94.3825 39.3661C94.633 39.1219 94.9208 38.9281 95.2474 38.7866C95.5734 38.6442 95.9343 38.5742 96.3294 38.5742C96.7316 38.5742 97.066 38.645 97.3336 38.7866C97.6004 38.9281 97.8057 39.1202 97.9512 39.3607C98.0966 39.6009 98.1814 39.8848 98.2086 40.2147C98.235 40.5452 98.2086 40.8969 98.1292 41.2718C98.0437 41.6801 97.9084 42.0504 97.724 42.3801C97.5405 42.7084 97.3188 42.993 97.0621 43.2303C96.8054 43.4668 96.5168 43.6495 96.1972 43.7787C95.876 43.907 95.5384 43.9716 95.1828 43.9716ZM97.4954 41.2725C97.5545 40.9699 97.5809 40.6868 97.5748 40.4224C97.5677 40.1587 97.5171 39.9299 97.4214 39.7355C97.3258 39.541 97.1804 39.3878 96.9866 39.2758C96.7922 39.1639 96.5363 39.1086 96.2205 39.1086C95.9109 39.1086 95.6324 39.1685 95.3852 39.2914C95.1386 39.4112 94.9223 39.5745 94.7372 39.7752C94.5529 39.9767 94.4012 40.2069 94.283 40.4675C94.1647 40.728 94.0752 40.9956 94.0162 41.2718C93.9508 41.5891 93.9275 41.8792 93.9469 42.1468C93.9672 42.4144 94.0293 42.6423 94.1351 42.8336C94.2402 43.0258 94.3903 43.1735 94.5855 43.2801C94.78 43.3843 95.0188 43.4372 95.3019 43.4372C95.6114 43.4372 95.8899 43.3757 96.1372 43.2544C96.3846 43.1331 96.5986 42.9698 96.7797 42.7651C96.961 42.5606 97.1111 42.3303 97.2301 42.0729C97.3476 41.8162 97.4362 41.5495 97.4954 41.2725Z" fill="black"/>
<path d="M99.6006 43.8337L101.113 36.7166H101.705L100.193 43.8337H99.6006Z" fill="black"/>
<path d="M104.554 43.9716C104.224 43.9654 103.929 43.9055 103.67 43.7935C103.409 43.6823 103.195 43.5142 103.026 43.2902C102.859 43.067 102.748 42.7854 102.696 42.4502C102.643 42.1133 102.663 41.7214 102.755 41.2725C102.834 40.8976 102.957 40.5468 103.125 40.2201C103.293 39.8927 103.502 39.6088 103.754 39.3661C104.003 39.1219 104.292 38.9281 104.619 38.7866C104.945 38.6442 105.305 38.5742 105.701 38.5742C106.103 38.5742 106.438 38.645 106.705 38.7866C106.972 38.9281 107.178 39.1202 107.322 39.3607C107.468 39.6009 107.553 39.8848 107.58 40.2147C107.606 40.5452 107.58 40.8969 107.5 41.2718C107.415 41.6801 107.279 42.0504 107.095 42.3801C106.911 42.7084 106.69 42.993 106.433 43.2303C106.177 43.4668 105.888 43.6495 105.568 43.7787C105.247 43.907 104.91 43.9716 104.554 43.9716ZM106.867 41.2725C106.926 40.9699 106.952 40.6868 106.946 40.4224C106.939 40.1587 106.888 39.9299 106.793 39.7355C106.696 39.541 106.552 39.3878 106.358 39.2758C106.163 39.1639 105.907 39.1086 105.592 39.1086C105.282 39.1086 105.004 39.1685 104.756 39.2914C104.51 39.4112 104.293 39.5745 104.108 39.7752C103.924 39.9767 103.772 40.2069 103.654 40.4675C103.536 40.728 103.446 40.9956 103.387 41.2718C103.322 41.5891 103.299 41.8792 103.318 42.1468C103.338 42.4144 103.4 42.6423 103.506 42.8336C103.611 43.0258 103.761 43.1735 103.956 43.2801C104.15 43.3843 104.389 43.4372 104.672 43.4372C104.982 43.4372 105.26 43.3757 105.508 43.2544C105.755 43.1331 105.969 42.9698 106.15 42.7651C106.331 42.5606 106.481 42.3303 106.6 42.0729C106.719 41.8162 106.808 41.5495 106.867 41.2725Z" fill="black"/>
<path d="M113.924 38.7131H114.518L113.539 43.3395C113.467 43.6826 113.362 44.0092 113.228 44.3226C113.093 44.6353 112.909 44.9108 112.679 45.1488C112.448 45.386 112.163 45.575 111.824 45.7165C111.484 45.8581 111.071 45.9289 110.583 45.9289C110.207 45.9289 109.895 45.8815 109.644 45.7858C109.394 45.6901 109.198 45.5695 109.056 45.4248C108.914 45.2795 108.819 45.1184 108.769 44.9458C108.72 44.77 108.708 44.6066 108.735 44.4565H109.367C109.367 44.6479 109.403 44.8042 109.476 44.9263C109.548 45.0469 109.646 45.1433 109.768 45.2125C109.89 45.2825 110.029 45.3293 110.188 45.3557C110.346 45.3813 110.514 45.3961 110.692 45.3961C111.094 45.3961 111.432 45.3253 111.705 45.1868C111.979 45.0492 112.203 44.8687 112.377 44.6447C112.552 44.42 112.687 44.1672 112.783 43.8824C112.878 43.5993 112.956 43.3107 113.014 43.0144C112.757 43.3287 112.444 43.5698 112.076 43.73C111.706 43.8925 111.341 43.9734 110.978 43.9734C110.589 43.9734 110.266 43.8988 110.009 43.7518C109.752 43.6017 109.555 43.4041 109.421 43.1575C109.286 42.9102 109.207 42.6224 109.184 42.2926C109.16 41.9643 109.188 41.6198 109.268 41.2644C109.347 40.8893 109.464 40.5371 109.624 40.2081C109.782 39.8774 109.979 39.5935 110.217 39.3516C110.454 39.1121 110.732 38.9215 111.052 38.7838C111.372 38.6454 111.739 38.5762 112.154 38.5762C112.318 38.5762 112.482 38.6003 112.643 38.6454C112.805 38.6921 112.957 38.7582 113.098 38.8438C113.24 38.9286 113.365 39.0381 113.474 39.1696C113.583 39.3018 113.663 39.4497 113.716 39.6145H113.736L113.924 38.7131ZM113.381 41.2938C113.447 40.9835 113.47 40.6942 113.45 40.4281C113.43 40.1605 113.368 39.9304 113.262 39.7359C113.156 39.5415 113.008 39.3881 112.817 39.2762C112.625 39.1642 112.391 39.1089 112.115 39.1089C111.865 39.1089 111.624 39.1533 111.393 39.242C111.162 39.3306 110.95 39.4606 110.756 39.6325C110.562 39.8036 110.393 40.0128 110.252 40.2609C110.111 40.5067 110.003 40.7937 109.931 41.115C109.852 41.4385 109.816 41.7396 109.822 42.0196C109.829 42.2995 109.884 42.5461 109.986 42.7562C110.087 42.9669 110.238 43.1334 110.435 43.2555C110.633 43.3768 110.886 43.4384 111.197 43.4384C111.467 43.4384 111.721 43.38 111.958 43.2641C112.195 43.1506 112.409 42.9957 112.601 42.8013C112.792 42.6053 112.955 42.3789 113.09 42.1183C113.225 41.8585 113.322 41.5833 113.381 41.2938Z" fill="black"/>
<path d="M115.429 45.218C115.501 45.2313 115.578 45.2438 115.66 45.2569C115.743 45.2717 115.827 45.2771 115.912 45.2771C116.077 45.2771 116.224 45.2243 116.352 45.1193C116.48 45.015 116.595 44.889 116.692 44.742C116.791 44.595 116.882 44.4403 116.964 44.28C117.046 44.1205 117.127 43.9836 117.207 43.8724L116.317 38.7131H116.979L117.691 43.1117L120.262 38.7131H120.904L117.918 43.7651C117.727 44.0864 117.553 44.378 117.395 44.6331C117.236 44.8906 117.078 45.1091 116.92 45.2919C116.762 45.4732 116.597 45.6116 116.427 45.7065C116.255 45.8014 116.067 45.8505 115.863 45.8505C115.758 45.8505 115.657 45.8434 115.562 45.831C115.465 45.8177 115.382 45.8007 115.31 45.782L115.429 45.218Z" fill="black"/>
<path d="M127.399 35.7285V46.5323H126.895V35.7285H127.399Z" fill="black"/>
<path d="M134.355 41.7083C134.314 42.0232 134.329 42.2925 134.395 42.514C134.462 42.7342 134.568 42.9131 134.72 43.0516C134.873 43.19 135.06 43.2919 135.285 43.3533C135.509 43.4164 135.754 43.4475 136.024 43.4475C136.342 43.4475 136.623 43.4085 136.871 43.3276C137.116 43.2492 137.329 43.1434 137.503 43.0087C137.679 42.8726 137.82 42.7155 137.929 42.5389C138.039 42.3601 138.112 42.1734 138.15 41.9758C138.211 41.6989 138.197 41.4734 138.107 41.3038C138.016 41.1304 137.882 40.9911 137.702 40.883C137.52 40.7741 137.307 40.687 137.065 40.6209C136.819 40.5555 136.569 40.4909 136.312 40.428C136.055 40.3649 135.804 40.2911 135.562 40.2063C135.316 40.1207 135.109 40.0048 134.939 39.861C134.767 39.7155 134.643 39.5288 134.567 39.3024C134.491 39.0738 134.49 38.786 134.562 38.4368C134.615 38.1933 134.716 37.9553 134.869 37.7258C135.019 37.4941 135.215 37.2895 135.452 37.1129C135.691 36.934 135.972 36.7925 136.296 36.6874C136.623 36.5816 136.984 36.5288 137.379 36.5288C137.782 36.5288 138.12 36.5848 138.393 36.6975C138.667 36.8095 138.882 36.9636 139.04 37.1557C139.199 37.3516 139.3 37.578 139.347 37.834C139.393 38.0914 139.384 38.3652 139.317 38.6538H138.676C138.734 38.3839 138.737 38.1505 138.68 37.9529C138.624 37.7554 138.531 37.5943 138.399 37.4692C138.267 37.3439 138.101 37.2522 137.9 37.1923C137.699 37.1339 137.487 37.1043 137.26 37.1043C136.919 37.1043 136.621 37.1518 136.367 37.2475C136.115 37.3432 135.902 37.466 135.731 37.6185C135.559 37.7694 135.428 37.9381 135.334 38.1233C135.243 38.3061 135.193 38.492 135.188 38.6763C135.174 38.9066 135.225 39.0917 135.339 39.2301C135.455 39.3693 135.608 39.4805 135.799 39.5708C135.991 39.6588 136.209 39.7318 136.454 39.7878C136.697 39.8438 136.944 39.9014 137.193 39.9651C137.445 40.0282 137.684 40.102 137.915 40.1883C138.146 40.2739 138.34 40.3898 138.498 40.5345C138.657 40.6793 138.77 40.8636 138.838 41.093C138.909 41.3201 138.906 41.604 138.834 41.947C138.695 42.6067 138.359 43.1169 137.827 43.481C137.292 43.8426 136.613 44.0231 135.789 44.0231C135.421 44.0231 135.089 43.9757 134.791 43.8791C134.495 43.7843 134.255 43.6388 134.065 43.4443C133.877 43.2499 133.75 43.0104 133.683 42.7233C133.618 42.4355 133.624 42.0987 133.705 41.7098H134.355V41.7083Z" fill="black"/>
<path d="M144.784 40.3255C144.762 39.942 144.647 39.6441 144.437 39.431C144.226 39.2172 143.923 39.1098 143.527 39.1098C143.224 39.1098 142.951 39.172 142.707 39.2973C142.463 39.4225 142.249 39.5889 142.064 39.7967C141.88 40.0043 141.727 40.2369 141.611 40.4974C141.491 40.758 141.403 41.021 141.344 41.2846C141.284 41.5552 141.258 41.8174 141.269 42.0748C141.279 42.3323 141.331 42.5626 141.427 42.7671C141.521 42.9717 141.665 43.135 141.856 43.2564C142.047 43.3777 142.299 43.4392 142.608 43.4392C143.048 43.4392 143.43 43.3171 143.751 43.0744C144.07 42.8302 144.308 42.4933 144.466 42.0647H145.098C144.987 42.3471 144.849 42.6061 144.683 42.8403C144.52 43.0759 144.329 43.2766 144.111 43.4431C143.894 43.6118 143.65 43.741 143.379 43.8335C143.109 43.926 142.812 43.9728 142.488 43.9728C142.081 43.9728 141.743 43.9035 141.477 43.765C141.209 43.6258 141.006 43.4369 140.864 43.1957C140.721 42.9553 140.64 42.6707 140.621 42.3409C140.601 42.0111 140.63 41.6587 140.709 41.2846C140.782 40.9268 140.905 40.5869 141.076 40.2618C141.247 39.9351 141.457 39.6465 141.708 39.396C141.959 39.1449 142.248 38.9473 142.574 38.7979C142.899 38.6494 143.253 38.5754 143.636 38.5754C144.23 38.5754 144.679 38.717 144.986 39.0001C145.292 39.2833 145.425 39.7259 145.387 40.3263L144.784 40.3255Z" fill="black"/>
<path d="M146.839 43.8332L147.926 38.7128H148.519L147.433 43.8332H146.839ZM148.133 37.5966L148.323 36.7153H148.974L148.785 37.5966H148.133Z" fill="black"/>
<path d="M150.664 41.4102C150.606 41.6879 150.586 41.9492 150.606 42.1974C150.625 42.4447 150.687 42.6593 150.795 42.8391C150.898 43.0211 151.049 43.1657 151.243 43.2754C151.438 43.3835 151.678 43.4379 151.96 43.4379C152.348 43.4379 152.703 43.3361 153.023 43.1315C153.341 42.9269 153.587 42.6361 153.76 42.2619H154.422C154.296 42.5054 154.153 42.7318 153.991 42.9385C153.829 43.1455 153.644 43.3259 153.431 43.4823C153.221 43.6362 152.985 43.7576 152.721 43.8424C152.457 43.928 152.163 43.9716 151.84 43.9716C151.433 43.9716 151.094 43.9023 150.827 43.7639C150.559 43.6246 150.356 43.4357 150.214 43.1945C150.072 42.9542 149.992 42.6718 149.973 42.3444C149.953 42.0184 149.982 41.6676 150.061 41.2927C150.14 40.9162 150.269 40.5632 150.447 40.2342C150.624 39.905 150.839 39.6165 151.093 39.3708C151.347 39.1234 151.634 38.9281 151.954 38.7866C152.273 38.6442 152.616 38.5742 152.986 38.5742C153.692 38.5742 154.193 38.8177 154.494 39.3023C154.792 39.7861 154.841 40.4892 154.637 41.4109L150.664 41.4102ZM154.115 40.9171C154.168 40.6673 154.182 40.4308 154.161 40.2108C154.136 39.9906 154.077 39.7994 153.977 39.6383C153.879 39.4758 153.737 39.3474 153.553 39.2525C153.367 39.1568 153.144 39.1094 152.88 39.1094C152.616 39.1094 152.375 39.1584 152.153 39.2564C151.932 39.3567 151.732 39.4882 151.555 39.6523C151.377 39.8164 151.222 40.0078 151.09 40.2248C150.959 40.4418 150.853 40.6735 150.776 40.9171H154.115Z" fill="black"/>
<path d="M156.715 43.833H156.121L157.209 38.7127H157.802L157.653 39.4252C157.945 39.1747 158.232 38.9702 158.518 38.813C158.804 38.6528 159.127 38.5742 159.482 38.5742C159.798 38.5742 160.081 38.6295 160.326 38.7384C160.574 38.8465 160.761 39.0363 160.886 39.3062C160.971 39.4905 161.005 39.6788 160.989 39.8732C160.972 40.0685 160.941 40.2715 160.896 40.4814L160.183 43.8323H159.592L160.302 40.4915C160.401 40.0295 160.374 39.6835 160.219 39.4532C160.065 39.2238 159.749 39.1086 159.275 39.1086C159.09 39.1086 158.916 39.135 158.75 39.191C158.586 39.2478 158.434 39.3217 158.291 39.4127C158.15 39.5069 158.022 39.6118 157.911 39.7301C157.797 39.849 157.706 39.9743 157.634 40.105C157.543 40.2707 157.474 40.4278 157.427 40.5795C157.379 40.7312 157.338 40.8952 157.298 41.075L156.715 43.833Z" fill="black"/>
<path d="M166.828 40.3255C166.809 39.942 166.693 39.6441 166.483 39.431C166.272 39.2172 165.97 39.1098 165.574 39.1098C165.271 39.1098 164.998 39.172 164.753 39.2973C164.508 39.4225 164.294 39.5889 164.112 39.7967C163.926 40.0043 163.774 40.2369 163.656 40.4974C163.537 40.758 163.448 41.021 163.389 41.2846C163.33 41.5552 163.306 41.8174 163.314 42.0748C163.324 42.3323 163.378 42.5626 163.472 42.7671C163.568 42.9717 163.711 43.135 163.903 43.2564C164.093 43.3777 164.344 43.4392 164.654 43.4392C165.095 43.4392 165.476 43.3171 165.796 43.0744C166.115 42.8302 166.354 42.4933 166.513 42.0647H167.145C167.033 42.3471 166.894 42.6061 166.731 42.8403C166.565 43.0759 166.374 43.2766 166.156 43.4431C165.94 43.6118 165.697 43.741 165.426 43.8335C165.157 43.926 164.86 43.9728 164.537 43.9728C164.128 43.9728 163.79 43.9035 163.523 43.765C163.256 43.6258 163.051 43.4369 162.91 43.1957C162.768 42.9553 162.687 42.6707 162.667 42.3409C162.647 42.0111 162.677 41.6587 162.757 41.2846C162.829 40.9268 162.95 40.5869 163.122 40.2618C163.294 39.9351 163.505 39.6465 163.754 39.396C164.006 39.1449 164.294 38.9473 164.62 38.7979C164.947 38.6485 165.301 38.5754 165.683 38.5754C166.276 38.5754 166.726 38.717 167.032 39.0001C167.339 39.2833 167.472 39.7259 167.432 40.3263L166.828 40.3255Z" fill="black"/>
<path d="M169.674 41.4102C169.616 41.6879 169.594 41.9492 169.616 42.1974C169.635 42.4447 169.698 42.6593 169.803 42.8391C169.909 43.0211 170.058 43.1657 170.253 43.2754C170.447 43.3835 170.686 43.4379 170.969 43.4379C171.357 43.4379 171.711 43.3361 172.032 43.1315C172.35 42.9269 172.597 42.6361 172.769 42.2619H173.43C173.305 42.5054 173.161 42.7318 173.001 42.9385C172.838 43.1463 172.653 43.3259 172.442 43.4823C172.231 43.6362 171.993 43.7576 171.729 43.8424C171.467 43.928 171.173 43.9716 170.851 43.9716C170.442 43.9716 170.104 43.9023 169.837 43.7639C169.57 43.6246 169.365 43.4357 169.224 43.1945C169.082 42.9542 169.003 42.6718 168.981 42.3444C168.962 42.0184 168.991 41.6676 169.071 41.2927C169.149 40.9162 169.278 40.5632 169.455 40.2342C169.633 39.905 169.848 39.6165 170.104 39.3708C170.356 39.1234 170.643 38.9281 170.963 38.7866C171.283 38.6442 171.627 38.5742 171.996 38.5742C172.701 38.5742 173.204 38.8177 173.502 39.3023C173.804 39.7861 173.85 40.4892 173.646 41.4109L169.674 41.4102ZM173.124 40.9171C173.175 40.6673 173.191 40.4308 173.167 40.2108C173.145 39.9906 173.084 39.7994 172.987 39.6383C172.886 39.4758 172.744 39.3474 172.559 39.2525C172.376 39.1568 172.151 39.1094 171.89 39.1094C171.625 39.1094 171.383 39.1584 171.161 39.2564C170.942 39.3567 170.742 39.4882 170.562 39.6523C170.385 39.8164 170.231 40.0078 170.1 40.2248C169.967 40.4418 169.861 40.6735 169.783 40.9171H173.124Z" fill="black"/>
<path d="M180.981 35.7285V46.5323H180.478V35.7285H180.981Z" fill="black"/>
<path d="M187.209 43.8337L188.721 36.7166H193.455L193.337 37.2898H189.274L188.721 39.8613H192.387L192.27 40.433H188.602L187.999 43.2603H192.161L192.042 43.8337H187.209Z" fill="black"/>
<path d="M194.544 38.7131H195.187L195.918 43.1024L198.508 38.7131H199.151L196.076 43.8336H195.415L194.544 38.7131Z" fill="black"/>
<path d="M199.871 43.8332L200.957 38.7128H201.551L200.464 43.8332H199.871ZM201.165 37.5966L201.354 36.7153H202.006L201.819 37.5966H201.165Z" fill="black"/>
<path d="M208.284 36.7153H208.877L207.364 43.8324H206.772L206.958 42.934H206.939C206.82 43.1044 206.678 43.2546 206.515 43.3828C206.35 43.5119 206.178 43.6193 206 43.7049C205.823 43.7896 205.642 43.8549 205.463 43.9025C205.281 43.9476 205.108 43.9716 204.943 43.9716C204.529 43.9716 204.189 43.9025 203.923 43.7639C203.661 43.6248 203.462 43.4357 203.332 43.1946C203.199 42.9542 203.127 42.6696 203.108 42.3398C203.093 42.0099 203.125 41.6577 203.204 41.2835C203.283 40.9257 203.401 40.5842 203.559 40.2552C203.716 39.9254 203.916 39.6376 204.157 39.3895C204.397 39.1421 204.678 38.9461 204.998 38.7968C205.316 38.6482 205.671 38.5744 206.06 38.5744C206.424 38.5744 206.753 38.6553 207.054 38.8178C207.353 38.9788 207.562 39.2183 207.681 39.5342L208.284 36.7153ZM207.315 41.2532C207.374 40.963 207.392 40.6877 207.368 40.4271C207.345 40.1666 207.281 39.9394 207.176 39.7449C207.071 39.5505 206.924 39.3957 206.736 39.2798C206.547 39.1655 206.32 39.1079 206.049 39.1079C205.74 39.1079 205.459 39.1678 205.209 39.2908C204.957 39.4105 204.737 39.5785 204.547 39.7893C204.354 40.0001 204.196 40.2467 204.071 40.5267C203.947 40.8059 203.858 41.1062 203.806 41.4305C203.74 41.7517 203.724 42.0387 203.76 42.2853C203.796 42.5327 203.875 42.7419 203.993 42.9123C204.112 43.0849 204.267 43.2156 204.462 43.3042C204.657 43.3914 204.879 43.4373 205.129 43.4373C205.406 43.4373 205.665 43.3804 205.905 43.2701C206.147 43.1565 206.36 43.004 206.546 42.8096C206.734 42.6144 206.894 42.3841 207.021 42.1174C207.152 41.8513 207.249 41.5643 207.315 41.2532Z" fill="black"/>
<path d="M210.576 41.4102C210.519 41.6879 210.498 41.9492 210.519 42.1974C210.538 42.4447 210.6 42.6593 210.707 42.8391C210.811 43.0211 210.962 43.1657 211.157 43.2754C211.351 43.3835 211.59 43.4379 211.873 43.4379C212.262 43.4379 212.615 43.3361 212.936 43.1315C213.255 42.9269 213.501 42.6361 213.673 42.2619H214.334C214.209 42.5054 214.065 42.7318 213.904 42.9385C213.741 43.1463 213.557 43.3259 213.346 43.4823C213.135 43.6362 212.897 43.7576 212.633 43.8424C212.37 43.928 212.075 43.9716 211.754 43.9716C211.346 43.9716 211.009 43.9023 210.741 43.7639C210.474 43.6246 210.269 43.4357 210.128 43.1945C209.986 42.9542 209.905 42.6718 209.885 42.3444C209.865 42.0184 209.895 41.6676 209.975 41.2927C210.054 40.9162 210.182 40.5632 210.359 40.2342C210.537 39.905 210.753 39.6165 211.007 39.3708C211.26 39.1234 211.548 38.9281 211.867 38.7866C212.187 38.6442 212.532 38.5742 212.9 38.5742C213.606 38.5742 214.108 38.8177 214.407 39.3023C214.708 39.7861 214.754 40.4892 214.55 41.4109L210.576 41.4102ZM214.027 40.9171C214.079 40.6673 214.095 40.4308 214.071 40.2108C214.048 39.9906 213.988 39.7994 213.89 39.6383C213.791 39.4758 213.649 39.3474 213.465 39.2525C213.28 39.1568 213.055 39.1094 212.793 39.1094C212.528 39.1094 212.288 39.1584 212.065 39.2564C211.844 39.3567 211.646 39.4882 211.466 39.6523C211.289 39.8164 211.135 40.0078 211.004 40.2248C210.871 40.4418 210.765 40.6735 210.686 40.9171H214.027Z" fill="black"/>
<path d="M216.626 43.833H216.033L217.119 38.7127H217.713L217.564 39.4252C217.855 39.1747 218.143 38.9702 218.43 38.813C218.715 38.6528 219.036 38.5742 219.394 38.5742C219.708 38.5742 219.991 38.6295 220.238 38.7384C220.484 38.8465 220.671 39.0363 220.797 39.3062C220.882 39.4905 220.917 39.6788 220.902 39.8732C220.884 40.0685 220.853 40.2715 220.806 40.4814L220.096 43.8323H219.502L220.213 40.4915C220.313 40.0295 220.284 39.6835 220.13 39.4532C219.975 39.2238 219.659 39.1086 219.187 39.1086C219.002 39.1086 218.827 39.135 218.662 39.191C218.495 39.2478 218.344 39.3217 218.202 39.4127C218.059 39.5069 217.933 39.6118 217.822 39.7301C217.71 39.849 217.617 39.9743 217.546 40.105C217.453 40.2707 217.383 40.4278 217.338 40.5795C217.291 40.7312 217.248 40.8952 217.21 41.075L216.626 43.833Z" fill="black"/>
<path d="M226.739 40.3255C226.717 39.942 226.604 39.6441 226.393 39.431C226.182 39.2172 225.878 39.1098 225.483 39.1098C225.179 39.1098 224.906 39.172 224.664 39.2973C224.418 39.4225 224.203 39.5889 224.02 39.7967C223.836 40.0043 223.683 40.2369 223.566 40.4974C223.448 40.758 223.359 41.021 223.298 41.2846C223.239 41.5552 223.214 41.8174 223.225 42.0748C223.234 42.3323 223.286 42.5626 223.383 42.7671C223.477 42.9717 223.621 43.135 223.812 43.2564C224.004 43.3777 224.254 43.4392 224.564 43.4392C225.003 43.4392 225.385 43.3171 225.706 43.0744C226.024 42.8302 226.265 42.4933 226.422 42.0647H227.054C226.942 42.3471 226.805 42.6061 226.639 42.8403C226.475 43.0759 226.283 43.2766 226.067 43.4431C225.85 43.6118 225.604 43.741 225.335 43.8335C225.064 43.926 224.768 43.9728 224.445 43.9728C224.035 43.9728 223.698 43.9035 223.432 43.765C223.164 43.6258 222.961 43.4369 222.819 43.1957C222.677 42.9553 222.596 42.6707 222.575 42.3409C222.558 42.0111 222.586 41.6587 222.664 41.2846C222.737 40.9268 222.859 40.5869 223.032 40.2618C223.202 39.9351 223.412 39.6465 223.664 39.396C223.915 39.1449 224.202 38.9473 224.53 38.7979C224.856 38.6494 225.208 38.5754 225.591 38.5754C226.185 38.5754 226.633 38.717 226.94 39.0001C227.247 39.2833 227.378 39.7259 227.342 40.3263L226.739 40.3255Z" fill="black"/>
<path d="M229.584 41.4102C229.526 41.6879 229.506 41.9492 229.526 42.1974C229.545 42.4447 229.607 42.6593 229.713 42.8391C229.818 43.0211 229.968 43.1657 230.163 43.2754C230.356 43.3835 230.596 43.4379 230.88 43.4379C231.268 43.4379 231.623 43.3361 231.941 43.1315C232.261 42.9269 232.506 42.6361 232.678 42.2619H233.342C233.217 42.5054 233.073 42.7318 232.909 42.9385C232.749 43.1463 232.562 43.3259 232.351 43.4823C232.14 43.6362 231.905 43.7576 231.64 43.8424C231.376 43.928 231.083 43.9716 230.761 43.9716C230.351 43.9716 230.014 43.9023 229.746 43.7639C229.479 43.6246 229.276 43.4357 229.133 43.1945C228.991 42.9542 228.912 42.6718 228.891 42.3444C228.872 42.0184 228.901 41.6676 228.98 41.2927C229.059 40.9162 229.187 40.5632 229.365 40.2342C229.544 39.905 229.758 39.6165 230.012 39.3708C230.268 39.1234 230.553 38.9281 230.873 38.7866C231.192 38.6442 231.537 38.5742 231.906 38.5742C232.61 38.5742 233.113 38.8177 233.414 39.3023C233.713 39.7861 233.76 40.4892 233.558 41.4109L229.584 41.4102ZM233.035 40.9171C233.086 40.6673 233.102 40.4308 233.079 40.2108C233.056 39.9906 232.997 39.7994 232.897 39.6383C232.798 39.4758 232.657 39.3474 232.472 39.2525C232.286 39.1568 232.064 39.1094 231.798 39.1094C231.536 39.1094 231.295 39.1584 231.073 39.2564C230.852 39.3567 230.652 39.4882 230.475 39.6523C230.296 39.8164 230.141 40.0078 230.01 40.2248C229.877 40.4418 229.772 40.6735 229.694 40.9171H233.035Z" fill="black"/>
</svg>
				
				</a></h1>
            <a href="tel:(877) 674-8888">
              <button type="button" class="button"><img src="<?php echo get_theme_file_uri('assets/images/ct-scan/icon-phone.png') ?>" alt="icon-phone">(877) 674-8888</button>
            </a>
        </div>
    </div>
</header>
<?php } elseif(is_page("open-mri")){ ?>


<!-- Open MRI -->
<div id="schedule-modal">
        <?php
    echo do_shortcode('[gravityform id="18" title="true" description="false" ajax="true"]');
        ?>
    </div>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R9DC77K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class=" left-0 top-0 w-full z-50">
        <nav class="">
            <div class="container py-5 flex justify-between">
                <ul class="flex gap-10 items-center">
                    <li><a class="flex items-center gap-2 font-semibold" href="#"><img class="logo-img xs:max-w-[220px] max-w-[140px]" src="<?php echo get_theme_file_uri("/assets/images/open-mri/png/logo.png") ?>" alt="logo"></a></li>
                    <li class="lg:block hidden switchElement"><a class="flex items-center gap-2 font-medium" href="#"> <span><img src="<?php echo get_theme_file_uri("/assets/images/open-mri/png/map-icon.png") ?>" alt="map-icon"></span>Bellflower, Riverside, San Diego</a></li>
                </ul>
                <ul class="flex md:gap-7 items-center">
                    <li class="">
                    <a href="tel:(877) 674-8888">
                        <button class="yellow-button call-button flex bg-blue-600 hover:bg-blue-400 duration-300 py-3 md:px-10 sm:px-5 px-4 rounded items-center gap-2 font-semibold text-white" >
                            <span class="xxs:block hidden"><img src="<?php echo get_theme_file_uri("/assets/images/open-mri/png/tel.png") ?>" alt="tel-icon"></span> (877) 674-8888
                        </button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php } elseif(is_page("standup-mri")){ ?>


      <!-- Standup MRI -->
      <div id="schedule-modal">
        <?php
echo do_shortcode('[gravityform id="19" title="true" description="false" ajax="true"]');
        ?>
    </div>
    <header class=" left-0 top-0 w-full z-50">
        <nav class="">
            <div class="container py-5 flex justify-between">
                <ul class="flex gap-10 items-center">
                    <li><a class="flex items-center gap-2 font-semibold" href="#"><img class="logo-img xs:max-w-[220px] max-w-[120px]" src="<?php echo get_theme_file_uri("/assets/images/standup-mri/png/logo.png") ?>" alt="logo"></a></li>
                    <li class="lg:block hidden switchElement"><a class="flex items-center gap-2" href="#"> <span><img src="<?php echo get_theme_file_uri("/assets/images/standup-mri/png/map-icon.png") ?>" alt="map-icon"></span> Culver City, USA</a></li>
                </ul>
                <ul class="flex md:gap-7 items-center">
                    <li class="select-icon relative hidden">
                        <select class="border border-[#A1A1AA] rounded py-3 pl-7 pr-10 appearance-none" id="selectLandingPage" name="Landing Page" onchange="location = this.value;">
                            <option value="https://clientstaging.space/lp-fb-sm/">Standup MRI</option>
                            <option value="https://clientstaging.space/lp-fb-bc/">Breast Cancer</option>
                            <option value="3T MRI">3T MRI</option>
                            <option value="https://clientstaging.space/lp-fb-ic/">Full Body Imaging</option>
                        </select>
                        <span class="absolute top-0 right-5 h-full flex items-center pointer-events-none"><img class="w-4 h-4" src="<?php echo get_theme_file_uri("/assets/images/standup-mri/png/arrow-down.png") ?>" alt="arrow-down"></span>
                    </li>
                    <li class="">
                        <a class="yellow-button call-button flex bg-blue-600 hover:bg-blue-700 text-white duration-300 py-3 md:px-10 sm:px-5 px-2 rounded items-center gap-2 font-semibold" href="tel:(866) 561-2605">
                            <span class="xs:block hidden"><img src="<?php echo get_theme_file_uri("/assets/images/standup-mri/png/tel.png") ?>" alt="tel-icon"></span> (866) 561-2605
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php } elseif(is_page("x-ray")){ ?>


    <!-- X-Ray -->
    <div id="schedule-modal">
        <?php
 echo do_shortcode('[gravityform id="21" title="true" description="false" ajax="true"]');
        ?>
    </div>
    <header class=" left-0 top-0 w-full z-50">
        <nav class="">
            <div class="container py-5 flex justify-between">
                <ul class="flex gap-10 items-center">
                    <li><a class="flex items-center gap-2 font-semibold" href="#"><img class="logo-img max-w-[120px] xs:max-w-[220px]" src="<?php echo get_theme_file_uri("/assets/images/x-ray/png/logo.png") ?>" alt="logo"></a></li>
                    <li class="lg:block hidden switchElement"><a class="flex items-center gap-2" href="#"> <span><img src="<?php echo get_theme_file_uri("/assets/images/x-ray/png/map-icon.png") ?>" alt="map-icon"></span>Costa Mesa, Bellflower, San Diego, Riverside</a></li>
                </ul>
                <ul class="flex md:gap-7 items-center">
                    <li class="select-icon relative hidden">
                        <select class="border border-[#A1A1AA] rounded py-3 pl-7 pr-10 appearance-none" id="selectLandingPage" name="Landing Page" onchange="location = this.value;">
                            <option value="https://clientstaging.space/lp-fb-ic/">Full Body Imaging</option>
                            <option value="https://clientstaging.space/lp-fb-sm/">Standup MRI</option>
                            <option value="https://clientstaging.space/lp-fb-bc/">Breast Cancer</option>
                            <option value="3T MRI">3T MRI</option>
                        </select>
                        <span class="absolute top-0 right-5 h-full flex items-center pointer-events-none"><img class="w-4 h-4" src="<?php echo get_theme_file_uri("/assets/images/x-ray/png/arrow-down.png") ?>" alt="arrow-down"></span>
                    </li>
                    <li class="">
                        <a class="yellow-button call-button flex bg-blue-600 hover:bg-blue-400 duration-300 py-3 md:px-10 sm:px-5 px-2 rounded items-center gap-2 font-semibold text-white" href="tel:(866) 561-2605">
                            <span class="xs:block hidden"><img src="<?php echo get_theme_file_uri("/assets/images/x-ray/png/tel.png") ?>" alt="tel-icon"></span> (866) 561-2605
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php } elseif(is_page("x-ray-cash")){ ?>

      
    <!-- X-Ray Cash -->
    <div id="schedule-modal">
        <?php
echo do_shortcode('[gravityform id="20" title="true" description="false" ajax="true"]');
        ?>
    </div>
    <header class=" left-0 top-0 w-full z-50">
        <nav class="">
            <div class="container py-5 flex justify-between">
                <ul class="flex gap-10 items-center">
                    <li><a class="flex items-center gap-2 font-semibold" href="#"><img class="logo-img lg:w-48 w-28" src="<?php echo get_theme_file_uri("/assets/images/x-ray-cash/png/logo.png") ?>" alt="logo"></a></li>
                    <li class="lg:block hidden switchElement"><a class="flex items-center gap-2" href="#"> <span><img src="<?php echo get_theme_file_uri("/assets/images/x-ray-cash/png/map-icon.png") ?>" alt="map-icon"></span>Costa Mesa, Bellflower, San Diego, Riverside</a></li>
                </ul>
                <ul class="flex md:gap-7 items-center">
                    <li class="select-icon relative hidden">
                        <select class="border border-[#A1A1AA] rounded py-3 pl-7 pr-10 appearance-none" id="selectLandingPage" name="Landing Page" onchange="location = this.value;">
                            <option value="https://clientstaging.space/lp-fb-ic/">Full Body Imaging</option>
                            <option value="https://clientstaging.space/lp-fb-sm/">Standup MRI</option>
                            <option value="https://clientstaging.space/lp-fb-bc/">Breast Cancer</option>
                            <option value="3T MRI">3T MRI</option>
                        </select>
                        <span class="absolute top-0 right-5 h-full flex items-center pointer-events-none"><img class="w-4 h-4" src="<?php echo get_theme_file_uri("/assets/images/x-ray-cash/png/arrow-down.png") ?>" alt="arrow-down"></span>
                    </li>
                    <li class="">
                        <a class="yellow-button call-button flex bg-blue-600 hover:bg-blue-400 duration-300 py-3 md:px-10 sm:px-5 px-2 rounded items-center gap-2 font-semibold text-white" href="tel:(866) 561-2605">
                            <span><img src="<?php echo get_theme_file_uri("/assets/images/x-ray-cash/png/tel.png") ?>" alt="tel-icon"></span> (866) 561-2605
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php } elseif(is_page("claustrophobia")){ ?>
      <header class="absolute top-0 left-0 w-full z-[99]">
        <nav class="container mx-auto flex items-center justify-center md:justify-between gap-5 pt-10 pb-4">
          <h1>
            <a href="<?php echo home_url(); ?>">
              <img class="logo" src="<?php echo get_theme_file_uri('assets/images/claustrophobia/svg/logo.svg') ?>" alt="Logo" loading="lazy">
            </a>
          </h1>
        </nav>
      </header>
      <?php } elseif(is_page("costa-mesa")){ ?>
        <!-- Modal -->
        <div id="myModal" class="modal">
      <div class="modal-content">
        <button class="close-btn"></button>
        <div class="modal-body">
          <div class="left">
            <div class="modal-swiper-div">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="swiper-zoom-container">
                      <img src="<?php echo get_theme_file_uri("assets/images/costa-mesa/brain.jpg"); ?>" />
                      <div class="body">
                        <h4>
                          State of the art facility in all our ExpertMRI centers
                        </h4>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-zoom-container">
                      <img src="<?php echo get_theme_file_uri("assets/images/costa-mesa/slide2.jpg"); ?>" />
                      <div class="body">
                        <h4>
                          State of the art facility in all our ExpertMRI centers 2
                        </h4>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-zoom-container">
                      <img src="<?php echo get_theme_file_uri("assets/images/costa-mesa/slide3.jpg"); ?>" />
                      <div class="body">
                        <h4>
                          State of the art facility in all our ExpertMRI centers 3
                        </h4>
                      </div>
                    </div>
                  </div>                 
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
          <div class="right">
             <?php 
     echo do_shortcode('[gravityform id="23" title="true" description="false" ajax="true"]');
             ?>
          </div>
        </div>
      </div>
    </div>

<!-- Header -->
    
    <header>
      <nav class="navbar">
        <div class="container">
          <div class="col-6 left">
            <img src="<?php echo get_theme_file_uri("assets/images/costa-mesa/logoLight.webp"); ?>" alt="logoLight" />
          </div>
          <div class="col-6 right">
            <a href="https://maps.app.goo.gl/KynXVmZBamDHZBPv5" rel="nofollow" class="location">
              <img
                src="<?php echo get_theme_file_uri("assets/images/costa-mesa/location.svg"); ?>"
                class="icon"
                alt="location"
              />
              <p class="para">Expertmri, Costa Mesa</p>
            </a>
            <div class="number">
              <p class="para">Request An Appointment</p>
              <a class="callBtn underlineAnim" href="callto:(877) 674-8888"
                >(877) 674-8888</a
              >
            </div>
          </div>
        </div>
      </nav>
    </header>
    <?php } else{ ?>
      <div id="schedule-modal">
        <?php
       echo do_shortcode('[gravityform id="1" title="true" description="false" ajax="true"]');
        ?>
    </div>
    <header class=" left-0 top-0 w-full z-50">
        <nav>
            <div class="container py-5 flex justify-between">
                <ul class="flex gap-10 items-center">
                    <li><a class="flex items-center gap-2 font-semibold" href="#"><img class="logo-img sm:max-w-[220px] max-w-[120px]" src="<?php echo get_theme_file_uri("/assets/images/belflower/png/logo.png") ?>" alt="logo"></a></li>
                    <li class="lg:block hidden switchElement"><a class="flex items-center gap-2" href="#"> <span><img src="<?php echo get_theme_file_uri("/assets/images/belflower/png/map-icon.png") ?>" alt="map-icon"></span> Culver City, USA</a></li>
                </ul>
                <ul class="flex md:gap-7 items-center">
                    <li class="select-icon relative hidden">
                        <select class="border border-[#A1A1AA] rounded py-3 pl-7 pr-10 appearance-none" id="selectLandingPage" name="Landing Page" onchange="location = this.value;">
                            <option value="https://clientstaging.space/lp-fb-ic/">Full Body Imaging</option>
                            <option value="https://clientstaging.space/lp-fb-sm/">Standup MRI</option>
                            <option value="https://clientstaging.space/lp-fb-bc/">Breast Cancer</option>
                            <option value="3T MRI">3T MRI</option>
                        </select>
                        <span class="absolute top-0 right-5 h-full flex items-center pointer-events-none"><img class="w-4 h-4" src="<?php echo get_theme_file_uri("/assets/images/belflower/png/arrow-down.png") ?>" alt="arrow-down"></span>
                    </li>
                    <li class="">
                        <a class="yellow-button call-button flex bg-yellow-300 hover:bg-amber-100 duration-300 py-3 md:px-10 sm:px-5 px-2 rounded items-center gap-2 font-semibold" href="tel:(866) 561-2605">
                            <span class="xs:block hidden"><img src="<?php echo get_theme_file_uri("/assets/images/belflower/png/tel.png") ?>" alt="tel-icon"></span> (866) 561-2605
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <?php }; ?>