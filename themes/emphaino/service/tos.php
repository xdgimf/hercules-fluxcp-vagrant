<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('TermsHeading')) ?></h2>
<p style="font-style: italic"><?php echo htmlspecialchars(Flux::message('TermsInfo')) ?></p>
<p class="notice"><?php echo sprintf(Flux::message('TermsInfo2'), '<tt>'.__FILE__.'</tt>') ?></p>