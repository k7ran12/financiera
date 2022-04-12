import $ from 'jquery';
window.$ = window.jQuery = $;



$( "#buscar_cliente" ).click(function() {
    $(".remove").remove();
    var datos = $("#form_buscar_cliente").serialize();
    var datos_busqueda = $("#div_busqueda");
    $.ajax({
        method: "GET",
        url: "search",
        data: datos
      })
        .done(function( clientes ) {            
            if(clientes.length>0)
            {
                clientes.forEach(function(elemento) {
                    console.log(elemento);                
                    datos_busqueda.append('<input type="hidden" class="form-control remove" id="clientes_id" name="clientes_id" value="'+elemento['id']+'" readonly>');
                    datos_busqueda.append('<div style="padding-bottom:15px" class="row remove"><div class="col-md-3"><label>Nombre</label></div><div class="col-md-5"><input type="text" class="form-control" id="nombre" name="nombre" value="'+elemento['Nombre']+'" readonly></div><div class="col-md-2"><button type="button" id="btn_editar_cliente" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></div><div class="col-md-2"><button onclick="myFunction()" type="button" class="btn btn-primary"><i class="fa-solid fa-bars"></i></button></div></div>');
                    datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">Apellido</label><div class="col-sm-9"><input type="text" class="form-control" id="" value="'+elemento['Apellido']+'" readonly></div></div>');
                    datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">Documento</label><div class="col-sm-9"><input type="text" class="form-control" id="" value="'+elemento['NumDoc']+'" readonly></div></div>');
                    datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">Region</label><div class="col-sm-9"><input type="text" class="form-control" id="" value="'+elemento['Region']+'" readonly></div></div>');
                    datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">Provincia</label><div class="col-sm-9"><input type="text" class="form-control" id="" value="'+elemento['Provincia']+'" readonly></div></div>');
                    datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">Distrito</label><div class="col-sm-9"><input type="text" class="form-control" id="" value="'+elemento['Distrito']+'" readonly></div></div>');
                    datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">Direccion</label><div class="col-sm-9"><input type="text" class="form-control" id="" value="'+elemento['Direccion']+'" readonly></div></div>');
                    datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">NumTelefono</label><div class="col-sm-9"><input type="text" class="form-control" id="" value="'+elemento['NumTelefono']+'" readonly></div></div>');
                    datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">CorreoElec</label><div class="col-sm-9"><input type="text" class="form-control" id="" value="'+elemento['CorreoElec']+'" readonly></div></div>');
                    datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">tipodocumentos</label><div class="col-sm-9"><input type="text" class="form-control" id="" value="'+elemento['tipodocumentos_id']+'" readonly></div></div>');
                });
                var div_cronograma = $("#div_cronograma").detach();
                var div_container_simulador_cuotas = $("#div_container_simulador_cuotas");
                div_container_simulador_cuotas.append(div_cronograma);
            }
            else{
                var div_cronograma = $("#div_cronograma").detach();
                $(".remove").remove();
                var div_row_izquierda = $("#div_row_izquierda");
                div_row_izquierda.append(div_cronograma);
            }
    });
    
  });

window.myFunction = function(){
    var clientes_id = $("#clientes_id").val();    
    $.ajax({
        method: "GET",
        url: "cuotasCliente",
        data: { clientes_id: clientes_id }
      })
        .done(function( prestamosXCliente ) {
          //alert( "Data Saved: " + msg );
          prestamosXCliente.forEach(function(elemento) {
            console.log(elemento); 
          });
        });
}

window.Menu = function (code) {
    switch (code) {
        case 1:          
          window.location.href = "prestamos/create";
            break;
        case 2:
            window.location.href = "clientes";
            break;        
        case 3:
            window.location.href = "prestamos/";
            break;
        case 4:
            window.location.href = "clientes";
            break;
        case 5:
            window.location.href = "clientes";
            break;
        case 6:
            window.location.href = "clientes";
          break;
        default:
            window.location.href = "home";
          break;
      }
}

let btnCronograma = document.getElementById("cronograma");

btnCronograma.onclick = function(event) { 
    let monto = document.getElementById("capital").value;
    let num_cuotas = document.getElementById("num_cuotas").value;
    let tea = document.getElementById("tea_select").value;
    let form_pago_select = document.getElementById("form_pago_select").value;
    let desembolso = document.getElementById("desembolso").value;
    //Obtener el div para insetar los datos generados
    let div_table = document.getElementById("agregar_tabla");

    var table;
    //console.log(monto + " "+ num_cuotas + " "+tea + " " + form_pago_select+" "+desembolso);

    calcularPago(monto, num_cuotas, tea, form_pago_select, desembolso);

    function calcularPago(monto, num_cuotas, tea, form_pago_select, desembolso){
        let fecha_inicial = desembolso;
        let cuota_pagar_sin_interes, cuota_pagar_total, interes,total_pago, total_interes;
        cuota_pagar_sin_interes = monto / num_cuotas;        

        total_interes = monto * tea/100;
        total_pago = parseInt(total_interes) + parseInt(monto);
        cuota_pagar_total = total_pago / num_cuotas;        

        interes = parseFloat(cuota_pagar_total) - parseFloat(cuota_pagar_sin_interes);

        table = '<table class="table table-striped"><thead><tr><th scope="col">N</th><th scope="col">Fecha Vencimiento</th><th scope="col">Monto</th><th scope="col">Interes</th><th scope="col">Total</th></tr></thead><tbody>';

        

        for (let index = 0; index < num_cuotas; index++) {

            fecha_inicial = sumarDias(fecha_inicial, form_pago_select);
            
            table += '<tr><td scope="col"><input class="styleinput" readonly type="text" name="numero[]" value="'+(index + 1)+'"></td><td scope="col"><input class="styledate" readonly type="text" name="fecha_limite[]" value="'+fecha_inicial+'"></td><td scope="col"><input class="styledate" readonly type="text" name="monto[]" value="'+cuota_pagar_sin_interes.toFixed(2)+'"></td><td scope="col"><input class="styledate" readonly type="text" name="interes[]" value="'+interes.toFixed(2)+'"></td><td scope="col"><input class="styledate" readonly type="text" name="total[]" value="'+cuota_pagar_total.toFixed(2)+'"></td></tr>';
            
        }
        table += '<tr><td colspan="3"></td><td>Total</td><td>'+total_pago.toFixed(2)+'</td></tr>';
        table += '</tbody></table>';
        table += '<input type="hidden" value="'+total_interes+'" name="total_interes">'
        table += '<input type="hidden" value="'+total_pago+'" name="capital_total">'
        table += '<button type="submit" class="btn btn-primary">Enviar</button>';
 
        div_table.innerHTML = table;
        //let fecha_resultado;
        
    }

    function sumarDias(date, form_pago_select){
        var res = new Date(date);

        if(form_pago_select == 'mensual')
        {   
                  
            res.setMonth(res.getMonth() + 1);
            var newFecha = new Date(res).toISOString().split("T")[0];
            
            return newFecha;
        }
        else if(form_pago_select == 'quincenal')
        {      
            res.setDate(res.getDate() + 15);
            var newFecha = new Date(res).toISOString().split("T")[0];
            return newFecha;
        }
        else if(form_pago_select == 'semanal')
        {     
            res.setDate(res.getDate() + 7);
            var newFecha = new Date(res).toISOString().split("T")[0];
            return newFecha;
        }
        else if(form_pago_select == 'diario')
        {   
            if(res.getDay() == 5){
                res.setDate(res.getDate() + 2);
                var newFecha = new Date(res).toISOString().split("T")[0];
                return newFecha;
                //return "Domingo";                
            }
            else{
                res.setDate(res.getDate() + 1);
                var newFecha = new Date(res).toISOString().split("T")[0];
                return newFecha;
            }
            
        }
    }
     
};






