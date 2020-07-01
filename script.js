window.onload = function(){
    /* on rajoute un eventlistner pour savoir quand le dom est chargé*/
    document.addEventListener("DOMContentLoaded", function(event) {
        /*Un fois le dom chargé on commence notre scope*/
        console.log('loaded')
        /*on stock dans une variable un élément html*/
        const elem = document.getElementById("b")
        /*on log cet élément debug*/
        console.log(elem)
        /*On change son background via sa class*/
    });
    
    document.addEventListener("click", function(event){
        console.log('loaded')
        const elem = document.getElementById("b")
        console.log(elem)
        elem.classList.toggle("orange")/*pour créer l'effet répétition*/
    });
}