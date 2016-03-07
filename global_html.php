<?php
	function li($content,$option = '') {
		$balise = '<li '.$option.'>'.$content.'</li>';
		return $balise;
	}

	function ul($content,$option = '') {
		$balise = '<ul '.$option.'>'.$content.'</ul>';
		return $balise;
	}

	function td($content,$option = '') {
		$balise = '<td '.$option.'>'.$content.'</td>';
		return $balise;
	}

	function tr($content,$option = '') {
		$balise = '<tr '.$option.'>'.$content.'</tr>';
		return $balise;
	}

	function table($content,$option = '') {
		$balise = '<table '.$option.'>'.$content.'</table>';
		return $balise;
	}

	function div($content,$option = '') {
		$balise = '<div '.$option.'>'.$content.'</div>';
		return $balise;
	}
	
	function img($src,$option = '') {
		$balise = '<img src="'.$src.'" '.$option.' />';
		return $balise;
	}
	
	function button($content,$option = '') {
		$balise = '<button type="button" '.$option.'>'.$content.'</button>';
		return $balise;
	}
	
	function p($content,$option = '') {
		$balise = '<p '.$option.'>'.$content.'</p>';
		return $balise;
	}
	
	function h2($content,$option = '') {
		$balise = '<h2 '.$option.'>'.$content.'</h2>';
		return $balise;
	}
	
	function h1($content,$option = '') {
		$balise = '<h1 '.$option.'>'.$content.'</h1>';
		return $balise;
	}
	
	function span($content,$option = '') {
		$balise = '<span '.$option.'>'.$content.'</span>';
		return $balise;
	}
	
	function anchor($content,$link,$option = '') {
		$balise = '<a href="'.$link.'" '.$option.'>'.$content.'</a>';
		return $balise;
	}
	
	function html($content) {
		$balise = '<html>'.$content.'</html>';
		return $balise;
	}
	
	function head($content) {
		$balise = '<head>'.$content.'</head>';
		return $balise;
	}
	
	function body($content) {
		$balise = '<body>'.$content.'</body>';
		return $balise;
	}
?>