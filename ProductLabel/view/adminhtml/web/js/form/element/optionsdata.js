define([
    'underscore',
    'uiRegistry',
    'Magento_Ui/js/form/element/select',
    'Magento_Ui/js/modal/modal'
], function (_, uiRegistry, select, modal) {
    'use strict';
    return select.extend({      

        initialize: function (){

            var attribute_id = uiRegistry.get('index = attribute_id');
            var attribute_label = uiRegistry.get('index = attribute_label');
            var option_id = uiRegistry.get('index = option_id');
            var option_label = uiRegistry.get('index = option_label');

            var category_id = uiRegistry.get('index = category_id');

            var status = this._super().initialValue;   

            if (status == 1) {

                category_id.show();
                attribute_id.hide();
                attribute_label.hide();
                option_id.hide();
                option_label.hide();
               
            } else{
                category_id.hide();
                attribute_id.show();
            
                
            }
            return this;
           

        },      

        /**
         * On value change handler.
         *
         * @param {String} value
         */
        onUpdate: function (value) {

          
            var attribute_id = uiRegistry.get('index = attribute_id');
            var attribute_label = uiRegistry.get('index = attribute_label');
            var option_id = uiRegistry.get('index = option_id');
            var option_label = uiRegistry.get('index = option_label');

            var category_id = uiRegistry.get('index = category_id');

            if (value == 1) {

                category_id.show();
                attribute_id.hide();
                attribute_label.hide();
                option_id.hide();
                option_label.hide();
               
            } else{
                category_id.hide();
                attribute_id.show();
                // attribute_label.show();
                // option_id.show();
                option_label.show();
            }
            return this._super();
        },
    });
});