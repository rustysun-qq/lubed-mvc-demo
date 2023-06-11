<?php /* List file names & line numbers for all stack frames;
         clicking these links/buttons will display the code view
         for that particular frame */ ?>
<?php if(!empty($frames)):?>
<?php foreach ($frames as $i => $frame): ?>
   <div class="frame <?php echo ($i == 0 ? 'active' : '') ?>" id="frame-line-<?php echo $i ?>">
      <span class="frame-index"><?php echo (count($frames) - $i - 1) ?></span>
      <div class="frame-method-info">
        <span class="frame-class">
                   <span class="frame-function"><?php echo $view->breakOnDelimiter('\\', $view->escape($frame->getClass() ?: ''),'<span class="delimiter">%s</span>'); ?></span>
        </span>
        <span class="frame-function"><?php echo $view->breakOnDelimiter('\\', $view->escape($frame->getFunction() ?: ''),'<span class="delimiter">%s</span>'); ?></span>
      </div>

    <div class="frame-file">
        <?php echo $frame->getFile() ? $view->breakOnDelimiter('/', $view->escape($frame->getFile()),'<span class="delimiter">%s</span>') : '<#unknown>' ?><!--
   --><span class="frame-line"><?php echo (int) $frame->getLine() ?></span>
    </div>
  </div>
<?php endforeach; ?>
<?php endif;?>
