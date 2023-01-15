<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php wp_head(); ?>
</head>
<body>
    <!-- header part start -->
    <header class="container-fluid slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">
 <?php 
 $x=0;
 while(have_posts()):the_post();
 $x++;
 ?>
     <div class="carousel-item <?= ($x==1)?'active':''?> "> 
         <?php the_post_thumbnail();?>
     </div>
     <?php endwhile;?>


</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Next</span>
</button>
</div>
    
    </header>
    <!-- header part end -->


    <!-- logo part start -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 text-end">
                <?php dynamic_sidebar('bdlogo');?>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- Menu part start -->
    <section class="container-fulid main_menu">
        <nav class="container navbar-expand">
            <?php wp_nav_menu(array(
                'theme_location'=>'primary_menu',
                'menu_class'=>'navbar-nav menu-1',
            ));?>
        </nav>
    </section>
    <!-- Menu part end -->
    <!-- Hero Part start -->
    <section class="container hero pt-5">
        <div class="row">
            <?php dynamic_sidebar('herotitle');?>
        </div>
        <div class="row">
            <!--  -->
            <div class="div col-sm-4">
                <div class="card h-100" style="width: 18rem;">
                <?php dynamic_sidebar('herocard1');?>
            </div>
        </div>
            <!--  -->
            <div class="div col-sm-4">
            <div class="card h-100 " style="width: 18rem;">
                <?php dynamic_sidebar('herocard2');?>
            </div>
            </div>
            <!--  -->
            <div class="div col-sm-4">
            <div class="card h-100" style="width: 18rem;">
                <?php dynamic_sidebar('herocard3');?>
            </div>
            </div>
        </div>
    </section>
    <!-- Hero Part end -->
    <!-- photo part start -->
    <section class="container text-center mt-5 photo">
        <div class="row tt">
            <div class="col-sm-5">
                <?php dynamic_sidebar('lineleft');?>
            </div>
            <div class="col-sm-2">
            <?php dynamic_sidebar('phototitle');?>
            </div>
            <div class="col-sm-5">
            <?php dynamic_sidebar('lineright');?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-3">
              <div class="card" style="width: 16rem;">
              <?php dynamic_sidebar('ptohocard1');?>
              </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
              <?php dynamic_sidebar('ptohocard2');?>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width:16rem;">
              <?php dynamic_sidebar('ptohocard3');?>
              </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
              <?php dynamic_sidebar('ptohocard4');?>
              </div>
            </div>
        </div>
    </section>
    <!-- photo part end -->
    <!-- news part start -->
    <section class="container mt-5 news">
        <div class="row text-center">
        <div class="col-sm-5">
                <?php dynamic_sidebar('lineleft');?>
            </div>
            <div class="col-sm-2">
            <?php dynamic_sidebar('newstitle');?>
            </div>
            <div class="col-sm-5">
            <?php dynamic_sidebar('lineright');?>
            </div> 
        </div>
        <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">
 <?php 
 $x=0;
 while(have_posts()):the_post();
 $x++;
 ?>
     <div class="carousel-item <?= ($x==1)?'active' : ''?> "> 
         <?php the_title();?>
          <!-- <img src="..." class="d-block w-100" alt="..."> -->
     </div>
     <?php endwhile;?>


</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Next</span>
</button>
</div>
        </div>
    </section>
    <!-- news part end -->
    <!-- footer part start -->
    <section class="container-fluid foot">
        <div class="container">
            <div class="row ft">
                <div class="col-sm-8 ft_left">
                <?php dynamic_sidebar('ftleft');?>
                </div>
                <div class="col-sm-4 ft_right">
                <?php dynamic_sidebar('ftright');?>
                </div>
            </div>
            <div class="row fb ">
                <div class="col-sm-6">
                <?php dynamic_sidebar('fbleft');?>
                </div>
                <div class="col-sm-6">
                <?php dynamic_sidebar('fbright');?>
                </div>
            </div>
        </div>
    </section>
    <!-- footer part end -->


    <?php wp_footer();?>
</body>
</html>