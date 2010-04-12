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

/* file-type favorites listings in sidebar */
.favorite_list_item a.application {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/application.png) no-repeat 0 0;
}
.favorite_list_item a.archive {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/archive.png) no-repeat 0 0;
}
.favorite_list_item a.audio {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/audio.png) no-repeat 0 0;
}
.favorite_list_item a.document {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/document.png) no-repeat 0 0;
}
.favorite_list_item a.excel {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/excel.png) no-repeat 0 0;
}
.favorite_list_item a.general {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/general.png) no-repeat 0 0;
}
.favorite_list_item a.image {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/image.png) no-repeat 0 0;
}
.favorite_list_item a.pdf {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/pdf.png) no-repeat 0 0;
}
.favorite_list_item a.ppt {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/ppt.png) no-repeat 0 0;
}
.favorite_list_item a.video {
	background: url(<?php echo $vars['url']; ?>mod/favorites/graphics/file_types/video.png) no-repeat 0 0;
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

/* documents favorites */
.document_header .favorite {
	margin-top:4px;
}

/* video favourites */ 
.video_view .favorite {
	margin-left:14px;
}