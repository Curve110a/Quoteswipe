const slider = document.getElementById("menuLip");
const menu = document.getElementById( "menu" );
const quote = document.getElementById( "quote" );

// bij het klikken op het menu schuift het menu uit en in
slider.addEventListener('click', event => {
    if (menu.clientHeight == 60) {
            menu.style.height = "0px";
        } else if (menu.clientHeight == 0){
            menu.style.height = "60px";
        }

} );
    

// let currentDroppeble = null;

// quote.onmousedown = event =>
// {

//     let shiftX = event.clientX - quote.getBoundingClientRect().left;
//     let shiftY = event.clientY - quote.getBoundingClientRect().top;

//     quote.style.position = "absolute";
//     quote.style.zIndex = "999999";
//     // document.body.append( quote );
    
//     moveAt( event.pageX, event.pageY );
    
//     function moveAt(pageX, pageY) {
//         quote.style.left = pageX - shiftX + 'px';
//         quote.style.top = pageY - shiftY + 'px';
//     }
    
    
    
// }


let currentDroppable = null;

quote.onmousedown = function ( event )
{
        


      let shiftX = event.clientX - quote.getBoundingClientRect().left;
      let shiftY = event.clientY - quote.getBoundingClientRect().top;

    quote.style.position = 'absolute';
      quote.style.zIndex = 99;
      document.body.append(quote);

      moveAt(event.pageX, event.pageY);

      function moveAt(pageX, pageY) {
        quote.style.left = pageX - shiftX + 'px';
        quote.style.top = pageY - shiftY + 'px';
      }

      
      function onMouseMove(event) {
        moveAt(event.pageX, event.pageY);

        quote.hidden = true;
        let elemBelow = document.elementFromPoint(event.clientX, event.clientY);
        quote.hidden = false;

        if (!elemBelow) return;

        let droppableBelow = elemBelow.closest('.droppable');
        if (currentDroppable != droppableBelow) {
          if (currentDroppable) { // null when we were not over a droppable before this event
            leaveDroppable(currentDroppable);
          }
          currentDroppable = droppableBelow;
          if (currentDroppable) { // null if we're not coming over a droppable now
            // (maybe just left the droppable)
            enterDroppable(currentDroppable);
          }
        }
      }

      document.addEventListener('mousemove', onMouseMove);

    quote.onmouseup = function ()
    {
        document.removeEventListener('mousemove', onMouseMove);
        quote.onmouseup = null;
      };

    };

    function enterDroppable(elem) {
      elem.style.background = 'pink';
    }

    function leaveDroppable(elem) {
      elem.style.background = '';
    }

    quote.ondragstart = function() {
      return false;
    };