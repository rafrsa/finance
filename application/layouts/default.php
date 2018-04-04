<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>{title_for_layout}</title>

        <link href="<?PHP echo CSSPATH; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?PHP echo CSSPATH; ?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="<?PHP echo CSSPATH; ?>dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="<?PHP echo CSSPATH; ?>vendor/morrisjs/morris.css" rel="stylesheet">
        <link href="<?PHP echo CSSPATH; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <script src="<?PHP echo JSPATH; ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?PHP echo JSPATH; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?PHP echo JSPATH; ?>vendor/metisMenu/metisMenu.min.js"></script>
        <script src="<?PHP echo JSPATH; ?>vendor/raphael/raphael.min.js"></script>
        <script src="<?PHP echo JSPATH; ?>vendor/morrisjs/morris.min.js"></script>
        <script src="<?PHP echo JSPATH; ?>data/morris-data.js"></script>
        <script src="<?PHP echo JSPATH; ?>dist/js/sb-admin-2.js"></script>

        {css_for_layout}
        {js_for_layout}
    </head>
    <body>
        <div id="geral">
            <div id="meio">
                {content_for_layout}
            </div>
        </div>
        <script type="text/javascript"> var basepath = '<?php print(base_url()); ?>'; </script>
    </body>
</html>
