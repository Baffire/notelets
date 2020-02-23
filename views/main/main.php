<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notelets</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="style/main/note_form.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Lobster&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <div class="center">
        <div class="note_form">
            <div class="note_form__title">
                <h3>
                    Введите текст записочки
                </h3>
            </div>
            <form action="" method="POST">
                <input name="title" type="text" placeholder="Введите название записки">
                <br>
                <textarea rows="10" cols="45" name="text"></textarea>
                <br>
                <select name="theme" required>
                    <option hidden>Выберете тематику</option>
                    <option value="1">День рождения</option>
                    <option value="2">Новый год</option>
                    <option value="3">День Св. Валентина</option>
                    <option value="4">Рождество</option>
                    <option value="5">Хэллоуин</option>
                </select>
                <br>
                <input class="note_form__button" type="submit">
            </form>
        </div>
    </div>
</main>
</body>
</html>