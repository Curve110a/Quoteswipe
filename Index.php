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

        <!-- vlakken links en rechts waar quotes in worden geschoven -->
        <div id="leftSwipe"></div>
        <div id="rightSwipe"></div>

        <!-- getoonde quote -->
        <div id="quote" ></div>

        <div id="menuContainer">
            <!-- Menu: -->
            <div id="menu">
                <!-- lipje boven menu -->
                <img id="menuLip" src="./styles/img/lip.png" alt="">

                <div id="iconContainer">
                    <!-- <img class="icon" src="./styles/img/icons/share" alt="share"> -->


                    <!-- Begin icons -->
                    <i class="svg fas fa-share" ></i>
                    <i class="svg fas fa-user" onclick="window.location='./account.php';"></i>
                    <?php echo file_get_contents("./styles/img/icons/qm.svg"); ?>
                    <i class="svg fas fa-cog" onclick="window.location='./settings.php';"></i>
                    <form id="paypalForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input autocomplete="off" type="hidden" name="cmd" value="_s-xclick" />
                        <input autocomplete="off" type="hidden" name="hosted_button_id" value="PZQQZP3G62NCL" />
                        <button class="paypalButton tooltip"><i class="svg fab fa-paypal" style="font-weight: 100;margin-top: -7px;"></i></button>
                    </form>
                    <!-- einde icons -->

                </div>
            </div>
        </div>

    </main>
</body>
<!-- link naar javascript file -->
<script src="index.js"></script>

</html>