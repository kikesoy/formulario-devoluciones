$(document).ready(function () {
    var rowCount = $('tbody tr').length+1;
    $.fn.newRow = function(){
        $('tbody').append('\
            <tr>\
                <td><a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td>\
                <td><input class="form-control factura" type="text" name="factura[]" id="factura' + rowCount + '" maxlength="16" ></td>\
                <td><input class="form-control codigo" type="text" name="codigo[]" id="codigo' + rowCount + '" maxlength="16" ></td>\
                <td><input class="form-control text-right precio" type="number" name="precio[]" id="precio' + rowCount + '" value="0.00" step="0.01" min="0" ></td>\
                <td><input class="form-control text-right cantidad" type="number" name="cantidad[]" id="cantidad' + rowCount + '" value="0" step="1" min="0" ></td>\
                <td><Select class="form-control causa" name="causa[]" id="causa' + rowCount + '">\
                        <option value="">Seleccione</option>\
                        <option value="C1: No le gustó la calidad">C1: No le gustó la calidad</option>\
                        <option value="C2: Producto defectuoso / No funciona">C2: Producto defectuoso / No funciona</option>\
                        <option value="C3: Daño en presentación">C3: Daño en presentación</option>\
                        <option value="C4: Despachado como muestra">C4: Despachado como muestra</option>\
                        <option value="C5: Problema en el transporte">C5: Problema en el transporte</option>\
                        <option value="C6: Cambio por defecto de fábrica">C6: Cambio por defecto de fábrica</option>\
                        <option value="G1: Definición Errónea (Cantidad, Aplicación, Descripción)">G1: Definición Errónea (Cantidad, Aplicación, Descripción)</option>\
                        <option value="G2: Facturado Doble / Cliente Errado">G2: Facturado Doble / Cliente Errado</option>\
                        <option value="G3: Error en el pedido ATC">G3: Error en el pedido ATC</option>\
                        <option value="G4: Error en el pedido Cliente Web">G4: Error en el pedido Cliente Web</option>\
                        <option value="G5: Error de vendedor">G5: Error de vendedor</option>\
                        <option value="G6: Variación de precio">G6: Variación de precio</option>\
                        <option value="G7: Recuperación de mercancía">G7: Recuperación de mercancía</option>\
                        <option value="G8: Cliente no tiene capacidad de pago">G8: Cliente no tiene capacidad de pago</option>\
                    </Select></td>\
                <td><input class="form-control text-right precio-total" type="text" name="precio_total[]" id="precio_total' + rowCount + '" readonly="readonly"></td>\
            </tr>');
        rowCount++; 
    };
    $(document).on('keyup click', 'table input', function() {
        $(this).trigger('recalc');
        });

    $(document).on('recalc', 'table tr', function() {
        var total = +$(this).find('.precio').val() * +$(this).find('.cantidad').val();
        $(this).find('.precio-total').val(total.toFixed(2));
        });

    $(document).on('recalc', 'table', function () {
        var subTotal = 0;
        var noProcede = $('#no_procede').val();
        var siProcede = 0;
        var fletePercent = $('#flete_percent').val()/100;
        var ivaPercent = $('#iva_percent').val()/100;
        $(this).find('.precio-total').each(function () {
            subTotal += +$(this).val();
            siProcede = subTotal-noProcede;
            flete = siProcede*fletePercent;
            iva = siProcede*ivaPercent;
            granTotal = siProcede+flete+iva;
        });
        $('#sub_total').val(subTotal.toFixed(2));
        $('#si_procede').val(siProcede.toFixed(2));
        $('#flete_amount').val(flete.toFixed(2));
        $('#iva_amount').val(iva.toFixed(2));
        $('#gran_total').val(granTotal.toFixed(2));
        });
        
    $(document).ready($.fn.newRow);
    $('.btn-success').click(function(e){
        e.preventDefault();
        $.fn.newRow();
    });  
    
    $(document).on('click', '.btn-danger', function(e) {
        e.preventDefault();
        var $table = $(this).closest('tbody');
        if($('tbody tr').length > 1 ){
            $(this).closest('tr').remove();
            $table.trigger('recalc');   
        }   
    });
});