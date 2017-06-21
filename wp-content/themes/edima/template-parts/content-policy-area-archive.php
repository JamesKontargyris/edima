<style>
    .stripe {
       background-image:
                linear-gradient(to top, rgba(0,0,0,0.05) 0%, rgba(0,0,0,0) 1rem),
                url(<?php echo get_template_directory_uri(); ?>/img/circuits-bg-01.png);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size:cover;
    }
</style>

<div class="page-header stripe stripe--large-padding parallax">
    <div class="stripe__content stripe__content--side-padding">
        <img src="<?php echo get_template_directory_uri(); ?>/img/policy-area-temp-header-image.png" alt="" class="page-header__hero-image">
        <div class="page-header__content">
            <h1 class="page-header__title text--center text--blue">Policy Areas</h1>
            <p class="page-header__intro text--center text--page-intro text--page-intro--centered">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipisicing elit.</p>
        </div>
        <!--<div class="page-header__arrow"><i class="fa fa-caret-down"></i></div>-->
    </div>
</div>


<div class="container container--narrow">
    <div class="policy-area-tile__group">
        <div class="gallery gallery__row-of-3">

            <div class="gallery__item">
                <div class="policy-area-tile">
                    <div class="policy-area-tile__bg" style="background:linear-gradient(to bottom, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 50%), linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 30%), url(<?php echo get_template_directory_uri(); ?>/img/green-bg.jpg) center no-repeat; background-size: cover;"></div> <!--bg element for blurring on rollover-->
                    <a class="policy-area-tile__full-size-link" href="#"></a> <!--full size link-->
                    <div class="policy-area-tile__content">
                        <div class="policy-area-tile__title">Internet Policy</div>
                        <div class="policy-area-tile__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quos.</div>
                    </div>
                    <a href="#" class="button button--small policy-area-tile__link">Learn more</a>
                </div>
            </div>
            <div class="gallery__item">
                <div class="policy-area-tile">
                    <div class="policy-area-tile__bg" style="background:linear-gradient(to bottom, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 50%), linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 30%), url(<?php echo get_template_directory_uri(); ?>/img/tech.jpg) center no-repeat; background-size: cover;"></div> <!--bg element for blurring on rollover-->
                    <a class="policy-area-tile__full-size-link" href="#"></a> <!--full size link-->
                    <div class="policy-area-tile__content">
                        <div class="policy-area-tile__title">Internet Policy</div>
                        <div class="policy-area-tile__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quos.</div>
                    </div>
                    <a href="#" class="button button--small policy-area-tile__link">Learn more</a>
                </div>
            </div>
            <div class="gallery__item">
                <div class="policy-area-tile">
                    <div class="policy-area-tile__bg" style="background:linear-gradient(to bottom, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 50%), linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 30%), url(<?php echo get_template_directory_uri(); ?>/img/ux.png) center no-repeat; background-size: cover;"></div> <!--bg element for blurring on rollover-->
                    <a class="policy-area-tile__full-size-link" href="#"></a> <!--full size link-->
                    <div class="policy-area-tile__content">
                        <div class="policy-area-tile__title">Internet Policy</div>
                        <div class="policy-area-tile__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quos.</div>
                    </div>
                    <a href="#" class="button button--small policy-area-tile__link">Learn more</a>
                </div>
            </div>
            <div class="gallery__item">
                <div class="policy-area-tile">
                    <div class="policy-area-tile__bg" style="background:linear-gradient(to bottom, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 50%), linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 30%), url(<?php echo get_template_directory_uri(); ?>/img/ux.png) center no-repeat; background-size: cover;"></div> <!--bg element for blurring on rollover-->
                    <a class="policy-area-tile__full-size-link" href="#"></a> <!--full size link-->
                    <div class="policy-area-tile__content">
                        <div class="policy-area-tile__title">Internet Policy</div>
                        <div class="policy-area-tile__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quos.</div>
                    </div>
                    <a href="#" class="button button--small policy-area-tile__link">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    (function() {
        // Apply background parallax image to .page-header
    })();
</script>