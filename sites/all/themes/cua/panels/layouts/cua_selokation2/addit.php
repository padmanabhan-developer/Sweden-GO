<?php
$auid = intval($_GET["auid"]);
$nid = intval($_GET["nid"]);
$anode = node_load($nid);
$count = count($anode->field_godkendte_piloter['und']);
$anode->field_godkendte_piloter['und'][$count]['uid'] = $auid; // another user
node_save($anode);
?>
