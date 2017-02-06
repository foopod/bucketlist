    <div id="containerDiv" class="sidebar bubble">
  <div class="container sidebar-container">
    <div class="sidebar-about">
        <img src="<?php echo get_option('profileimage'); ?>"/>
      <h1>
        <a href="<?php bloginfo( 'wpurl' );?>">
          <?php echo get_bloginfo( 'name' ); ?>
        </a>
      </h1>
      <p class="lead"><?php echo get_bloginfo( 'description' ); ?></p>
    </div>

    <nav class="sidebar-nav">
    <ul>
        <li><a class="sidebar-nav-item" href="<?php bloginfo( 'wpurl' );?>">Home</a></li>
        <?php wp_list_pages( '&title_li=' ); ?>
    </ul>    
    </nav>
      <div class="social">
     <a href="<?php echo get_option('github'); ?>"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
     <a href="<?php echo get_option('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
     <a href="<?php echo get_option('email'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
      </div>
<!--/2017/02/01/making-a-chrome-extension/-->
<!--    <p>&copy; 2017. All rights reserved.</p>-->
  </div>
</div>