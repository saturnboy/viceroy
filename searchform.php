<!-- SEARCH -->
<div id="searchbar" class="span-16 last">
<form id="searchform" action="<?php bloginfo('url'); ?>/" method="get">
<fieldset>
<input id="s" name="s" type="text" value="<?php the_search_query(); ?>" maxlength="30" />
<input id="searchbtn" type="submit" value="SEARCH" />
</fieldset>
</form>
</div><!-- /searchbar -->
