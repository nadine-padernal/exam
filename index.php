<?php
$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';

$jsonqoutes = file_get_contents('https://cottonbureau.com/shop');
$qoutesdata = json_decode($jsonqoutes,true);

$qoutes = array('hue'=> $qoutesdata);
$list = $qoutes['hue'];
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
		<ul>
            <?php
            $count = 0;
            foreach((array) $list as $value){
            ?>
                <li><?php echo $value['title'];?>
                    <ul>
                        <li><?php echo $value['designerName'];?></li>
                    </ul>
                </li>
            <?php
                $count++;
                if($count == 20) //limit output to 20
                    break;
            }
            ?>
            </ul>
</body>
<div class="footer"></div>
</html>
