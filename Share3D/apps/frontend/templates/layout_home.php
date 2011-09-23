<!DOCTYPE html>
<html>
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <!--[if IE]>
                <link rel="stylesheet" type="text/css" media="screen" href="/css/ie-reset.css" />
        <![endif]-->
        <?php include_javascripts() ?>
         <script type="text/javascript">
                        var flashvars = {};
                        flashvars.xml = "config.xml";
                        flashvars.font = "font.html";
                        var attributes = {};
                        attributes.wmode = "transparent";
                        attributes.id = "slider";
                        swfobject.embedSWF("cu3er.swf", "cu3er-container", "934", "310", "9", "expressInstall.html", flashvars, attributes);
          </script>
    </head>
    <body>
       
       
        <?php echo $sf_content ?>
       
    </body>

</html>
