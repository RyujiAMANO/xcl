<?php
/**
 *
 * @package Legacy
 * @version $Id: notifications.php,v 1.3 2008/09/25 15:10:29 kilica Exp $
 * @copyright Copyright 2005-2007 XOOPS Cube Project  <https://github.com/xoopscube/legacy>
 * @license https://github.com/xoopscube/legacy/blob/master/docs/GPL_V2.txt GNU GENERAL PUBLIC LICENSE Version 2
 *
 */
/*------------------------------------------------------------------------*
 |  This file was entirely rewritten by the XOOPS Cube Legacy project for |
 |   keeping compatibility with XOOPS 2.0.x <https://www.xoops.org>        |
 *------------------------------------------------------------------------*/

require_once "mainfile.php";
require_once XOOPS_ROOT_PATH . "/header.php";

XCube_DelegateUtils::call('Legacypage.Notifications.Access');
