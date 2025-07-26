<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$items  = ossn_get_site_menu('footer');
$menu   = ossn_site_menu_generator($items);
// Removed powered by link
if(!empty($menu)){
	echo "<div class='footer'>";
	echo "<div class='container'>";
	echo $menu;
	echo "</div>";
	echo "</div>";
}