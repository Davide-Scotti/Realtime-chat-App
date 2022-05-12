<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
            <li class="header__menu__item"><a href="index.html">Home</a></li>
            <li class="header__menu__item"><a href="single.html">Single</a></li>
            <li class="header__menu__item"><a href="page.html">Page</a></li>
            <li class="header__menu__item"><a href="">Item</a></li>
            <li class="header__menu__item"><a href="">Item</a></li>
        </ul>
    </header>

    <section class="cover cover--single">
        <div class="cover__filter"></div>
        <div class="cover__caption">
            <div class="cover__caption__copy">
                <h1>Primary message of the home</h1>
            </div>
        </div>
    </section>

    <article class="single">
        <div class="single__copy">
            <h2 class="single__copy__title">Subtitle of the home page</h2>
            <p class="single__copy__meta"> 23.05.2021, in <a href="">News</a>  by <a href=""> Davide</a></p>
            <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
        </div>
    </article>

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