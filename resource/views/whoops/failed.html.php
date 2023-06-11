<?php $view->load('whoops/layout');?>
<?php $view->beginBlock('details');?>
    <div class="details">
        <h2 class="details-heading">Environment &amp; details:</h2>

        <div class="data-table-container" id="data-tables">
            <?php if(isset($tables)):?>
                <?php foreach ($tables as $label => $data): ?>
                    <div class="data-table" id="sg-<?php echo $view->escape($view->slug($label)); ?>">
                        <?php if (!empty($data)): ?>
                            <label><?php echo $view->escape($label); ?></label>
                            <table class="data-table">
                                <thead>
                                <tr>
                                    <td class="data-table-k">Key</td>
                                    <td class="data-table-v">Value</td>
                                </tr>
                                </thead>
                                <?php foreach ($data as $k => $value): ?>
                                    <tr>
                                        <td><?php echo $view->escape($k); ?></td>
                                        <td><?php echo $value; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php else: ?>
                            <label class="empty"><?php echo $view->escape($label); ?></label>
                            <span class="empty">empty</span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
        </div>

        <?php /* List registered handlers, in order of first to last registered */ ?>
        <div class="data-table-container" id="handlers">
            <label>Registered Handlers</label>
            <?php if(isset($handlers)):?>
                <?php foreach ($handlers as $i => $h): ?>
                    <div class="handler <?php echo ($h === $handler) ? 'active' : ''?>">
                        <?php echo $i ?>. <?php echo $view->escape(get_class($h)) ?>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
        </div>

    </div>
<?php $view->endBlock();?>