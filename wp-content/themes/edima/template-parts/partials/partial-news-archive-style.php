<style>
	.stripe__content:before {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		z-index: -1;

		display: block;
		background:
                linear-gradient(to bottom, rgba(255,255,255, 0.8) 0%, rgba(0,0,0, 0) 40%, rgba(0,0,0, 0) 60%, rgba(255,255,255, 0.8) 100%),
                linear-gradient(to right, rgba(255,255,255, 0) 0%, rgba(255,255,255, 0.7) 60%),
		        url(<?php echo get_template_directory_uri(); ?>/img/tech.jpg);
		background-size: cover;
		width: 100%;
		height: 100%;

        filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");
        -webkit-filter: blur(10px);
        -o-filter: blur(10px);
	}

	@media screen and (max-width: 720px) {
		.stripe__content:before {
            background:white;
		}
	}
	/* Target IE */
	@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
		.stripe__content:before {
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