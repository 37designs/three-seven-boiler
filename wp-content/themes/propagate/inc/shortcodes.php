<?php

	function button_shortcode($atts, $content = null) { 
		
		// Attributes
			extract( shortcode_atts(
				array(
					'align' => '',
					'link' => '',
					'window' => '',
				), $atts )
			);
			
		return '<p class="btn btn-standard align-'.$align.'"><a href="'.$link.'">'.$content.'</a>';
		
	}
	
	add_shortcode('button','button_shortcode');

    function calltoaction_shortcode($atts, $content = null) {
        // Attributes
        extract( shortcode_atts(
                array(
                    'align' => '',
                    'link' => '',
                    'window' => '',
                ), $atts )
        );

        return '<p class="btn btn-primary call-to-action align-'.$align.'"><a href="'.$link.'">'.$content.'</a>';


    }

    add_shortcode('call-to-action','calltoaction_shortcode');

?>