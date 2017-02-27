import $ from 'jquery';
import _ from 'underscore';

/**
 * Add new command for reading a message.
 */
Drupal.AjaxCommands.prototype.readMessage = function(ajax, response, status){
    alert(response.message)
};

Drupal.behaviors.startEs6 = {
    attach: (context, settings) => {

        if (context == document) {

        }

    }
};


