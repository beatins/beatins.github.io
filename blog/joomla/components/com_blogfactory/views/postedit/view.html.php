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

class BlogFactoryFrontendViewPostEdit extends BlogFactoryFrontendView
{
  protected
    $variables = array(
      'form',
      'item',
      'revisions',
      'tags',
      'categoriesEnabled',
      'externalSources',
      'mediaManagerEnabled',
    ),
    $jhtmls = array('behavior.tooltip', 'jquery.framework', 'formbehavior.chosen', 'behavior.modal'),
    $js = array('tinymce/tinymce.jquery', 'media'),
    $css = array('icons', 'main', 'media')
  ;

  protected function getCategoriesEnabled()
  {
    $settings = JComponentHelper::getParams('com_blogfactory');

    return $settings->get('general.enable.categories', 1);
  }

  protected function renderFieldset($fieldset)
  {
    $this->fieldset = $fieldset;

    return $this->loadTemplate('fieldset');
  }
}
