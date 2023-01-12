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
                padding: 0.1rem;
            }
            td {
                vertical-align: center;
                padding: 0.1%;
            }
            table th, td{
                font-size:x-small;
                border: 1px solid black;
                vertical-align: center;
            }
        </style>
        <body> 
            <?php 
                include ("../../A_conexion.php");
                $sql="SELECT count('C.Facultad') as total FROM `1.0_Estudiantes` A INNER JOIN `0_Programas` C ON A.Programa = C.ID";
                $result=mysqli_query($cn,$sql);
                $data=mysqli_fetch_assoc($result); 
            ?>
                <?php include "../../Estudiantes/Datos_tablas/2_economia.php";?>
                <table border="1" style="margin: 0 auto;">
                    <tr>
                        <th colspan=4>Inscritos por programa</th>
                    </tr>
                    <tr>
                        <th>Facultades</th><th>Programa</th><th>Frecuencia</th><th>Porcentaje %</th>
                    </tr>
                    <tr>
                        <td rowspan="14">Ciencias Económicas y Administrativas</td>
                        <td colspan="3">Pregrado</td>
                    </tr>
                    <tr>
                        <td>Administración de Empresas</td>
                        <td><?php echo $data1['total1'];?></td>
                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Negocios Internacionales</td>
                        <td><?php echo $data2['total2'];?></td>
                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Mercadeo</td>
                        <td><?php echo $data3['total3'];?></td>
                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Tecnología en Gestión de Mercadeo</td>
                        <td><?php echo $data4['total4'];?></td>
                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td colspan="3">Posgrado</td>
                    </tr>
                    <tr>
                        <td>Maestría en Mercadeo</td>
                        <td><?php echo $data5['total5'];?></td>
                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Gestión de Proyectos</td>
                        <td><?php echo $data6['total6'];?></td>
                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Gestión del Desarrollo Regional</td>
                        <td><?php echo $data7['total7'];?></td>
                        <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Finanzas</td>
                        <td><?php echo $data8['total8'];?></td>
                        <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Gestión de la Innovación</td>
                        <td><?php echo $data9['total9'];?></td>
                        <td><?php echo round(($data9['total9']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Finanzas</td>
                        <td><?php echo $data10['total10'];?></td>
                        <td><?php echo round(($data10['total10']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Ciberasesoría Financiera</td>
                        <td><?php echo $data11['total11'];?></td>
                        <td><?php echo round(($data11['total11']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Economía Pública y Gestión Territorial</td>
                        <td><?php echo $data12['total12'];?></td>
                        <td><?php echo round(($data12['total12']/$data['total'])*100,2);?></td>
                    </tr>
                    <?php include "../../Estudiantes/Datos_tablas/2_arquitectura.php";?>
                    <tr>
                        <td rowspan="9">Arquitectura y Diseño</td>
                        <td colspan="3">Pregrado</td>
                    </tr>
                    <tr>
                        <td>Técnica Profesional en Video, Disc-jockey y Sonido</td>
                        <td><?php echo $data1['total1'];?></td>
                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Arquitectura</td>
                        <td><?php echo $data2['total2'];?></td>
                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Diseño Industrial</td>
                        <td><?php echo $data3['total3'];?></td>
                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td colspan="3">Posgrado</td>
                    </tr>
                    <tr>
                        <td>Especialización en Gestión de Proyectos e Innovación</td>
                        <td><?php echo $data4['total4'];?></td>
                    <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Arquitectura y Urbanismo</td>
                        <td><?php echo $data5['total5'];?></td>
                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Arquitectura Bioclimática</td>
                        <td><?php echo $data6['total6'];?></td>
                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Gestión de la Construcción Sostenible</td>
                        <td><?php echo $data7['total7'];?></td>
                        <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                    </tr>
                    <?php include "../../Estudiantes/Datos_tablas/2_humanidades.php";?>
                    <tr>
                        <td rowspan="17">Ciencias Humanas, Sociales y de la Educación</td>
                        <td colspan="3">Pregrado</td>
                    </tr>
                    <tr>
                        <td>Psicología</td>
                        <td><?php echo $data1['total1'];?></td>
                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Comunicación Social - Periodismo</td>
                        <td><?php echo $data2['total2'];?></td>
                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Licenciatura en Educación Religiosa </td>
                        <td><?php echo $data3['total3'];?></td>
                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td colspan="3">Posgrado</td>
                    </tr>
                    <tr>
                        <td>Doctorado en Educación en Desarrollo Humano</td>
                        <td><?php echo $data4['total4'];?></td>
                        <td><?php echo round(($data4['total4']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Innovación Educativa</td>
                        <td><?php echo $data5['total5'];?></td>
                        <td><?php echo round(($data5['total5']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Gestión Estratégica de la Comunicación</td>
                        <td><?php echo $data6['total6'];?></td>
                        <td><?php echo round(($data6['total6']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Memoria y Escenarios Transicionales</td>
                        <td><?php echo $data7['total7'];?></td>
                        <td><?php echo round(($data7['total7']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Pedagogía y Desarrollo Humano</td>
                        <td><?php echo $data8['total8'];?></td>
                        <td><?php echo round(($data8['total8']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Maestría en Estudios Culturales</td>
                        <td><?php echo $data9['total9'];?></td>
                        <td><?php echo round(($data9['total9']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Pedagogía y Desarrollo Humano</td>
                        <td><?php echo $data10['total10'];?></td>
                        <td><?php echo round(($data10['total10']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Edumática Innovación Educativa Mediada por TIC</td>
                        <td><?php echo $data11['total11'];?></td>
                        <td><?php echo round(($data11['total11']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Gerencia de la Comunicación Corporativa</td>
                        <td><?php echo $data12['total12'];?></td>
                        <td><?php echo round(($data12['total12']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Psicología Clínica con énfasis en Psicoterapia con niños y adolescentes</td>
                        <td><?php echo $data13['total13'];?></td>
                        <td><?php echo round(($data13['total13']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Psicología Social Comunitaria y Acción Psicosocial</td>
                        <td><?php echo $data14['total14'];?></td>
                        <td><?php echo round(($data14['total14']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Especialización en Gestión Humana en las Organizaciones</td>
                        <td><?php echo $data15['total15'];?></td>
                        <td><?php echo round(($data15['total15']/$data['total'])*100,2);?></td>
                    </tr>
                    <?php include "../../Estudiantes/Datos_tablas/2_ciencias.php";?>
                    <tr>
                        <td rowspan="4">Ciencias Básicas e Ingeniería</td>
                        <td colspan="3">Pregrado</td>
                    </tr>
                    <tr>
                        <td>Ingeniería de Sistemas y Telecomunicaciones</td>
                        <td><?php echo $data1['total1'];?></td>
                        <td><?php echo round(($data1['total1']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Ingeniería Industrial</td>
                        <td><?php echo $data2['total2'];?></td>
                        <td><?php echo round(($data2['total2']/$data['total'])*100,2);?></td>
                    </tr>
                    <tr>
                        <td>Tecnología en Desarrollo de Software</td>
                        <td><?php echo $data3['total3'];?></td>
                        <td><?php echo round(($data3['total3']/$data['total'])*100,2);?></td>
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