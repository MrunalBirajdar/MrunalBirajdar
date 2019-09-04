<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/gallery.css">
		<link rel="stylesheet" href="css/pagination.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="s.css">
</head>
<style>
	div.desc {
  padding: 15px;
  text-align: center;
  font-weight: bold;
  float:none;
 }

div.img {

  width: 348px;
  height: 300px;
} 	

img{
	float:none;
	margin: 10px;
	width: 350px;
  height: 230px;
}

div .gallery
{
	height: 500px;
	width:400px;
	float:left;
}

.mySlides
{
	float: none;
	size: cover;
	width: 90%;
	height: 450px;
}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<img src="./image/j.jpeg" class="pic" width="60%" height="50%">
			</div>
			<div class="col-sm-4">
				<p class="slogan"><b>Focus on education to develop the nation.</b></p>
			</div>
			<div class="col-sm-3">
				<p class="email"><b>Email:</b>school@gmail.com</p>
			</div>
			<div class="col-sm-3">
			    <p class="tel"><b>Telephone:</b> 9607213838</p>
		    </div>
		</div>
	</div><br><br>
<center>
	<!--img src="images/m2.jpg" height="400px;" width="1299px" -->
<div class="slide">
	<div class="w3-content w3-section">
  <img class="mySlides" src="./image/lo.jpeg" >
  <img class="mySlides" src="./image/e.jpeg" height="600px;" width="1299px">
  <img class="mySlides" src="./image/hf.jpeg" height="600px;" width="1299px">
  <img class="mySlides" src="./image/ht.jpeg" height="600px;" width="1299px">
  <img class="mySlides" src="./image/h.jpeg" height="600px;" width="1299px">
  <img class="mySlides" src="./image/g.jpeg" height="600px;" width="1299px">
  
  
</div>
</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
</center>
<br>

<br>
<br>


	 <center><h1> News...</h1></center>
    <div class = "container">
     <div class="log">

<?php
	include 'conn.php';


	$select=mysqli_query($conn,"SELECT * FROM mrunal1");
	$rows = mysqli_num_rows($select);

	if($rows){
		$i=0;

		while($news=mysqli_fetch_assoc($select))
		{
	
			$title=$news['title'];
			$image=$news['image'];
			$content=$news['content'];
			$content = substr($content,0,600).'...';
			$link=$news['link'];
			$datep=$news['datep'];
			//echo' <div class="gallery">';
    	  	echo' <div class="desc"><h3>'.$title.'</h3></div>';
   			echo "<center><img src= data:image/jpg;base64,$image  width='4%' height='4%'>'</center>";
   			
 			echo' <div class="desc">'.$content.'</div>';
 			echo '<div class="desc">Date: '.$datep.'</div>';
 			echo'<div class="desc"><h3><a href='.$link.'>'.$link.'</a></h3></div>';
			echo '</div>';
 			echo"<br>";
 			

		}
		}else{
              echo "<center>";
              echo "<font color = 'red'>";
              echo "NO POST YET !";
              echo "</font>";
              echo "</center>";
          }
	

?>

	

</body>
</html>