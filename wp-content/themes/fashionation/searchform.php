<form action="/" method="get" class="form-inline" role="form">
	<div class="form-group">
    <label class="sr-only" for="search">Search Products</label>
    <input class="form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search Products" />
	  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
  </div>
</form>
