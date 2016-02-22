<?php

	/**
	 * A simple view to provide the user with group filters and the number of group on the site
	 **/
	 
	 $members = $vars['count'];
	 if(!$num_groups)
	 	$num_groups = 0;
	 	
	 $filter = $vars['filter'];
	 
	 //url
	 $url = $vars['url'] . "mod/members/index.php";

?>
<div id="elgg_horizontal_tabbed_nav">
<ul>
	<li <?php if($filter == "newest") echo "class='selected'"; ?>><a href="<?php echo $url; ?>?filter=newest">Newest</a></li>
	<li <?php if($filter == "pop") echo "class='selected'"; ?>><a href="<?php echo $url; ?>?filter=pop">Popular</a></li>
	<li <?php if($filter == "active") echo "class='selected'"; ?>><a href="<?php echo $url; ?>?filter=active">Active</a></li>
</ul>
</div>

<div class="group_count">
	<?php
		echo $members . " " . elgg_echo("members:active");
	?>
</div>