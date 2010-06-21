
  <div class="block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
 <?php if($block->region != "header") {?><div class="block-t"><div class="block-b"><div class="block-l"><div class="block-r"><div class="block-tl"><div class="block-tr"><div class="block-bl"><div class="block-br"><?php }?>

    <h2 class="title"><?php print $block->subject; ?></h2>
    <div class="content"><?php print $block->content; ?></div>

 <?php if($block->region != "header") {?></div></div></div></div></div></div></div></div> <?php }?>



 </div>

