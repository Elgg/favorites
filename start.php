<?php
/**
 * Favorites
 *
 * @package Favorites
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Curverider Ltd
 * @copyright Curverider Ltd 2008-2010
 * @link http://elgg.org/
 **/
  
function favorites_init() {
		
    // Load system configuration
	    global $CONFIG;
	    
	if(isloggedin()){
		// Extend views
		elgg_extend_view('css','favorites/css');
		
		elgg_extend_view('bookmarks/sidebar', 'favorites/display');
		elgg_extend_view('bookmarks/options', 'favorites/form');
		elgg_extend_view('conversations/options', 'favorites/form');
		elgg_extend_view('blogs/sidebar', 'favorites/display');
		elgg_extend_view('blogs/options', 'favorites/form');
		elgg_extend_view('files/options', 'favorites/form');
		elgg_extend_view('files/sidebar', 'favorites/display');
		elgg_extend_view('documents/options', 'favorites/form');
		elgg_extend_view('documents/sidebar', 'favorites/display');
		elgg_extend_view('videolist/options', 'favorites/form');
		elgg_extend_view('videolist/sidebar', 'favorites/display');
		elgg_extend_view('tidypics/options', 'favorites/form');
		elgg_extend_view('tidypics/sidebar', 'favorites/display');
	}
 }
     
/**
* Check to see if the item has been favorited already
* @param int guid_one of the object
* @param int guid_two of the user
*
* return boolean true | false
**/
  
function favorite_status($guid_one, $guid_two){
      
	$guid_one = (int)$guid_one;
	$guid_two = (int)$guid_two;
	
	$check = check_entity_relationship($guid_one, "favorite", $guid_two);
	
	if($check) {
		return true;
	} else {
		return false;
	}
}
 
// Make sure the status initialisation function is called on initialisation
	register_elgg_event_handler('init','system','favorites_init');
	
// Register actions
	global $CONFIG;
	register_action("favorites/toggle",false,$CONFIG->pluginspath . "favorites/actions/toggle.php");   
?>