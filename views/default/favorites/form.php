<?php
/**
 * Add/Remove a favorite
 **/
if(isloggedin()){
	$guid_one = $vars['entity']->guid;
	$guid_two = $_SESSION['user']->guid;
		 
	if(!(favorite_status($guid_one, $guid_two))){
		$url = elgg_add_action_tokens_to_url("{$vars['url']}action/favorites/toggle?object_guid={$guid_one}");
		echo "<span class='favorite'><a href=\"$url\" title=\"" . elgg_echo('favorite:action:favorite') . "\">" . elgg_echo('favorite:action:favorite') . "</a></span>";
	}else{
		$url = elgg_add_action_tokens_to_url("{$vars['url']}action/favorites/toggle?object_guid={$guid_one}&remove=true");
		echo "<span class='favorite'><a href=\"$url\" class='is_favorite' title=\"" . elgg_echo('favorite:action:unfavorite') . "\">" . elgg_echo('favorite:action:unfavorite') . "</a></span>";
	}
}
