function plugin_bootstrap_slider_v1(){
  /**
   * 
   */
  this.Slider = function (id) {
    
    /**
     * Save current value in temp_value.
     */
    var temp_value = document.getElementById(id).value;
    /**
     * Create slider.
     */
    var slider = new Slider("#"+id, {
            value: document.getElementById(id).value,
            min: 0,
            max: 100
    });
    /**
     * Show previous hidden element.
     * Set value from temp_value.
     * Add listener to write back to slider if input changes.
     */
    document.getElementById(id).style.display='';
    document.getElementById(id).value=temp_value;
    document.getElementById(id).addEventListener('blur', function(){
      if(document.getElementById(id).value.length){
        if(PluginBootstrapSlider_v1.isNumeric(document.getElementById(id).value)){
          slider.setValue(document.getElementById(id).value);
        }
      }
    });
    
  }
  this.isNumeric = function(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
  }
}
var PluginBootstrapSlider_v1 = new plugin_bootstrap_slider_v1();
