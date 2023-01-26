<header id="header">
  <div class="inner flex_between">
    <div class="logo flex_start align_items_center">
		<a href="<?php echo home_url(); ?><?php if(is_ancestors_slug() == 'recruit') echo '/recruit' ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/images/header_logo.svg" alt="岐阜ベルト">
			<img src="<?php echo get_template_directory_uri(); ?>/images/header_logo_white.svg" alt="岐阜ベルト" class="white">
		</a>
	</div>
    <div class="nav_list pc">
      <nav>
        <?php if(is_ancestors_slug() == 'recruit'): ?>
        <ul class="flex_start">
          <li> <a href="<?php echo home_url(); ?>/recruit/interview/">仕事の紹介</a> </li>
          <li> <a href="<?php echo home_url(); ?>/recruit/worklife/">働きやすさ</a> </li>
        </ul>
       <?php else: ?>
        <ul class="flex_start">
          <li> <a href="<?php echo home_url(); ?>/about/">岐阜ベルトについて</a> </li>
          <li> <a href="<?php echo home_url(); ?>/company/">会社案内</a>
            <ul class="com">
              <li><a href="<?php echo home_url(); ?>/company/greeting/" class="hover_bgarrow"><span>ごあいさつ</span></a></li>
              <li><a href="<?php echo home_url(); ?>/company/overview/" class="hover_bgarrow"><span>会社概要</span></a></li>
              <li><a href="<?php echo home_url(); ?>/company/access/" class="hover_bgarrow"><span>拠点</span></a></li>
            </ul>
          </li>
          <li> <a href="<?php echo home_url(); ?>/business/">製品案内</a>
            <ul class="works">
              <li><a href="<?php echo home_url(); ?>/business/product/" class="hover_bgarrow"><span>各種工業製品</span></a></li>
              <li><a href="<?php echo home_url(); ?>/business/conveyor/" class="hover_bgarrow"><span>コンベヤープラント</span></a></li>
              <li><a href="<?php echo home_url(); ?>/business/facility/" class="hover_bgarrow"><span>生産設備</span></a></li>
            </ul>
          </li>
          <li> <a href="<?php echo home_url(); ?>/works/">実績紹介</a> </li>
        </ul>
        <?php endif; ?>
      </nav>
		
      <div class="fixed_list flex_between">
		<?php if(is_ancestors_slug() == 'recruit'): ?>
			<a href="<?php echo home_url(); ?>/recruit/guide/" class="fixed_guide bg_blue flex_center align_items_center ff_english">GUIDE</a>
			<a href="<?php echo home_url(); ?>/contact#items-2" class="fixed_entry bg_blue flex_center align_items_center ff_english">ENTRY</a>
		<?php else: ?>
			<a href="<?php echo home_url(); ?>/contact/" class="fixed_contact bg_main flex_center align_items_center ff_english">CONTACT</a>
			<a href="<?php echo home_url(); ?>/recruit/" class="fixed_recruit bg_blue flex_center align_items_center ff_english">RECRUIT</a>
		<?php endif; ?>
	  </div>
    </div>
    <!-- / .nav_list --> 
  </div>
  <!-- / .inner --> 
</header>
