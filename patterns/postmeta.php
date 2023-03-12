<?php
/**
 * Title: Postmeta
 * Slug: derekmoran/postmeta
 * Inserter: no
*/
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|30"}}},"className":"postmeta","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group postmeta" style="padding-bottom:var(--wp--preset--spacing--30)">

    <!-- wp:group {"style":{"spacing":{"blockGap":"0.4em","margin":{"top":"0.75rem"}}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"}} -->
    <div class="wp-block-group" style="margin-top:0.75rem">

        <!-- wp:paragraph {"fontSize":"x-small"} -->
        <p class="has-x-small-font-size">Published:</p>
        <!-- /wp:paragraph -->

        <!-- wp:post-date {"fontSize":"x-small"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:post-terms {"term":"category","prefix":"Filed under: ","textColor":"general-text","fontSize":"x-small"} /-->
    <!-- wp:post-terms {"term":"post_tag","prefix":"Tags: ","textColor":"general-text","fontSize":"x-small"} /-->
</div>
<!-- /wp:group -->