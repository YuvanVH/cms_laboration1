<form role="search" method="get" class="searchform" action="<?php echo home_url('/'); ?>">
  <label class="screen-reader-text">Sök efter:</label>
  <input type="text" name="s" value="<?php echo get_search_query(); ?>" />
  <input type="submit" value="Sök" />
</form>
