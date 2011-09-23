<div id="mainFooter">
    <div class="page footerWrapper">
        <div class="col-l">
            <div id="footerLinks">
                <ul class="clearfix">
                    <li><?php echo link_to('Home', 'home') ?> |</li>
                    <li><?php echo link_to('About', 'corporate_about') ?> |</li>
                    <li><?php echo link_to('Support', 'http://getsatisfaction.com/post3d', array('popup' => true)) ?></li>
                </ul>
                <p>Copyright 2010. All rights reserved. <?php echo link_to('Privacy', 'corporate_privacy') ?>  | <?php echo link_to('Terms of Use', 'corporate_terms') ?></p>
            </div>
        </div>
        <div id="poweredBy3DVIA" class="col-r">
            <a href="<?php echo url_for('http://www.3dvia.com', true) ?>"><?php echo image_tag('layout/pwred_by_3dvia_128x_18.png') ?></a>
        </div>
    </div>
</div>


<div id="centerDiv" style="z-index: 999999;width: 40px;border: 1px thin #00A0D1" align="center">
    <?php echo image_tag('ajax-loader.gif') ?>
</div>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('#centerDiv').hide();
        (function($){
            $.fn.extend({
                center: function () {
                    return this.each(function() {
                        var top = ($(window).height() - $(this).outerHeight()) / 2;
                        var left = ($(window).width() - $(this).outerWidth()) / 2;
                        $(this).css({position:'absolute', margin:0, top: (top > 0 ? top : 0)+'px', left: (left > 0 ? left : 0)+'px'});
                    });
                }
            });
        })(jQuery);
        $('#centerDiv').center();
        

         $('#centerDiv')
         .hide()
         .ajaxStart(function() {
               $(this).show();
          })
          .ajaxStop(function() {
            $(this).hide();
        });


    });
</script>