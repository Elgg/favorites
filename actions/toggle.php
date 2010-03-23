<?php
/**
 * Elgg toggle between favorite and unfavorite
 * We use the object as guid one and the user as guid two
 * @package Favorites
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Curverider <info@elgg.com>
 * @copyright Curverider Ltd 2008-2009
 * @link http://elgg.org/
 */

// Make sure we're logged in (send us to the front page if not)
if (!isloggedin()) forward();

$object_guid = (int)get_input('object_guid');
$object = get_entity($object_guid);
$user = $_SESSION['user']->guid; //you need to be logged in to post
$remove = get_input('remove');
if(!$remove) {
	$remove = false;
}	
//check to make sure the wire post exists
if ($object) {	
	//see if we are tracking or untracking
	if($remove){
		if(remove_entity_relationship($object_guid, "favorite", $user)){
			// Success message
			system_message(elgg_echo("favorite:unfavorite"));
		} else {
			// Failure message
			system_message(elgg_echo("favorite:error"));
		}		
	} else {
		//make the relationship
		if(add_entity_relationship($object_guid, "favorite", $user)){	
			// Success message
			system_message(elgg_echo("favorite:favorited"));
		} else {
			// Failure message
			system_message(elgg_echo("favorite:error"));
		}		
	}
} else {
	// Failure message
	system_message(elgg_echo("favorite:error"));
}
// Forward 
	forward($_SERVER['HTTP_REFERER']);
		
?>