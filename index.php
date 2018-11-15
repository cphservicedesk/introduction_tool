<?php
$random = rand(0,1000);
echo "<link rel='stylesheet' type='text/css' href='style.css?a=$random'>";
?>
<meta charset="UTF-8">
<title>Signaling introduction</title>
<link rel="shortcut icon" type="image/png" href="https://www.alstom.com/themes/custom/alstom/favicon.ico"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="content">

	<div class="explanatory_text">
		The incoming train occupies the track section at the station. <br> When it leaves, the track becomes unoccupied.

	</div>

	<div class="art-container">
		<div class="section_1">
			<img src="images/p80.png" class="p80" id="p80_1">
			<img src="images/p80.png" class="p80" id="p80_2">
		</div>

		<div class="section_2">
			<img src="images/train.png" id="train">
			<?php
			for ($i =0; $i<10; $i++){
				echo '<img src="images/track2.png" class="track">';
			}
		echo "</div>";
		echo "<div class='section_4'>";
			for ($i=0; $i<10; $i++) {
				echo '<div class="occupied"></div>';
			}
		echo "</div>";
			?>

		<div class="section_3">
			<img src="images/track2.png" class="track" id="horizontal1">
			<div class="occupied h_occu" id="horizontal1"></div>
			<img src="images/station.png" class="station">
			<img src="images/track2.png" class="track" id="horizontal2">
			<div class="occupied h_occu" id="horizontal2"></div>
		</div>
		<br>

		<?php
		for ($i =0; $i<3; $i++){
			echo '<img src="images/track2.png" class="track">';
		}
		echo "<br>";
		for ($i =0; $i<3; $i++){
			echo '<div class="occupied"></div>';
		}
		?>



	</div> <!-- art-container -->
</div><!-- content -->


<script type="text/javascript">
function drive_train(train){
	train.addClass("drive")
}
function set_unoccupied(range){
	var sections = $(".occupied")
	sections.removeClass("unoccupied")

	for (i=0; i<range.length;i++){
		for (y=range[i][0]; y<range[i][1]; y++) {
			$(sections[y]).addClass("unoccupied")
		}
	}
}
drive_train($("#train"))

function test(){
	set_unoccupied([[8,15]])
	setTimeout(function(){ set_unoccupied([[0,8],[10,15]]) }, 7650);
}

test()
setInterval(function(){ test() }, 10000);


</script>