import $ from 'jquery';
window.$ = window.jQuery = $;
var urlBuscar = "search"

$(document).ready(function(){
    var url = $(location).attr('href');
    const urlSplit = url.split("/");
    var fecha = new Date();    

    console.log(urlSplit);
    if(urlSplit.find(element => element == 'prestamos') && urlSplit.find(element => element == 'edit'))
    {        
        urlBuscar = '../search'
        buscarCliente(urlBuscar);
        generarCuotas();
    }
    else{        
        $("#desembolso").val(formatDate(fecha));
    }   
    

    $( "#buscar_cliente" ).click(function() {
        var url = $(location).attr('href');
        const urlSplit = url.split("/");        
        if(urlSplit.find(element => element == 'prestamos') && urlSplit.find(element => element == 'edit'))
        {
            urlBuscar = '../search';
            
        }
        else{
            urlBuscar = 'search'
            buscarCliente(urlBuscar);
        }       
        
    });

    $("#btnBuscarXNumOperacion").click(function(){
        var datos = $("#formBuscarXNumOperacion").serialize();
        buscarXNOperacion(datos);
    })

    function buscarXNOperacion(datos){               
        $.ajax({
            method: "GET",
            url: "buscarXNumOperacion",
            data: datos
          })
            .done(function( msg ) {
              alert( "Data Saved: " + msg );
            });
    }    

    function buscarCliente(urlBuscar){
        $(".remove").remove();        
        var datos = $("#form_buscar_cliente").serialize();
        var datos_busqueda = $("#div_busqueda");        
        $.ajax({
            method: "GET",
            url: urlBuscar,
            data: datos
          })
            .done(function( clientes ) {            
                if(clientes.length>0)
                {
                    clientes.forEach(function(elemento) {
                        console.log(elemento);                
                        datos_busqueda.append('<input type="hidden" class="form-control remove" id="clientes_id" name="clientes_id" value="'+elemento['NumDoc']+'" readonly>');
                        datos_busqueda.append('<div style="padding-bottom:15px" class="row remove"><div class="col-md-3"><label>Nombre</label></div><div class="col-md-5"><input type="text" class="form-control" id="nombre" name="nombre" value="'+elemento['Nombre']+'" readonly></div><div class="col-md-2"><button type="button" id="btn_editar_cliente" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button></div><div class="col-md-2"><button onclick="getCuotasCliente()" type="button" class="btn btn-primary"><i class="fa-solid fa-bars"></i></button></div></div>');
                        datos_busqueda.append('<div class="mb-3 row remove"><label class="col-sm-3 col-form-label">Apellido</label><div class="col-sm-9"><input type="text" class="form-control" id="apellido" value="'+elemento['Apellido']+'" readonly></div></div>');
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
        
      }    
  
    
    window.getCuotasCliente = function(){
        var url = $(location).attr('href');
        const urlSplit = url.split("/");
        var buscarUrl;
        if(urlSplit.find(element => element == 'prestamos') && urlSplit.find(element => element == 'edit'))
        {
            buscarUrl = '';
        }else{
            buscarUrl = 'cuotasCliente';
        }
        
        $(".removeCuotas").remove();    
        var clientes_id = $("#clientes_id").val();
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var div_cuotas_cliente = $("#div_cuotas_cliente");  
        var tabla_cuotas = '<div class="table-responsive remove_table_cuota"><table class="table"><thead><tr><th scope="col">#</th><th scope="col">Prestamo con interes</th><th scope="col">Saldo</th><th scope="col">Cuotas</th><th scope="col">Forma Pago</th><th scope="col">Fecha</th><th scope="col">Detalle</th></tr></thead><tbody>';
        $.ajax({
            method: "GET",
            url: buscarUrl,
            data: { clientes_id: clientes_id }
          })
            .done(function( prestamosXCliente ) {
              //alert( "Data Saved: " + msg );
              if(prestamosXCliente.length>0)
                {
                    $(".remove_table_cuota").remove();
                    var i = 0;
                    prestamosXCliente.forEach(function(elemento) {            
                        i++
                        div_cuotas_cliente.append(elemento);
                        tabla_cuotas += ('<tr><td>'+i+'</td><td>'+elemento['capital_total']+'</td><td>'+elemento['saldo']+'</td><td>'+elemento['num_cuota']+'</td><td>'+elemento['form_pago']+'</td><td>'+elemento['fecha_registro']+'</td><td><button type="button" class="btn btn-success"><i class="fa-solid fa-bars"></i></button></td></tr>');
                    });
                    tabla_cuotas += '</tbody></table></div>';
                    div_cuotas_cliente.append(tabla_cuotas);
                }
                else{
                    $(".remove_table_cuota").remove();
                    $(".removeAlerta").remove();
                    div_cuotas_cliente.append('<div class="removeAlerta"><div class="alert alert-danger d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg><div>El cliente '+nombre + " "+ apellido +' no tiene prestamos</div></div></div>')
                    
                }
              
            });
    }    
   
    
    $('select').on('change', function() {
        $("#agregar_tabla").html("");
    });
    $( "#mora" ).keyup(function() {
        calcularPagoCuota();               
    });
    $( "#otros" ).keyup(function() {
        calcularPagoCuota();               
    });

    function calcularPagoCuota(){
        let mora = $("#mora").val();
        let otros = $("#otros").val();

        if(mora == ""){
            mora = 0;
        }
        if(otros == ""){
            otros = 0;
        }        
        let montoPagar = $("#montoPagar").val();        
        let sumarCampos = parseFloat(mora) + parseFloat(otros) + parseFloat(montoPagar);
        $("#total").val(sumarCampos.toFixed(2))        
        
    }

    window.modalPagar = function(cuota,num_cuota,saldo,totalPagoPMO){
        pagarCuota(cuota, num_cuota,saldo, totalPagoPMO);
    }

    function pagarCuota(cuota, num_cuota, saldo, totalPagoPMO){  
        console.log(num_cuota, saldo, totalPagoPMO)
        $("#mora").val("");
        $("#otros").val("");  
        $("#id_pago").val(cuota['id']);
        $("#num_cuota").val(num_cuota);
        $("#saldo").val(saldo);
        $("#totalPagoPMO").val(totalPagoPMO);
        $("#numero").val(cuota['numero']);
        $("#prestamos_id").val(cuota['prestamos_id']);
        $('#montoPagar').val(cuota['total'].toFixed(2));
        $("#total").val(cuota['total'].toFixed(2))
        $("#titulo_pagar").html("<center><strong><h4 style='color:red'>Monto a pagar : "+cuota['total'].toFixed(2)+"</h4></strong></center>")        
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
    
    let btnCronograma = $("#cronograma");

    btnCronograma.click(function(){
        generarCuotas();        
    })
    
    function generarCuotas(){            
        
        let monto = $("#capital").val();
        let num_cuotas = $("#num_cuotas").val();
        let tea = $("#tea_select").val();
        let form_pago_select = $("#form_pago_select").val();
        let desembolso = $("#desembolso").val();
        //Obtener el div para insetar los datos generados
        let div_table = $("#agregar_tabla");
    
        var table;
        
        //console.log(monto + " "+ num_cuotas + " "+tea + " " + form_pago_select+" "+desembolso);
    
        if(monto != "" && num_cuotas !="" && tea !="")
        {            
        //btnCronograma.addClass( "activo" );

        calcularPago(monto, num_cuotas, tea, form_pago_select, desembolso);
    
        function calcularPago(monto, num_cuotas, tea, form_pago_select, desembolso){
            let fecha_inicial = desembolso;
            let cuota_pagar_sin_interes, cuota_pagar_total, interes,total_pago, total_interes;
            cuota_pagar_sin_interes = monto / num_cuotas;        
    
            total_interes = monto * tea/100;
            total_pago = parseFloat(total_interes) + parseFloat(monto);
            cuota_pagar_total = total_pago / num_cuotas;       
    
            interes = parseFloat(cuota_pagar_total) - parseFloat(cuota_pagar_sin_interes);
    
            table = '<div class="table-responsive"><table class="table table-striped"><thead><tr><th scope="col">N</th><th scope="col">Fecha Vencimiento</th><th scope="col">Monto</th><th scope="col">Interes</th><th scope="col">Total</th></tr></thead><tbody>';
    
            
    
            for (let index = 0; index < num_cuotas; index++) {
    
                fecha_inicial = sumarDias(fecha_inicial, form_pago_select);
                
                table += '<tr><td scope="col"><input class="styleinput" readonly type="text" name="numero[]" value="'+(index + 1)+'"></td><td scope="col"><input class="styledate" readonly type="text" name="fecha_limite[]" value="'+fecha_inicial+'"></td><td scope="col"><input class="styledate" readonly type="text" name="monto[]" value="'+cuota_pagar_sin_interes.toFixed(2)+'"></td><td scope="col"><input class="styledate" readonly type="text" name="interes[]" value="'+interes.toFixed(2)+'"></td><td scope="col"><input class="styledate" readonly type="text" name="total[]" value="'+cuota_pagar_total.toFixed(2)+'"></td></tr>';
                
            }
            table += '<tr><td colspan="3"></td><td>Total</td><td>'+total_pago.toFixed(2)+'</td></tr>';
            table += '</tbody></table></div>';
            table += '<input type="hidden" value="'+total_interes+'" name="total_interes">'
            table += '<input type="hidden" value="'+total_pago+'" name="capital_total">'
            table += '<button type="submit" class="btn btn-primary">Enviar</button>';            
            
            div_table.html(table);            
            
        }
        }else
        {            
            var agregar_tabla = document.getElementById("agregar_tabla");
            agregar_tabla.innerHTML = '<div class="alert alert-danger d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg><div>Rellene el formulario</div></div>'
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
         
    }
    function formatDate(date) {
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();
    
        if (month.length < 2) 
            month = '0' + month;
        if (day.length < 2) 
            day = '0' + day;
    
        return [year, month, day].join('-');
    }
});












