<form action="<?php echo home_url( '/' ); ?>" method="get">
                     <div class="search-wrap">
                        <div class="search  pull-right floox-top-search hidden-xs">
                           <div class="sp_search_input">
						   <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" maxlength="200"  class="mod-search-searchword inputbox pull-right floox-top-search hidden-xs" type="text" size="20" />
						   <input type="hidden" name="post_type[]" value="page" />
						    <input type="hidden" name="post_type[]" value="news" />
							
							
						  <!-- <input name="searchword" maxlength="200"  class="mod-search-searchword inputbox pull-right floox-top-search hidden-xs" type="text" size="20" value="Search ..."  onblur="if (this.value=='') this.value='Search ...';" onfocus="if (this.value=='Search ...') this.value='';" />-->
						   </div>
                           
                        </div>
                     </div>
                  </form>