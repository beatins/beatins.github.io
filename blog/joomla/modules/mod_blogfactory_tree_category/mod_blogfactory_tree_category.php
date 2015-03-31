<?php

/**
-------------------------------------------------------------------------
blogfactory - Blog Factory 4.2.1
-------------------------------------------------------------------------
 * @author thePHPfactory
 * @copyright Copyright (C) 2011 SKEPSIS Consult SRL. All Rights Reserved.
 * @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * Websites: http://www.thePHPfactory.com
 * Technical Support: Forum - http://www.thePHPfactory.com/forum/
-------------------------------------------------------------------------
*/

defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$categories = ModBlogFactoryTreeCategoryHelper::getCategories();
$id = ModBlogFactoryTreeCategoryHelper::getId($module);

ModBlogFactoryTreeCategoryHelper::assets($id, $params);

require JModuleHelper::getLayoutPath('mod_blogfactory_tree_category', $params->get('layout', 'default'));
