<?php 
    ob_start();
?>
    <!DOCTYPE html>
    <html lang="en-EN">
        <title>Caracterizacion UCP</title>
        <head>
            <?php include ("../head.php")?>
        </head>
        <style>
            .topnav{
                padding: 0;
                margin: 0;
            }
            img{
                margin-top: 1%;
                margin-left: 1%;
                margin-bottom: 1%;
            }
            table {
                text-align: center;
                border-collapse: collapse;
            }
            tr:nth-child(even){background-color: #f2f2f2}
            tr {
                background-color: #ffffff;
            }
            th {
                background-color: #7D3C98;
                color: white;
                text-align: center;
                vertical-align: center;
                padding: 0.5rem;
            }
            td {
                vertical-align: center;
                padding: 0.5%;
            }
            table th, td{
                font-size:medium;
                border: 1px solid black;
            }
        </style>
        <body> 
            <?php 
                include ("../../A_conexion.php");
                error_reporting (0);
                include "../../Estudiantes/Datos_tablas/1_facultades.php";
            ?>
            <table border="1" style="margin: 0 auto;">
                <tr>
                    <th colspan=3>Inscritos por facultad</th>
                </tr>
                <tr>
                    <th>Facultades</th><th>Frecuencia</th><th>Porcentaje %</th>
                </tr>
                <tr>
                    <td>Facultad de Ciencias Económicas y Administrativas</td>
                    <td><?php echo $data1['total1'];?></td>
                    <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                </tr>
                <tr>
                    <td>Facultad de Arquitectura y Diseño</td>
                    <td><?php echo $data2['total2'];?></td>
                    <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                </tr>
                <tr>
                    <td>Facultad de Ciencias Humanas, Sociales y de la Educación</td>
                    <td><?php echo $data3['total3'];?></td>
                    <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                </tr>
                <tr>
                    <td>Facultad de Ciencias Básicas e Ingeniería</td>
                    <td><?php echo $data4['total4'];?></td>
                    <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?php echo $data['total'];?></td>
                    <td><?php echo round(($data['total']/$data['total'])*100,2);?></td>
                </tr>
            </table>
            <?php include ("../../C_conexion.php")?>
        <body> 
    </html> 
<?php 
    $html=ob_get_clean();
    //echo $html;
    require_once '../Libreria/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();

    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnable' => true));
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);

    $dompdf->setPaper('letter');

    $dompdf->render();

    $dompdf->stream("reporte1.pdf", array("Attachment" => false));//false para que muestre el archivo, false para imprimirlo de una vez
?>