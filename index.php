<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Solicitud de Devolución - Empresas Noffra</title>
</head>
<body class="bg-light">
    <header class="mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <img src="http://empresasnoffra.com/img/noffra-test-logo-1481744832.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md text-right">
                    <h1>Solicitud de Devolución</h1>
                </div>
            </div>
        </div>
    </header>
    <main class="container mb-4">
        <?php echo $result; ?>
        <form role="form" method="post" action="index.php">
            <div class="row">    
                <aside class="col-md-8">
                    <h3>Datos del cliente</h3>
                    <div class="row">
                        <div class="col-md-8 col-6">
                            <label for="cli_nombre">Nombre:</label>
                            <input type="text" class="form-control" name="cli_nombre" id="cli_nombre" maxlength="64" required>
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="cli_codigo">Código cliente:</label> 
                            <input type="text" class="form-control" name="cli_codigo" id="cli_codigo" maxlength="6" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="cli_telefono">Teléfono:</label>    
                            <input type="tel" class="form-control" name="cli_telefono" id="cli_telefono" minlength="9" maxlength="14" required>
                        </div>
                        <div class="col-6">
                            <label for="cli_email">Email:</label>    
                            <input type="email" class="form-control" name="cli_email" id="cli_email" maxlength="64" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-6">
                            <label for="cli_transporte">Transporte:</label>     
                            <input type="text" class="form-control" name="cli_transporte" id="cli_transporte" maxlength="128" required>
                        </div>
                        <div class="col-md-4 col-6">
                            <label for="cli_guia">No. de Guía:</label>    
                            <input type="text" class="form-control" name="cli_guia" id="cli_guia" maxlength="16" required>
                        </div>
                    </div>
                </aside>
                <aside class="col-md-4">
                    <h3>Datos de la factura</h3>
                    <div class="row">
                        <div class="col-6">
                            <label for="fac_fecha">Fecha:</label>
                            <input type="date" class="form-control" name="fac_fecha" id="fac_fecha" required>
                        </div>
                        <div class="col-6">
                            <label for="fac_numero">Factura a aplicar:</label>
                            <input type="text" class="form-control" name="fac_numero" id="fac_numero" maxlength="16" required>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="fac_vendedor">Vendedor:</label>
                            <input type="text" class="form-control" name="fac_vendedor" id="fac_vendedor" maxlength="64" required>
                        </div>
                        <div class="col-6">
                            <label for="fac_codigo">Codigo vendedor:</label>
                            <input type="text" class="form-control" name="fac_codigo" id="fac_codigo" maxlength="4" required>
                        </div>
                    </div> 
                </aside>
            </div><!-- .row -->
            <hr class="mb-4">
            <div class="row">
                <div class="form-group col-12">
                    <h3>Datos para la devolución</h3>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="dev_enviar" value="Cliente" id="dev_cliente" required>
                        <label class="form-check-label" for="dev_cliente">Enviar a cliente</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="dev_enviar" value="Vendedor" id="dev_vendedor" required>
                        <label class="form-check-label" for="dev_vendedor">Enviar a vendedor</label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="dev_factura">No. de factura:</label>
                    <input type="text" class="form-control" name="dev_factura" id="dev_factura" maxlength="16" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dev_transporte">Transporte:</label>
                    <input type="text" class="form-control" name="dev_transporte" id="dev_transporte" maxlength="128" required>
                </div>  
                <div class="form-group col-md-3">
                    <label for="dev_cod_vendedor">Codigo de vendedor:</label>
                    <input type="text" class="form-control" name="dev_cod_vendedor" id="dev_cod_vendedor" maxlength="4" required>
                </div>
                <hr class="mb-4">
                <div class="form-group col-12">
                    <h3>Motivo de la devolucion</h3>
                    <textarea class="form-control" name="dev_motivo" id="dev_motivo" maxlength="512"></textarea>
                </div>
                <div class="form-group col-12">
                    <h3>Modo / Efecto de falla</h3>
                    <textarea class="form-control" name="dev_falla" id="dev_falla" maxlength="512"></textarea>
                </div> 
            </div><!-- .row -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>No. Factura</th>
                            <th>Cod. Producto</th>
                            <th>Precio Unitario</th>
                            <th>Cantidad</th>
                            <th>Causa</th>
                            <th>Total</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <!-- LOOP JQUERY -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7" ><a href="" class="btn btn-success">Agregar Item <i class="fas fa-plus-circle"></i></a></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-right">Reclamo Solicitado</td>
                            <td><input class="form-control text-right" type="text" name="sub_total" id="sub_total" value="0.00" readonly="readonly" ></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-right">Monto no procesado</td>
                            <td><input class="form-control text-right no_procede" type="text" name="no_procede" id="no_procede" value="0.00"></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-right">Reclamo procesado</td>
                            <td><input type="text" class="form-control text-right" name="si_procede" id="si_procede" value="0.00" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-right">
                            <div class="row">
                                <div class="col">
                                    Flete
                                </div>
                                <div class="input-group col-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    <input type="text" class="form-control text-right" name="flete_percent" id="flete_percent" value="4.00">
                                </div>
                            </div>
                            </td>
                            <td class="text-right">
                            <input class="form-control text-right" type="text" name="flete_amount" id="flete_amount" value="0.00" readonly="readonly" >
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-right">
                                <div class="row">
                                    <div class="col">
                                    IVA
                                    </div>
                                    <div class="input-group col-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                        </div>
                                        <input type="text" class="form-control text-right" name="iva_percent" id="iva_percent" value="12.00">
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <input class="form-control text-right" type="text" name="iva_amount" id="iva_amount" value="0.00" readonly="readonly" >
                            </td>
                        </tr>
                        <tr>
                            <th colspan="6" class="text-right">Monto a acreditar</th>
                            <th class="text-right">
                            <input class="form-control text-right" type="text" name="gran_total" id="gran_total" value="0.00" readonly="readonly"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <hr class="mb-4">
            <div class="row">
                <div class="form-group col-sm-12">
                    <h3>Observaciones</h3>
                    <textarea name="obs_observacion" id="obs_observacion" class="form-control" maxlength="512"></textarea>
                </div>
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main><!-- .container -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/app.js"> </script>
</body>
</html>