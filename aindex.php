<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8 ">
  <link rel="stylesheet" type="text/css" href="http://localhost/PHP/style.css">
</head>
<body id="target">
	<header>
		<img src="https://lh3.googleusercontent.com/proxy/wyYXVFJoJFBTiWt6w10Qo6onMwklcX-hM69wyoP5RBMTK6DLKfq9d4PYdIvJDVD6c04wEW8hnzAdoY5ptLe-rkPAgHR2HfdMnQU910819vN3U9Jfawl3f_ccVtUdrjssmdtG56c" alt="goodLove">
		<h1><a href="http://localhost/PHP/aindex.php">연애 습관 만들기</a></h1>
	</header>

	<nav>
		<ol>
			<?php
      echo file_get_contents("list.txt");
			?>
		</ol>
	</nav>

	<div id="control">
	<input type="button" value="white" onclick="document.getElementById('target').className='white'">
	<input type="button" value="black" onclick="document.getElementById('target').className='black'">
  </div>

	<article>
		<?php
		if(empty($_GET['id'])==false){
		echo file_get_contents($_GET['id'].".txt");
	  }
		?>
	</article>

</body>
</html>
