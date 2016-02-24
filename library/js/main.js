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
        serviceTriggers : document.getElementsByClassName("trigger-service"),
        teammateNames : document.querySelectorAll(".teammates a"),
        teammateBios : document.querySelectorAll(".teammate-bio")
    };

    constants = {
        menuClass : "menu-on",
        serviceTriggerClass : "open",
        teammateClass : "focus"
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
            } else {
                this.parentElement.classList.add( constants.serviceTriggerClass );
            }
        },
        toggleTeammateVisibility : function( e ){
            var index = +this.getAttribute("data-idx");
            for ( i = 0; i < els.teammateBios.length; i++ ) {
                els.teammateBios[i].classList.remove(constants.teammateClass);
                els.teammateNames[i].classList.remove(constants.teammateClass);
            }
            els.teammateBios[index].classList.add(constants.teammateClass);
            this.classList.add(constants.teammateClass);
        }
    };

    if ( els.hero ) {
        lazyImg.src = els.hero.getAttribute("data-bg-url");
        lazyImg.onload = fn.heroImgLoad;
    }

    els.triggerMenu.addEventListener( "click", fn.toggleMenu );
    for ( i = 0; i < els.serviceTriggers.length; i++ ) {
        els.serviceTriggers[i].addEventListener( "click", fn.toggleServiceVisibility );
    }

    for ( i = 0; i < els.teammateNames.length; i++ ) {
        els.teammateNames[i].addEventListener( "click", fn.toggleTeammateVisibility );
    }

})();
