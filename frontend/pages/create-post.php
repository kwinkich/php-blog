<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".././styles/styles.css">
    <link rel="stylesheet" href=".././styles/create-post.css">
    <title>Document</title>
</head>


<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__content">
                    <p class="logo">kwinkichBlog.</p>
                    <nav class="header__menu">
                        <li class="header__menu-item">
                            <a href="#">Записи</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#">Головна</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#">Про мене</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#">Проєкти</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#">Навички</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#">Контакти</a>
                        </li>
                    </nav>
                </div>
            </div>
        </header>
        <main class="create-post">
            <div class="container">
                <form action="../index.php" method="post" class="create-post__content">
                    <div class="title-post-block">
                        <label class="title-post">Заголовок поста:</label>
                        <textarea class="title-post-input" placeholder="Привет мир!" name="title"></textarea>
                    </div>
                    <div class="content-post-block">
                        <label class="content-post">Содержание поста:</label>
                        <textarea class="content-post-input" placeholder="Поведай этому миру что-то..." name="content"></textarea>
                    </div>
                    <div class="upload-post-block">
                        <button class="post__link btn-post" type="submit" name="upload">Опубликовать пост!</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <?php

    ?>
</body>

</html>