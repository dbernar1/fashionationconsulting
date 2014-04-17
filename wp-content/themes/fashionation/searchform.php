<form action="/" method="get" class="form-inline" role="form">
	<div class="form-group">
    <label class="sr-only" for="search">Search Products</label>
    <input class="form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search Products" />
	  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
  </div>
</form>
<!-- <form class="form-inline" role="form">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form> -->