<?php
/**
 * Favorites
 **/

//get object type
$object_type = $vars['object_type'];
     
//get items
$get_favorite_items = elgg_get_entities_from_relationship(array('relationship' => 'favorite', 'relationship_guid' => $_SESSION['user']->guid, 'inverse_relationship' => TRUE, 'types' => "object", 'subtypes' => $object_type, 'owner_guid' => 0, 'limit' => 99 ));

if(isset($get_favorite_items)){

	if($get_favorite_items){	
	 	echo "<h3>" . elgg_echo('favorites') . "</h3>";

	 	foreach($get_favorite_items as $obj){
		 	//check to see if it is a file
		 	if($obj->simpletype){
				$title = $obj->title;
				if(!$title) {
					$title = elgg_echo('file:untitled');
				}
				echo "<p class='favorite_list_item'><a class='". $obj->simpletype ."' href=\"{$obj->getURL()}\">" . $title . "</a></p>";
			} else {
				//check to see if it is a bookmark
				$subtype = get_subtype_from_id($obj->subtype);
				if($subtype == 'bookmarks'){
					$url = $obj->address;
				}else{
					$url = $obj->getURL();
				}
				$title = $obj->title;
				if(!$title) {
					$title = $obj->description;
				}
				echo "<p class='favorite_list_item'><a href=\"{$url}\">" . $title . "</a></p>";
			}
	 	}
	} else {
	 	echo "<h3>" . elgg_echo('favorites') . "</h3>";
	 	echo "<p>".elgg_echo('favorite:items:none')."</p>";
 	}
}