<?php $view->extend('whoops/layout');?>
<?php $view->beginBlock('content');?>
    <div class="stack-container">
        <div class="panel left-panel cf <?php echo (isset($has_frames)&&$has_frames ? 'empty' : ''); ?>">
            <?php $view->load('whoops/panel_left'); ?>
        </div>
        <div class="panel details-container cf">
            <?php $view->load('whoops/frame_code'); ?>
            <?php $view->load('whoops/details');?>
        </div>
    </div>
<?php $view->endBlock();?>
