(function(){

    var els,
        constants,
        utils,
        fn,
        lazyImg = new Image();

    els = {
        body : document.body,
        hero : document.getElementById("hero"),
        triggerMenu : document.getElementById("trigger-menu"),
        serviceTriggers : document.getElementsByClassName("trigger-service")
    };

    constants = {
        menuClass : "menu-on",
        serviceTriggerClass : "open"
    };

    utils = {};

    fn = {
        heroImgLoad : function(){
            els.hero.style.backgroundImage = "url("+lazyImg.src+")";
            els.hero.removeAttribute("data-bg-url");
        },
        toggleMenu : function( e ){
            if ( els.body.classList.contains( constants.menuClass ) ) {
                els.body.classList.remove( constants.menuClass );
                this.innerHTML = "&#9776;";
            } else {
                els.body.classList.add( constants.menuClass );
                this.innerHTML = "&times;";
            }
        },
        toggleServiceVisibility : function( e ){
            if ( this.parentElement.classList.contains( constants.serviceTriggerClass ) ) {
                this.parentElement.classList.remove( constants.serviceTriggerClass );
                this.innerHTML = "+";
            } else {
                this.parentElement.classList.add( constants.serviceTriggerClass );
                this.innerHTML = "-";
            }
        }
    };

    if ( els.hero ) {
        lazyImg.src = els.hero.getAttribute("data-bg-url");
        lazyImg.onload = fn.heroImgLoad;
    }

    els.triggerMenu.addEventListener( "click", fn.toggleMenu );
    for ( i = 0; i < els.serviceTriggers.length; i++ ) {console.log(i);
        els.serviceTriggers[i].addEventListener( "click", fn.toggleServiceVisibility );
    }

})();