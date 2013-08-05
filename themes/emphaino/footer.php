<?php if (!defined('FLUX_ROOT')) exit; ?>
				</article>
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
	</div><!-- #main .site-main -->


	<footer class="site-footer">


		<div class="widget-area footer-widget-area" role="complementary">
			<?php include('main/footer-area.php') ?>
		</div>

		<div id="bottom-bar">
			<?php if (Flux::config('ShowRenderDetails')): ?>
			<div class="footer-text">
				Page generated in <strong><?php echo round(microtime(true) - __START__, 5) ?></strong> second(s).
				Number of queries executed: <strong><?php echo (int)Flux::$numberOfQueries ?></strong>.
				<?php if (Flux::config('GzipCompressOutput')): ?>Gzip Compression: <strong>Enabled</strong>.<?php endif ?>
			</div>
			<?php endif ?>

			<?php if (Flux::config('ShowCopyright')): ?>
			<div class="site-info">Powered by <a href="http://github.com/HerculesWS/FluxCP/">FluxCP</a> and <a href="http://github.com/HerculesWS/Hercules/">Hercules</a>.</div>
			<?php endif ?>
		</div>
	</footer>
</div>
</body>
</html>
