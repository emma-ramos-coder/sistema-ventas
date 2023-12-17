$(document).ready(function(){
    $("#agregar").click(function(){
        agregar();
    });
    $("#article_id").change(function(){
    var datosProducto = document.getElementById('article_id').value.split('_');
    $("#price").val(datosProducto[2]);
    $("#stock").val(datosProducto[1]);
    });

});

var cont=1;
var total = 0;
var subtotal = [];
$("#guardar").hide();


function agregar(){
    var datosProducto = document.getElementById('article_id').value.split('_');
    var article_id = datosProducto[0];
    var article = $("#article_id option:selected").text();
    var quantity = $("#quantity").val();
    var price = parseFloat($("#price").val());
    var stock = $("#stock").val();
    if(article_id!="" && quantity!="" && quantity>0 && price!=""){
        if (parseInt(stock) >= parseInt(quantity)){
            subtotal[cont] = parseFloat(quantity * price).toFixed(2);
            total = total + subtotal[cont];
            var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+'); "><i class="fa fa-times"></i>  Eliminar</button></td> <td><input type="hidden" name="article_id[]" value="'+article_id+'">'+article+'</td> <td><input type="hidden" name="price[]" value="'+parseFloat(price).toFixed(2)+'"><input class="form-control" type="number" value="'+parseFloat(price).toFixed(2)+'" disabled></td><td><input type="hidden" name="quantity[]" value="'+quantity+'"><input type="number" value="'+quantity+'" class="form-control" disabled></td><td class="text-end">'+parseFloat(subtotal[cont]).toFixed(2)+'</td></tr>';
            cont++
            limpiar();
            totales();
            evaluar();
            $("#detalles").append(fila);
        } else {
            Swal.fire({type: 'error', text: 'La cantidad a vender supera el stock.',})
        }
    } else {
        Swal.fire({type: 'error', text: 'Rellene todos los campos del detalle de la venta.',})
    }
}

function limpiar(){
    $("#quantity").val("");
}

function totales(){
    $("#total").html(total.toFixed(2));
    var total_impuesto = total * 0.18;
    var total_pagar_html = total + total_impuesto;
    $("#total_impuesto").html(total_impuesto.toFixed(2));
    $("#igv").html(total_impuesto.toFixed(2));
    $("#total_pagar_html").html(total_pagar_html.toFixed(2));
    $("#total_invoice").html(total_pagar_html.toFixed(2));
}

function evaluar(){
    if (total>0){
        $("#guardar").prop("disabled", false);
    }   else {
        $("#guardar").prop("disabled", true);
    }
}

function eliminar(index){
    total = total - subtotal[index];
    totales();
    $("#fila"+index).remove();
    evaluar();
}

