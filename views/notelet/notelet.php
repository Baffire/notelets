<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notelets</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="../../../style/style.css">
    <link rel="stylesheet" href="../../../style/notelet/notelet.css">
    <link rel="stylesheet" href="../../../style/notelet/background.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat|Lobster&display=swap" >
</head>
<body class="body <?= $theme_note ?>">
    <div >
        <main>
            <div class="center">
                <div class="notelet">
                    <div class="notelet__title">
                        <h2>
                            <?= $title?>
                        </h2>
                    </div>
                    <div class="notelet__text">
                    <span>
                        <?= $text?>
                    </span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>