<?php

?>

<div id ="copyright-footermenu" class="block_holder">
<div id="copyright" class="module_margin"><div class="block_holder_margin">
		<p><?php echo $this->params->get('copyright'); ?></p>
	</div></div>
<div class="clear"></div>
<?php if($footermenu_onoff == "1") : ?>
    <div id="footermenu" class="block_holder"><div class="module_margin">
        <?php echo $footermenu; ?>
        <div class="clear"></div>
    </div></div>
<?php endif; ?>

</div>
