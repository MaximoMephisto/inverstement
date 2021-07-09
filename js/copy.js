function Copiar(element) {
    //creamos un input que nos ayudara a guardar el texto temporalmente
    var $temp = $("<input>");
    //lo agregamos a nuestro body
    $("body").append($temp);
    //agregamos en el atributo value del input el contenido html encontrado
    //en el td que se dio click
    //y seleccionamos el input temporal
    $temp.val($(element).html()).select();
    //ejecutamos la funcion de copiado
    document.execCommand("copy");
    //eliminamos el input temporal
    $temp.remove();
}