<?php
/*
 * Copyright(c) 2000-2007 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 */

// {{{ requires
require_once("../../require.php");
require_once(CLASS_EX_PATH . "page_extends/admin/system/LC_Page_Admin_System_Bkup_Ex.php");

// }}}
// {{{ generate page

$objPage = new LC_Page_Admin_System_Bkup_Ex();
$objPage->init();
$objPage->process();
register_shutdown_function(array($objPage, "destroy"));
?>
