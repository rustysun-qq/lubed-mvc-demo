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
        <div class="stack-container">
            <div class="panel left-panel cf <?php echo (isset($has_frames)&&$has_frames ? 'empty' : ''); ?>">
                <?php $view->load('whoops/panel_left'); ?>
            </div>
            <div class="panel details-container cf">
                <?php $view->load('whoops/frame_code'); ?>
                <?php $view->place('details');?>
            </div>
        </div>

    </div>

    <script src="/assets/js/prism.js"></script>
    <script src="/assets/js/zepto.min.js"></script>
    <script src="/assets/js/clipboard.min.js"></script>
    <script><?php echo isset($javascript)?$javascript:''; ?></script>
  </body>
</html>
