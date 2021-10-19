<!-- page detailed page -->

<?php

    get_header();

    while(have_posts()) {
        the_post(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>DON'T FORGET TO REPLACE ME LATER.</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">

    <!-- parent page-About us- 일때는 page location 숨김 / child page 일때만 page location 표시 
     wp-admin 내 page 메뉴  url 에서 page ID 확인 가능
    ex  http://puppy-university.local/wp-admin/post.php?post=19&action=edit
    : 19 가 페이지 넘버 -->

    <?php 
      $theParent = wp_get_post_parent_id(get_the_ID()); 
      if ($theParent) { ?>
        <!-- parent page가 없을 경우 숫자 0 : false -->
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p>
            <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> 
            Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
          </p>
          <!-- php the_title : current page title
               php get_the_title :  -->
        </div>

    <?php }
    ?>

      
        
      <?php 
      //child page가 없을 경우 숫자 0 : false
      $testArray = get_pages(array(
        'child_of' => get_the_ID()
      ));

      if ($theParent or $testArray) { ?>
      <div class="page-links">
        <h2 class="page-links__title">
          <a href="<?php echo get_permalink($theParent);?>"><?php echo get_the_title($theParent); ?></a>
        </h2>
        <ul class="min-list">

          <?php
            // associate array

            if ($theParent) { //false
              $findChildrenOf = $theParent; 
            } else { //true
              $findChildrenOf = get_the_ID(); 
            }

            wp_list_pages(array(
              'title_li' => NULL,
              'child_of' => $findChildrenOf,
              'sort_column' => 'menu_order' // menu order in admin editing pages
            ));
          ?>
        </ul>
      </div>
      <?php  } ?>
        <div class="generic-content">
          <?php the_content(); ?>
        </div>
    </div>

            

    <?php 
    }

    get_footer();
?>

