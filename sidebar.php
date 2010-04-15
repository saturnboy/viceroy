<?php include(TEMPLATEPATH . '/searchform.php'); ?>

<!-- BOTTOMBAR -->
<div id="bottombar" class="span-16 last">

<div id="col1" class="span-5">
<h3>Recent</h3>
<ul>
<?php wp_get_archives('type=postbypost&limit=6'); ?>
</ul>
</div><!-- /col1 -->

<div id="col2" class="span-5">
<h3>Archives</h3>
<ul>
<?php wp_get_archives('limit=6'); ?>
</ul>
</div><!-- /col2 -->

<div id="col3" class="span-5 last">
<h3>Tag Cloud</h3>
<div id="tag-cloud">
<?php wp_tag_cloud('smallest=8&largest=16&number=20'); ?>
</div>
</div><!-- /col3 -->

</div><!-- /bottombar -->
