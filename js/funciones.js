var arrDivs = ['divMainDashboard', 'divMainProductos', 'divMainVentas', 'divMainUsuarios', 'divMainReportes'];
function muestraDivMenuPrin(div){
  for(var i = 0; i < arrDivs.length; i++){
    if(arrDivs[i] === div){
      document.getElementById(arrDivs[i]).style.visibility="visible";
      document.getElementById(arrDivs[i]).style.height="auto";
    }else{
      document.getElementById(arrDivs[i]).style.visibility="hidden";
      document.getElementById(arrDivs[i]).style.height="0px";
    }
  }
}


function obtieneFechaActual(){
    var fecha = new Date();
    var annio = fecha.getFullYear();
    var mes = fecha.getMonth()+1;
    var dia = fecha.getDate();
    mes = mes < 10?"0"+mes:mes;
    dia = dia < 10?"0"+dia:dia;
    return annio+"-"+mes+"-"+dia;
}

// *** Author: Wael Sidawi
// ****  Deactive Back Button ****
var history_api = typeof history.pushState !== 'undefined';
// history.pushState must be called out side of AngularJS Code
if ( history_api ) history.pushState(null, '', '#fijo');
// After the # you should write something, do not leave it empty
