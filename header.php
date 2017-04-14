<?php
/*
 # ===========================================
 # header.php
 # 
 # The theme header.
 # ===========================================
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    

    
    
    <!--Fav icon and Apple touch icon-->
    <?php
    
    $favicon = IMAGES . '/icons/favicon.ico';
    $touchicon = IMAGES . '/icons/apple-touch-icon.png';
    
    ?>
    
    <link rel="icon" href="<?php echo $favicon; ?>" />
    <link rel="apple-touch-icon" sizes="152x152"  href="<?php echo $touchicon; ?>" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                
                <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
            </div>

           
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php 
            
                wp_nav_menu(array(
                    'container_class' => 'main-nav-wrapper',
                    'menu_class' => ' slimmenu ',
                    'container_id' => 'main-menu-1',
                    'theme_location' => 'main-menu'
                ));
            
            ?>
            <!-- /.navbar-collapse -->
            
            
        </div>
        <!-- /.container -->
    </nav>
