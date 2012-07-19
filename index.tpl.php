<!DOCTYPE html>
<html>
	<head>
		<title>CSS Gallery Demo</title>

		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<!--[if lte IE 9]>
		<link href="css/ie.css" rel="stylesheet" type="text/css" media="all" />
		<![endif]-->

		<script type="text/javascript">
			if (navigator.appVersion.match (/web-?kit/i)) {
				//Chrome repaint bug
				window.addEventListener ('click', function (event) {
					if (event.target.nodeName == 'LABEL' || event.target.nodeName == 'INPUT') {
						document.body.className += '';
					}
				}, true);
			}
		</script>
	</head>
	<body>
		<div id="wrapper">
			<p>
				Some text
			</p>
			<? showGallery ($gallery1, 'gallery1', 'opacity') ?>
			<p>
				More text
			</p>
			<? showGallery ($gallery2, 'gallery2', 'horizontal') ?>
			<? showGallery ($gallery2, 'gallery3', 'vertical') ?>
			<p>
				The end of the page
			</p>
		</div>
	</body>
</html>
