var pattyendita;

(function(){
  pattyendita = angular.module('pattyendita', ['chieffancypants.loadingBar']);

  var gblidusuario = "";
  var gblemail = "";
  var gblnickname = "";
  var gblnombre = "";
  var gblapellidos = "";
  var gblfechanac = "";
  var gblmovil = "";
  var gblidestatus = "";
  var gblcomentarios = "";

  /*directiva de calendario sin formato*/
  pattyendita.directive('calendar', function(){
     return{
         require: 'ngModel',
         link: function(scope, el, attr, ngModel){
          $(el).datepicker({
              dateFormat: 'yy-mm-dd',
              onSelect: function(dateText){
                  scope.$apply(function (){
                      ngModel.$setViewValue(dateText);
                  });
              }
          });
         }
     };
  });

  /*Controller para la fecha ???*/
  pattyendita.controller('fechaController', function($scope){

  });


})();
