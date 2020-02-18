<?php

function eduhub_google_map($attributes){
    $default = array(
        'place'=>'Dhaka',
        'width'=>'100%',
        'height'=>'500px',
        'zoom'=>'14'
    );

    $params = shortcode_atts($default,$attributes);

    $map = <<<EOD
<div>
    <div>
        <iframe width="{$params['width']}" height="{$params['height']}"
                src="https://maps.google.com/maps?q={$params['place']}&t=&z={$params['zoom']}&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </div>
</div>
EOD;

    return $map;

}
add_shortcode('gmap','eduhub_google_map');