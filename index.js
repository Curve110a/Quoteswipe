const slider = document.getElementById("menuLip");
const menu = document.getElementById("menu");

slider.addEventListener('click', event => {
    if (menu.clientHeight == 60) {
            menu.style.height = "5px";
        } else if (menu.clientHeight == 5){
            menu.style.height = "60px";
        }

    } );