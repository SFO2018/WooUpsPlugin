<?php

class widgetsSlider extends WP_Widget {

    function __construct() {
        parent::__construct(
                'widgetsSlider', // Base ID
                __('MBND:: Slider', 'text_domain'), // Name
                array('description' => __('MBND:: Slider', 'text_domain'),) // Args
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo $this->getHtmlWidgets($args, $instance);
        echo $args['after_widget'];
    }

    private function getHtmlWidgets($args, $instance) {
        //$args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        $DATA = array(
            "args" => $args,
            "instance" => $instance
        );
        $smarty = MbndSmarty::getSmarty();
        $smarty->assign('DATA', $DATA);
        $html = $smarty->fetch("widgets/html_slider.tpl");
        return $html;
    }

    /**
     * Back-end widget form.
     *
     */
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'text_domain');
        }
        $arrayArges = array(
            "field1" =>
            array(
                "id" => $this->get_field_id('title'),
                "name" => $this->get_field_name('title'),
                "value" => $title
            ),
        );
        $smarty = MbndSmarty::getSmarty();
        $smarty->assign('DATA', $arrayArges);
        echo $smarty->fetch("widgets/form_slider.tpl");
    }

    /**
     * Backend  udapte
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }

}
