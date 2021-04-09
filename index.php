<?php
      require_once("config.php");
?>

<head>
	<title>WEB SITE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=100"/>

<link rel="stylesheet" href="t.css">
</head>
<body>
<center><h1>5 TRƯỜNG ĐẠI HỌC </h1></center>
<?php
require_once("config.php");
$records = mysqli_query($conn,"select * from univer"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?> 
<!--div class="w3-bar w3-black"-->
<button class="w3-bar-item w3-button" onclick="Openuniversity('<?php echo $data['id']; ?>')"><?php echo $data['menu']; ?></button></div>

<div id="<?php echo $data['id']; ?>" class="w3-container w3-display-container city" style="display:none">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>
  <p><?php echo $data['noidung']; ?></p>
</div>
<? } ?>


<script>
function Openuniversity(UniversityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(UniversityName).style.display = "block";  
}
</script>
</body>
