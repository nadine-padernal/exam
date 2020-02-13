
		<?php
			$object = new DOMDocument();
			$object->load("http://www.justluxe.com/rss/rss-channels.php?cat=9");

		$content = $object->getElementsByTagName("item");

		foreach($content as $data){
				$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
				$link = $data->getElementsByTagName("link")->item(0)->nodeValue;
				$desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
				$pub = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
			echo "<table border="1px">
			<tr><h1><a href = '$link' target = '_blank' class = 'anchor'>'$title'</a></h1><br>
				<h2>$desc</h2><br>
				<h4>$pub</h4><br>
				</tr></table>";
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
