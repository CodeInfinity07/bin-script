<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DETAILS FORM</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="/update" method="post" id="myform">
				@csrf
				<div class="form-left">
					<h2>SPOT</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="spot_key" id="spot_key" class="input-text" placeholder="SPOT-API-KEY" value="{{$sp_key}}" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="spot_secret" id="spot_secret" class="input-text" placeholder="SPOT-API-SECRET" value="{{$sp_secret}}" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="spot_buy" id="spot_buy" class="input-text" placeholder="SPOT-BUY-PERCENT" value="{{$sp_buy}}" required>
					</div>
					<div class="form-row">
					  <input type="text" name="spot_sell" id="spot_sell" class="input-text" placeholder="SPOT-SELL-PERCENT" value="{{$sp_sell}}" required>
					</div>
					<div class="form-row">
					  <input type="text" name="spot_stop" id="spot_stop" class="input-text" placeholder="SPOT-STOP-PRICE-PERCENT" value="{{$sp_stop}}" required>
					</div>
					<div class="form-row">
					  <input type="text" name="spot_stoplimit" id="spot_stoplimit" class="input-text" placeholder="SPOT-STOPLIMIT-PERCENT" value="{{$sp_stoplimit}}" required>
					</div>
					<div class="form-row">
					  <input type="text" name="spot_usdt" id="spot_usdt" class="input-text" placeholder="SPOT-USDT" value="{{$sp_usdt}}" required>
					</div>
				</div>
				<div class="form-right">
					<h2>FUTURES</h2>
					<div class="form-group">
					  <div class="form-row form-row-1">
					    <input type="text" name="futures_key" id="futures-key" class="input-text" placeholder="FUTURES-KEY" value="{{$ft_key}}" required>
					  </div>
					  <div class="form-row form-row-2">
					    <input type="text" name="futures_secret" id="futures-secret" class="input-text" placeholder="FUTURES-SECRET" value="{{$ft_secret}}" required>
					  </div>
					</div>
					<div class="form-row">
						<input type="text" name="futures_buy" class="street" id="futures-buy" placeholder="FUTURES-BUY-PERCENT" value="{{$ft_buy}}" required>
					</div>
					<div class="form-row">
						<input type="text" name="futures_sell" class="additional" id="futures-sell" placeholder="FUTURES-SELL-PERCENT" value="{{$ft_sell}}" required>
					</div>
					<div class="form-row">
						<input type="text" name="futures_stop" class="additional" id="futures-stop" placeholder="FUTURES-STOP-PERCENT" value="{{$ft_stop}}" required>
					</div>
					<div class="form-row">
						<input type="text" name="futures_usdt" class="additional" id="futures-usdt" placeholder="FUTURES-USDT" value="{{$ft_usdt}}" required>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="SUBMIT">
					</div>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
