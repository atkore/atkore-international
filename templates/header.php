<div id="top" class="container">
  <div class="row">
   <div class="visible-xs hidden-sm hidden-md hidden-lg row">
      <div class="visible-xs hidden-sm hidden-md hidden-lg col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <a href="<?php echo home_url(); ?>/" class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="brand-logo"><img alt="<?php get_bloginfo('name'); ?>" class="img-responsive" src="<?php the_field('color_logo_horizontal', 'options'); ?>" ></div>
        </a>
      </div>
   </div>
    <?php if (is_front_page()){ ?>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    <?php } ?>
    <?php if (is_page_template('template-map.php')){ ?>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
      	<?php get_template_part('templates/content', 'logo'); ?>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
    <?php } ?>
    <div id="upper-deck" class="<?php echo roots_main_class(); ?>"> 
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <?php get_template_part('templates/menu-navbar', 'mini'); ?><div><?php do_action('icl_language_selector'); ?></div>
          <?php get_template_part('templates/menu-dropdown', 'primary'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <?php get_template_part('templates/menu-navbar', 'primary'); ?>
          <?php get_template_part('templates/menu-dropdown', 'mini'); ?>
        </div>
      </div>
    </div>
    <?php if (is_page_template('template-map.php')){ ?>
			</div>
    <?php } ?>
    <?php if (is_front_page()){ ?>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-sm-pull-9 col-md-pull-9 col-lg-pull-9"> 
      <?php get_template_part('templates/content', 'logo'); ?>
    </div>
    <?php } ?>
  </div>
</div>