(function ($, Drupal) {

    Drupal.behaviors.djDemo = {
        attach: function (context, settings) {
            SystemJS.import('dj/modules/custom/dj_demo/js/es6.js');
        }
    };

})(jQuery, Drupal);
