/* ici seront mis tous les codes pour l'affichages des images depuis un dossier */

/*affichage des images depuis le dossier img/electricite*/

function display_image(src, width, height, alt) {
    var a = document.createElement("img");
    a.src = src;
    a.width = width;
    a.height = height;
    a.alt = alt;
    document.body.appendChild(a);

display_image('img/electricite/codng1.png', 
                 276, 
                 110, 
                 'codng');
display_image('img/electricite/coding2.jpg', 
                 276, 
                 110, 
                 'coding2');
display_image('img/electricite/html.jpg', 
                 276, 
                 110, 
                 'html1');
display_image('img/electricite/html2.jpg', 
                 276, 
                 110, 
                 'html2');

}