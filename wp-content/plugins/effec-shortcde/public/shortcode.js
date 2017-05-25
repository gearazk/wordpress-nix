jQuery( document ).ready(function() {
    jQuery(".effanimated").hide();
});
jQuery(window).scroll(function() {
    var elem = jQuery('.text_effect_shortcode');
    jQuery(elem).each(function (index) {
        if (isElemScrollPast(this) && jQuery(this).data('scroll') != '1'){
            jQuery(this).data('scroll','1');
            ele_child = jQuery(this).find(".effanimated");
            jQuery(ele_child).each(function (index) {
                dom = jQuery(this);
                if (dom.is(":visible")) return;
                slide = dom.data('anim');
                jQuery(dom).transition({
                    animation  : 'fly '+slide,
                    duration   : '1s',
                    onComplete : function() {
                        dom.data('anim','');
                    }
                });
            });
        }
    });
});
function isElemScrollPast(elem) {
    elem = jQuery(elem);
    var hT = elem.offset().top,
        hH = elem.outerHeight(),
        wH = jQuery(window).height(),
        wS = jQuery(this).scrollTop();
    return (wS > (hT+hH-(wH/2)))

}