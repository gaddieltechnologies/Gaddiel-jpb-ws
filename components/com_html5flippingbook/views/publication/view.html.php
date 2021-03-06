<?php defined('_JEXEC') or die('Restricted access');
/**
* HTML5FlippingBook Component
* @package HTML5FlippingBook
* @author JoomPlace Team
* @copyright Copyright (C) JoomPlace, www.joomplace.com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
*/
//TODO: AJAX LOADER

require_once(JPATH_COMPONENT_ADMINISTRATOR.'/libs/VarsHelper.php');

class HTML5FlippingBookViewPublication extends JViewLegacy
{
	protected $itemId = null;
	protected $item = null;
	protected $state = null;
	protected $tmplIsComponent = false;
	protected $basePath = '';
	protected $menuItemParams = null;
	protected $publicationId = null;
	protected $showDescriptionFirst = null;
	protected $config;
	protected $user;
	//----------------------------------------------------------------------------------------------------
	function display($tpl = null) 
	{

		$jinput = JFactory::getApplication()->input;
		$uri = JUri::getInstance();
		$this->state = $this->get('State');
		
		// Processing menu item parameters.
		$this->menuItemParams = $this->state->get('parameters.menu');

		$menuParamsPublicationId = 0;
		
		if (isset($this->menuItemParams))
		{
			$publicationId = $this->menuItemParams->get('publication_id');
			if (!empty($publicationId))
                $menuParamsPublicationId = (int) $publicationId;
		}
		
		if ($menuParamsPublicationId != 0)
			$this->publicationId = $menuParamsPublicationId;
		else
			$this->publicationId = $jinput->get('id');

		$this->item = $this->get('Item');

		// Removing joomla template if required.
		if ($this->item->c_popup != PublicationDisplayMode::DirectLink)
			$jinput->set('tmpl', 'component');

		$this->tmplIsComponent = ($jinput->get('tmpl', '') == 'component');

		// Loading config.
		require_once(JPATH_COMPONENT_ADMINISTRATOR.'/models/configuration.php');
		$configurationModel = JModelLegacy::getInstance('Configuration', COMPONENT_MODEL_PREFIX);
		$this->config = $configurationModel->getConfig();

		// Defines paths.
        $this->item->rawPublicationLink= JRoute::_('index.php?option='.COMPONENT_OPTION.'&view=publication&id='.$this->item->c_id.'&Itemid='.COMPONENT_ITEM_ID, false, $uri->isSSL());
        $this->item->direction = ( $this->item->right_to_left ? 'rtl' : 'ltr' );
		$this->basePath = JURI::root();

		// Checking access and displaying.
		$this->user = JFactory::getUser();
		$doc = JFactory::getDocument();
		
		$doc->setTitle($this->item->c_title);
		
		$previewAccessGranted = $this->user->authorise('core.preview', COMPONENT_OPTION.'.publication.'.$this->item->c_id);
		$viewAccessGranted = $this->user->authorise('core.view', COMPONENT_OPTION.'.publication.'.$this->item->c_id);
		
		$this->resolutions = $this->get('Resolutions');
		
		if (isset($this->item->c_metadesc)) $doc->setMetaData ('description', $doc->getMetaData('description').' '.$this->item->c_metadesc);
		if (isset($this->item->c_metakey)) $doc->setMetaData( 'keywords' , $doc->getMetaData('keywords').' '.$this->item->c_metakey );

		if (isset($this->item->c_id))
		{
			if ($previewAccessGranted && $viewAccessGranted)
			{
				parent::display($tpl);
			}
			else
			{
				if ($this->user->id == 0)
				{
					?>
						<div>
							<?php echo JText::_('COM_HTML5FLIPPINGBOOK_FE_SHOULD_LOGIN') . '.'; ?>&nbsp;<a href="<?php echo JRoute::_('index.php?option=com_users' .
								'&view=login' . '&Itemid=' . COMPONENT_ITEM_ID . '&return=' . base64_encode($_SERVER['REQUEST_URI']), false, $uri->isSSL());
								?>"><?php echo JText::_('COM_HTML5FLIPPINGBOOK_FE_LOGIN_NOW') . '.'; ?></a>
							<br/><br/>
						</div>
					<?php
				}
				else
				{
					?>
						<div>
							<?php echo JText::_('COM_HTML5FLIPPINGBOOK_FE_NO_RIGHTS') . '.'; ?>
							<br/><br/>
						</div>
					<?php
				}
			}
		}
		else
		{
			JFactory::getApplication()->enqueueMessage(JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'), 'warning');
		}

	}

}