<?php
$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
?>
<html>
<head>
	<title> Fashion Trends </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav>
  <ul class="primary">
		<li>
      <a href="index.php">Home</a>
    </li>
    <li>
      <a href="index.php?mod=RFnews">Fashion News</a>
    </li>
    <li>
      <a href="index.php?mod=RJewel">Fashion Jewelry</a>
    </li>
  </ul>
</nav>
	<div id="container">
		<?php
		switch ($module) {
			case 'RFnews':
			 require_once 'rss-Fnews.php';
			break;
			case 'RJewel':
			 require_once 'rss-jewels.php';
			break;
		}
			 ?>
		 </div>
</body>
<div class="footer"></div>
</html>
