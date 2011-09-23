<?php
// auto-generated by sfViewConfigHandler
// date: 2011/09/16 12:54:17
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout_home' ? false : 'layout_home'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Share3D', false, false);
  $response->addMeta('keywords', 'share3d', false, false);

  $response->addStylesheet('jquery-ui-1.8.7.custom.css', '', array ());
  $response->addStylesheet('prettyPhoto.css', '', array ());
  $response->addStylesheet('styles.css', '', array ());
  $response->addJavascript('jquery-1.4.4.min.js', '', array ());
  $response->addJavascript('jquery-ui-1.8.7.custom.min.js', '', array ());
  $response->addJavascript('swfobject.js', '', array ());
  $response->addJavascript('jquery.prettyPhoto.js', '', array ());
  $response->addJavascript('Three.js', '', array ());
  $response->addJavascript('RequestAnimationFrame.js', '', array ());
  $response->addJavascript('Stats.js', '', array ());
  $response->addJavascript('helvetiker_regular.typeface.js', '', array ());

