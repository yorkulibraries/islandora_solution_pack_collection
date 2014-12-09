<?php

/**
 * @file
 * islandora-basic-collection.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<div class="islandora islandora-basic-collection">
  <div class="islandora-basic-collection-grid clearfix">
  <?php foreach($associated_objects_array as $key => $value): ?>
    <dl class="islandora-basic-collection-object <?php print $value['class']; ?>">
        <?php if (in_array('islandora:collectionCModel', $value['object']->models)): ?>
          <dt class="fa fa-folder-open-o" style="font-size: 6em; color: #777;"></dt>
          <?php else: ?><dt class="islandora-basic-collection-thumb"><?php print $value['thumb_link']; ?></dt>
        <?php endif; ?>
        <dd class="islandora-basic-collection-caption"><?php print filter_xss($value['title_link']); ?></dd>
    </dl>
  <?php endforeach; ?>
</div>
</div>
