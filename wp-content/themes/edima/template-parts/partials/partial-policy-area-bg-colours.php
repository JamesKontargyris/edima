<?php if(get_field('colour_scheme') == 'orange') : ?>
	linear-gradient(to bottom right, #EDAE49 30%, #dc8d50 100%),
	#EDAE49;
<?php elseif(get_field('colour_scheme') == 'green') : ?>
	linear-gradient(to bottom right, #00a0a3 30%, #047e80 100%),
	#00a0a3;
<?php elseif(get_field('colour_scheme') == 'blue') : ?>
	linear-gradient(to bottom right, #003b77 30%, #042c55 100%),
	#003b77;
<?php elseif(get_field('colour_scheme') == 'red') : ?>
	linear-gradient(to bottom right, #cd0f36 30%, #a40b2a 100%),
	#cd0f36;
<?php elseif(get_field('colour_scheme') == 'grey') : ?>
	linear-gradient(to bottom right, #9d9d9d 30%, #8a8888 100%),
	#9d9d9d;
<?php elseif(get_field('colour_scheme') == 'light-grey') : ?>
	linear-gradient(to bottom right, #ebebeb 30%, #cacaca 100%),
	#ebebeb;
<?php elseif(get_field('colour_scheme') == 'dark-grey') : ?>
	linear-gradient(to bottom right, #5a5a5a 30%, #484848 100%),
	#5a5a5a;
<?php endif; ?>