<div class="search-bar-holder">
    <form role="search" method="get" id="searchform" class="searchform" action="<?= home_url('/'); ?>">
        <div class="form-group">
              <input type="text" class="form-control" placeholder="Search..." id="search" name="s" value="<?php the_search_query(); ?>">
        </div>
    </form>
</div>
