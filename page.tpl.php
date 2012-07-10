<div id="container">

<div id="header">
    <div id="logo"><?php if ($logo) : ?>
        <a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" border="0" /></a>
      <?php endif; ?>
     </div>
     
    <ul id="globalnav">
     	<?php if ($logged_in) : ?>
     	<li class="first"><?php print t("Hello ") ?> <strong><?php print theme('username', array('account'=>$user))?></strong></li>
        		<li><a href="<?php print url('/user/logout')?>"><?php print t("Log out") ?></a></li>
     	<?php else: ?>
        <li class="noborder"><strong><a href="<?php print url('/user/register')?>"><?php print t("Join Now")?>!</a></strong></li>
        <li><a href="<?php print url('/user/login')?>"><?php print t("Sign In")?></a></li>
      <?php endif ?>
    </ul>
    
</div>

<div id="navibar">
    <div id="navigation">
     <?php print theme('links__system_main_menu', array('links' => $main_menu));?>  
    </div>
    
    <?php if ($page['header']): ?>
    <div id="header-block">
          <?php print render($page['header']); ?>
     </div>
    <?php endif; ?>
    
</div>
<div class="Container">

<div class="SL">
 	<?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>
</div><!--SR-->
<div class="SR">
 	<?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>
</div><!--SR-->

<div class="SCi">
 	<div id="main">
 	<?php print $messages; ?>
 	
 		<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
 		
 		<?php if (!isset($node)):?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php endif?>
        
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>

    </div><!-- main -->
</div><!--SCi-->

</div>
<div class="ExtraBG">
<?php if ($page['footer']): ?>
 <div class="bottomMenu">
 <?php print render($page['footer']); ?>
</div>
<?php endif; ?>
</div>

</div><!--container-->

