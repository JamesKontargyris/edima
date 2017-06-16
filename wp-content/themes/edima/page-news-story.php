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

<div class="page-nav">
    <div class="page-nav__content">
        Breadcrumbs
    </div>
</div>

<div class="news-story">
    <div class="news-story__hero">
        <div class="news-story__hero__content">
            <h5 class="news-story__category-headline text--upper"><a href="#">News Category</a></h5>
            <h1 class="news-story__headline">News Story Headline Lorem Ipsum Dolor Sit Amet Lorem Ipsum </h1>
            <div class="news-story__meta">By James Kontargyris | 16 June 2017</div>
        </div>
    </div>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="news-story__content">
                <p class="news-story__lead-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis consequuntur corporis culpa doloremque labore molestiae mollitia nam, natus nesciunt odio omnis optio, reiciendis voluptas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ex nemo optio porro provident, tempora unde! Architecto beatae consequatur dolorum ea ex exercitationem fugiat in, ipsa ipsam molestias necessitatibus nesciunt nobis nulla numquam qui quo recusandae reprehenderit sunt tenetur totam unde voluptates voluptatibus.
                    <a href="">Culpa fuga ipsum modi quidem quis quos, sed!</a> Aliquam animi at cumque doloribus est fugit modi, repellat repudiandae voluptate? Accusamus aliquid autem consequuntur culpa cum cumque dolorum enim et labore, minus molestiae natus, officiis qui ratione reprehenderit sit suscipit voluptatem voluptatibus? Consectetur dolore explicabo harum iste iure iusto mollitia, nobis obcaecati quidem quisquam recusandae tempore totam veniam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ex nemo optio porro provident, tempora unde! Architecto beatae consequatur dolorum ea ex exercitationem fugiat in, ipsa ipsam molestias necessitatibus nesciunt nobis nulla numquam qui quo recusandae reprehenderit sunt tenetur totam unde voluptates voluptatibus. Culpa fuga ipsum modi quidem quis quos, sed! Aliquam animi at cumque doloribus est fugit modi, repellat repudiandae voluptate? Accusamus aliquid autem consequuntur culpa cum cumque dolorum enim et labore, minus molestiae natus, officiis qui ratione reprehenderit sit suscipit voluptatem voluptatibus? Consectetur dolore explicabo harum iste iure iusto mollitia, nobis obcaecati quidem quisquam recusandae tempore totam veniam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ex nemo optio porro provident, tempora unde! Architecto beatae consequatur dolorum ea ex exercitationem fugiat in, ipsa ipsam molestias necessitatibus nesciunt nobis nulla numquam qui quo recusandae reprehenderit sunt tenetur totam unde voluptates voluptatibus. Culpa fuga ipsum modi quidem quis quos, sed! Aliquam animi at cumque doloribus est fugit modi, repellat repudiandae voluptate? Accusamus aliquid autem consequuntur culpa cum cumque dolorum enim et labore, minus molestiae natus, officiis qui ratione reprehenderit sit suscipit voluptatem voluptatibus? Consectetur dolore explicabo harum iste iure iusto mollitia, nobis obcaecati quidem quisquam recusandae tempore totam veniam.</p>

                <div class="news-story__tags">
                    <span class="news-story__tag-icon"><?php echo file_get_contents(get_template_directory_uri() . '/img/icons/tag.svg'); ?></span> <strong>Tags:</strong> <a href="#" class="news-story__tag">Tag1</a> <a href="#" class="news-story__tag">Tag2</a> <a href="#" class="news-story__tag">Tag3</a>
                </div>
            </div>
            <div class="news-story__sidebar">
                SIDEBAR
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->
</div>

<?php
get_sidebar();
get_footer();
