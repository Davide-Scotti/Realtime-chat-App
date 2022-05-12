<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SecretChat App</title>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="style.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>  
<body>
    <header class="header clearfix">
        <a href="" class="header__logo">logo</a>
        <a href="" class="header__icon-bar">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <ul class="header__menu animate">
            <li class="header__menu__item"><a href="index.php">Home</a></li>
            <li class="header__menu__item"><a href="single.php">Project</a></li>
            <li class="header__menu__item"><a href="page.php">About me</a></li>
        </ul>
    </header>

    <section class="cover">
        <div class="cover__filter"></div>
        <div class="cover__caption">
            <div class="cover__caption__copy">
                <h1>SecretChat Application</h1>
                <h2>encrypted chat without constraints</h2>
                <a href="./chat_app/index.php" class="button">Start to chat!</a>
            </div>
        </div>
    </section>

    <section class="cards clearfix">
        <div class="card">
            <img class="card__image" src="https://source.unsplash.com/400x260/?nature" alt="Nature">
            <div class="card__copy">
                <h3>Realtime-Chat App</h3>
                <p>Realtime chats are the most popular and fastest method of communication nowadays!
                They allow you to connect with people thousands of kilometers away without moving a muscle</p>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="https://source.unsplash.com/400x260/?food" alt="Food">
            <div class="card__copy">
                <h3>Title Card</h3>
                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="https://source.unsplash.com/400x260/?people" alt="People">
            <div class="card__copy">
                <h3>Title Card</h3>
                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            </div>
        </div>
    </section>

    <section class="banner clearfix">
        <div class="banner__image"></div>
        <div class="banner__copy">
            <div class="banner__copy__text">
                <h3>Banner Title</h3>
                <h4>Banner Subtitle</h4>
                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.</p>
            </div>
       </div>
    </section>

    <section class="cards clearfix">
        <div class="card">
            <img class="card__image" src="https://source.unsplash.com/400x260/?nature" alt="Nature">
            <div class="card__copy">
                <h3>Title Card</h3>
                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="https://source.unsplash.com/400x260/?food" alt="Food">
            <div class="card__copy">
                <h3>Title Card</h3>
                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="https://source.unsplash.com/400x260/?people" alt="People">
            <div class="card__copy">
                <h3>Title Card</h3>
                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            </div>
        </div>
    </section>

    <section class="banner clearfix">
        <div class="banner__copy">
            <div class="banner__copy__text">
                <h3>Banner Title</h3>
                <h4>Banner Subtitle</h4>
                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa.</p>
            </div>
       </div>
       <div class="banner__image"></div>
    </section>

    <footer class="footer">
        <p>Copiright - 2021 ScottiDesign.com</p>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $(".header__icon-bar").click(function(e){

                $(".header__menu").toggleClass('is-open');
                e.preventDefault();
            });
        });
    </script>
</body>
</html>