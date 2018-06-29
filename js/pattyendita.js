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


  pattyendita.controller('InicioSesionController', function($scope, $http, $window ){
      var datosraw = "";
      var inicioSesion = {
        txtLogin:''
        ,txtPass:''
      };

      $scope.iniciaSesion = function(){
        try{
          var param = encode64($scope.inicioSesion.txtLogin+"_"+$scope.inicioSesion.txtPass);
          $http({
              method: 'GET'
              ,url: 'actions/usuarios/inicioSesion.php?param='+param
          }).then(function successCallback(response) {
              $scope.datosraw = response.data;
              if(($scope.datosraw.res === "1")||($scope.datosraw.res === 1)){
                var rnd = Math.floor((Math.random() * 10000000) + 1);
                var param = encode64($scope.inicioSesion.txtLogin+"_"+rnd);
                $window.location.href="principal.php?param="+param;
              }
          }, function errorCallback(response) {
              alert("en el error: " + JSON.stringify(response));
          });


/*
          .success(function(data, status, header, config){
              try{
                  alert(JSON.stringify(data));
                  $scope.datosraw = data;
                  alert($scope.datosraw);
                  if((data.res === "1")||(data.res === 1)){
                    alert("lo hizo chido");
                  }
              }catch(ex){
                  console.log("excepcion " + ex.message);
              }
          }).error(function(data, status, header, config){
              alert("en el error: " + JSON.stringify(data))
          });
          */
        }catch(ex){
          console.log("excepcion General: " + ex.message);
        }
      }
  });


})();
