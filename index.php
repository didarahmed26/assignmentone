<?php get_header(); ?>

<body <?php body_class(); ?>>
<?php get_template_part("/template-parts/hero"); ?>

<div class="posts">

    <?php   
        $i=0;
        $j=0; 
            while ( have_posts() ) {
                the_post();
                if ($i%4==0) {
                    $j=0; 
                    get_template_part("post-style/content_col_12");
                }else{
                    if ($j==1) {
                        ?>
                        <div class="container">
                            <div class="row">
                    <?php }     
                        get_template_part("post-style/content_col_4");
                    if ($j==3) {?>
                            </div>
                        </div>
                    <?php }    
                }
                $i++;
                $j++;
            }    
    ?>
</div>

<?php get_footer(); ?>