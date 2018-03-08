<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test</title>
		<style media="screen">
			.square {
				width: 300px;
				height: 300px;
				background-color: red;
			}

			.square.active {
				background-color: blue;
			}
		</style>
	</head>
	<body>
		<div class="square"></div>

		<script type="text/javascript">
			let square = document.querySelector('.square');

			square.addEventListener('touchstart', function() {
				square.classList.add('active');
			});

			square.addEventListener('touchend', function() {
				square.classList.remove('active');
			});
		</script>
	</body>
</html>
