<?php
    error_reporting (0);
    include ("../A_conexion.php");
    //seccion 1
        $Correo =" ";
    //seccion 1
    //seccion 2
        $Nombres =" ";
        $Apellidos =" "; 
        $Documento = " ";   
        $Numero = " ";  
        $Programa = 0; 
        $Cargo = 0;
        $Ciudad = 0;
    //seccion 2
    //seccion 3
        $Habilidades_digitales =" ";
        $Habilidades_texto =" ";
        $Habilidades_calculo =" ";
        $Habilidades_presentacion =" ";
        $Habilidades_datos =" ";
        $Habilidades_herramientas =" ";
        $Habilidades_correo =" ";
        $Habilidades_hardware =" ";
        $Habilidades_software =" ";
        $Otro_uno =" ";
        $Habilidades_navegador =" ";
        $Habilidades_buscadores =" ";
        $Habilidades_correo_electronico =" ";
        $Habilidades_seguridad =" ";
        $Web2 = " ";
        $Web3 = " ";
        $Web4 = " ";
        $Habilidades_redes_sociales =" ";
        $Habilidades_foros =" ";
        $Habilidades_blogs =" ";
        $Habilidades_nube =" ";
        $Habilidades_conferencias =" ";
        $Otro_dos =" ";
        $Habilidades_buscador =" ";
        $Habilidades_correos =" ";
        $Habilidades_calendario =" ";
        $Habilidades_drive =" ";
        $Habilidades_documentos =" ";
        $Habilidades_calculos =" ";
        $Habilidades_presentaciones =" ";
        $Habilidades_formularios =" ";
        $Habilidades_keep =" ";
        $Habilidades_jamboard =" ";
        $Otro_tres =" ";
        $Mo1 =" ";
        $Mo2 =" ";
        $Mo3 =" ";
        $Mo4 =" ";
        $Mo7 =" ";
        $Mo8 =" ";
        $Mo9 =" ";
        $Mo10 =" ";
        $Si1 =" ";
        $Si2 =" ";
        $Si3 =" ";
        $Si4 =" ";
        $Si7 =" ";
        $Si8 =" ";
        $Si9 =" ";
        $Si10 =" ";
        $Bd1 =" ";
        $Bd2 =" ";
        $Bd3 =" ";
        $Bd4 =" ";
        $Bd7 =" ";
        $Bd8 =" ";
        $Bd9 =" ";
        $Bd10 =" ";
        $Ca1 =" ";
        $Ca2 =" ";
        $Ca3 =" ";
        $Ca4 =" ";
        $Ca7 =" ";
        $Ca8 =" ";
        $Ca9 =" ";
        $Ca10 =" ";
        $Re1 =" ";
        $Re2 =" ";
        $Re3 =" ";
        $Re4 =" ";
        $Re7 =" ";
        $Re8 =" ";
        $Re9 =" ";
        $Re10 =" ";
        $Pu1 =" ";
        $Pu2 =" ";
        $Pu3 =" ";
        $Pu4 =" ";
        $Pu7 =" ";
        $Pu8 =" ";
        $Pu9 =" ";
        $Pu10 =" ";
        $Li1 =" ";
        $Li2 =" ";
        $Li3 =" ";
        $Li4 =" ";
        $Li7 =" ";
        $Li8 =" ";
        $Li9 =" ";
        $Li10 =" ";
        $Pe1 =" ";
        $Pe2 =" ";
        $Pe3 =" ";
        $Pe4 =" ";
        $Pe7 =" ";
        $Pe8 =" ";
        $Pe9 =" ";
        $Pe10 =" ";
        $So1 =" ";
        $So2 =" ";
        $So3 =" ";
        $So4 =" ";
        $So7 =" ";
        $So8 =" ";
        $So9 =" ";
        $So10 =" ";
        $Se1 =" ";
        $Se2 =" ";
        $Se3 =" ";
        $Se4 =" ";
        $Se7 =" ";
        $Se8 =" ";
        $Se9 =" ";
        $Se10 =" ";
        $Sa1 =" ";
        $Sa2 =" ";
        $Sa3 =" ";
        $Sa4 =" ";
        $Sa7 =" ";
        $Sa8 =" ";
        $Sa9 =" ";
        $Sa10 =" ";
        $Otro_cuatro =" ";
        $Servicios_ucp =" ";
    //seccion 3
    //seccion 4
        $Gu1 =" ";
        $Gu2 =" ";
        $Gu3 =" ";
        $Gu4 =" ";
        $Gu5 =" ";
        $Co1 =" ";
        $Co2 =" ";
        $Co3 =" ";
        $Co4 =" ";
        $Co5 =" ";
    //seccion 4
    //seccion 5
        $Whatsapp =" ";
        $Facebook =" ";
        $Youtube =" ";
        $Instagram =" ";
        $Twitter =" ";
        $Linkedin =" ";
        $Tiktok =" ";
        $Otro_cinco =" ";
        $Uso_redes_sociales =" ";
        $Criterios =" ";
    //seccion 5
    //seccion 6
        $Privasidad =" ";
        $Netiqueta =" ";
        $Trato =" ";
        $Ignorar =" ";
        $Breve =" ";
        $Preocupacion =" ";
        $Demas =" ";
        $Respeto =" ";
        $Mucho_texto =" ";
    //seccion 6
    //seccion 7
        $Crea1 =" ";
        $Crea2 =" ";
        $Crea3 =" ";
        $Crea4 =" ";
        $Crea5 =" ";
        $Crea6 =" ";
        $Otra =" ";
        $Com1 =" ";
        $Com2 =" ";
        $Com3 =" ";
        $Com4 =" ";
        $Com5 =" ";
        $Inv1 =" ";
        $Inv2 =" ";
        $Inv3 =" ";
        $Inv4 =" ";
        $Inv5 =" ";
        $Inv6 =" ";
        $Opiniones =" ";
    //seccion 7
    if(isset($_POST["Enviar"])){
        //seccion 1
            $Correo=$_POST["Correo"];
        //seccion 1
        //seccion 2
            $Nombres=$_POST["Nombres"];
            $Apellidos=$_POST["Apellidos"];
            $Documento=$_POST["Documento"];
            $Numero=$_POST["Numero"];
            $Programa=$_POST["Programa"];
            $Cargo=$_POST["Cargo"];
            $Ciudad=$_POST["Ciudad"];
        //seccion 2
        //seccion 3
            $Habilidades_digitales=$_POST["Habilidades_digitales"];
            $Habilidades_texto=$_POST["Habilidades_texto"];
            $Habilidades_calculo=$_POST["Habilidades_calculo"];
            $Habilidades_presentacion=$_POST["Habilidades_presentacion"];
            $Habilidades_datos=$_POST["Habilidades_datos"];
            $Habilidades_herramientas=$_POST["Habilidades_herramientas"];
            $Habilidades_correo=$_POST["Habilidades_correo"];
            $Habilidades_hardware=$_POST["Habilidades_hardware"];
            $Habilidades_software=$_POST["Habilidades_software"];
            $Otro_uno=$_POST["Otro_uno"];
            $Habilidades_navegador=$_POST["Habilidades_navegador"];
            $Habilidades_buscadores=$_POST["Habilidades_buscadores"];
            $Habilidades_correo_electronico=$_POST["Habilidades_correo_electronico"];
            $Habilidades_seguridad=$_POST["Habilidades_seguridad"];
            $Web2=$_POST["Web2"];
            $Web3=$_POST["Web3"];
            $Web4=$_POST["Web4"];
            $Habilidades_redes_sociales=$_POST["Habilidades_redes_sociales"];
            $Habilidades_foros=$_POST["Habilidades_foros"];
            $Habilidades_blogs=$_POST["Habilidades_blogs"];
            $Habilidades_nube=$_POST["Habilidades_nube"];
            $Habilidades_conferencias=$_POST["Habilidades_conferencias"];
            $Otro_dos=$_POST["Otro_dos"];
            $Habilidades_buscador=$_POST["Habilidades_buscador"];
            $Habilidades_correos=$_POST["Habilidades_correos"];
            $Habilidades_calendario=$_POST["Habilidades_calendario"];
            $Habilidades_drive=$_POST["Habilidades_drive"];
            $Habilidades_documentos=$_POST["Habilidades_documentos"];
            $Habilidades_calculos=$_POST["Habilidades_calculos"];
            $Habilidades_presentaciones=$_POST["Habilidades_presentaciones"];
            $Habilidades_formularios=$_POST["Habilidades_formularios"];
            $Habilidades_keep=$_POST["Habilidades_keep"];
            $Habilidades_jamboard=$_POST["Habilidades_jamboard"];
            $Otro_tres=$_POST["Otro_tres"];
            if($_POST['Mo1'] == "Si"){$Mo1=$_POST["Mo1"];}else{$Mo1="No";}
            if($_POST['Mo2'] == "Si"){$Mo2=$_POST["Mo2"];}else{$Mo2="No";}
            if($_POST['Mo3'] == "Si"){$Mo3=$_POST["Mo3"];}else{$Mo3="No";}
            if($_POST['Mo4'] == "Si"){$Mo4=$_POST["Mo4"];}else{$Mo4="No";}
            if($_POST['Mo7'] == "Si"){$Mo7=$_POST["Mo7"];}else{$Mo7="No";}
            if($_POST['Mo8'] == "Si"){$Mo8=$_POST["Mo8"];}else{$Mo8="No";}
            if($_POST['Mo9'] == "Si"){$Mo9=$_POST["Mo9"];}else{$Mo9="No";}
            if($_POST['Mo10'] == "Si"){$Mo10=$_POST["Mo10"];}else{$Mo10="No";}
            if($_POST['Si1'] == "Si"){$Si1=$_POST["Si1"];}else{$Si1="No";}
            if($_POST['Si2'] == "Si"){$Si2=$_POST["Si2"];}else{$Si2="No";}
            if($_POST['Si3'] == "Si"){$Si3=$_POST["Si3"];}else{$Si3="No";}
            if($_POST['Si4'] == "Si"){$Si4=$_POST["Si4"];}else{$Si4="No";}
            if($_POST['Si7'] == "Si"){$Si7=$_POST["Si7"];}else{$Si7="No";}
            if($_POST['Si8'] == "Si"){$Si8=$_POST["Si8"];}else{$Si8="No";}
            if($_POST['Si9'] == "Si"){$Si9=$_POST["Si9"];}else{$Si9="No";}
            if($_POST['Si10'] == "Si"){$Si10=$_POST["Si10"];}else{$Si10="No";}
            if($_POST['Bd1'] == "Si"){$Bd1=$_POST["Bd1"];}else{$Bd1="No";}
            if($_POST['Bd2'] == "Si"){$Bd2=$_POST["Bd2"];}else{$Bd2="No";}
            if($_POST['Bd3'] == "Si"){$Bd3=$_POST["Bd3"];}else{$Bd3="No";}
            if($_POST['Bd4'] == "Si"){$Bd4=$_POST["Bd4"];}else{$Bd4="No";}
            if($_POST['Bd7'] == "Si"){$Bd7=$_POST["Bd7"];}else{$Bd7="No";}
            if($_POST['Bd8'] == "Si"){$Bd8=$_POST["Bd8"];}else{$Bd8="No";}
            if($_POST['Bd9'] == "Si"){$Bd9=$_POST["Bd9"];}else{$Bd9="No";}
            if($_POST['Bd10'] == "Si"){$Bd10=$_POST["Bd10"];}else{$Bd10="No";}
            if($_POST['Ca1'] == "Si"){$Ca1=$_POST["Ca1"];}else{$Ca1="No";}
            if($_POST['Ca2'] == "Si"){$Ca2=$_POST["Ca2"];}else{$Ca2="No";}
            if($_POST['Ca3'] == "Si"){$Ca3=$_POST["Ca3"];}else{$Ca3="No";}
            if($_POST['Ca4'] == "Si"){$Ca4=$_POST["Ca4"];}else{$Ca4="No";}
            if($_POST['Ca7'] == "Si"){$Ca7=$_POST["Ca7"];}else{$Ca7="No";}
            if($_POST['Ca8'] == "Si"){$Ca8=$_POST["Ca8"];}else{$Ca8="No";}
            if($_POST['Ca9'] == "Si"){$Ca9=$_POST["Ca9"];}else{$Ca9="No";}
            if($_POST['Ca10'] == "Si"){$Ca10=$_POST["Ca10"];}else{$Ca10="No";}
            if($_POST['Re1'] == "Si"){$Re1=$_POST["Re1"];}else{$Re1="No";}
            if($_POST['Re2'] == "Si"){$Re2=$_POST["Re2"];}else{$Re2="No";}
            if($_POST['Re3'] == "Si"){$Re3=$_POST["Re3"];}else{$Re3="No";}
            if($_POST['Re4'] == "Si"){$Re4=$_POST["Re4"];}else{$Re4="No";}
            if($_POST['Re7'] == "Si"){$Re7=$_POST["Re7"];}else{$Re7="No";}
            if($_POST['Re8'] == "Si"){$Re8=$_POST["Re8"];}else{$Re8="No";}
            if($_POST['Re9'] == "Si"){$Re9=$_POST["Re9"];}else{$Re9="No";}
            if($_POST['Re10'] == "Si"){$Re10=$_POST["Re10"];}else{$Re10="No";}
            if($_POST['Pu1'] == "Si"){$Pu1=$_POST["Pu1"];}else{$Pu1="No";}
            if($_POST['Pu2'] == "Si"){$Pu2=$_POST["Pu2"];}else{$Pu2="No";}
            if($_POST['Pu3'] == "Si"){$Pu3=$_POST["Pu3"];}else{$Pu3="No";}
            if($_POST['Pu4'] == "Si"){$Pu4=$_POST["Pu4"];}else{$Pu4="No";}
            if($_POST['Pu7'] == "Si"){$Pu7=$_POST["Pu7"];}else{$Pu7="No";}
            if($_POST['Pu8'] == "Si"){$Pu8=$_POST["Pu8"];}else{$Pu8="No";}
            if($_POST['Pu9'] == "Si"){$Pu9=$_POST["Pu9"];}else{$Pu9="No";}
            if($_POST['Pu10'] == "Si"){$Pu10=$_POST["Pu10"];}else{$Pu10="No";}
            if($_POST['Li1'] == "Si"){$Li1=$_POST["Li1"];}else{$Li1="No";}
            if($_POST['Li2'] == "Si"){$Li2=$_POST["Li2"];}else{$Li2="No";}
            if($_POST['Li3'] == "Si"){$Li3=$_POST["Li3"];}else{$Li3="No";}
            if($_POST['Li4'] == "Si"){$Li4=$_POST["Li4"];}else{$Li4="No";}
            if($_POST['Li7'] == "Si"){$Li7=$_POST["Li7"];}else{$Li7="No";}
            if($_POST['Li8'] == "Si"){$Li8=$_POST["Li8"];}else{$Li8="No";}
            if($_POST['Li9'] == "Si"){$Li9=$_POST["Li9"];}else{$Li9="No";}
            if($_POST['Li10'] == "Si"){$Li10=$_POST["Li10"];}else{$Li10="No";}
            if($_POST['Pe1'] == "Si"){$Pe1=$_POST["Pe1"];}else{$Pe1="No";}
            if($_POST['Pe2'] == "Si"){$Pe2=$_POST["Pe2"];}else{$Pe2="No";}
            if($_POST['Pe3'] == "Si"){$Pe3=$_POST["Pe3"];}else{$Pe3="No";}
            if($_POST['Pe4'] == "Si"){$Pe4=$_POST["Pe4"];}else{$Pe4="No";}
            if($_POST['Pe7'] == "Si"){$Pe7=$_POST["Pe7"];}else{$Pe7="No";}
            if($_POST['Pe8'] == "Si"){$Pe8=$_POST["Pe8"];}else{$Pe8="No";}
            if($_POST['Pe9'] == "Si"){$Pe9=$_POST["Pe9"];}else{$Pe9="No";}
            if($_POST['Pe10'] == "Si"){$Pe10=$_POST["Pe10"];}else{$Pe10="No";}
            if($_POST['So1'] == "Si"){$So1=$_POST["So1"];}else{$So1="No";}
            if($_POST['So2'] == "Si"){$So2=$_POST["So2"];}else{$So2="No";}
            if($_POST['So3'] == "Si"){$So3=$_POST["So3"];}else{$So3="No";}
            if($_POST['So4'] == "Si"){$So4=$_POST["So4"];}else{$So4="No";}
            if($_POST['So7'] == "Si"){$So7=$_POST["So7"];}else{$So7="No";}
            if($_POST['So8'] == "Si"){$So8=$_POST["So8"];}else{$So8="No";}
            if($_POST['So9'] == "Si"){$So9=$_POST["So9"];}else{$So9="No";}
            if($_POST['So10'] == "Si"){$So10=$_POST["So10"];}else{$So10="No";}
            if($_POST['Se1'] == "Si"){$Se1=$_POST["Se1"];}else{$Se1="No";}
            if($_POST['Se2'] == "Si"){$Se2=$_POST["Se2"];}else{$Se2="No";}
            if($_POST['Se3'] == "Si"){$Se3=$_POST["Se3"];}else{$Se3="No";}
            if($_POST['Se4'] == "Si"){$Se4=$_POST["Se4"];}else{$Se4="No";}
            if($_POST['Se7'] == "Si"){$Se7=$_POST["Se7"];}else{$Se7="No";}
            if($_POST['Se8'] == "Si"){$Se8=$_POST["Se8"];}else{$Se8="No";}
            if($_POST['Se9'] == "Si"){$Se9=$_POST["Se9"];}else{$Se9="No";}
            if($_POST['Se10'] == "Si"){$Se10=$_POST["Se10"];}else{$Se10="No";}
            if($_POST['Sa1'] == "Si"){$Sa1=$_POST["Sa1"];}else{$Sa1="No";}
            if($_POST['Sa2'] == "Si"){$Sa2=$_POST["Sa2"];}else{$Sa2="No";}
            if($_POST['Sa3'] == "Si"){$Sa3=$_POST["Sa3"];}else{$Sa3="No";}
            if($_POST['Sa4'] == "Si"){$Sa4=$_POST["Sa4"];}else{$Sa4="No";}
            if($_POST['Sa7'] == "Si"){$Sa7=$_POST["Sa7"];}else{$Sa7="No";}
            if($_POST['Sa8'] == "Si"){$Sa8=$_POST["Sa8"];}else{$Sa8="No";}
            if($_POST['Sa9'] == "Si"){$Sa9=$_POST["Sa9"];}else{$Sa9="No";}
            if($_POST['Sa10'] == "Si"){$Sa10=$_POST["Sa10"];}else{$Sa10="No";}
            $Otro_cuatro=$_POST["Otro_cuatro"];
            $Servicios_ucp=$_POST["Servicios_ucp"];
        //seccion 3
        //seccion 4
            if($_POST['Gu1'] == "Si"){$Gu1=$_POST["Gu1"];}else{$Gu1="No";}
            if($_POST['Gu2'] == "Si"){$Gu2=$_POST["Gu2"];}else{$Gu2="No";}
            if($_POST['Gu3'] == "Si"){$Gu3=$_POST["Gu3"];}else{$Gu3="No";}
            if($_POST['Gu4'] == "Si"){$Gu4=$_POST["Gu4"];}else{$Gu4="No";}
            if($_POST['Gu5'] == "Si"){$Gu5=$_POST["Gu5"];}else{$Gu5="No";}
            if($_POST['Co1'] == "Si"){$Co1=$_POST["Co1"];}else{$Co1="No";}
            if($_POST['Co2'] == "Si"){$Co2=$_POST["Co2"];}else{$Co2="No";}
            if($_POST['Co3'] == "Si"){$Co3=$_POST["Co3"];}else{$Co3="No";}
            if($_POST['Co4'] == "Si"){$Co4=$_POST["Co4"];}else{$Co4="No";}
            if($_POST['Co5'] == "Si"){$Co5=$_POST["Co5"];}else{$Co5="No";}
        //seccion 4
        //seccion 5
            $Whatsapp=$_POST["Whatsapp"];
            $Facebook=$_POST["Facebook"];
            $Youtube=$_POST["Youtube"];
            $Instagram=$_POST["Instagram"];
            $Twitter=$_POST["Twitter"];
            $Linkedin=$_POST["Linkedin"];
            $Tiktok=$_POST["Tiktok"];
            $Otro_cinco=$_POST["Otro_cinco"];
            $Uso_redes_sociales=$_POST["Uso_redes_sociales"];
            $Criterios=$_POST["Criterios"];
        //seccion 5
        //seccion 6
            $Privasidad=$_POST["Privasidad"];
            $Netiqueta=$_POST["Netiqueta"];
            $Trato=$_POST["Trato"];
            $Ignorar=$_POST["Ignorar"];
            $Breve=$_POST["Breve"];
            $Preocupacion=$_POST["Preocupacion"];
            $Demas=$_POST["Demas"];
            $Respeto=$_POST["Respeto"];
            $Mucho_texto=$_POST["Mucho_texto"];
        //seccion 6
        //seccion 7
            if($_POST['Crea1'] == "Si"){$Crea1=$_POST["Crea1"];}else{$Crea1="No";}
            if($_POST['Crea2'] == "Si"){$Crea2=$_POST["Crea2"];}else{$Crea2="No";}
            if($_POST['Crea3'] == "Si"){$Crea3=$_POST["Crea3"];}else{$Crea3="No";}
            if($_POST['Crea4'] == "Si"){$Crea4=$_POST["Crea4"];}else{$Crea4="No";}
            if($_POST['Crea5'] == "Si"){$Crea5=$_POST["Crea5"];}else{$Crea5="No";}
            if($_POST['Crea6'] == "Si"){$Crea6=$_POST["Crea6"];}else{$Crea6="No";}
            $Otra=$_POST["Otra"];
            if($_POST['Com1'] == "Si"){$Com1=$_POST["Com1"];}else{$Com1="No";}
            if($_POST['Com2'] == "Si"){$Com2=$_POST["Com2"];}else{$Com2="No";}
            if($_POST['Com3'] == "Si"){$Com3=$_POST["Com3"];}else{$Com3="No";}
            if($_POST['Com4'] == "Si"){$Com4=$_POST["Com4"];}else{$Com4="No";}
            if($_POST['Com5'] == "Si"){$Com5=$_POST["Com5"];}else{$Com5="No";}
            if($_POST['Inv1'] == "Si"){$Inv1=$_POST["Inv1"];}else{$Inv1="No";}
            if($_POST['Inv2'] == "Si"){$Inv2=$_POST["Inv2"];}else{$Inv2="No";}
            if($_POST['Inv3'] == "Si"){$Inv3=$_POST["Inv3"];}else{$Inv3="No";}
            if($_POST['Inv4'] == "Si"){$Inv4=$_POST["Inv4"];}else{$Inv4="No";}
            if($_POST['Inv5'] == "Si"){$Inv5=$_POST["Inv5"];}else{$Inv5="No";}
            if($_POST['Inv6'] == "Si"){$Inv6=$_POST["Inv6"];}else{$Inv6="No";}
            $Opiniones=$_POST["Opiniones"];
        //seccion 7

        $Ingresar = "INSERT INTO `2.0_Administrativos` (`ID`,`Correo`,
                                                `Nombres`,`Apellidos`,`Documento`,`Numero`,`Programa`,`Cargo`,`Ciudad`,
                                                `Habilidades_digitales`,`Habilidades_texto`,`Habilidades_calculo`,`Habilidades_presentacion`,`Habilidades_datos`,`Habilidades_herramientas`,`Habilidades_correo`,`Habilidades_hardware`,`Habilidades_software`,`Otro_uno`,
                                                `Habilidades_navegador`,`Habilidades_buscadores`,`Habilidades_correo_electronico`,`Habilidades_seguridad`,`Habilidades_web2`,`Habilidades_web3`,`Habilidades_web4`,`Habilidades_redes_sociales`,`Habilidades_foros`,`Habilidades_blogs`,`Habilidades_nube`,`Habilidades_conferencias`,`Otro_dos`,
                                                `Habilidades_buscador`,`Habilidades_correos`,`Habilidades_calendario`,`Habilidades_drive`,`Habilidades_documentos`,`Habilidades_calculos`,`Habilidades_presentaciones`,`Habilidades_formularios`,`Habilidades_keep`,`Habilidades_jamboard`,`Otro_tres`,
                                                `Otro_cuatro`,`Servicios_ucp`,
                                                `Whatsapp`,`Facebook`,`Youtube`,`Instagram`,`Twitter`,`Linkedin`,`Tiktok`,`Otro_cinco`,`Uso_redes_sociales`,`Criterios`,
                                                `Privasidad`,`Netiqueta`,`Trato`,`Ignorar`,`Breve`,`Preocupacion`,`Demas`,`Respeto`,`Mucho_texto`,
                                                `Opiniones`)
                     VALUES (NULL,'$Correo',
                                  '$Nombres','$Apellidos','$Documento','$Numero','$Programa','$Cargo','$Ciudad',
                                  '$Habilidades_digitales','$Habilidades_texto','$Habilidades_calculo','$Habilidades_presentacion','$Habilidades_datos','$Habilidades_herramientas','$Habilidades_correo','$Habilidades_hardware','$Habilidades_software','$Otro_uno',
                                  '$Habilidades_navegador','$Habilidades_buscadores','$Habilidades_correo_electronico','$Habilidades_seguridad','$Web2','$Web3','$Web4','$Habilidades_redes_sociales','$Habilidades_foros','$Habilidades_blogs','$Habilidades_nube','$Habilidades_conferencias','$Otro_dos',
                                  '$Habilidades_buscador','$Habilidades_correos','$Habilidades_calendario','$Habilidades_drive','$Habilidades_documentos','$Habilidades_calculos','$Habilidades_presentaciones','$Habilidades_formularios','$Habilidades_keep','$Habilidades_jamboard','$Otro_tres',
                                  '$Otro_cuatro','$Servicios_ucp',
                                  '$Whatsapp','$Facebook','$Youtube','$Instagram','$Twitter','$Linkedin','$Tiktok','$Otro_cinco','$Uso_redes_sociales','$Criterios',
                                  '$Privasidad','$Netiqueta','$Trato','$Ignorar','$Breve','$Preocupacion','$Demas','$Respeto','$Mucho_texto',
                                  '$Opiniones')";
        $Ingreso = mysqli_query($cn,$Ingresar);

        $Ingresar_moodle = "INSERT INTO `2.1_Moodle` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                       `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                            VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                         '$Mo1','$Mo2','$Mo3','$Mo4','$Mo7','$Mo8','$Mo9','$Mo10')";
        $Ingreso_moodel = mysqli_query($cn,$Ingresar_moodle);

        $Ingresar_sistema = "INSERT INTO `2.2_Sistema_academico` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                       `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                            VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                         '$Si1','$Si2','$Si3','$Si4','$Si7','$Si8','$Si9','$Si10')";
        $Ingreso_sistema = mysqli_query($cn,$Ingresar_sistema);

        $Ingresar_Bases = "INSERT INTO `2.3_Bases_datos` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                           `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                           VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                        '$Bd1','$Bd2','$Bd3','$Bd4','$Bd7','$Bd8','$Bd9','$Bd10')";
        $Ingreso_Bases = mysqli_query($cn,$Ingresar_Bases);

        $Ingresar_Catalogo = "INSERT INTO `2.4_Catalogo` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                           `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                              VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                           '$Ca1','$Ca2','$Ca3','$Ca4','$Ca7','$Ca8','$Ca9','$Ca10')";
        $Ingreso_Catalogo = mysqli_query($cn,$Ingresar_Catalogo);

        $Ingresar_Repositorio = "INSERT INTO `2.5_Repositorio` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                                 `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                                 VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                              '$Re1','$Re2','$Re3','$Re4','$Re7','$Re8','$Re9','$Re10')";
        $Ingreso_Repositorio = mysqli_query($cn,$Ingresar_Repositorio);

        $Ingresar_Publicaciones = "INSERT INTO `2.6_Publicaciones` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                                     `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                                   VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                                '$Pu1','$Pu2','$Pu3','$Pu4','$Pu7','$Pu8','$Pu9','$Pu10')";
        $Ingreso_Publicaciones = mysqli_query($cn,$Ingresar_Publicaciones);

        $Ingresar_Libros = "INSERT INTO `2.7_Libros` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                       `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                            VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                         '$Li1','$Li2','$Li3','$Li4','$Li7','$Li8','$Li9','$Li10')";
        $Ingreso_Libros = mysqli_query($cn,$Ingresar_Libros);

        $Ingresar_Yenimus = "INSERT INTO `2.8_Yeminus` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                                   `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                            VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                         '$Pe1','$Pe2','$Pe3','$Pe4','$Pe7','$Pe8','$Pe9','$Pe10')";
        $Ingreso_Yenimus = mysqli_query($cn,$Ingresar_Yenimus);

        $Ingresar_Intranet = "INSERT INTO `2.9_Intranet` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                                 `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                                 VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                              '$So1','$So2','$So3','$So4','$So7','$So8','$So9','$So10')";
        $Ingreso_Intranet = mysqli_query($cn,$Ingresar_Intranet);

        $Ingresar_Sevenet = "INSERT INTO `2.10_Sevenet` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                                 `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                                 VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                              '$Se1','$Se2','$Se3','$Se4','$Se7','$Se8','$Se9','$Se10')";
        $Ingreso_Sevenet = mysqli_query($cn,$Ingresar_Sevenet);

        $Ingresar_Sar = "INSERT INTO `2.11_Sar` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                                 `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                                 VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                              '$Sa1','$Sa2','$Sa3','$Sa4','$Sa7','$Sa8','$Sa9','$Sa10')";
        $Ingreso_Sar = mysqli_query($cn,$Ingresar_Sar);

        $Ingresar_Gua = "INSERT INTO `2.12_Guardar` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                     `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                      '$Gu1','$Gu2','$Gu3','$Gu4','$Gu5')";
        $Ingreso_Gua = mysqli_query($cn,$Ingresar_Gua);

        $Ingresar_Con = "INSERT INTO `2.13_Contrastar` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                        `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                      '$Co1','$Co2','$Co3','$Co4','$Co5')";
        $Ingreso_Con = mysqli_query($cn,$Ingresar_Con);

        $Ingresar_Crea = "INSERT INTO `2.14_Aprendizaje` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                          `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`otra`) 
                          VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                       '$Crea1','$Crea2','$Crea3','$Crea4','$Crea5','$Crea6','$Otra')";
        $Ingreso_Crea = mysqli_query($cn,$Ingresar_Crea);

        $Ingresar_Com = "INSERT INTO `2.15_Necesidad` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                          `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                      '$Com1','$Com2','$Com3','$Com4','$Com5')";
        $Ingreso_Com = mysqli_query($cn,$Ingresar_Com);

        $Ingresar_Inv = "INSERT INTO `2.16_Contenido` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Cargo`,
                                                           `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Cargo',
                                      '$Inv1','$Inv2','$Inv3','$Inv4','$Inv5','$Inv6')";
        $Ingreso_Inv = mysqli_query($cn,$Ingresar_Inv);

        include "administrativo.php";
    }
    mysqli_close($cn);
?>