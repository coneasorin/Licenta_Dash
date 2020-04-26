<!DOCTYPE HTML>
<html>
<head>
<?php
$mysqli = new mysqli("localhost", 'root', '', 'licenta');
$sql3 = "SELECT * from statistici";
$result3 = mysqli_query($mysqli, $sql3);
while($row3 = mysqli_fetch_assoc($result3)) {
  $pers_infectate=$row3['p_infectate'];
  $pers_decedate=$row3['p_decedate'];
  $pers_vindecate=$row3['p_vindecate'];
}
$dataPoints = [
  ["label"=> 'INFECTATI', "y"=> intval($pers_infectate), "indexLabel"=> "Varf"],
  ["label"=> 'Decedati', "y"=> intval($pers_decedate)],
  ["label"=> 'Vindecati', "y"=> intval($pers_vindecate)],
];
?>
<script type="text/javascript">
window.onload = function () {
let datas = <?php echo json_encode($dataPoints); ?>;
console.log(datas);
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
  exportEnabled: true,
	title:{
		text: "Statistici COVID19 Romania"
	},
	data: [
	{
		type: "column",
		dataPoints: datas,
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",
	}
	]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 100%; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>
</html>
