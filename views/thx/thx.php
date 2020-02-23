<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notelets</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/thx/thx.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Lobster&display=swap" rel="stylesheet">
</head>
<body>
<main>
	<div class="center">
		<div class="thx">
			<div class="thx__title">
				<h2>Спасибо, что воспользовались нашим сервисом!</h2>
			</div>
			<div class="thx__text">
				<p>
					Отправьте следующую ссылку получателю:
				</p>
			</div>
			<div class="thx__link">
                <?php
                    echo $link->getLink();
                ?>
			</div>
			<div class="thx__return_button">
				<button>
					<a href="../../index.php">Вернуться на главную</a>
				</button>
			</div>
		</div>
	</div>
</main>
</body>
</html>