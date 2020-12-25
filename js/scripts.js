HTMLCollection.prototype.addEventListener = function() {
    for(var i = 0; i < this.length; i++) {
        Element.prototype.addEventListener.apply(this[i], Array.prototype.slice.call(arguments));
    }
};   
document.getElementsByClassName('menu-icon').addEventListener('mouseover', () => {
    let dropArrow = document.getElementsByClassName('drop-arrow')[0];
    dropArrow.style.cssText = `
    transform:rotate(180deg);
    transition:1s;
    `;
    let burger = document.getElementsByClassName('nav-header')[0];
    burger.style.cssText = `
        display:flex;
        position: absolute;
        right:0px;
        top:105px;
        margin-right:0;
        flex-direction: column;
        background-color: #ffff;
        justify-content:center;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        border:1px solid rgba(0, 0, 0, 0.24);
        border-top:none;

    `;
    let navItem = document.getElementsByClassName('nav-item');
    for (let i = 0; i < navItem.length; i++){
        navItem[i].style.cssText = `
        margin-bottom:10px;
        margin-right:0;
        font-weight: 600;
        padding:0 44px;
        padding-left:43px;
        `;
    };
    let btn = document.getElementsByTagName('button')[0]
    btn.style.cssText = `
        background: none;
        padding:0;
        color:#1D1F24;
        filter:none;
    `;
  
    //  ебанная не работающая функция, потому что forEach is not a function
    // nav.forEach((navItem) => { navItem.style.cssText = `     margin-bottom:10px; `; });  
});
document.getElementsByClassName('menu-icon').addEventListener('mouseout', () => {
    let dropArrow = document.getElementsByClassName('drop-arrow')[0];
    dropArrow.style.cssText = `
    transform:rotate(0deg);
    transition:1s;
    `;
    let burger = document.getElementsByClassName('nav-header')[0];
    burger.style.cssText = `display:none`;
});