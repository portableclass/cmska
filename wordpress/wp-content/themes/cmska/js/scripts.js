HTMLCollection.prototype.addEventListener = function() {
    for(var i = 0; i < this.length; i++) {
        Element.prototype.addEventListener.apply(this[i], Array.prototype.slice.call(arguments));
    }
};

let menuList = document.getElementsByClassName('menu__list')[0];
let menuLink = document.getElementsByClassName('menu__link')[0];
let dropArrow = document.getElementsByClassName('drop-arrow')[0];
let subMenuList = document.getElementsByClassName('sub-menu__list')[0];
let SML = document.getElementsByClassName('sub-menu__link');

const toggleMenu = () => {
    menuList.classList.toggle("menu__list__active");
    menuLink.classList.toggle("menu__link__active");
    subMenuList.classList.toggle("sub-menu__list__active");
    for (let i = 0; i < SML.length; i++){
        SML[i].classList.toggle("sub-menu__link__active");
    };
}

const transformArrow = () => { 
    let dropArrow_is_active = menuLink.classList.contains('menu__link__active');
    let arrowDegTrue, arrowDegFalse;

    if ((window.innerWidth || document.documentElement.clientWidth) > 1024) {
        arrowDegTrue = 180;
        arrowDegFalse = 0;
    } else {
        arrowDegTrue = 0;
        arrowDegFalse = 180;
    }

    if (dropArrow_is_active) {
        dropArrow.style.cssText = `transform: rotate(${arrowDegTrue}deg); transition: 1s;`;
    } else {
        dropArrow.style.cssText = `transform: rotate(${arrowDegFalse}deg); transition: 1s;`;
    }
}

menuLink.addEventListener('click', e => {
    e.stopPropagation();
    transformArrow();
    toggleMenu();
});

document.addEventListener('click', e => {
    let target = e.target;
    let its_menuLink = target == menuLink;
    let menu_is_active = menuList.classList.contains('menu__list__active');
    
    if (!its_menuLink && menu_is_active) {
        transformArrow();
        toggleMenu();
    }
});

window.addEventListener(`resize`, e => {
    if ((window.innerWidth || document.documentElement.clientWidth) > 1024) {
        transformArrow();
        menuList.classList.remove("menu__list__active");
        menuLink.classList.remove("menu__link__active");
        subMenuList.classList.remove("sub-menu__list__active");
        for (let i = 0; i < SML.length; i++){
            SML[i].classList.remove("sub-menu__link__active");
        };
    }
}, false);
  
