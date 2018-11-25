
(function(){

var actualizar = function(){
	var fecha = new Date(),
	horas = fecha.getHours(),
	ampm,
	minutos = fecha.getMinutes(),
	seg = fecha.getSeconds(),
	diaSemana = fecha.getDay(),
	dia = fecha.getDate(),
	mes = fecha.getMonth(),
	year = fecha.getFullYear();

	var pHoras = document.getElementById('horas'),
		pAMPM = document.getElementById('ampm'),
		PMinutos = document.getElementById('minutos'),
		pSegundos = document.getElementById('seg'),
		pDiaSemana = document.getElementById('diaSemana'),
		pDia = document.getElementById('dia'),
		pMes = document.getElementById('mes'),
		pYear = document.getElementById('year');

		if(horas >=12){
			
			horas = horas -12;
			ampm = 'pm';
		}else{
			ampm = 'am';
		};

		if(horas==0){
			
			horas = 12;

		};

		if(minutos<10){minutos = "0" + minutos};
		if(seg<10){seg = "0" + seg};

	var semana =  ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
	pDiaSemana.textContent = semana[diaSemana];
	var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
	pMes.textContent = meses[mes];
	pHoras.textContent = horas;
	PMinutos.textContent = minutos;
	pSegundos.textContent = seg;
	pYear.textContent = year;
	pAMPM.textContent = ampm;
};

	actualizar();
	var interval = setInterval(actualizar,1000);

}())