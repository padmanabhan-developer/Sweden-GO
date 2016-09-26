<?php 
$id = intval($_GET["id"]);
$con=mysqli_connect("mysql14.unoeuro.com","gobooking_bike","t4bkrcwd","gobooking_bike_db");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$num = 1;
$sql2 = "SELECT sw_node.title AS node_title, sw_node.nid AS nid, sw_field_data_field_cykel_aktiv.field_aktiv_value FROM sw_node LEFT JOIN sw_field_data_field_cykel_aktiv ON sw_node.nid = sw_field_data_field_cykel_aktiv.entity_id AND sw_field_data_field_cykel_aktiv.field_aktiv_value = '0' LEFT JOIN  sw_field_data_field_testlokation ON sw_node.nid = sw_field_data_field_testlokation.entity_id AND (sw_field_data_field_testlokation.entity_type = 'node' AND sw_field_data_field_testlokation.deleted = '0') WHERE (( (sw_field_data_field_testlokation.field_testlokation_target_id = '" . $id . "' ) )AND(( (sw_node.status = '1') AND (sw_node.type IN  ('beboer'))  )))";
// " . $id . "
$result2 = mysqli_query($con,$sql2);
/*while($row2 = mysqli_fetch_array($result2)) {
echo '<!--  tal:' . $num . '-->';
$num ++;
}
*/
?>
<script type="text/javascript">
(function ($) {

function foohide() {
//$("ul.chosen-results li:nth-child(2)").css("display","none");
//clearInterval(interval2);
}
})(jQuery);
</script>
<?
mysqli_close($con);
?>
