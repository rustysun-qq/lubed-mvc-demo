<?php
/**
* Layout template file for Whoops's pretty error output.
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php echo isset($title)?$title:'';?></title>
    <link rel="stylesheet" href="/assets/css/whoops.base.css" />
    <link rel="stylesheet" href="/assets/css/prism.css" />
  </head>
  <body>

    <div class="Whoops container">
        <?php $view->place('content');?>
    </div>

    <script src="/assets/js/prism.js"></script>
    <script src="/assets/js/zepto.min.js"></script>
    <script src="/assets/js/clipboard.min.js"></script>
    <script><?php echo isset($javascript)?$javascript:''; ?></script>
  </body>
</html>
