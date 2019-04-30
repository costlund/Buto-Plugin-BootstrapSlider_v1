<?php
/**
<p>Slider for Bootstrap</p>
<p>Visit <a href="http://seiyria.com/bootstrap-slider/" target="_blank">seiyria.com/bootstrap-slider</a> for more info.</p>
#code-javascript#
PluginBootstrapSlider_v1.Slider('_element_id');
#code#
 */
class PluginBootstrapSlider_v1{
  /**
  <p>Include this widget after bootstrap default js and css.</p>
  <p>This will include js and css for the slider.</p>
  */
  public static function widget_include($data){
    $element = array();
    $element[] = wfDocument::createHtmlElement('link', null, array('href' => '/plugin/bootstrap/slider_v1/bootstrap-slider.css', 'rel' => 'stylesheet'));
    $element[] = wfDocument::createHtmlElement('script', null, array('src' => '/plugin/bootstrap/slider_v1/bootstrap-slider.js', 'type' => 'text/javascript'));
    wfPlugin::enable('include/js');
    $element[] = wfDocument::createWidget('include/js', 'include', array('src' => '/plugin/bootstrap/slider_v1/PluginBootstrapSlider_v1.js'));    
    wfDocument::renderElement($element);
  }
}