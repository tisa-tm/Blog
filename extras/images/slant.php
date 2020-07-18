<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#slanted {
			margin: 0;
			padding: 0;
		    position: relative;
		    height: 50px;
		    background: #BCF9BC;
		    border-radius: 15px;
		}

		svg {
		    position: absolute;
		    bottom: 0;
		    width: 100%;
		    height: 100px;
		    fill: white;
		    transform: rotateX(180deg);
		}
	</style>
</head>
<body>
	<div id="slanted">
		<p id = 'extra'></p>
    <svg viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon points="0,100 100,70 100,100" />
    </svg>
</div>
</body>
</html>