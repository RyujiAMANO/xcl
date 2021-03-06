<?php

if (!defined('XOOPS_ROOT_PATH')) exit();

/**
 * This is test menu block for control panel of legacy module.
 *
 * [ASSIGN]
 *  No
 * 
 * @package legacy
 */
class Legacy_AdminSystemInfo extends Legacy_AbstractBlockProcedure
{
	function getName()
	{
		return "systeminfo";
	}

	function getTitle()
	{
		return "TEST: AdminSystemInfo";
	}

	function getEntryIndex()
	{
		return 0;
	}

	function isEnableCache()
	{
		return false;
	}

	function execute()
	{
		$root =& XCube_Root::getSingleton();
		$render =& $this->getRenderTarget();

		// Load theme template ie fallback
		$render->setAttribute('legacy_module', 'legacy');
		$render->setTemplateName('legacy_admin_block_systeminfo.html');

		$render->setAttribute('siteconfig', $root->mContext->mXoopsConfig);
		
		$systemconfig = array();
		$systemconfig['phpversion'] = phpversion(); 
		$db = &$root->mController->getDB();
		$result = $db->query("SELECT VERSION()");
		list($mysqlversion) = $db->fetchRow($result);
		$systemconfig['mysqlversion'] = $mysqlversion; 
		$systemconfig['os'] = substr( php_uname(), 0, 7 );
		$systemconfig['server'] = $_SERVER['SERVER_SOFTWARE'];
		$systemconfig['useragent'] = $_SERVER['HTTP_USER_AGENT'];
		$render->setAttribute('systemconfig', $systemconfig);
		$render->setAttribute('blockid', $this->getName());
		$renderSystem =& $root->getRenderSystem($this->getRenderSystemName());
		$renderSystem->renderBlock($render);
	}

	function hasResult()
	{
		return true;
	}

	function &getResult()
	{
		$dmy = "dummy";
		return $dmy;
	}

	function getRenderSystemName()
	{
		return 'Legacy_AdminRenderSystem';
	}
}

?>