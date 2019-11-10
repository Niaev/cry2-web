<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>cry 2.0</title>
		
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>

		<div class="nav">
			<h1>cry 2.0</h1>
			<h3>the cipher</h3>
			<a href="https://github.com/Niaev/cry2-web" target="_blank">
				<img src="github-corner.png" alt="Fork me on Github">
			</a>
		</div>

		<div class="container">
			<div class="row">
				<div class="col">
					<textarea id="input" rows="10" placeholder="input message"></textarea><br>
					<input type="password" id="key" placeholder="key"><br>
					<button id="enc">encrypt</button>
					<button id="dec">decrypt</button>
				</div>
				<div class="col">
					<textarea id="output" rows="10" placeholder="output message" readonly></textarea>
					<button id="copy">copy to clipboard</button>
				</div>				
			</div>

			<br>

			<h1>cry 2.0 mirrors</h1>
			<ul>
				<li>
					IPFS - <a href="https://ipfs.io/ipfs/Qmbr3UH877ktx6kXi1ahppAHLYBBLkYKeGBddLN36N5s19/">Qmbr3UH877ktx6kXi1ahppAHLYBBLkYKeGBddLN36N5s19</a>
				</li>
				<li>
					Heroku App - <a href="https://cry2-web.herokuapp.com/">https://cry2-web.herokuapp.com/</a>
				</li>
			</ul>

			<br>

			<h1>Source code</h1>
			<a href="https://github.com/Niaev/cry2-web">https://github.com/Niaev/cry2-web</a>
		</div>
		
	</body>

	<script src="javascript.js"></script>
</html>