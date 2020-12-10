const slider = document.getElementById( "menuLip" );
const menu = document.getElementById( "menu" );

slider.addEventListener( 'click', event =>
{
    if ( menu.style.height= "40%" )
    {
    menu.style.height = "0";        
    } else
    {
        menu.style.height = "40%";
    }


} );