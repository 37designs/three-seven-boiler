	
		<article class="hentry">
			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<p class="post_meta">Written on <?php the_time('F j, Y'); ?> at <time class="updated" datetime="<?php the_time('Y-m-d h:m:s'); ?>" pubdate><?php the_time() ?></time>, by <span class="byline autohor vcard"><em class="fn"><?php the_author() ?></em></span></p>
			</header>
			<div class="entry-content">
				<?php the_excerpt();?>
			</div>
		</article>		
