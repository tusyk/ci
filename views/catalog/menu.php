<?php foreach ($menu as $menu_item): 
			$link_segment=str_replace("/"," ",$menu_item['title']);
			$link_segment=stripslashes(str_replace(" ","_",$link_segment));
			$link_segment1=base_url_2().'catalog/'.$menu_item['cat_id'].'_'.$link_segment.'/'; 
			?>
			<div class="url2" style="margin-bottom:10px;"><a href="<?PHP echo $link_segment1; ?>"><?php echo $menu_item['title']; ?></a></div>
<?php endforeach; ?>