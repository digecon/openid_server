<?php

	/**
	 * Adds metatags to identify OpenID server for openid 1.0
	 * 
	 * @package ElggOpenID
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Kevin Jardine <kevin@radagast.biz>
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.org/
	 * 
	 */

	global $CONFIG;
	$owner = elgg_get_page_owner_entity();
	if ($owner && elgg_get_context() == 'profile') {
?>
	<link rel="openid.server" href="<?php echo $CONFIG->wwwroot; ?>mod/openid_server/server.php" />
<?php
	}
?>
