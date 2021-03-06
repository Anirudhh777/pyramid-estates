<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">
<style>
	body{
		background: #DEDFDE;
	}

	body a{
	   text-decoration: none !important;
	}  
	.welcomeEmail{
	    width: 600px;
	}

	.welcomeEmail span{
		color: #F15A1E;
		font-weight: bold;
	}

	.welcomeEmail .header img{
		width: 100%;
		margin: 0 auto;
	}

	.content-copy{
		background: #FFFFFF;
		padding: 30px;
	}

	.content-copy p{
		font-family: 'Montserrat', sans-serif;
		font-size: 16px !important;
		line-height: 24px;
	}

	.welcomeEmail .footer{
		padding-top: 20px;
		text-align: center;
	}

	.welcomeEmail .footer .sm img{
	    display:inline-block;
	    margin-right: 20px;
	}

	.welcomeEmail .footer .weblink{
		display: block;
    	margin-top: 20px;
    	letter-spacing: 2px;
    	color: black;
    	font-family: 'Montserrat', sans-serif;
		font-size: 16px !important;
		font-weight: bold;
	}

	.welcomeEmail .footer .unsubcribe{
		text-decoration: underline !important;
		display: block;
    	margin-top: 20px;
    	color: black;
    	font-family: 'Montserrat', sans-serif;
	}

	.welcomeEmail .footer p{
		padding: 20px;
		font-family: 'Montserrat', sans-serif;
		font-size: 12px;
		margin: 0;
	}

	@media (max-width:599px){
		.welcomeEmail{
	    	width: 100%;
		}
	}
</style>
</head>
<body>
<div ses:no-track class="welcomeEmail">
	<div class="content-copy">
		<p>
			Form : {{ $Form    }} <br>
			Name : {{ $name	}} <br>
			Phone : {{ $phone	}} <br>
			Email : {{ $user_email	}} <br>
			Buy/Rent : {{ $user_type	}} <br>
			Type: {{ $property_type	}} <br>
			Property: {{ $kind_prop	}} <br>
			Bedrooms : {{ $bedrooms	}} <br>
			Location : {{ $locations	}} <br>
			Area : {{ $area	}} <br>
			Budget : {{ $budget	}} <br>
			Additional Comments : {{ $additional	}} <br>
			Image Links : {{ $images }} <br>
		</p>
	</div>
</div>
</body>
</html>

