(function(){

    var els,
        constants,
        utils,
        fn,
        lazyImg = new Image();

    els = {
        hero : document.getElementById("hero")
    };

    constants = {};

    utils = {};

    fn = {
        heroImgLoad : function(){
            els.hero.style.backgroundImage = "url("+lazyImg.src+")";
            els.hero.removeAttribute("data-bg-url");
        }
    };

    lazyImg.src = els.hero.getAttribute("data-bg-url");
    lazyImg.onload = fn.heroImgLoad;

})();