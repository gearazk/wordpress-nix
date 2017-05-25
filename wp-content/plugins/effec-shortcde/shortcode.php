<?php


function text_effect_shortcode( $atts, $content ) {

    extract( shortcode_atts( array(
        'header'=> null,
        'title' => '',
        'thumbnail' => null,
        'style' => 'left', // [left,right,full]
        'tween' => null,
        'link' => '#',
        'link_title' => 'MORE',
    ), $atts ) );
    $layout = 'left' ;

    if ( isset($style ) && (($style == 'right' && isset($thumbnail) ) || ($style == 'full')))
        $layout = $style ;

    ob_start();

    if(!wp_script_is('eff_shortcode.css', 'enqueued'))
        wp_enqueue_style( 'eff_shortcode.css', plugin_dir_url(__FILE__).'public/shortcode.css', array(), '0.1' );
    if(!wp_script_is('sem-transition.css', 'enqueued'))
        wp_enqueue_style( 'sem-transition.css', plugin_dir_url(__FILE__).'public/transition.min.css', array(), '0.1' );
    if(!wp_script_is('sem-transition.js', 'enqueued'))
        wp_enqueue_script( 'sem-transition.js', plugin_dir_url(__FILE__).'public/transition.min.js', array('jquery'), '0.1', true );
    if(!wp_script_is('eff_shortcode.js', 'enqueued'))
        wp_enqueue_script( 'eff_shortcode.js', plugin_dir_url(__FILE__).'public/shortcode.js', array('jquery') );


    ?>
        <div class="text_effect_shortcode" >
            <?php if (isset($header)) {?>
            <div class="row ui effanimated " data-anim="down">
                <div class="col-lg-12">
                    <h1 class="eff_header <?php if($layout=='full') echo 'title_full' ?>"><?php echo $header ?></h1>
                </div>
            </div>

            <?php }?>
            <div class="row">
            <?php if ($layout == 'left') {?>
                <div class="col-lg-7 col-sm-12 text-section effanimated" data-anim="right" >
                    <h3 class="eff_title"><?php echo esc_attr($title) ?></h3>
                    <p class="eff_detail"><?php echo ($content) ?></p>
                    <a class="eff_btn_link" href="<?php echo $link ?>"><?php echo $link_title ?></a>
                </div>
                <div class="col-lg-5 col-sm-12 thumbnail-section effanimated" data-anim="left"  >
                    <img class="eff_thumbnail" src="<?php echo $thumbnail ?>" alt="<?php echo esc_attr($title) ?>">
                </div>
            <?php } elseif ($layout == 'right') {?>
                <div class="col-lg-5 col-sm-12 text-section effanimated" data-anim="right" >
                    <img class="eff_thumbnail" src="<?php echo $thumbnail ?>" alt="<?php echo esc_attr($title) ?>">
                </div>
                <div class="col-lg-7 col-sm-12 thumbnail-section effanimated" data-anim="left"  >
                    <h3 class="eff_title"><?php echo esc_attr($title) ?></h3>
                    <p class="eff_detail"><?php echo ($content) ?></p>
                    <a class="eff_btn_link" href="<?php echo $link ?>"><?php echo $link_title ?></a>
                </div>
            <?php } else { ?>
                <div class="col-lg-12 col-sm-12 thumbnail-section effanimated" data-anim="up"  >
                    <h3 class="eff_title "><?php echo esc_attr($title) ?> </h3>
                    <p class="eff_detail"><?php echo ($content) ?></p>
                    <?php if (($link != '#')) {?>
                        <a class="eff_btn_link" href="<?php echo $link ?>"><?php echo $link_title ?></a>
                    <?php } ?>
                </div>
            <?php } ?>
            </div>
        </div>
    <?php
    $str = ob_get_clean();
    return $str;
}
add_shortcode('text_effect', 'text_effect_shortcode');

function highlight_effect_shortcode( $atts, $content ) {

    extract( shortcode_atts( array(
        'header'=> null,
    ), $atts ));

    ob_start();
    if(!wp_script_is('eff_shortcode.css', 'enqueued'))
        wp_enqueue_style( 'eff_shortcode.css', plugin_dir_url(__FILE__).'public/shortcode.css', array(), '0.1' );

    ?>
    <div class="text_effect_break_line col-lg-12" >
        <div class="delimiter">
            <div class="eff_icon_wrapper">
                <i class="fa fa-circle eff_icon_break" aria-hidden="true"></i>
            </div>
            <hr class="eff_line delimiter__line_type_growth">
        </div>
    </div>
    <?php
    $str = ob_get_clean();
    return $str;
}
add_shortcode('eff_hr', 'highlight_effect_shortcode');



?>