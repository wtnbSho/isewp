<footer id="footer">
  <div class="wrap1100">
    <div class="cmn_contact">
      <h2><span class="ff_english">CONTACT</span><span class="ja fontSemiBold">お問い合わせ</span></h2>
      <p class="text">お客様に最適な製品を<br class="sp">ご提案します。</p>
      <ul class="flex_betweenr">
        <li><a href="tel:058-265-2381" class="flex_center tel"><span class="num ff_english">058-265-2381</span><span class="open">受付時間 9:00～17:00（土日祝除く）</span></a></li>
        <li><a href="<?php echo home_url(); ?>/contact/" class="flex_center contact">お問い合わせフォーム</a></li>
      </ul>
    </div>
    <div class="footer_info_box flex_between">
      <div class="info_list">
        <p class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_logo.svg"></p>
        <p class="addr_wrap"><span class="zip">〒500-8848</span><span class="addr">岐阜県岐阜市神明町2丁目14番地</span></p>
        <p class="num_wrap"><span class="tel">TEL 058-265-2381</span><span class="fax">FAX 058-266-9684</span></p>
      </div>
      <div class="nav_list">
        <dl>
          <dt class="ff_english">CORPORATE</dt>
          <dd>
            <ul class="com_list">
              <li><a href="<?php echo home_url(); ?>/about/">岐阜ベルトについて</a></li>
              <li><a href="<?php echo home_url(); ?>/company/greeting/">ごあいさつ</a></li>
              <li><a href="<?php echo home_url(); ?>/company/overview/">会社概要</a></li>
              <li><a href="<?php echo home_url(); ?>/company/access/">拠点案内</a></li>
              <li><a href="<?php echo home_url(); ?>/works/">実績紹介</a></li>
              <li><a href="<?php echo home_url(); ?>/sdgs/">品質と環境</a></li>
              <li><a href="<?php echo home_url(); ?>/business/product/">各種工業用製品</a></li>
              <li><a href="<?php echo home_url(); ?>/business/conveyor/">コンベヤープラント<br class="sp">関連製品</a></li>
              <li><a href="<?php echo home_url(); ?>/business/facility/">生産設備関連</a></li>
              <li><a href="">資料ダウンロード</a></li>
              <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt class="ff_english">RECRUIT</dt>
          <dd>
            <ul class="recruit_list">
              <li><a href="<?php echo home_url(); ?>/recruit/interview/job01/">技術営業</a></li>
              <li><a href="<?php echo home_url(); ?>/recruit/interview/job02/">機械設計</a></li>
              <li><a href="<?php echo home_url(); ?>/recruit/interview/job03/">設備エンジニア</a></li>
              <li><a href="<?php echo home_url(); ?>/recruit/worklife/">働きやすさ</a></li>
              <li><a href="<?php echo home_url(); ?>/recruit/guide/">募集要項</a></li>
              <li><a href="<?php echo home_url(); ?>/contact#items-2">エントリー</a></li>
            </ul>
          </dd>
        </dl>
      </div>
      <div class="inr_bottom flex_between align_items_center">
        <div class="link_list flex_start"> <a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a> </div>
        <div class="copyright ff_english"><small>Copyright&copy; Gifu Belt CO.,LTD. All Rights Reserved.</small></div>
      </div>
    </div>
  </div>
</footer>

<!-- <div class="pagetop"></div> -->

<!-- ▽SP下fixed -->
<div class="sp">
  <ul class="sp_fixed_bottom">
    <?php if(is_ancestors_slug() == 'recruit'): ?>
    <li><a href="<?php echo home_url(); ?>/recruit/guide/" class="bg_main color_white flex_center align_items_center ff_english">GUIDE</a></li>
    <li><a href="<?php echo home_url(); ?>/contact#items-2" class="bg_blue color_white flex_center align_items_center ff_english">ENTRY</a></li>
    <?php else: ?>
    <li><a href="<?php echo home_url(); ?>/contact/" class="bg_main color_white flex_center align_items_center ff_english">CONTACT</a></li>
    <li><a href="<?php echo home_url(); ?>/recruit/" class="bg_blue color_white flex_center align_items_center ff_english">RECRUIT</a></li>
    <?php endif; ?>
  </ul>
</div>
<!-- △SP下fixed -->

<!-- ▽ドロワー -->
<div id="sp_menu_btn" class="bg_main"><span class="hamburger-icon"></span></div>
<div id="drawer" class="bg_main">
  <div class="logo"> <a href="<?php echo home_url(); ?><?php if(is_ancestors_slug() == 'recruit') echo '/recruit' ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header_logo_white.svg" alt="岐阜ベルト"></a> </div>
  <ul class="btn_list color_white flex_between">
    <li><a href="<?php echo home_url(); ?>" class="flex_center align_items_center direction_column"><span class="ff_english">COMPANY</span><span class="ja">会社サイト</span></a></li>
    <li><a href="<?php echo home_url(); ?>/recruit/" class="flex_center align_items_center direction_column"><span class="ff_english">RECRUIT</span><span class="ja">採用サイト</span></a></li>
  </ul>
  <div class="com">
    <ul class="nav_list color_white">
      <li><a href="<?php echo home_url(); ?>/about/">岐阜ベルトについて<span></span></a></li>
      <li class="parent"><a>会社案内<span></span></a>
        <ul>
          <li><a href="<?php echo home_url(); ?>/company/greeting/">ごあいさつ</a></li>
          <li><a href="<?php echo home_url(); ?>/company/overview/">会社概要・沿革</a></li>
          <li><a href="<?php echo home_url(); ?>/company/access/">拠点</a></li>
        </ul>
      </li>
      <li class="parent"><a>事業案内<span></span></a>
        <ul>
          <li><a href="<?php echo home_url(); ?>/business/product/">各種工業用製品</a></li>
          <li><a href="<?php echo home_url(); ?>/business/conveyor/">コンベヤープラント関連製品</a></li>
          <li><a href="<?php echo home_url(); ?>/business/facility/">生産設備関連</a></li>
        </ul>
      </li>
      <li><a href="<?php echo home_url(); ?>/works/">実績紹介<span></span></a></li>
      <li><a href="<?php echo home_url(); ?>/sdgs/">環境活動<span></span></a></li>
    </ul>
    <ul class="contact_list">
      <li><a href="<?php echo home_url(); ?>/contact/"><span class="ff_english">CONTACT</span><span class="ja">お問い合わせ</span></a></li>
    </ul>
  </div>
  <div class="recruit">
    <ul class="nav_list color_white">
      <li class="parent"><a>社員インタビュー<span></span></a>
        <ul>
          <li><a href="<?php echo home_url(); ?>/interview/interview01/">営業のインタビュー</a></li>
          <li><a href="<?php echo home_url(); ?>/interview/interview02/">機械設計のインタビュー</a></li>
          <li><a href="<?php echo home_url(); ?>/interview/interview03/">営業事務のインタビュー</a></li>
        </ul>
      </li>
      <li><a href="<?php echo home_url(); ?>">働きやすさ<span></span></a></li>
    </ul>
    <ul class="contact_list">
      <li><a href="<?php echo home_url(); ?>/guide/"><span class="ff_english">GUIDE</span><span class="ja">募集要項</span></a></li>
      <li><a href="<?php echo home_url(); ?>/contact#items-2"><span class="ff_english">ENTRY</span><span class="ja">エントリー</span></a></li>
    </ul>
  </div>
</div>
<!-- / #drawer -->
<!-- △ドロワー -->