			<!-- footer -->
			<footer class="footer" role="contentinfo">
			
			<form action="demo_form.asp" method="get">
				<h3>Ready to <i>Restore the Feeling of New?&#0153;</i></h3>
			  First name: <input type="text" name="fname"><br>
			  Last name: <input type="text" name="lname"><br>
			  <input type="submit" value="Submit">
			</form>
			
			<div class="trueFooter">
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->
			</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /container-fluid -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
