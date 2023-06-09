<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Конвертер валют | <?= $pageData['title']; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <main class="wrapper auth">
        <div class="container">
            <div class="logo">
                <svg version="1.1" baseProfile="basic" id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px"
                     viewBox="0 0 90 90" xml:space="preserve">
<circle fill="#FFC843" cx="45" cy="45" r="45"/>
                    <circle fill="#D38700" cx="45" cy="45" r="35"/>
                    <path fill="#FFC843" d="M49.731,41.74h-9.462c-0.959,0-1.769-0.81-1.769-1.769V32.63c0-0.959,0.81-1.769,1.769-1.769h9.462
	c0.959,0,1.769,0.81,1.769,1.769c0,1.657,1.343,3,3,3s3-1.343,3-3c0-4.284-3.485-7.769-7.769-7.769H48v-2.907c0-1.657-1.343-3-3-3
	c-1.657,0-3,1.343-3,3v2.907h-1.731c-4.284,0-7.769,3.485-7.769,7.769v7.341c0,4.277,3.475,7.757,7.75,7.768
	c0.007,0,0.013,0.002,0.019,0.002h9.462c0.959,0,1.769,0.81,1.769,1.769v7.341c0,0.959-0.81,1.77-1.769,1.77h-9.462
	c-0.959,0-1.769-0.811-1.769-1.77c0-1.657-1.343-3-3-3s-3,1.343-3,3c0,4.284,3.485,7.77,7.769,7.77H42v3.427c0,1.657,1.343,3,3,3
	c1.657,0,3-1.343,3-3v-3.427h1.731c4.283,0,7.769-3.485,7.769-7.77v-7.341C57.5,45.225,54.015,41.74,49.731,41.74z"/>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
</svg>
                <p>Конвертер<br>Валют</p>
            </div>
            <form method="post">
                <h4><?= $pageData['title']; ?></h4>
                <span><?php if(isset($pageData['error'])) echo $pageData['error'];?></span>
                <label for="login">Логин</label>
                <input type="text" name="login" required>
                <label for="password">Пароль</label>
                <input type="password" name="password" required>
                <button type="submit">Зарегистрироваться</button>
                <a href="/">Уже есть аккаунт? Войти</a>
            </form>
        </div>
    </main>
</body>
</html>

<?php
