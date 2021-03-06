<?php
/**
 * Template to show list of configured authentication sources.
 *
 */
$this->data['header'] = 'Test authentication sources';
$this->includeAtTemplateBase('includes/header.php');
?>
<div id="portalcontent" class="ui-tabs-panel ui-widget-content ui-corner-bottom" style="padding: 0 20px;">
  <h1><?php echo $this->data['header']; ?></h1>
  <ul>
<?php
foreach ($this->data['sources'] as $id) {
    echo '<li><a href="?as='.htmlspecialchars(urlencode($id)).'">'.htmlspecialchars($id).'</a></li>';
}
?>
  </ul>
</div>
<?php
$this->includeAtTemplateBase('includes/footer.php');
