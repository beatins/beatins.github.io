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

?>

<div class="mod_blogfactory_calendar<?php echo $moduleclass_sfx; ?>">
  <?php echo ModBlogFactoryCalendarHelper::renderCalendar($date, $posts, $prev, $next, $params, $id); ?>
</div>
