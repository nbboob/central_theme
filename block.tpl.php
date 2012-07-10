<?php
// $Id: block.tpl.php,v 1.2 2007/08/07 08:39:36 goba Exp $
?>
<div class="<?php print "block block-$block->module" ?>" id="<?php print "block-$block->module-$block->delta"; ?>">

<div class="content">
<?php if ($block->subject&& $block->region!="footer"):?>
<div class="head">
<h1><span class="left"><strong><?php print $block->subject ?></strong></span>
</h1></div>
<?php endif ?>
<div class="listsVisible">
 <div><?php print $content ?></div>
</div>

</div>
</div>

