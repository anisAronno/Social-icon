<?php

/**
 * @package Eduhub Assets
 * @version 1.0.2
 */
/*
Plugin Name: Eduhub Assets
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Anis Arronno 
Version: 1.0.2
Author URI: http://facebook.com/anis3139
License: GPLv2 or later
Text Domain: eduhub-assets
Domain Path: /languages/
*/



/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function appsero_init_tracker_social_icon()
{

    if (!class_exists('Appsero\Client')) {
        require_once __DIR__ . '/appsero/src/Client.php';
    }

    $client = new Appsero\Client('a64c2ab4-c299-4229-8aec-0ab2721bdaa2', 'social-icon', __FILE__);

    // Active insights
    $client->insights()->init();

    // Active automatic updater
    $client->updater();

    // Active license page and checker
    $args = array(
        'type'       => 'options',
        'menu_title' => 'social-icon',
        'page_title' => 'social-icon Settings',
        'menu_slug'  => 'social_icon_settings',
    );
    $client->license()->add_settings_page($args);
}

appsero_init_tracker_social_icon();


require_once dirname(__FILE__) . '/shortcode.php';
require_once dirname(__FILE__) . '/shortcode-ui.php';
require_once dirname(__FILE__) . '/cpt.php';

class rainyforestSocialIcons_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'tb_social_icons', // Base ID
            __('Social Icons (Rainy Forest)', 'socialicon'), // Name
            array('description' => __('Social Icons', 'socialicon'),) // Args
        );
        add_action('plugins_loaded', array($this, 'load_textdomain'));
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));
    }

    function load_assets()
    {
        wp_enqueue_style('socialicon-css', plugin_dir_url(__FILE__) . "assets/css/socialicon.css", null, time());
    }




    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);
        $social_icons = array(
            "facebook",
            "twitter",
            "github",
            "pinterest",
            "instagram",
            "google-plus",
            "youtube",
            "vimeo",
            "tumblr",
            "dribbble",
            "flickr",
            "behance"
        );
        $title        = apply_filters('widget_title', $instance['title']);

        echo wp_kses_post($before_widget);
?>
        <ul class="<?php echo esc_attr($instance['classname']); ?> social-icon-custom-css">
            <?php
            if ($title) {
                echo "<div class=\"widget-title\">";
                echo wp_kses_post($before_title) . esc_html($title) . wp_kses_post($after_title);
                echo "</div>";
            }
            ?>
            <?php
            foreach ($social_icons as $sci) {
                $url = trim($instance[$sci]);
                if (!empty($url)) {
                    if ($sci == "vimeo") {
                        $sci = "vimeo-square";
                    }
                    $sci = esc_attr($sci);
                    echo "<li><a target='_blank' href='" . esc_attr($url) . "'><i class='fa fa-" . esc_attr($sci) . " social-icon-custom-css-li'></i></a></li>";
                }
            }
            ?>

        </ul>
    <?php
        echo wp_kses_post($after_widget);
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance                = array();
        $instance['title']       = strip_tags($new_instance['title']);
        $instance['classname']   = strip_tags($new_instance['classname']);
        $instance['facebook']    = strip_tags($new_instance['facebook']);
        $instance['twitter']     = strip_tags($new_instance['twitter']);
        $instance['github']      = strip_tags($new_instance['github']);
        $instance['pinterest']   = strip_tags($new_instance['pinterest']);
        $instance['instagram']   = strip_tags($new_instance['instagram']);
        $instance['google-plus'] = strip_tags($new_instance['google-plus']);
        $instance['youtube']     = strip_tags($new_instance['youtube']);
        $instance['vimeo']       = strip_tags($new_instance['vimeo']);
        $instance['tumblr']      = strip_tags($new_instance['tumblr']);
        $instance['dribbble']    = strip_tags($new_instance['dribbble']);
        $instance['flickr']      = strip_tags($new_instance['flickr']);
        $instance['behance']     = strip_tags($new_instance['behance']);

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('', 'socialicon');
        }

        $classname = '';
        if (isset($instance['classname'])) {
            $classname = $instance['classname'];
        }


        $social_icons = array(
            "facebook",
            "twitter",
            "github",
            "pinterest",
            "instagram",
            "google-plus",
            "youtube",
            "vimeo",
            "tumblr",
            "dribbble",
            "flickr",
            "behance"
        );
        foreach ($social_icons as $sc) {
            if (!isset($instance[$sc])) {
                $instance[$sc] = "";
            }
        }
    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'socialicon'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('classname')); ?>"><?php _e('CSS Class name:', 'socialicon'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('classname')); ?>" name="<?php echo esc_attr($this->get_field_name('classname')); ?>" type="text" value="<?php echo esc_attr($classname); ?>" />
        </p>
        <?php foreach ($social_icons as $sci) {
        ?>
            <p>
                <label for="<?php echo esc_attr($this->get_field_id($sci)); ?>"><?php echo esc_html(ucfirst($sci) . " " . __('URL', 'socialicon')); ?>
                    : </label>
                <br />

                <input class="widefat" type="text" id="<?php echo esc_attr($this->get_field_id($sci)); ?>" name="<?php echo esc_attr($this->get_field_name($sci)); ?>" value="<?php echo esc_attr($instance[$sci]); ?>" />
            </p>

        <?php
        }
        ?>


<?php
    }
} // class Foo_Widget

function rainyforest_social_icons_widget()
{
    register_widget('rainyforestSocialIcons_Widget');
}

add_action('widgets_init', 'rainyforest_social_icons_widget');
