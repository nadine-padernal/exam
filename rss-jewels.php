
		<?php
			$object = new DOMDocument();
			$object->load("http://www.justluxe.com/rss/rss-channels.php?cat=9");

		$content = $object->getElementsByTagName("item");

		foreach($content as $data){
				$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
				$link = $data->getElementsByTagName("link")->item(0)->nodeValue;
				$desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
				$pub = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
			echo "<div><ul class = 'nge'>
			<h1><li>'$title'</li></h1></ul>
				<ul class = 'meow'>
				<li><a href = '$link' target = '_blank' class = 'anchor'>$link</a></li>
				<li>$desc</li>
				<li>$pub</li>
				</ul></div>";
	}
			?>
