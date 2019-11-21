<?php

// note: need to close off  OR make additional !empty groupings - 11/9/19

if(!empty($_POST['staffName']) || !empty($_POST['group']) || !empty($_POST['serviceArea']) || !empty($_POST['activityAreaPrevention']) || !empty($_POST['curriculum']) || !empty($_POST['unitChapter']) || !empty($_POST['actionSteps']) || !empty($_POST['nom']) || !empty($_POST['objectiveAddressed']) || !empty($_POST['directServiceStart']) || !empty($_POST['indirectServiceStart']) || !empty($_POST['otherInfo']) )
{

	if(move_uploaded_file())
	{
$staffName = $_POST['staffName'];
$group = $_POST['group'];
$serviceArea = $_POST['serviceArea'];
$activityAreaPrevention = $_POST['activityAreaPrevention'];
$curriculum = $_POST['curriculum'];
$unitChapter = $_POST['unitChapter'];
$actionSteps = $_POST['actionSteps'];
$nom = $_POST['nom'];
$objectiveAddressed = $_POST['objectiveAddressed'];
$directServiceStart = $_POST['directServiceStart'];
$indirectServiceStart= $_POST['indirectServiceStart'];
$otherInfo = $_POST['otherInfo'];

//include database configuration file
include_once 'db.php';

//insert form data in the database
$insert = $db->query("INSERT file (staffName,group,serviceArea,activityAreaPrevention,activityAreaOutreach,curriculum,unitChapter,actionSteps,nom,objectiveAddressed,directServiceStart,indirectServiceStart,otherInfo) VALUES
('".$staffName."','".$group."','".$serviceArea."','".$activityAreaPrevention."','".$activityAreaOutreach."','".$curriculum."','".$unitChapter."','".$actionSteps."','".$nom."','".$objectiveAddressed."','".$directServiceStart."','".$indirectServiceStart."','".$otherInfo."')");

//echo $insert?'ok':'err';

//Display upload
$sql = "SELECT * FROM file";
		$result = mysqli_query($db,$sql) or die(mysqli_error());
		while($row = mysqli_fetch_array($result))
		{
	 $staffName = $row['staffName'];
   $group = $row['group'];
   $serviceArea = $row['serviceArea'];
	 $activityAreaPrevention = $row['activityAreaPrevention'];
	 $activityAreaOutreach = $row['$activityAreaOutreach']
	 $curriculum = $row['curriculum'];
	 $unitChapter = $row['unitChapter'];
	 $actionSteps = $row['actionSteps'];
	 $nom = $row['nom'];
	 $objectiveAddressed = $row['objectiveAddressed'];
	 $directServiceStart = $row['directServiceStart'];
	 $indirectServiceStart = $row['indirectServiceStart'];
	 $otherInfo = $row['otherInfo'];
		echo "<div id=\"thumbrow\" class=\"row\">";
		echo "<div class=\"col-sm-6 col-md-4\">";
		echo "<div class=\"thumbnail\">";
		echo "<p>". $staffName . "</p>";
		echo "<p>". $group . "</p>";
    echo "<p>". $serviceArea . "</p>";
		echo "<p>". $activityAreaPrevention . "</p>";
		echo "<p>". $activityAreaOutreach . "</p>";
		echo "<p>". $curriculum . "</p>";
		echo "<p>". $unitChapter . "</p>";
		echo "<p>". $actionSteps . "</p>";
		echo "<p>". $nom . "</p>";
		echo "<p>". $objectiveAddressed . "</p>";
		echo "<p>". $directServiceStart . "</p>";
		echo "<p>". $indirectServiceStart . "</p>";
		echo "<p>". $otherInfo . "</p>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		}
}


else
{
echo 'invalid';
}
if($errorimg > 0){

   die('<div class="alert alert-danger" role="alert"> An error occurred while uploading the file </div>');

}

}

?>
