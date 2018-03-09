<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	html {
		height: 100%;
	}

	body {
		margin: 0;
		height: 100%;
	}

	.camera {
		width: 100%;
		height: 100%;

		perspective: 1400;
		perspective-origin: center center;

		transform-style: preserve-3d;
	}

	.world {
		width: 100%;
		height: 100%;

		transform-origin: center center;
		transform: rotateY(0deg);

		transform-style: preserve-3d;
	}

	.object {
		width: 400px;
		height: 400px;

		position: absolute;

		left: 50%;
		top: 50%;
	}

	.green {
		background-color: green;
		transform: translate(-50%, -50%) translateZ(-2000px);
	}

	.red {
		background-color: red;
		transform: translate(-50%, -50%) translateZ(-1000px);
	}
	</style>
</head>
<body>
	<div class="camera">
		<div class="world">
			<div class="object green"></div>
			<div class="object red"></div>
		</div>
	</div>

	<script type="text/javascript">
	let world = document.querySelector('.world');

	window.addEventListener('deviceorientation', rotateWorld);

	function rotateWorld (e) {
		let rotation = 360 - e.alpha;

		world.style.transform = 'rotateY(' + rotation + 'deg)';
		// world.style.transform = `rotateY(${e.alpha}deg)`;
	}
	</script>
</body>
</html>
