<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <div class="submitted">
    <?php print $submitted; ?>
    <?php print render($content['plus1_widget'])?>
  </div>
  

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['links']);
      hide($content['plus1_widget']);
      print render($content);
    ?>
    <?php if ($signature): ?>
    <div class="user-signature clearfix">
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>
	
</div>