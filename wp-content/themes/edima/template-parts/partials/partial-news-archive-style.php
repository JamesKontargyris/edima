<style>
	.news-archive__hero-story .stripe__content:before {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		z-index: -1;

		display: block;
		background:
                linear-gradient(to right, rgba(255,255,255, 0) 0%, rgba(255,255,255, 0.9) 60%, rgba(255,255,255, 1) 100%),
		        url(<?php the_post_thumbnail_url('hero'); ?>);
		background-size: cover;
		width: 100%;
		height: 100%;
        filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='5'%20/></filter></svg>#blur");
        -webkit-filter: blur(5px) grayscale(25%);
        -moz-filter: blur(5px) grayscale(25%);
        -o-filter: blur(5px) grayscale(25%);
	}

	@media screen and (max-width: 720px) {
        .news-archive__hero-story .stripe__content:before {
            background:white;
		}
	}
	/* Target IE */
	@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .news-archive__hero-story .stripe__content:before {
			background:white;
		}
	}

</style>

<!--More IE targetting-->
<!--[if IE]>
<style>
	.stripe__content:before {
		background:white;
	}
</style>
<![endif]-->