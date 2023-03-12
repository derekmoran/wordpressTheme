<?php
/**
 * Title: Sidebar Widgets
 * Slug: derekmoran/sidebar-widgets
 * Inserter: no
*/
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"block-background","className":"widget stay-connected"} -->
<div class="wp-block-group widget stay-connected has-block-background-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"block-background","className":"is-style-sidebar-title","fontSize":"small"} -->
		<h2 class="is-style-sidebar-title has-block-background-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
			<?php _e( 'Connect', 'derekmoran' ); ?>
		</h2>
		<!-- /wp:heading -->

		<!-- wp:html -->
		<!-- My thanks to https://iconmonstr.com/ for the svg icons used here -->
		<!-- /wp:html -->

		<!-- wp:media-text {"align":"full","mediaType":"image","mediaWidth":15,"isStackedOnMobile":false,"imageFill":false} -->
		<div class="wp-block-media-text alignfull" style="grid-template-columns:15% auto">
			<figure class="wp-block-media-text__media">
				<a href="mailto:<?php echo get_bloginfo('admin_email'); ?>" target="_blank">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/email.svg" alt="Email"/>
				</a>
			</figure>
			<div class="wp-block-media-text__content">
				<!-- wp:paragraph {"placeholder":"Content…"} -->
				<a href="mailto:<?php echo get_bloginfo('admin_email'); ?>" target="_blank">
					<p>Email</p>
				</a>
				<!-- /wp:paragraph -->
			</div>
		</div>
		<!-- /wp:media-text -->

		<!-- wp:media-text {"align":"full","mediaType":"image","mediaWidth":15,"isStackedOnMobile":false,"imageFill":false} -->
		<div class="wp-block-media-text alignfull" style="grid-template-columns:15% auto">
			<figure class="wp-block-media-text__media">
				<a href="/feed/rss2/" target="_blank">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/rss.svg" alt="RSS Feed"/>
				</a>
			</figure>
			<div class="wp-block-media-text__content">
				<!-- wp:paragraph {"placeholder":"Content…"} -->
				<a href="/feed/rss2/" target="_blank">
					<p>RSS Feed</p>
				</a>
				<!-- /wp:paragraph -->
			</div>
		</div>
		<!-- /wp:media-text -->

		<!-- wp:media-text {"align":"full","mediaType":"image","mediaWidth":15,"isStackedOnMobile":false,"imageFill":false} -->
		<div class="wp-block-media-text alignfull" style="grid-template-columns:15% auto">
			<figure class="wp-block-media-text__media">
			<a href="https://github.com/derekmoran" target="_blank">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/github.svg" alt="Github"/>
			</a>
			</figure>
			<div class="wp-block-media-text__content">
				<!-- wp:paragraph {"placeholder":"Content…"} -->
				<a href="https://github.com/derekmoran" target="_blank">
					<p>Github</p>
				</a>
				<!-- /wp:paragraph -->
			</div>
		</div>
		<!-- /wp:media-text -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"block-background","className":"widget"} -->
<div class="wp-block-group widget has-block-background-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"block-background","className":"is-style-sidebar-title","fontSize":"small"} -->
		<h2 class="is-style-sidebar-title has-block-background-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
			<?php _e( 'Search', 'derekmoran' ); ?>
		</h2>
		<!-- /wp:heading -->

	<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"is-style-small-search"} /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"block-background","className":"widget"} -->
<div class="wp-block-group widget has-block-background-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"block-background","className":"is-style-sidebar-title","fontSize":"small"} -->
	<h2 class="is-style-sidebar-title has-block-background-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
		<?php _e( 'Recent Posts', 'derekmoran' ); ?>
	</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->

			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"1vw","bottom":"0vw"},"blockGap":"1vw"}}} -->
			<div class="wp-block-columns" style="margin-top:1vw;margin-bottom:0vw">

				<!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%">

					<!-- wp:post-featured-image {"isLink":true,"className":"is-style-default","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"}}}} /-->

				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"60%"} -->
				<div class="wp-block-column" style="flex-basis:60%">

					<!-- wp:post-title {"isLink":true,"fontSize":"x-small"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em","margin":{"top":"0.25rem"}}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"},"fontSize":"tiny"} -->
					<div class="wp-block-group has-tiny-font-size" style="margin-top:0.25rem">
						<!-- wp:post-date /-->
					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"block-background","className":"widget"} -->
<div class="wp-block-group widget has-block-background-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"block-background","className":"is-style-sidebar-title","fontSize":"small"} -->
		<h2 class="is-style-sidebar-title has-block-background-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
			<?php _e( 'Archives', 'derekmoran' ); ?>
		</h2>
		<!-- /wp:heading -->

	<!-- wp:archives /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"block-background","className":"widget"} -->
<div class="wp-block-group widget has-block-background-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"block-background","className":"is-style-sidebar-title","fontSize":"small"} -->
		<h2 class="is-style-sidebar-title has-block-background-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
			<?php _e( 'Categories', 'derekmoran' ); ?>
		</h2>
		<!-- /wp:heading -->

	<!-- wp:categories {"showHierarchy":true,"showPostCounts":true} /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"},"margin":{"bottom":"0.5rem"}}},"backgroundColor":"block-background","className":"widget"} -->
<div class="wp-block-group widget has-block-background-background-color has-background" style="margin-bottom:0.5rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">

		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"backgroundColor":"primary","textColor":"block-background","className":"is-style-sidebar-title","fontSize":"small"} -->
		<h2 class="is-style-sidebar-title has-block-background-color has-primary-background-color has-text-color has-background has-small-font-size" style="font-style:normal;font-weight:400">
			<?php _e( 'Tags', 'derekmoran' ); ?>
		</h2>
		<!-- /wp:heading -->

	<!-- wp:tag-cloud /-->

</div>
<!-- /wp:group -->
