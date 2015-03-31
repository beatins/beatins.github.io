<?php
/*------------------------------------------------------------------------
# mod_sw_tumblrblogdisplay - SW Tumblr Blog Display
# ------------------------------------------------------------------------
# @author - Social Widgets
# copyright - All rights reserved by Social Widgets
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://socialwidgets.net/
# Technical Support:  admin@socialwidgets.net
-------------------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die;
//add css stylesheet
$document = JFactory::getDocument();
$document->addStyleSheet( 'modules/mod_sw_tumblrblogdisplay/style/style.css' );
//all parameters
$blogURL = $params->get('blogURL');
$apiKey = $params->get('apiKey');
$width = $params->get('width');
$limit = $params->get('limit');
$textLimit = $params->get('textLimit');
$readMore = $params->get('readMore');
$tumblrFeed = "http://api.tumblr.com/v2/blog/$blogURL/posts/text?api_key=$apiKey&notes_info=true";
$tumblrFeedGrab = json_decode(file_get_contents($tumblrFeed),true);
$postItem[] = $tumblrFeedGrab['response']['posts'];
$print_tumblr = '';
$print_tumblr .= '';
function trimWords($string, $limit)
{
    $words = explode(' ', $string);
    return implode(' ', array_slice($words, 0, $limit));
}
?>
<div class="sw_twitter_display <?php echo $params->get('moduleclass_sfx');?>" style="width : "<?php echo $width; ?>px;">
	<div class="blogWarp">
<?php
for($i=0;$i<$limit;$i++){
foreach($postItem as $value){
?>
		<div class="postWarp">
			<div class="tumblrTitle">
				<?php echo '<a href="'.$value[$i]['post_url'].'" target="_blank">'.$value[$i]['title'] . '</a>'; ?>
			</div>
			<div class="tumblrDescription">
				<?php echo trimWords(strip_tags($value[$i]['body']),$textLimit); ?>
				<div class="display:block">
					<?php if($readMore=="true"){echo '<a href="'.$value[$i]['post_url'].'" target="_blank">read more...</a>';} ?>
				</div>
			</div>
		</div>
<?php
}
}
?>
	</div>
	<div style="font-size: 9px; color: #808080; font-weight: normal; font-family: tahoma,verdana,arial,sans-serif; line-height: 1.28; text-align: right; direction: ltr;"><a href="http://www.carriebowman.com/articles/" target="_blank" style="color: #808080;" title="carriebowman.com">Resources</a></div>
</div>