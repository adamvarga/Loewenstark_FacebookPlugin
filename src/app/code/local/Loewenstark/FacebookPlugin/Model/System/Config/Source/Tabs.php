<?php

class Loewenstark_FacebookPlugin_Model_System_Config_Source_Tabs {
    /*
     *  Add tab style to Facebook Plugin setup
     *  @return array
     */

    public function toOptionArray() {
        return [
            ['value' => 'timeline', 'label' => __('Timeline')],
            ['value' => 'events', 'label' => __('Events')],
            ['value' => 'messages', 'label' => __('Messages')]
        ];
    }

}
