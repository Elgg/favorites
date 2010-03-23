<?php
/**
 * Elgg favorites CSS
 */
?>
/* favorites icon toggle */
.favorite {
	float:right;
	width:23px;
	height:22px;
	margin:0;
}
.favorite a {
	cursor:pointer;
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/icons_favorites.png) no-repeat left -4px;
	text-indent: -9000em;
	text-align: left;
	display:block;
	width:23px;
	height:22px;
	margin:0;
}
.favorite a:hover {
	background-position: left -30px;
}
.favorite a.is_favorite {
	background-position: left -56px;
}
.favorite a.is_favorite:hover {
	background-position: left -56px;
}


/* favorites listings in sidebar */
.favorite_list_item {
	margin:0 0 5px 0;
}
.favorite_list_item a {
	display:block;
	line-height:1.1em;
	background:transparent url(<?php echo $vars['url']; ?>mod/favorites/graphics/icons_favorites.png) no-repeat scroll -40px -89px;
	padding-left:18px;
}


/* favorites within plugins */

/* Conversations favorites */
.single_post .extended_options .favorite {
	margin-top:4px;
}

/* Blog favorites */
.blog.entity_listing .entity_metadata .favorite {
	margin-top:1px;
}
.blogpost .entity_metadata .favorite {
	margin-top:2px;
}