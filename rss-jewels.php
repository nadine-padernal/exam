
		<?php
			$object = new DOMDocument();
			$object->load("http://www.justluxe.com/rss/rss-channels.php?cat=9");

		$content = $object->getElementsByTagName("item");

		foreach($content as $data){
				$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
				$link = $data->getElementsByTagName("link")->item(0)->nodeValue;
				$desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
				$pub = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
			echo "<div>
			<table border="1px">
			<tr><h1><li><a href = '$link' target = '_blank' class = 'anchor'>'$title'</a></li></h1>
				<h2><li>$desc</li></h2>
				<h4><li>$pub</li></h4>
				</tr></div></table>";
	}
			?>
<style>
			h1{
			color: #000;
			}
			h2{
			color: #000;
			}
			h4{
			color: #000;
			}
			</style>
