<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to the Vet API!</h1>

	<div id="body">
		<p>A Code test for GroSocial developer candidates.</p>
		<p>
			Your task is to create a single webpage that uses jQuery, Bootstrap and EJS to produce the following:
			<ul>
				<li>When the page is loaded, display a table that lists each pet, one per row.</li>
				<li>Each row should contain the Pet Photo Thumbnail, Pet Name, Owner Photo Thumbnail and Owner Name</li>
				<li>When you click on the Pet's name, it should open a Bootstrap modal that lists the Pet ID, Pet Photo, Pet Name, Owner Photo, Owner Name, Color, Weight and Favorite Treat.</li>
			</ul>
		</p>
		
		<p><a href="/pet">/pet</a> will return a JSON object of all pets.</p>
		<p><a href="/pet/n">/pet/n</a> will return a JSON object of a particular pet's details (n is the ID of the pet).</p>
		<p><a href="/owner">/owner</a> will return a JSON object of all owners.</p>
		<p><a href="/photo">/photo</a> will return a JSON object of all photos.</p>
	</div>

</div>

</body>
</html>