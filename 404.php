<?php get_header();?>
<div id="content" clas ="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
          <div class="container">
            <div class ="error-404">
    <header>
        <h1>Page not Found</h1>
        <p>unfortunately, the page you tried to reach does not exist on this site</p>
    </header>
    <div class="error">
        <p>How about doing a research</p>
        <?php get_search_form();?>
        <?php 
        the_widget(
            'WP_Widget_Recent_Posts'
            array(
                'title'=>'Latest Posts'
                number =>3
                )
            );
            ?>
            </div>
</div>
            </div>
            </main>
        </div>
    </div>
<?php get_footer();?>