<?php include('includes/header.inc.php'); ?>

<div id='start'>   
        <div class="row templateCont">

            <div class="large-9 columns">
                <h1><?php get_page_title(); ?></h1>
                <p><?php get_page_content(); ?></p>
            </div>

            <div class="large-3 columns show-for-large">
                <p><?php get_component('sidebar'); ?></p>
            </div>

        </div>  
</div>
<?php include('includes/footer.inc.php'); ?>