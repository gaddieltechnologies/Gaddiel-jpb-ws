<?php defined('_JEXEC') or die('Restricted access');
/**
* HTML5FlippingBook Component
* @package HTML5FlippingBook
* @author JoomPlace Team
* @copyright Copyright (C) JoomPlace, www.joomplace.com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/

jimport('joomla.application.component.model');
jimport('joomla.filter.output');

function HTML5FlippingBookBuildRoute(&$query)
{
	$segments = array();

	if (isset($query['view']))
	{
		if ($query['view'] == 'publication')
		{
			$segments[] = $query['view'];
			unset($query['view']);
			
			if (isset($query['id']))
			{
				$publicationId = $query['id'];
				
				$db = JFactory::getDbo();
				
				$dbQuery = "SELECT *" .
					" FROM `#__html5fb_publication`" .
					" WHERE `c_id` = " . $publicationId;
				$db->setQuery($dbQuery);
				$row = $db->loadObject();
				
				$publicationTitle = (isset($row) ? $row->c_title : $publicationId);
				
				$titleSegment = JFilterOutput::stringURLSafe($publicationTitle);
				$titleSegment = ($titleSegment != '' ? $titleSegment : '-');
				$segments[] = $publicationId . '-' . $titleSegment;
				
				unset($query['id']);

				if (isset($query['tmpl']))
				{
					if ( $query['tmpl'] != 'component' )
						$segments[] = $query['tmpl'];

					unset($query['tmpl']);
				}
			}

			if (isset($query['layout']))
			{
				$segments[] = 'mobile';
				unset($query['layout']);
			}
		}
	}
	else
	{
		if ( @$query['task'] == 'templatecss' )
		{
			$segments[] = 'css';
			$segments[] = $query['template_id'].'.css';

			unset($query['template_id']);
			unset($query['task']);
		}
	}

	return $segments;
}

function HTML5FlippingBookParseRoute($segments)
{
	$vars = array();

	switch ($segments[0])
	{
		case 'publication':
		{
			$numSegments = count($segments);
			
			$vars['view'] = $segments[0];
			$data = explode(":", $segments[1]);

			$vars['id'] = $data[0];
			if ($numSegments > 2) $vars['layout'] = $segments[2];
			if ($numSegments > 3) $vars['tmpl'] = ( empty($segments[3]) ? ' component' : $segments[3]);
				else
					$vars['tmpl'] = 'component';
			break;
		}

		case 'css':
			$vars['view'] = 'html5flippingbook';
			$vars['tmpl'] = 'component';
			$vars['task'] = 'templatecss';
			$vars['template_id'] = str_replace('.css', '', $segments[1]);
		break;
	}

	return $vars;
}