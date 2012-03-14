<?php
// $Id: page.tpl.php,v 1.1.2.1 2010/06/17 07:54:57 sociotech Exp $
?><!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link rel="stylesheet" href="http://m.berkeley.edu/assets/css.php" type="text/css" media="screen" />
  <script type="application/javascript" src="http://m.berkeley.edu/assets/js.php"></script>
</head>

<body class="<?php print $body_classes; ?>">
  <div id="page" class="page">
  <h1 id="header">
			<a href="http://m.berkeley.edu/"><img src="<?php print base_path() . path_to_theme() . "/images/ucb.png"; ?>" alt="<?php print t('UC Berkeley') ?>" width="88" height="35" /></a>
			<span><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
			<span id="login-status"><?php print ucb_mobile_user_bar() ?></span>
  </h1>
    <!-- add primary menu as a block region so mobile site can have different links -->
    <?php if ($primary_menu): ?>
    <div id="primary-menu">
      <?php print $primary_menu; ?>
    </div><!-- /primary_menu -->
    <?php endif; ?>
<div class="content-full content-padded"> 
              <?php if ($title): ?>
              <h2 class="content-first"><?php print $title; ?></h2>
              <?php endif; ?>
    <?php if (!empty($messages)): print $messages; endif; ?>
          <?php if (!empty($help)): print $help; endif; ?>
              <?php if ($content): ?>
              <div id="content-content" class="content-content">
                <?php print $content; ?>
              </div><!-- /content-content -->
              <?php endif; ?>
            </div>
      <div id="footer">
        <?php print $footer_message; ?>
        <?php if (!empty($footer)): print $footer; endif; ?>
      </div> <!-- /footer -->
  </div><!-- /page -->
  <?php print $closure; ?>
</body>
</html>
