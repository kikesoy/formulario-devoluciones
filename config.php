<?php if (isset($_POST["submit"])) {
    $cli_nombre = $_POST['cli_nombre'];
    $cli_codigo = $_POST['cli_codigo'];
    $cli_telefono = $_POST['cli_telefono'];
    $cli_email = $_POST['cli_email'];
    $cli_transporte = $_POST['cli_transporte'];
    $cli_guia = $_POST['cli_guia'];
    $fac_fecha = $_POST['fac_fecha'];
    $fac_numero = $_POST['fac_numero'];
    $fac_vendedor = $_POST['fac_vendedor'];
    $fac_codigo = $_POST['fac_codigo'];
    $dev_enviar = $_POST['dev_enviar'];
    $dev_factura = $_POST['dev_factura'];
    $dev_transporte = $_POST['dev_transporte'];
    $dev_cod_vendedor = $_POST['dev_cod_vendedor'];
    $dev_motivo = $_POST['dev_motivo'];
    $dev_falla = $_POST['dev_falla'];
    $factura = $_POST['factura'];
    $codigo = $_POST['codigo'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $causa = $_POST['causa'];
    $precio_total = $_POST['precio_total'];
    $sub_total = $_POST['sub_total'];
    $no_procede = $_POST['no_procede'];
    $si_procede = $_POST['si_procede'];
    $flete_percent = $_POST['flete_percent'];
    $flete_amount = $_POST['flete_amount'];
    $iva_percent = $_POST['iva_percent'];
    $iva_amount = $_POST['iva_amount'];
    $gran_total = $_POST['gran_total'];
    $obs_observacion = $_POST['obs_observacion'];
    $human = intval($_POST['human']);
    $to = 'example@example.com';
    $subject = "$cli_codigo - $cli_nombre - Solicitud de Devolución";
    $headers = "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";
    $headers .= "From: <$cli_email>";
    $body = "<div style='width:100%;background-color:#f8f9fa!important;padding:20px 0'>
    <div style='width:800px;max-width:950px;background-color:#fff;margin:auto;padding:10px'>
    <table width='100%'>
    <tr>
    <td style='width:25%'>
    <img src='http://empresasnoffra.com/img/noffra-test-logo-1481744832.jpg' style='height:auto;width:100%'>
    </td>
    <td style='width:75%;text-align:right;'>
    <h1>Solicitud de Devolución</h1>
    <td>
    </tr>
    </table>
    <h2>Datos del Cliente</h2>
    <table width='100%'>
    <tr style='text-align:left'>
    <th style='padding:10px 5px'>Cliente</th>
    <th style='padding:10px 5px'>Código</th>
    <th style='padding:10px 5px'>Telefono</th>
    <th style='padding:10px 5px'>Email</th>
    <th style='padding:10px 5px'>Transporte</th>
    <th style='padding:10px 5px'>Guia</th>
    </tr>
    <tr style='text-align:left'>
    <td style='padding:10px 5px'>$cli_nombre</td>
    <td style='padding:10px 5px'>$cli_codigo</td>
    <td style='padding:10px 5px'>$cli_telefono</td>
    <td style='padding:10px 5px'>$cli_email</td>
    <td style='padding:10px 5px'>$cli_transporte</td>
    <td style='padding:10px 5px'>$cli_guia</td>
    </tr>
    </table>
    <hr/>
    <h2>Datos de la Factura</h2>
    <table width='100%'>
    <tr style='text-align:left'>
    <th style='padding:10px 5px'>Fecha</th>
    <th style='padding:10px 5px'>Factura a aplicar</th>
    <th style='padding:10px 5px'>Vendedor</th>
    <th style='padding:10px 5px'>Código</th>
    </tr>
    <tr style='text-align:left'>
    <td style='padding:10px 5px'>$fac_fecha</td>
    <td style='padding:10px 5px'>$fac_numero</td>
    <td style='padding:10px 5px'>$fac_vendedor</td>
    <td style='padding:10px 5px'>$fac_codigo</td>
    </tr>
    </table>
    <hr/>
    <h2>Datos para la Devolución</h2>
    <table width='100%'>
    <tr style='text-align:left'>
    <th style='padding:10px 5px'>Enviar a</th>
    <th style='padding:10px 5px'>No. Factura</th>
    <th style='padding:10px 5px'>Transporte</th>
    <th style='padding:10px 5px'>Cod. Vendedor</th>
    </tr>
    <tr style='text-align:left'>
    <td style='padding:10px 5px'>$dev_enviar</td>
    <td style='padding:10px 5px'>$dev_factura</td>
    <td style='padding:10px 5px'>$dev_transporte</td>
    <td style='padding:10px 5px'>$dev_cod_vendedor</td>
    </tr>
    </table>
    <hr/>
    <table width='100%'>
    <tr style='text-align:left'>
    <th style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>No. Factura</th>
    <th style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>Cod. Producto</th>
    <th style='border:none;border-bottom:1px solid #ccc;padding:10px 5px;text-align:right'>Precio Unit.</th>
    <th style='border:none;border-bottom:1px solid #ccc;padding:10px 5px;text-align:right'>Cant.</th>
    <th style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>Causa</th>
    <th style='border:none;border-bottom:1px solid #ccc;padding:10px 5px;text-align:right'>Total</th>
    </tr>";
    for ($i = 0; $i < count($factura); $i++ ) {
        $body .= "<tr style='text-align:left'>";
        $body .= "<td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>".$factura[$i]."</td>";
        $body .= "<td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>".$codigo[$i]."</td>";
        $body .= "<td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px;text-align:right;'>".$precio[$i]."</td>";
        $body .= "<td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px;text-align:right;'>".$cantidad[$i]."</td>";
        $body .= "<td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>".$causa[$i]."</td>";
        $body .= "<td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px;text-align:right;'>".$precio_total[$i]."</td>";
        $body .= "</tr>";
    };
    $body .= "<tr style='text-align:right;'>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px' colspan='5'>Reclamo solicitado:</td>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>$sub_total</td>
    </tr>
    <tr style='text-align:right'>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px' colspan='5'>Monto no procesado:</td>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>$no_procede</td>
    </tr>
    <tr style='text-align:right'>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px' colspan='5'>Reclamo procesado:</td>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>$si_procede</td>
    </tr>
    <tr style='text-align:right'>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px' colspan='5'>Flete $flete_percent%:</td>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>$flete_amount</td>
    </tr>
    <tr style='text-align:right'>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px' colspan='5'>IVA $iva_percent%:</td>
    <td style='border:none;border-bottom:1px solid #ccc;padding:10px 5px'>$iva_amount</td>
    </tr>
    <tr style='text-align:right'>
    <th style='padding:10px 5px' colspan='5'>Monto a acreditar:</th>
    <th style='padding:10px 5px'>$gran_total</th>
    </tr>
    </table>
    <hr/>
    <h2>Motivo de la Devolución</h2>
    <p>$dev_motivo</p>
    <hr/>
    <h2>Modo / Efecto de falla</h2>
    <p>$dev_falla</p>
    <hr/>
    <h2>Observaciones</h2>
    <p>$obs_observacion</p>
    </div>
    </div>";
    // Check if name has been entered
    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail($to, $subject, $body, $headers)) {
            $result='<div class="alert alert-success">La solicitud de devolución ha sido enviada.</div>';
        } else {
            $result='<div class="alert alert-danger">Hubo un problema con la solicitud de devolución. Por favor, verifique la data e intente de nuevo.</div>';
        }
    }
}
?>