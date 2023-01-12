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
        $Semestre =" ";
        $Ciudad = 0;
    //seccion 2
    //seccion 3
        $Autodidacta =" ";
        $Curso =" ";
        $Otra =" ";
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
        $Scopus =" ";
        $Sage =" ";
        $Ebsco =" ";
        $Legiscomex =" ";
        $Redalyc =" ";
        $Scielo =" ";
        $Dialnet =" ";
        $Science =" ";
        $Otro_cinco =" ";
        $Zootero =" ";
        $Mendeley =" ";
        $Refworks =" ";
        $Atlasti =" ";
        $Spss =" ";
        $Otro_sies =" ";
        $Researchgate =" ";
        $Google_academico =" ";
        $Cvlac =" ";
        $Otro_siete =" ";
        $Ebooks =" ";
        $Ribuc =" ";
        $BiblioTechnia =" ";
        $Otro_ocho =" ";
        $Herramienta_biblioteca=" ";  
    //seccion 4
    //seccion 5
        $Whatsapp =" ";
        $Facebook =" ";
        $Youtube =" ";
        $Instagram =" ";
        $Twitter =" ";
        $Linkedin =" ";
        $Tiktok =" ";
        $Otra_nueve =" ";
        $Uso_redes_sociales =" ";
        $Criterios =" ";
    //seccion 5
    //seccion 6
        $Privasidad =" ";
        $Derechos =" ";
        $Norma =" ";
        $Normas =" ";
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
        $Pen1 =" ";
        $Pen2 =" ";
        $Pen3 =" ";
        $Pen4 =" ";
        $Pen5 =" ";
        $Ciu1 =" ";
        $Ciu2 =" ";
        $Ciu3 =" ";
        $Ciu4 =" ";
        $Ciu5 =" ";
        $Ope1 =" ";
        $Ope2 =" ";
        $Ope3 =" ";
        $Ope4 =" ";
        $Ope5 =" ";
        $Opiniones =" ";
    //seccion 7
    //seccion 8
        $Pre1 =" ";
        $Pre2 =" ";
        $Pre3 =" ";
        $Pre4 =" ";
        $Pre5 =" ";
        $Pre6 =" ";
        $Pre7 =" ";
        $Pre8 =" ";
        $Pre9 =" ";
        $Pre10 =" ";
        $Pre11 =" ";
        $Pre12 =" ";
        $Pre13 =" ";
        $Pre14 =" ";
        $Pre15 =" ";
        $Pre16 =" ";
        $Pre17 =" ";
        $Pre18 =" ";
        $Pre19 =" ";
        $Pre20 =" ";
        $Pre21 =" ";
        $Pre22 =" ";
        $Pre23 =" ";
        $Pre24 =" ";
        $Pre25 =" ";
        $Pre26 =" ";
        $Pre27 =" ";
        $Pre28 =" ";
        $Pre29 =" ";
        $Pre30 =" ";
        $Pre31 =" ";
        $Pre32 =" ";
        $Pre33 =" ";
        $Pre34 =" ";
        $Pre35 =" ";
        $Pre36 =" ";
    //seccion 8
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
            $Semestre=$_POST["Semestre"];
            $Ciudad=$_POST["Ciudad"];
        //seccion 2
        //seccion 3
            if($_POST['Autodidacta'] == "Si"){$Autodidacta=$_POST["Autodidacta"];}else{$Autodidacta="No";}
            if($_POST['Curso'] == "Si"){$Curso=$_POST["Curso"];}else{$Curso="No";}
            $Otra=$_POST["Otra"];
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
            $Scopus=$_POST["Scopus"];
            $Sage=$_POST["Sage"];
            $Ebsco=$_POST["Ebsco"];
            $Legiscomex=$_POST["Legiscomex"];
            $Redalyc=$_POST["Redalyc"];
            $Scielo=$_POST["Scielo"];
            $Dialnet=$_POST["Dialnet"];
            $Science=$_POST["Science"];
            $Otro_cinco=$_POST["Otro_cinco"];
            $Zootero=$_POST["Zootero"];
            $Mendeley=$_POST["Mendeley"];
            $Refworks=$_POST["Refworks"];
            $Atlasti=$_POST["Atlasti"];
            $Spss=$_POST["Spss"];
            $Otro_sies=$_POST["Otro_sies"];
            $Researchgate=$_POST["Researchgate"];
            $Google_academico=$_POST["Google_academico"];
            $Cvlac=$_POST["Cvlac"];
            $Otro_siete=$_POST["Otro_siete"];
            $Ebooks=$_POST["Ebooks"];
            $Ribuc=$_POST["Ribuc"];
            $BiblioTechnia=$_POST["BiblioTechnia"];
            $Otro_ocho=$_POST["Otro_ocho"];
            $Herramienta_biblioteca=$_POST["Herramienta_biblioteca"];
        //seccion 4
        //seccion 5
            $Whatsapp=$_POST["Whatsapp"];
            $Facebook=$_POST["Facebook"];
            $Youtube=$_POST["Youtube"];
            $Instagram=$_POST["Instagram"];
            $Twitter=$_POST["Twitter"];
            $Linkedin=$_POST["Linkedin"];
            $Tiktok=$_POST["Tiktok"];
            $Otra_nueve=$_POST["Otra_nueve"];
            $Uso_redes_sociales=$_POST["Uso_redes_sociales"];
            $Criterios=$_POST["Criterios"];
        //seccion 5
        //seccion 6
            $Privasidad=$_POST["Privasidad"];
            $Derechos=$_POST["Derechos"];
            $Norma=$_POST["Norma"];
            $Normas=$_POST["Normas"];
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
            if($_POST['Pen1'] == "Si"){$Pen1=$_POST["Pen1"];}else{$Pen1="No";}
            if($_POST['Pen2'] == "Si"){$Pen2=$_POST["Pen2"];}else{$Pen2="No";}
            if($_POST['Pen3'] == "Si"){$Pen3=$_POST["Pen3"];}else{$Pen3="No";}
            if($_POST['Pen4'] == "Si"){$Pen4=$_POST["Pen4"];}else{$Pen4="No";}
            if($_POST['Pen5'] == "Si"){$Pen5=$_POST["Pen5"];}else{$Pen5="No";}
            if($_POST['Ciu1'] == "Si"){$Ciu1=$_POST["Ciu1"];}else{$Ciu1="No";}
            if($_POST['Ciu2'] == "Si"){$Ciu2=$_POST["Ciu2"];}else{$Ciu2="No";}
            if($_POST['Ciu3'] == "Si"){$Ciu3=$_POST["Ciu3"];}else{$Ciu3="No";}
            if($_POST['Ciu4'] == "Si"){$Ciu4=$_POST["Ciu4"];}else{$Ciu4="No";}
            if($_POST['Ciu5'] == "Si"){$Ciu5=$_POST["Ciu5"];}else{$Ciu5="No";}
            if($_POST['Ope1'] == "Si"){$Ope1=$_POST["Ope1"];}else{$Ope1="No";}
            if($_POST['Ope2'] == "Si"){$Ope2=$_POST["Ope2"];}else{$Ope2="No";}
            if($_POST['Ope3'] == "Si"){$Ope3=$_POST["Ope3"];}else{$Ope3="No";}
            if($_POST['Ope4'] == "Si"){$Ope4=$_POST["Ope4"];}else{$Ope4="No";}
            if($_POST['Ope5'] == "Si"){$Ope5=$_POST["Ope5"];}else{$Ope5="No";}
            $Opiniones=$_POST["Opiniones"];
        //seccion 7
        //seccion 8
            $Pre1=$_POST["Pre1"];
            $Pre2=$_POST["Pre2"];
            $Pre3=$_POST["Pre3"];
            $Pre4=$_POST["Pre4"];
            $Pre5=$_POST["Pre5"];
            $Pre6=$_POST["Pre6"];
            $Pre7=$_POST["Pre7"];
            $Pre8=$_POST["Pre8"];
            $Pre9=$_POST["Pre9"];
            $Pre10=$_POST["Pre10"];
            $Pre11=$_POST["Pre11"];
            $Pre12=$_POST["Pre12"];
            $Pre13=$_POST["Pre13"];
            $Pre14=$_POST["Pre14"];
            $Pre15=$_POST["Pre15"];
            $Pre16=$_POST["Pre16"];
            $Pre17=$_POST["Pre17"];
            $Pre18=$_POST["Pre18"];
            $Pre19=$_POST["Pre19"];
            $Pre20=$_POST["Pre20"];
            $Pre21=$_POST["Pre21"];
            $Pre22=$_POST["Pre22"];
            $Pre23=$_POST["Pre23"];
            $Pre24=$_POST["Pre24"];
            $Pre25=$_POST["Pre25"];
            $Pre26=$_POST["Pre26"];
            $Pre27=$_POST["Pre27"];
            $Pre28=$_POST["Pre28"];
            $Pre29=$_POST["Pre29"];
            $Pre30=$_POST["Pre30"];
            $Pre31=$_POST["Pre31"];
            $Pre32=$_POST["Pre32"];
            $Pre33=$_POST["Pre33"];
            $Pre34=$_POST["Pre34"];
            $Pre35=$_POST["Pre35"];
            $Pre36=$_POST["Pre36"];
        //seccion 8
        $Ingresar = "INSERT INTO `1.0_Estudiantes` (`ID`,`Correo`,
                                                `Nombres`,`Apellidos`,`Documento`,`Numero`,`Programa`,`Semestre`,`Ciudad`,
                                                `Habilidades_digitales`,`Habilidades_texto`,`Habilidades_calculo`,`Habilidades_presentacion`,`Habilidades_datos`,`Habilidades_herramientas`,`Habilidades_correo`,`Habilidades_hardware`,`Habilidades_software`,`Otro_uno`,
                                                `Habilidades_navegador`,`Habilidades_buscadores`,`Habilidades_correo_electronico`,`Habilidades_seguridad`,`Habilidades_redes_sociales`,`Habilidades_foros`,`Habilidades_blogs`,`Habilidades_nube`,`Habilidades_conferencias`,`Otro_dos`,
                                                `Habilidades_buscador`,`Habilidades_correos`,`Habilidades_calendario`,`Habilidades_drive`,`Habilidades_documentos`,`Habilidades_calculos`,`Habilidades_presentaciones`,`Habilidades_formularios`,`Habilidades_keep`,`Habilidades_jamboard`,`Otro_tres`,
                                                `Otro_cuatro`,`Servicios_ucp`,
                                                `Scopus`,`Sage`,`Ebsco`,`Legiscomex`,`Redalyc`,`Scielo`,`Dialnet`,`Science`,`Otro_cinco`,
                                                `Zootero`,`Mendeley`,`Refworks`,`Atlasti`,`Spss`,`Otro_sies`,
                                                `Researchgate`,`Google_academico`,`Cvlac`,`Otro_siete`,
                                                `Ebooks`,`Ribuc`,`BiblioTechnia`,`Otro_ocho`,`Herramienta_biblioteca`,
                                                `Whatsapp`,`Facebook`,`Youtube`,`Instagram`,`Twitter`,`Linkedin`,`Tiktok`,`Otra_nueve`,`Uso_redes_sociales`,`Criterios`,
                                                `Privasidad`,`Derechos`,`Norma`,`Normas`,`Netiqueta`,`Trato`,`Ignorar`,`Breve`,`Preocupacion`,`Demas`,`Respeto`,`Mucho_texto`,
                                                `Opiniones`,
                                                `Pre1`,`Pre2`,`Pre3`,`Pre4`,`Pre5`,`Pre6`,`Pre7`,`Pre8`,`Pre9`,`Pre10`,`Pre11`,`Pre12`,`Pre13`,`Pre14`,`Pre15`,`Pre16`,`Pre17`,`Pre18`,`Pre19`,`Pre20`,`Pre21`,`Pre22`,`Pre23`,`Pre24`,`Pre25`,`Pre26`,`Pre27`,`Pre28`,`Pre29`,`Pre30`,`Pre31`,`Pre32`,`Pre33`,`Pre34`,`Pre35`,`Pre36`)
                     VALUES (NULL,'$Correo',
                                  '$Nombres','$Apellidos','$Documento','$Numero','$Programa','$Semestre','$Ciudad',
                                  '$Habilidades_digitales','$Habilidades_texto','$Habilidades_calculo','$Habilidades_presentacion','$Habilidades_datos','$Habilidades_herramientas','$Habilidades_correo','$Habilidades_hardware','$Habilidades_software','$Otro_uno',
                                  '$Habilidades_navegador','$Habilidades_buscadores','$Habilidades_correo_electronico','$Habilidades_seguridad','$Habilidades_redes_sociales','$Habilidades_foros','$Habilidades_blogs','$Habilidades_nube','$Habilidades_conferencias','$Otro_dos',
                                  '$Habilidades_buscador','$Habilidades_correos','$Habilidades_calendario','$Habilidades_drive','$Habilidades_documentos','$Habilidades_calculos','$Habilidades_presentaciones','$Habilidades_formularios','$Habilidades_keep','$Habilidades_jamboard','$Otro_tres',
                                  '$Otro_cuatro','$Servicios_ucp',
                                  '$Scopus','$Sage','$Ebsco','$Legiscomex','$Redalyc','$Scielo','$Dialnet','$Science','$Otro_cinco',
                                  '$Zootero','$Mendeley','$Refworks','$Atlasti','$Spss','$Otro_sies',
                                  '$Researchgate','$Google_academico','$Cvlac','$Otro_siete',
                                  '$Ebooks','$Ribuc','$BiblioTechnia','$Otro_ocho','$Herramienta_biblioteca',
                                  '$Whatsapp','$Facebook','$Youtube','$Instagram','$Twitter','$Linkedin','$Tiktok','$Otra_nueve','$Uso_redes_sociales','$Criterios',
                                  '$Privasidad','$Derechos','$Norma','$Normas','$Netiqueta','$Trato','$Ignorar','$Breve','$Preocupacion','$Demas','$Respeto','$Mucho_texto',
                                  '$Opiniones',
                                  '$Pre1','$Pre2','$Pre3','$Pre4','$Pre5','$Pre6','$Pre7','$Pre8','$Pre9','$Pre10','$Pre11','$Pre12','$Pre13','$Pre14','$Pre15','$Pre16','$Pre17','$Pre18','$Pre19','$Pre20','$Pre21','$Pre22','$Pre23','$Pre24','$Pre25','$Pre26','$Pre27','$Pre28','$Pre29','$Pre30','$Pre31','$Pre32','$Pre33','$Pre34','$Pre35','$Pre36')";
        $Ingreso = mysqli_query($cn,$Ingresar);

        $Ingresar_conocimiento = "INSERT INTO `1.1_Conocimiento_adquirido` (`ID`,`Correo`,
                                                                             `Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                                             `Autodidacta`,`Curso`,`Otra`) 
                                  VALUES (NULL,'$Correo',
                                               '$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                               '$Autodidacta','$Curso','$Otra')";
        $Ingreso_conocimiento = mysqli_query($cn,$Ingresar_conocimiento);

        $Ingresar_Gua = "INSERT INTO `1.10_Guardar` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                     `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                      '$Gu1','$Gu2','$Gu3','$Gu4','$Gu5')";
        $Ingreso_Gua = mysqli_query($cn,$Ingresar_Gua);

        $Ingresar_Con = "INSERT INTO `1.11_Contrastar` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                        `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                      '$Co1','$Co2','$Co3','$Co4','$Co5')";
        $Ingreso_Con = mysqli_query($cn,$Ingresar_Con);

        $Ingresar_Crea = "INSERT INTO `1.12_Creatividad` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                          `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                          VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                       '$Crea1','$Crea2','$Crea3','$Crea4','$Crea5')";
        $Ingreso_Crea = mysqli_query($cn,$Ingresar_Crea);

        $Ingresar_Com = "INSERT INTO `1.13_Comunicacion` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                          `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                      '$Com1','$Com2','$Com3','$Com4','$Com5')";
        $Ingreso_Com = mysqli_query($cn,$Ingresar_Com);

        $Ingresar_Inv = "INSERT INTO `1.14_Investigacion` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                           `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                      '$Inv1','$Inv2','$Inv3','$Inv4','$Inv5')";
        $Ingreso_Inv = mysqli_query($cn,$Ingresar_Inv);

        $Ingresar_Pen = "INSERT INTO `1.15_Pensamiento` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                         `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                      '$Pen1','$Pen2','$Pen3','$Pen4','$Pen5')";
        $Ingreso_Pen = mysqli_query($cn,$Ingresar_Pen);

        $Ingresar_Ciu = "INSERT INTO `1.16_Ciudadania` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                        `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                      '$Ciu1','$Ciu2','$Ciu3','$Ciu4','$Ciu5')";
        $Ingreso_Ciu = mysqli_query($cn,$Ingresar_Ciu);

        $Ingresar_Ope = "INSERT INTO `1.17_Operaciones` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                         `Op1`,`Op2`,`Op3`,`Op4`,`Op5`) 
                         VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                      '$Ope1','$Ope2','$Ope3','$Ope4','$Ope5')";
        $Ingreso_Ope = mysqli_query($cn,$Ingresar_Ope);

        $Ingresar_moodle = "INSERT INTO `1.2_Moodle` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                       `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                            VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                         '$Mo1','$Mo2','$Mo3','$Mo4','$Mo7','$Mo8','$Mo9','$Mo10')";
        $Ingreso_moodel = mysqli_query($cn,$Ingresar_moodle);

        $Ingresar_Portal = "INSERT INTO `1.3_Portal_estudiantil` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                                   `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                            VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                         '$Pe1','$Pe2','$Pe3','$Pe4','$Pe7','$Pe8','$Pe9','$Pe10')";
        $Ingreso_Portal = mysqli_query($cn,$Ingresar_Portal);

        $Ingresar_Solicitudes = "INSERT INTO `1.4_Solicitudes` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                                 `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                                 VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                              '$So1','$So2','$So3','$So4','$So7','$So8','$So9','$So10')";
        $Ingreso_Solicitudes = mysqli_query($cn,$Ingresar_Solicitudes);

        $Ingresar_Bases = "INSERT INTO `1.5_Bases_datos` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                           `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                           VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                        '$Bd1','$Bd2','$Bd3','$Bd4','$Bd7','$Bd8','$Bd9','$Bd10')";
        $Ingreso_Bases = mysqli_query($cn,$Ingresar_Bases);

        $Ingresar_Catalogo = "INSERT INTO `1.6_Catalogo` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                           `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                              VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                           '$Ca1','$Ca2','$Ca3','$Ca4','$Ca7','$Ca8','$Ca9','$Ca10')";
        $Ingreso_Catalogo = mysqli_query($cn,$Ingresar_Catalogo);

        $Ingresar_Repositorio = "INSERT INTO `1.7_Repositorio` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                                 `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                                 VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                              '$Re1','$Re2','$Re3','$Re4','$Re7','$Re8','$Re9','$Re10')";
        $Ingreso_Repositorio = mysqli_query($cn,$Ingresar_Repositorio);

        $Ingresar_Publicaciones = "INSERT INTO `1.8_Publicaciones` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                                     `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                                   VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                                '$Pu1','$Pu2','$Pu3','$Pu4','$Pu7','$Pu8','$Pu9','$Pu10')";
        $Ingreso_Publicaciones = mysqli_query($cn,$Ingresar_Publicaciones);

        $Ingresar_Libros = "INSERT INTO `1.9_Libros` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Semestre`,
                                                       `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`) 
                            VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Semestre',
                                         '$Li1','$Li2','$Li3','$Li4','$Li7','$Li8','$Li9','$Li10')";
        $Ingreso_Libros = mysqli_query($cn,$Ingresar_Libros);

        include "estudiante.php";
    }
    mysqli_close($cn);
?>