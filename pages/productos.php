<?php



 ?>
 <div id="divMainProductos" class="container">
   <div class="card">
     <div class="card-header" id="divLstProductos">
       <h5 class="mb-0">
         <button class="btn btn-link" data-toggle="collapse" data-target="#collapseLstProd" aria-expanded="true" aria-controls="collapseLstProd">
           Lista de Productos
         </button>
       </h5>
     </div>
     <div id="collapseLstProd" class="collapse show" aria-labelledby="divLstProductos" data-parent="divMainProductos">
       Aqui ira la lista de productos
     </div>
   </div>
   <div class="card">
     <div class="card-header" id="divEditProducto">
       <h5 class="mb-0">
         <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEditProd" aria-expanded="true" aria-controls="collapseEditProd">
           Edicion de Productos
         </button>
       </h5>
     </div>
     <div id="collapseEditProd" class="collapse" aria-labelledby="divEditProducto" data-parent="divMainProductos">
       <form>
         <table class="table">
           <tr>
             <td>Id: </td><td><input type="text" id="txtIdProducto" name="txtIdProducto" class="form form-control" disabled=true style="text-align: right" /></td>
             <td>Usuario: </td><td><input type="text" id="txtIdUsuario" name="txtIdUsuario" class="form form-control" disabled=true style="text-align: right"  /></td>
           </tr>
           <tr>
             <td>Producto:</td><td><input type="text" id="txtProducto" name="txtProducto" class="form form-control"  /></td>
             <td>Estatus:</td><td><select id="cmbEstatus" name="cmbEstatus"  class="form form-control" ><option value="1">Activo</option><option value="0">Inactivo</option></select></td>
           </tr>
           <tr>
             <td>Descripcion:</td><td colspan="3"><input type="text" id="txtDescripcion" name="txtDescripcion" class="form form-control"  /></td>
           </tr>
           <tr>
             <td>Categoria:</td><td><select id="cmbTipo" name="cmbTipo"  class="form form-control" ><option value="1">Activo</option><option value="0">Inactivo</option></select></td>
             <td>Tipo:</td><td><select id="cmbSubtipo" name="cmbSubtipo"  class="form form-control" ><option value="1">Activo</option><option value="0">Inactivo</option></select></td>
           </tr>
           <tr>
             <td>Costo:</td><td><input type="text" id="txtCosto" name="txtCosto" class="form form-control" placeholder="0.00" style="text-align: right" /></td>
             <td>Venta:</td><td><input type="text" id="txtVenta" name="txtVenta" class="form form-control" placeholder="0.00" style="text-align: right" /></td>
           </tr>
           <tr>
             <td>IVA:</td><td><input type="text" id="txtIva" name="txtIva" class="form form-control" placeholder="0.00" style="text-align: right"  /></td>
             <td>IEPS:</td><td><input type="text" id="txtIeps" name="txtIeps" class="form form-control" placeholder="0.00" style="text-align: right"  /></td>
           </tr>
           <tr>
             <td>Descuento:</td><td><input type="text" id="txtDescuento" name="txtDescuento" class="form form-control" placeholder="0.00" style="text-align: right"  /></td>
             <td>Existencia:</td><td><input type="text" id="txtExistencia" name="txtExistencia" class="form form-control" placeholder="0.00" style="text-align: right"  /></td>
           </tr>
           <tr>
             <td>Comentarios:</td><td colspan="3"><input type="text" id="txtComentarios" name="txtComentarios" class="form form-control"  /></td>
           </tr>
           <tr>
             <td>Imagenes:</td><td colspan="3"><input type="file" id="txtArchivos" name="txtArchivos" class="form form-control" onchange="obtieneNombreArchivo()" /></td>
           </tr>
         </table>
       </form>
     </div>
   </div>
 </div>
