<section id="<?php print $block_html_id; ?>" class="cf <?php print $classes; ?>"<?php print $attributes; ?>>
  <header class="block__header">
    <?php print render($title_prefix); ?>
    
    <h1><span class="text--blenny">3.</span> Enjoy &amp; Share</h1>
    
    <?php print render($title_suffix); ?>
  </header>

	<?php if( $content ) { ?>
  <div <?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
  <?php } ?>
</section>
