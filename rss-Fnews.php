
		<?php
			$object = new DOMDocument();
			$object->load("https://wwd.com/custom-feed/fashion/");

		$content = $object->getElementsByTagName("item");

		foreach($content as $data){
				$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
				$link = $data->getElementsByTagName("link")->item(0)->nodeValue;
				$desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
				$image = $data->getElementsByTagName("name")->item(0)->nodeValue;
				$pub = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
			echo "<div><ul class = 'nge'>
			<h1><li>'$title'</li></h1></ul>
				<ul class = 'meow'>
				<li><a href = '$link' target = '_blank' class = 'anchor'>$link</a></li>
				<li>$desc</li>
				<li><a href = '$image' target = '_blank' class = 'anchor'>$image</a></li>
				<li>$pub</li>
				</ul></div>";
	}
			?>
