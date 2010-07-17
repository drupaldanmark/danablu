<?php
// $Id$

/**
 * @file
 *
 * Theme implementation to display a node.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">

  <?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <div class="job-meta">
    <?php print $field_job_position_rendered; ?>
    <strong>Arbejdssted:</strong>
    <?php print $node->content['locations']['#value']; ?>
    <?php print $field_job_employer_url_rendered; ?>
    <?php print $field_job_contact_mail_rendered; ?>
  </div>

  <div class="node-body">
    <?php print $node->content['body']['#value']; ?>
  </div>
  <?php print $field_job_read_more_link_rendered; ?>

  <?php if (!$teaser && ($submitted || $terms)): ?>
    <div class="meta clear-block">
      <?php print $picture; ?>
      <?php if ($submitted): ?>
        <div class="submitted">
          <?php print $submitted; ?>
        </div>
      <?php endif; ?>

      <?php if ($terms): ?>
        <div class="terms terms-inline"><?php print t(' in ') . $terms; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <?php print $links; ?>

</div></div> <!-- /node-inner, /node -->

