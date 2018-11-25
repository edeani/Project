function mueveReloj(){
    momentoActual = new Date();
    hora = momentoActual.getHours();
    minuto = momentoActual.getMinutes();
    segundo = momentoActual.getSeconds();

    var sufijo = 'am';
    if (hora>12){
        hora = hora - 12;
        sufijo = 'pm';
    }
    horaImprimible = hora + " : " + minuto + " : " + segundo + " " + sufijo;

    document.form_reloj.reloj.value = horaImprimible;

    // language=JavaScript
    setTimeout("mueveReloj()",1000);
}
function Mfecha(){
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
    var f=new Date();
    fechaimprimible = diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
    document.form_fecha.fecha.value = fechaimprimible;
}
function change_State(code){
    window.location.href = "~/../../Controller/Services/svc_ChangeState.php?code="+code;
}
$(document).ready(function() {
    $('#example').DataTable();
} );


