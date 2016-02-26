<?php 
	echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home_page</title>
	<link rel="stylesheet" type="style/css" href="css/reset.css">
	<link rel="stylesheet" type="style/css" href="../css/style.css">
	<link rel="stylesheet" type="style/css" href="../css/cardStyle.css">
</head>
	<body>
		<div class="card_wrap">
			<div class="card_content">
				<div class="item_add">
					<p class="item_add_sum">В корзине NN товар
					</p>
				</div>
				<div class="card_total"> 
					<p class="card_total_sum"> Общая сумма NNNNN грн.
					</p>
				</div>
				<div class="card_buttons">
					<div class="view_card">
						<form action="" id="view_card_form">
							<button class="view_card_button" onclick="">Перейти в корзину</button>
						</form>
					</div>
					<div class="checkout">
						<form action="" id="checkout_form">
							<button class="checkout_button" onclick="">Оформить заказ</button>
						</form></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>';

?>