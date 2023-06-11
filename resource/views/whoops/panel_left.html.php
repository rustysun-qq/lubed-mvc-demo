<header>
  <?php $view->load('whoops/header'); ?>
</header>
<div class="frames-description <?php echo !empty($has_frames_tabs) && $has_frames_tabs ? 'frames-description-application' : '' ?>">
    <?php if (!empty($has_frames_tabs)): ?>
        <a href="#" id="application-frames-tab" class="frames-tab <?php echo $active_frames_tab == 'application' ? 'frames-tab-active' : '' ?>">
            Application frames (<?php echo $frames->countIsApplication() ?>)
        </a>
        <a href="#" id="all-frames-tab" class="frames-tab <?php echo $active_frames_tab == 'all' ? 'frames-tab-active' : '' ?>">
            All frames (<?php echo count($frames) ?>)
        </a>
    <?php else: ?>
        <span>
        Stack frames (<?php echo !empty($frames)?count($frames):0 ?>)
    </span>
    <?php endif; ?>
</div>
<div class="frames-container <?php echo !empty($active_frames_tab)&&$active_frames_tab == 'application' ? 'frames-container-application' : '' ?>">
    <?php $view->load('whoops/frame_list'); ?>
</div>