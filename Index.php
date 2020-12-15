<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-zrnmn8R8KkWl12rAZFt4yKjxplaDaT7/EUkKm7AovijfrQItFWR7O/JJn4DAa/gx" crossorigin="anonymous">
    <title>QuoteSwipe</title>
</head>

<body>
    <main>
        <div class="title">Quote<span class="titleRed">SWIPE</span></div>

        <div id="leftSwipe"></div>
        <div id="rightSwipe"></div>

        <div id="quote"></div>

        <div id="menuContainer">
            <div id="menu">
            <img id="menuLip" src="./styles/img/lip.png" alt="">

                <div id="iconContainer">
                    <!-- <img class="icon" src="./styles/img/icons/share" alt="share"> -->
                    <i class="svg fas fa-share"></i>
                    <img class="icon" src="./styles/img/icons/account" alt="account">
                    <img class="icon" src="./styles/img/icons/quotemaker" alt="QM" onclick="window.location='https://quotemaker.spreadthequote.nl';">
                    <img class="icon" src="./styles/img/icons/settings" alt="settings">
                    <img class="icon" src="./styles/img/icons/paypal" alt="paypal">
                    
                </div>
            </div>
        </div>

    </main>
</body>
<script src="index.js"></script>
</html>