<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package edima
 */

get_header(); ?>

<div class="page-nav page-nav--green page-nav--center">
    <div class="page-nav__content">
        <ul class="page-nav__menu">
            <li class="page-nav__menu__mobile-toggle">More News</li>
            <li><a href="#">All News</a></li>
            <li><a href="#">Press Releases</a></li>
            <li><a href="#">Statements</a></li>
            <li><a href="#">Letters</a></li>
        </ul>
    </div>
</div>

<div class="news-story">
    <div class="news-story__hero">
        <div class="news-story__hero__content">
            <div class="news-story__breadcrumbs breadcrumbs">
                Breadcrumbs > Trail > Here
            </div>
            <h5 class="news-story__category-headline text--upper"><a href="#">News Category</a></h5>
            <h1 class="news-story__headline">News Story Headline Lorem Ipsum Dolor Sit Amet Lorem Ipsum </h1>
            <div class="news-story__meta">By James Kontargyris | 16 June 2017</div>
        </div>
    </div>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!--<div class="news-story__categories sidebar-content">
                <aside>
                    <ul class="vertical-menu vertical-menu__small vertical-menu--upper">
                        <li class="vertical-menu__item"><a class="vertical-menu__link" href="#">All News</a></li>
                        <li class="vertical-menu__item"><a class="vertical-menu__link" href="#">News Category 1</a></li>
                        <li class="vertical-menu__item vertical-menu__item--active"><a class="vertical-menu__link" href="#">News Category 2</a></li>
                        <li class="vertical-menu__item"><a class="vertical-menu__link" href="#">News Category 3</a></li>
                        <li class="vertical-menu__item"><a class="vertical-menu__link" href="#">News Category 4</a></li>
                        <li class="vertical-menu__item"><a class="vertical-menu__link" href="#">News Category 5</a></li>
                    </ul>
                </aside>
            </div>-->

            <div class="news-story__content">
                <p class="news-story__lead-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis consequuntur corporis culpa doloremque labore molestiae mollitia nam, natus nesciunt odio omnis optio, reiciendis voluptas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ex nemo optio porro provident, tempora unde! Architecto beatae consequatur dolorum ea ex exercitationem fugiat in, ipsa ipsam molestias necessitatibus nesciunt nobis nulla numquam qui quo recusandae reprehenderit sunt tenetur totam unde voluptates voluptatibus. <a href="">Culpa fuga ipsum modi quidem quis quos, sed!</a> Aliquam animi at cumque doloribus est fugit modi, repellat repudiandae voluptate? Accusamus aliquid autem consequuntur culpa cum cumque dolorum enim et labore, minus molestiae natus, officiis qui ratione reprehenderit sit suscipit voluptatem voluptatibus? Consectetur dolore explicabo harum iste iure iusto mollitia, nobis obcaecati quidem quisquam recusandae tempore totam veniam.</p>
                <p>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tech.jpg" alt="iMac">
                        <figcaption>This is the image caption</figcaption>
                    </figure>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ex nemo optio porro provident, tempora unde! Architecto beatae consequatur dolorum ea ex exercitationem fugiat in, ipsa ipsam molestias necessitatibus nesciunt nobis nulla numquam qui quo recusandae reprehenderit sunt tenetur totam unde voluptates voluptatibus. Culpa fuga ipsum modi quidem quis quos, sed! Aliquam animi at cumque doloribus est fugit modi, repellat repudiandae voluptate? Accusamus aliquid autem consequuntur culpa cum cumque dolorum enim et labore, minus molestiae natus, officiis qui ratione reprehenderit sit suscipit voluptatem voluptatibus? Consectetur dolore explicabo harum iste iure iusto mollitia, nobis obcaecati quidem quisquam recusandae tempore totam veniam.</p>
                <blockquote class="blockquote--grey pull--right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias dolorum ducimus enim error esse fugiat harum ipsam itaque iure molestiae possimus, reprehenderit tenetur, totam veniam veritatis voluptatem voluptatibus! Consectetur?</p>
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ex nemo optio porro provident, tempora unde! Architecto beatae consequatur dolorum ea ex exercitationem fugiat in, ipsa ipsam molestias necessitatibus nesciunt nobis nulla numquam qui quo recusandae reprehenderit sunt tenetur totam unde voluptates voluptatibus. Culpa fuga ipsum modi quidem quis quos, sed! Aliquam animi at cumque doloribus est fugit modi, repellat repudiandae voluptate? Accusamus aliquid autem consequuntur culpa cum cumque dolorum enim et labore, minus molestiae natus, officiis qui ratione reprehenderit sit suscipit voluptatem voluptatibus? Consectetur dolore explicabo harum iste iure iusto mollitia, nobis obcaecati quidem quisquam recusandae tempore totam veniam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ex nemo optio porro provident, tempora unde! Architecto beatae consequatur dolorum ea ex exercitationem fugiat in, ipsa ipsam molestias necessitatibus nesciunt nobis nulla numquam qui quo recusandae reprehenderit sunt tenetur totam unde voluptates voluptatibus. Culpa fuga ipsum modi quidem quis quos, sed! Aliquam animi at cumque doloribus est fugit modi, repellat repudiandae voluptate? Accusamus aliquid autem consequuntur culpa cum cumque dolorum enim et labore, minus molestiae natus, officiis qui ratione reprehenderit sit suscipit voluptatem voluptatibus? Consectetur dolore explicabo harum iste iure iusto mollitia, nobis obcaecati quidem quisquam recusandae tempore totam veniam.</p>
                <blockquote class="blockquote--blue pull--left">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias dolorum ducimus enim error esse fugiat harum ipsam itaque iure molestiae possimus.</p>
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ex nemo optio porro provident, tempora unde! Architecto beatae consequatur dolorum ea ex exercitationem fugiat in, ipsa ipsam molestias necessitatibus nesciunt nobis nulla numquam qui quo recusandae reprehenderit sunt tenetur totam unde voluptates voluptatibus. Culpa fuga ipsum modi quidem quis quos, sed! Aliquam animi at cumque doloribus est fugit modi, repellat repudiandae voluptate? Accusamus aliquid autem consequuntur culpa cum cumque dolorum enim et labore, minus molestiae natus, officiis qui ratione reprehenderit sit suscipit voluptatem voluptatibus? Consectetur dolore explicabo harum iste iure iusto mollitia, nobis obcaecati quidem quisquam recusandae tempore totam veniam.</p>

                <div class="news-story__tags">
                    <span class="news-story__tag-icon"><?php echo file_get_contents(get_template_directory_uri() . '/img/icons/tag.svg'); ?></span> <strong>Tags:</strong> <a href="#" class="news-story__tag">Tag1</a> <a href="#" class="news-story__tag">Tag2</a> <a href="#" class="news-story__tag">Tag3</a>
                </div> <!-- / news-story__tags -->


            </div>

            <!--<div class="news-story__sidebar sidebar-content">
                <aside>
                    <h5 class="text--upper">Latest News</h5>
                    <div class="news-extract__group">
                        <div class="news-extract news-extract--sidebar">
                            <div class="news-extract__image"><a href="#"><img src="http://placehold.it/800x200" alt="News Story Image"></a></div>
                            <div class="news-extract__details">
                                <div class="news-extract__headline"><a href="#">News Story Headline Lorem Ipsum Dolor Sit Amet Lorem Ipsum</a></div>
                                <div class="news-extract__meta">16 June 2017</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button button--primary">More News</a>
                </aside>
                <aside>
                    <h5 class="text--upper">Tweets <a href="#" class="header-link">Follow Us</a></h5>
                    <div class="tweet">
                        How 2 improve data access/transfer? #DA17EU jury is out: Strong preference 4 soft approach (guidance) as opposed to default contract rules
                        <div class="tweet__meta">54 minutes ago</div>
                    </div>
                    <div class="tweet">
                        How 2 improve data access/transfer? #DA17EU jury is out: Strong preference 4 soft approach (guidance) as opposed to default contract rules
                        <div class="tweet__meta">54 minutes ago</div>
                    </div>
                    <div class="tweet">
                        How 2 improve data access/transfer? #DA17EU jury is out: Strong preference 4 soft approach (guidance) as opposed to default contract rules
                        <div class="tweet__meta">54 minutes ago</div>
                    </div>
                    <a href="#" class="button button--primary">More Tweets</a>
                </aside>
            </div>-->

        </main><!-- #main -->
    </div><!-- #primary -->

    <div class="stripe stripe--light-light-grey stripe--with-line">
        <div class="content-area">
            <div class="news-footer__news">
                <h5 class="text--upper"><i class="fa fa-newspaper-o"></i> More News</h5>
                <div class="news-extract news-extract--horizontal">
                    <a href="#">
                        <img src="http://lorempixel.com/800/600" class="news-extract__image hide--s" alt="Headline" title="Headline">
                        <span class="news-extract__headline">News Story Headline Lorem Ipsum Dolor</span>
                    </a>
                    <div class="news-extract__meta text--upper">16 June 2017 in <a href="#">Press Releases</a></div>
                    <div class="news-extract__extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores nihil nulla numquam provident ullam! A aliquam amet dignissimos exercitationem id iste magnam odit qui, recusandae repellat repudiandae sed similique vel. <a href="#">Read more...</a></div>
                </div>
                <div class="news-extract news-extract--horizontal">
                    <a href="#">
                        <img src="http://lorempixel.com/800/600" class="news-extract__image hide--s" alt="Headline" title="Headline">
                        <span class="news-extract__headline">News Story Headline Lorem Ipsum Dolor</span>
                    </a>
                    <div class="news-extract__meta text--upper">16 June 2017 in <a href="#">Press Releases</a></div>
                    <div class="news-extract__extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores nihil nulla numquam provident ullam! A aliquam amet dignissimos exercitationem id iste magnam odit qui, recusandae repellat repudiandae sed similique vel. <a href="#">Read more...</a></div>
                </div>
                <div class="news-extract news-extract--horizontal">
                    <a href="#">
                        <img src="http://lorempixel.com/800/600" class="news-extract__image hide--s" alt="Headline" title="Headline">
                        <span class="news-extract__headline">News Story Headline Lorem Ipsum Dolor</span>
                    </a>
                    <div class="news-extract__meta text--upper">16 June 2017 in <a href="#">Press Releases</a></div>
                    <div class="news-extract__extract">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores nihil nulla numquam provident ullam! A aliquam amet dignissimos exercitationem id iste magnam odit qui, recusandae repellat repudiandae sed similique vel. <a href="#">Read more...</a></div>
                </div>
                <a href="#" class="button button--primary">All News</a>
            </div> <!-- / news-footer__news -->

            <hr class="hide--xl">

            <div class="news-footer__tweets">
                <h5 class="text--upper"><i class="fa fa-twitter"></i> @EDIMA_EU <a href="#" class="header-link">Follow Us</a></h5>
                <div class="tweet__group tweet__group--fade">
                    <div class="tweet">
                        How 2 improve data access/transfer? <a href="#">#DA17EU</a> jury is out: Strong preference 4 soft approach (guidance) as opposed to default contract rules
                        <div class="tweet__meta">54 minutes ago <div class="tweet__buttons"><a href="#"><i class="fa fa-reply"></i></a> <a href="#"><i class="fa fa-retweet"></i></a> <a href="#"><i class="fa fa-heart"></i></a></div></div>
                    </div>
                    <div class="tweet">
                        How 2 improve data access/transfer? <a href="#">#DA17EU</a> jury is out: Strong preference 4 soft approach (guidance) as opposed to default contract rules
                        <div class="tweet__meta">54 minutes ago <div class="tweet__buttons"><a href="#"><i class="fa fa-reply"></i></a> <a href="#"><i class="fa fa-retweet"></i></a> <a href="#"><i class="fa fa-heart"></i></a></div></div>
                    </div>
                    <div class="tweet">
                        How 2 improve data access/transfer? <a href="#">#DA17EU</a> jury is out: Strong preference 4 soft approach (guidance) as opposed to default contract rules
                        <div class="tweet__meta">54 minutes ago <div class="tweet__buttons"><a href="#"><i class="fa fa-reply"></i></a> <a href="#"><i class="fa fa-retweet"></i></a> <a href="#"><i class="fa fa-heart"></i></a></div></div>
                    </div>
                    <div class="tweet tweet--faded">
                        &nbsp;
                    </div>
                </div>
                <a href="#" class="button button--primary">More Tweets</a>
            </div> <!-- / news-footer__tweets -->
        </div>
    </div>
</div>

<?php
get_sidebar();
get_footer();
