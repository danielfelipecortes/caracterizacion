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
        $Contratacion = 0;
        $Ciudad = 0;
    //seccion 2
    //seccion 3
        $Habilidades_texto_a =" ";
        $Habilidades_texto_b =" ";
        $Habilidades_calculo_a =" ";
        $Habilidades_calculo_b =" ";
        $Habilidades_presentacion_a =" ";
        $Habilidades_presentacion_b =" ";
        $Habilidades_datos_a =" ";
        $Habilidades_datos_b =" ";
        $Habilidades_herramientas_a =" ";
        $Habilidades_herramientas_b =" ";
        $Habilidades_correo_a =" ";
        $Habilidades_correo_b =" ";
        $Habilidades_hardware_a =" ";
        $Habilidades_hardware_b =" ";
        $Habilidades_software_a =" ";
        $Habilidades_software_b =" ";
        $Otro_uno =" ";
        $Habilidades_navegador_a =" ";
        $Habilidades_navegador_b =" ";
        $Habilidades_buscadores_a =" ";
        $Habilidades_buscadores_b =" ";
        $Habilidades_correo_electronico_a =" ";
        $Habilidades_correo_electronico_b =" ";
        $Habilidades_seguridad_a =" ";
        $Habilidades_seguridad_b =" ";
        $Habilidades_redes_sociales_a =" ";
        $Habilidades_redes_sociales_b =" ";
        $Habilidades_foros_a =" ";
        $Habilidades_foros_b =" ";
        $Habilidades_blogs_a =" ";
        $Habilidades_blogs_b =" ";
        $Habilidades_nube_a =" ";
        $Habilidades_nube_b =" ";
        $Habilidades_conferencias_a =" ";
        $Habilidades_conferencias_b =" ";
        $Habilidades_web2_a =" ";
        $Habilidades_web2_b =" ";
        $Habilidades_web3_a =" ";
        $Habilidades_web3_b =" ";
        $Habilidades_web4_a =" ";
        $Habilidades_web4_b =" ";
        $Otro_dos =" ";
        $Habilidades_buscador_a =" ";
        $Habilidades_buscador_b =" ";
        $Habilidades_correos_a =" ";
        $Habilidades_correos_b =" ";
        $Habilidades_calendario_a =" ";
        $Habilidades_calendario_b =" ";
        $Habilidades_drive_a =" ";
        $Habilidades_drive_b =" ";
        $Habilidades_documentos_a =" ";
        $Habilidades_documentos_b =" ";
        $Habilidades_calculos_a =" ";
        $Habilidades_calculos_b =" ";
        $Habilidades_presentaciones_a =" ";
        $Habilidades_presentaciones_b =" ";
        $Habilidades_formularios_a =" ";
        $Habilidades_formularios_b =" ";
        $Habilidades_keep_a =" ";
        $Habilidades_keep_b =" ";
        $Habilidades_tareas_a =" ";
        $Habilidades_tareas_b =" ";
        $Otro_tres =" ";
        $Whatsapp_a =" ";
        $Whatsapp_b =" ";
        $Facebook_a =" ";
        $Facebook_b =" ";
        $Youtube_a =" ";
        $Youtube_b =" ";
        $Instagram_a =" ";
        $Instagram_b =" ";
        $Twitter_a =" ";
        $Twitter_b =" ";
        $Linkedin_a =" ";
        $Linkedin_b =" ";
        $Tiktok_a =" ";
        $Tiktok_b =" ";
        $Otro_cuatro =" ";
        $Docs_a =" ";
        $Docs_b =" ";
        $Kahoot_a =" ";
        $Kahoot_b =" ";
        $Moodle_a =" ";
        $Moodle_b =" ";
        $Classroom_a =" ";
        $Classroom_b =" ";
        $Evernote_a =" ";
        $Evernote_b =" ";
        $Slideshare_a =" ";
        $Slideshare_b =" ";
        $Prezi_a =" ";
        $Prezi_b =" ";
        $Blogger_a =" ";
        $Blogger_b =" ";
        $Edmodo_a =" ";
        $Edmodo_b =" ";
        $Sites_a =" ";
        $Sites_b =" ";
        $Powtoon_a =" ";
        $Powtoon_b =" ";
        $Khan_a =" ";
        $Khan_b =" ";
        $Mindjet_a =" ";
        $Mindjet_b =" ";
        $Onenote_a =" ";
        $Onenote_b =" ";
        $Cam_a =" ";
        $Cam_b =" ";
        $Canva_a =" ";
        $Canva_b =" ";
        $Dropbox_a =" ";
        $Dropbox_b =" ";
        $Socrative_a =" ";
        $Socrative_b =" ";
        $Expediciones_a =" ";
        $Expediciones_b =" ";
        $Wix_a =" ";
        $Wix_b =" ";
        $Vyond_a =" ";
        $Vyond_b =" ";
        $Otro_cinco =" ";
        $Intranet_a =" ";
        $Intranet_b =" ";
        $Portal_docente_a =" ";
        $Portal_docente_b =" ";
        $Escalafon_a =" ";
        $Escalafon_b =" ";
        $Publicaciones_a =" ";
        $Publicaciones_b =" ";
        $Moodle_ucp_a =" ";
        $Moodle_ucp_b =" ";
        $Datos_a =" ";
        $Datos_b =" ";
        $Catalogo_a =" ";
        $Catalogo_b =" ";
        $Repositorio_a =" ";
        $Repositorio_b =" ";
        $Libros_a =" ";
        $Libros_b =" ";
        $Gestion_a =" ";
        $Gestion_b =" ";
        $Otro_sies =" ";
        $Servicios_ucp =" ";
    //seccion 3
    //seccion 4
        $Scopus_a =" ";
        $Scopus_b =" ";
        $Sage_a =" ";
        $Sage_b =" ";
        $Ebsco_a =" ";
        $Ebsco_b =" ";
        $Legiscomex_a =" ";
        $Legiscomex_b =" ";
        $Redalyc_a =" ";
        $Redalyc_b =" ";
        $Scielo_a =" ";
        $Scielo_b =" ";
        $Dialnet_a =" ";
        $Dialnet_b =" ";
        $Science_a =" ";
        $Science_b =" ";
        $Otro_siete =" ";
        $Zootero_a =" ";
        $Zootero_b =" ";
        $Mendeley_a =" ";
        $Mendeley_b =" ";
        $Refworks_a =" ";
        $Refworks_b =" ";
        $Atlasti_a =" ";
        $Atlasti_b =" ";
        $Spss_a =" ";
        $Spss_b =" ";
        $Turnitin_a =" ";
        $Turnitin_b =" ";
        $Plagium_a =" ";
        $Plagium_b =" ";
        $Plagtracker_a =" ";
        $Plagtracker_b =" ";
        $Otro_ocho =" ";
        $Researchgate_a =" ";
        $Researchgate_b =" ";
        $Google_academico_a =" ";
        $Google_academico_b =" ";
        $Cvlac_a =" ";
        $Cvlac_b =" ";
        $Otro_nueve =" ";
        $Ebooks_a =" ";
        $Ebooks_b =" ";
        $Ribuc_a =" ";
        $Ribuc_b =" ";
        $BiblioTechnia_a =" ";
        $BiblioTechnia_b =" ";
        $Otro_dies =" ";
        $Opiniones =" ";
        $Opiniones2 =" ";
    //seccion 4
    //seccion 5
        $Si1 =" ";
        $Si2 =" ";
        $Si3 =" ";
        $Si4 =" ";
        $Si5 =" ";
        $Si6 =" ";
        $Si7 =" ";
        $Si8 =" ";
        $Si9 =" ";
        $Bd1 =" ";
        $Bd2 =" ";
        $Bd3 =" ";
        $Bd4 =" ";
        $Bd5 =" ";
        $Bd6 =" ";
        $Bd7 =" ";
        $Bd8 =" ";
        $Bd9 =" ";
        $Ca1 =" ";
        $Ca2 =" ";
        $Ca3 =" ";
        $Ca4 =" ";
        $Ca5 =" ";
        $Ca6 =" ";
        $Ca7 =" ";
        $Ca8 =" ";
        $Ca9 =" ";
        $Re1 =" ";
        $Re2 =" ";
        $Re3 =" ";
        $Re4 =" ";
        $Re5 =" ";
        $Re6 =" ";
        $Re7 =" ";
        $Re8 =" ";
        $Re9 =" ";
        $Pu1 =" ";
        $Pu2 =" ";
        $Pu3 =" ";
        $Pu4 =" ";
        $Pu5 =" ";
        $Pu6 =" ";
        $Pu7 =" ";
        $Pu8 =" ";
        $Pu9 =" ";
    //seccion 5

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
            $Contratacion=$_POST["Contratacion"];
            $Ciudad=$_POST["Ciudad"];
        //seccion 2
        //seccion 3
            $Habilidades_texto_a=$_POST["Habilidades_texto_a"];
            $Habilidades_texto_b=$_POST["Habilidades_texto_b"];
            $Habilidades_calculo_a=$_POST["Habilidades_calculo_a"];
            $Habilidades_calculo_b=$_POST["Habilidades_calculo_b"];
            $Habilidades_presentacion_a=$_POST["Habilidades_presentacion_a"];
            $Habilidades_presentacion_b=$_POST["Habilidades_presentacion_b"];
            $Habilidades_datos_a=$_POST["Habilidades_datos_a"];
            $Habilidades_datos_b=$_POST["Habilidades_datos_b"];
            $Habilidades_herramientas_a=$_POST["Habilidades_herramientas_a"];
            $Habilidades_herramientas_b=$_POST["Habilidades_herramientas_b"];
            $Habilidades_correo_a=$_POST["Habilidades_correo_a"];
            $Habilidades_correo_b=$_POST["Habilidades_correo_b"];
            $Habilidades_hardware_a=$_POST["Habilidades_hardware_a"];
            $Habilidades_hardware_b=$_POST["Habilidades_hardware_b"];
            $Habilidades_software_a=$_POST["Habilidades_software_a"];
            $Habilidades_software_b=$_POST["Habilidades_software_b"];
            $Otro_uno=$_POST["Otro_uno"];
            $Habilidades_navegador_a=$_POST["Habilidades_navegador_a"];
            $Habilidades_navegador_b=$_POST["Habilidades_navegador_b"];
            $Habilidades_buscadores_a=$_POST["Habilidades_buscadores_a"];
            $Habilidades_buscadores_b=$_POST["Habilidades_buscadores_b"];
            $Habilidades_correo_electronico_a=$_POST["Habilidades_correo_electronico_a"];
            $Habilidades_correo_electronico_b=$_POST["Habilidades_correo_electronico_b"];
            $Habilidades_seguridad_a=$_POST["Habilidades_seguridad_a"];
            $Habilidades_seguridad_b=$_POST["Habilidades_seguridad_b"];
            $Habilidades_redes_sociales_a=$_POST["Habilidades_redes_sociales_a"];
            $Habilidades_redes_sociales_b=$_POST["Habilidades_redes_sociales_b"];
            $Habilidades_foros_a=$_POST["Habilidades_foros_a"];
            $Habilidades_foros_b=$_POST["Habilidades_foros_b"];
            $Habilidades_blogs_a=$_POST["Habilidades_blogs_a"];
            $Habilidades_blogs_b=$_POST["Habilidades_blogs_b"];
            $Habilidades_nube_a=$_POST["Habilidades_nube_a"];
            $Habilidades_nube_b=$_POST["Habilidades_nube_b"];
            $Habilidades_conferencias_a=$_POST["Habilidades_conferencias_a"];
            $Habilidades_conferencias_b=$_POST["Habilidades_conferencias_b"];
            $Habilidades_web2_a=$_POST["Habilidades_web2_a"];
            $Habilidades_web2_b=$_POST["Habilidades_web2_b"];
            $Habilidades_web3_a=$_POST["Habilidades_web3_a"];
            $Habilidades_web3_b=$_POST["Habilidades_web3_b"];
            $Habilidades_web4_a=$_POST["Habilidades_web4_a"];
            $Habilidades_web4_b=$_POST["Habilidades_web4_b"];
            $Otro_dos=$_POST["Otro_dos"];
            $Habilidades_buscador_a=$_POST["Habilidades_buscador_a"];
            $Habilidades_buscador_b=$_POST["Habilidades_buscador_b"];
            $Habilidades_correos_a=$_POST["Habilidades_correos_a"];
            $Habilidades_correos_b=$_POST["Habilidades_correos_b"];
            $Habilidades_calendario_a=$_POST["Habilidades_calendario_a"];
            $Habilidades_calendario_b=$_POST["Habilidades_calendario_b"];
            $Habilidades_drive_a=$_POST["Habilidades_drive_a"];
            $Habilidades_drive_b=$_POST["Habilidades_drive_b"];
            $Habilidades_documentos_a=$_POST["Habilidades_documentos_a"];
            $Habilidades_documentos_b=$_POST["Habilidades_documentos_b"];
            $Habilidades_calculos_a=$_POST["Habilidades_calculos_a"];
            $Habilidades_calculos_b=$_POST["Habilidades_calculos_b"];
            $Habilidades_presentaciones_a=$_POST["Habilidades_presentaciones_a"];
            $Habilidades_presentaciones_b=$_POST["Habilidades_presentaciones_b"];
            $Habilidades_formularios_a=$_POST["Habilidades_formularios_a"];
            $Habilidades_formularios_b=$_POST["Habilidades_formularios_b"];
            $Habilidades_keep_a=$_POST["Habilidades_keep_a"];
            $Habilidades_keep_b=$_POST["Habilidades_keep_b"];
            $Habilidades_tareas_a=$_POST["Habilidades_tareas_a"];
            $Habilidades_tareas_b=$_POST["Habilidades_tareas_b"];
            $Otro_tres=$_POST["Otro_tres"];
            $Whatsapp_a=$_POST["Whatsapp_a"];
            $Whatsapp_b=$_POST["Whatsapp_b"];
            $Facebook_a=$_POST["Facebook_a"];
            $Facebook_b=$_POST["Facebook_b"];
            $Youtube_a=$_POST["Youtube_a"];
            $Youtube_b=$_POST["Youtube_b"];
            $Instagram_a=$_POST["Instagram_a"];
            $Instagram_b=$_POST["Instagram_b"];
            $Twitter_a=$_POST["Twitter_a"];
            $Twitter_b=$_POST["Twitter_b"];
            $Linkedin_a=$_POST["Linkedin_a"];
            $Linkedin_b=$_POST["Linkedin_b"];
            $Tiktok_a=$_POST["Tiktok_a"];
            $Tiktok_b=$_POST["Tiktok_b"];
            $Otro_cuatro=$_POST["Otro_cuatro"];
            $Docs_a=$_POST["Docs_a"];
            $Docs_b=$_POST["Docs_b"];
            $Kahoot_a=$_POST["Kahoot_a"];
            $Kahoot_b=$_POST["Kahoot_b"];
            $Moodle_a=$_POST["Moodle_a"];
            $Moodle_b=$_POST["Moodle_b"];
            $Classroom_a=$_POST["Classroom_a"];
            $Classroom_b=$_POST["Classroom_b"];
            $Evernote_a=$_POST["Evernote_a"];
            $Evernote_b=$_POST["Evernote_b"];
            $Slideshare_a=$_POST["Slideshare_a"];
            $Slideshare_b=$_POST["Slideshare_b"];
            $Prezi_a=$_POST["Prezi_a"];
            $Prezi_b=$_POST["Prezi_b"];
            $Blogger_a=$_POST["Blogger_a"];
            $Blogger_b=$_POST["Blogger_b"];
            $Edmodo_a=$_POST["Edmodo_a"];
            $Edmodo_b=$_POST["Edmodo_b"];
            $Sites_a=$_POST["Sites_a"];
            $Sites_b=$_POST["Sites_b"];
            $Powtoon_a=$_POST["Powtoon_a"];
            $Powtoon_b=$_POST["Powtoon_b"];
            $Khan_a=$_POST["Khan_a"];
            $Khan_b=$_POST["Khan_b"];
            $Mindjet_a=$_POST["Mindjet_a"];
            $Mindjet_b=$_POST["Mindjet_b"];
            $Onenote_a=$_POST["Onenote_a"];
            $Onenote_b=$_POST["Onenote_b"];
            $Cam_a=$_POST["Cam_a"];
            $Cam_b=$_POST["Cam_b"];
            $Canva_a=$_POST["Canva_a"];
            $Canva_b=$_POST["Canva_b"];
            $Dropbox_a=$_POST["Dropbox_a"];
            $Dropbox_b=$_POST["Dropbox_b"];
            $Socrative_a=$_POST["Socrative_a"];
            $Socrative_b=$_POST["Socrative_b"];
            $Expediciones_a=$_POST["Expediciones_a"];
            $Expediciones_b=$_POST["Expediciones_b"];
            $Wix_a=$_POST["Wix_a"];
            $Wix_b=$_POST["Wix_b"];
            $Vyond_a=$_POST["Vyond_a"];
            $Vyond_b=$_POST["Vyond_b"];
            $Otro_cinco=$_POST["Otro_cinco"];
            $Intranet_a=$_POST["Intranet_a"];
            $Intranet_b=$_POST["Intranet_b"];
            $Portal_docente_a=$_POST["Portal_docente_a"];
            $Portal_docente_b=$_POST["Portal_docente_b"];
            $Escalafon_a=$_POST["Escalafon_a"];
            $Escalafon_b=$_POST["Escalafon_b"];
            $Publicaciones_a=$_POST["Publicaciones_a"];
            $Publicaciones_b=$_POST["Publicaciones_b"];
            $Moodle_ucp_a=$_POST["Moodle_ucp_a"];
            $Moodle_ucp_b=$_POST["Moodle_ucp_b"];
            $Datos_a=$_POST["Datos_a"];
            $Datos_b=$_POST["Datos_b"];
            $Catalogo_a=$_POST["Catalogo_a"];
            $Catalogo_b=$_POST["Catalogo_b"];
            $Repositorio_a=$_POST["Repositorio_a"];
            $Repositorio_b=$_POST["Repositorio_b"];
            $Libros_a=$_POST["Libros_a"];
            $Libros_b=$_POST["Libros_b"];
            $Gestion_a=$_POST["Gestion_a"];
            $Gestion_b=$_POST["Gestion_b"];
            $Otro_sies=$_POST["Otro_sies"];
            $Servicios_ucp=$_POST["Servicios_ucp"];
        //seccion 3
        //seccion 4
            $Scopus_a=$_POST["Scopus_a"];
            $Scopus_b=$_POST["Scopus_b"];
            $Sage_a=$_POST["Sage_a"];
            $Sage_b=$_POST["Sage_b"];
            $Ebsco_a=$_POST["Ebsco_a"];
            $Ebsco_b=$_POST["Ebsco_b"];
            $Legiscomex_a=$_POST["Legiscomex_a"];
            $Legiscomex_b=$_POST["Legiscomex_b"];
            $Redalyc_a=$_POST["Redalyc_a"];
            $Redalyc_b=$_POST["Redalyc_b"];
            $Scielo_a=$_POST["Scielo_a"];
            $Scielo_b=$_POST["Scielo_b"];
            $Dialnet_a=$_POST["Dialnet_a"];
            $Dialnet_b=$_POST["Dialnet_b"];
            $Science_a=$_POST["Science_a"];
            $Science_b=$_POST["Science_b"];
            $Otro_siete=$_POST["Otro_siete"];
            $Zootero_a=$_POST["Zootero_a"];
            $Zootero_b=$_POST["Zootero_b"];
            $Mendeley_a=$_POST["Mendeley_a"];
            $Mendeley_b=$_POST["Mendeley_b"];
            $Refworks_a=$_POST["Refworks_a"];
            $Refworks_b=$_POST["Refworks_b"];
            $Atlasti_a=$_POST["Atlasti_a"];
            $Atlasti_b=$_POST["Atlasti_b"];
            $Spss_a=$_POST["Spss_a"];
            $Spss_b=$_POST["Spss_b"];
            $Turnitin_a=$_POST["Turnitin_a"];
            $Turnitin_b=$_POST["Turnitin_b"];
            $Plagium_a=$_POST["Plagium_a"];
            $Plagium_b=$_POST["Plagium_b"];
            $Plagtracker_a=$_POST["Plagtracker_a"];
            $Plagtracker_b=$_POST["Plagtracker_b"];
            $Otro_ocho=$_POST["Otro_ocho"];
            $Researchgate_a=$_POST["Researchgate_a"];
            $Researchgate_b=$_POST["Researchgate_b"];
            $Google_academico_a=$_POST["Google_academico_a"];
            $Google_academico_b=$_POST["Google_academico_b"];
            $Cvlac_a=$_POST["Cvlac_a"];
            $Cvlac_b=$_POST["Cvlac_b"];
            $Otro_nueve=$_POST["Otro_nueve"];
            $Ebooks_a=$_POST["Ebooks_a"];
            $Ebooks_b=$_POST["Ebooks_b"];
            $Ribuc_a=$_POST["Ribuc_a"];
            $Ribuc_b=$_POST["Ribuc_b"];
            $BiblioTechnia_a=$_POST["BiblioTechnia_a"];
            $BiblioTechnia_b=$_POST["BiblioTechnia_b"];
            $Otro_dies=$_POST["Otro_dies"];
            $Opiniones=$_POST["Opiniones"];
            $Opiniones2=$_POST["Opiniones2"];
        //seccion 4
        //seccion 5
        if($_POST['Si1'] == "Si"){$Si1=$_POST["Si1"];}else{$Si1="No";}
        if($_POST['Si2'] == "Si"){$Si2=$_POST["Si2"];}else{$Si2="No";}
        if($_POST['Si3'] == "Si"){$Si3=$_POST["Si3"];}else{$Si3="No";}
        if($_POST['Si4'] == "Si"){$Si4=$_POST["Si4"];}else{$Si4="No";}
        if($_POST['Si5'] == "Si"){$Si5=$_POST["Si5"];}else{$Si5="No";}
        if($_POST['Si6'] == "Si"){$Si6=$_POST["Si6"];}else{$Si6="No";}
        if($_POST['Si7'] == "Si"){$Si7=$_POST["Si7"];}else{$Si7="No";}
        if($_POST['Si8'] == "Si"){$Si8=$_POST["Si8"];}else{$Si8="No";}
        if($_POST['Si9'] == "Si"){$Si9=$_POST["Si9"];}else{$Si9="No";}
        if($_POST['Bd1'] == "Si"){$Bd1=$_POST["Bd1"];}else{$Bd1="No";}
        if($_POST['Bd2'] == "Si"){$Bd2=$_POST["Bd2"];}else{$Bd2="No";}
        if($_POST['Bd3'] == "Si"){$Bd3=$_POST["Bd3"];}else{$Bd3="No";}
        if($_POST['Bd4'] == "Si"){$Bd4=$_POST["Bd4"];}else{$Bd4="No";}
        if($_POST['Bd5'] == "Si"){$Bd5=$_POST["Bd5"];}else{$Bd5="No";}
        if($_POST['Bd6'] == "Si"){$Bd6=$_POST["Bd6"];}else{$Bd6="No";}
        if($_POST['Bd7'] == "Si"){$Bd7=$_POST["Bd7"];}else{$Bd7="No";}
        if($_POST['Bd8'] == "Si"){$Bd8=$_POST["Bd8"];}else{$Bd8="No";}
        if($_POST['Bd9'] == "Si"){$Bd9=$_POST["Bd9"];}else{$Bd9="No";}
        if($_POST['Ca1'] == "Si"){$Ca1=$_POST["Ca1"];}else{$Ca1="No";}
        if($_POST['Ca2'] == "Si"){$Ca2=$_POST["Ca2"];}else{$Ca2="No";}
        if($_POST['Ca3'] == "Si"){$Ca3=$_POST["Ca3"];}else{$Ca3="No";}
        if($_POST['Ca4'] == "Si"){$Ca4=$_POST["Ca4"];}else{$Ca4="No";}
        if($_POST['Ca5'] == "Si"){$Ca5=$_POST["Ca5"];}else{$Ca5="No";}
        if($_POST['Ca6'] == "Si"){$Ca6=$_POST["Ca6"];}else{$Ca6="No";}
        if($_POST['Ca7'] == "Si"){$Ca7=$_POST["Ca7"];}else{$Ca7="No";}
        if($_POST['Ca8'] == "Si"){$Ca8=$_POST["Ca8"];}else{$Ca8="No";}
        if($_POST['Ca9'] == "Si"){$Ca9=$_POST["Ca9"];}else{$Ca9="No";}
        if($_POST['Re1'] == "Si"){$Re1=$_POST["Re1"];}else{$Re1="No";}
        if($_POST['Re2'] == "Si"){$Re2=$_POST["Re2"];}else{$Re2="No";}
        if($_POST['Re3'] == "Si"){$Re3=$_POST["Re3"];}else{$Re3="No";}
        if($_POST['Re4'] == "Si"){$Re4=$_POST["Re4"];}else{$Re4="No";}
        if($_POST['Re5'] == "Si"){$Re5=$_POST["Re5"];}else{$Re5="No";}
        if($_POST['Re6'] == "Si"){$Re6=$_POST["Re6"];}else{$Re6="No";}
        if($_POST['Re7'] == "Si"){$Re7=$_POST["Re7"];}else{$Re7="No";}
        if($_POST['Re8'] == "Si"){$Re8=$_POST["Re8"];}else{$Re8="No";}
        if($_POST['Re9'] == "Si"){$Re9=$_POST["Re9"];}else{$Re9="No";}
        if($_POST['Pu1'] == "Si"){$Pu1=$_POST["Pu1"];}else{$Pu1="No";}
        if($_POST['Pu2'] == "Si"){$Pu2=$_POST["Pu2"];}else{$Pu2="No";}
        if($_POST['Pu3'] == "Si"){$Pu3=$_POST["Pu3"];}else{$Pu3="No";}
        if($_POST['Pu4'] == "Si"){$Pu4=$_POST["Pu4"];}else{$Pu4="No";}
        if($_POST['Pu5'] == "Si"){$Pu5=$_POST["Pu5"];}else{$Pu5="No";}
        if($_POST['Pu6'] == "Si"){$Pu6=$_POST["Pu6"];}else{$Pu6="No";}
        if($_POST['Pu7'] == "Si"){$Pu7=$_POST["Pu7"];}else{$Pu7="No";}
        if($_POST['Pu8'] == "Si"){$Pu8=$_POST["Pu8"];}else{$Pu8="No";}
        if($_POST['Pu9'] == "Si"){$Pu9=$_POST["Pu9"];}else{$Pu9="No";}                
        //seccion 5
        $Ingresar = "INSERT INTO `3.0_Profesores` (`ID`,`Correo`,
                                                `Nombres`,`Apellidos`,`Documento`,`Numero`,`Programa`,`Contratacion`,`Ciudad`,
                                                `Habilidades_texto_a`,`Habilidades_texto_b`,`Habilidades_calculo_a`,`Habilidades_calculo_b`,`Habilidades_presentacion_a`,`Habilidades_presentacion_b`,`Habilidades_datos_a`,`Habilidades_datos_b`,
                                                `Habilidades_herramientas_a`,`Habilidades_herramientas_b`,`Habilidades_correo_a`,`Habilidades_correo_b`,`Habilidades_hardware_a`,`Habilidades_hardware_b`,`Habilidades_software_a`,`Habilidades_software_b`,`Otro_uno`,
                                                `Habilidades_navegador_a`,`Habilidades_navegador_b`,`Habilidades_buscadores_a`,`Habilidades_buscadores_b`,`Habilidades_correo_electronico_a`,`Habilidades_correo_electronico_b`,`Habilidades_seguridad_a`,`Habilidades_seguridad_b`,
                                                `Habilidades_redes_sociales_a`,`Habilidades_redes_sociales_b`,`Habilidades_foros_a`,`Habilidades_foros_b`,`Habilidades_blogs_a`,`Habilidades_blogs_b`,`Habilidades_nube_a`,`Habilidades_nube_b`,`Habilidades_conferencias_a`,`Habilidades_conferencias_b`,
                                                `Habilidades_web2_a`,`Habilidades_web2_b`,`Habilidades_web3_a`,`Habilidades_web3_b`,`Habilidades_web4_a`,`Habilidades_web4_b`,`Otro_dos`,`Habilidades_buscador_a`,`Habilidades_buscador_b`,`Habilidades_correos_a`,`Habilidades_correos_b`,
                                                `Habilidades_calendario_a`,`Habilidades_calendario_b`,`Habilidades_drive_a`,`Habilidades_drive_b`,`Habilidades_documentos_a`,`Habilidades_documentos_b`,`Habilidades_calculos_a`,`Habilidades_calculos_b`,`Habilidades_presentaciones_a`,`Habilidades_presentaciones_b`,
                                                `Habilidades_formularios_a`,`Habilidades_formularios_b`,`Habilidades_keep_a`,`Habilidades_keep_b`,`Habilidades_tareas_a`,`Habilidades_tareas_b`,`Otro_tres`,`Whatsapp_a`,`Whatsapp_b`,`Facebook_a`,`Facebook_b`,`Youtube_a`,`Youtube_b`,`Instagram_a`,`Instagram_b`,
                                                `Twitter_a`,`Twitter_b`,`Linkedin_a`,`Linkedin_b`,`Tiktok_a`,`Tiktok_b`,`Otro_cuatro`,`Docs_a`,`Docs_b`,`Kahoot_a`,`Kahoot_b`,`Moodle_a`,`Moodle_b`,`Classroom_a`,`Classroom_b`,`Evernote_a`,`Evernote_b`,`Slideshare_a`,`Slideshare_b`,`Prezi_a`,`Prezi_b`,
                                                `Blogger_a`,`Blogger_b`,`Edmodo_a`,`Edmodo_b`,`Sites_a`,`Sites_b`,`Powtoon_a`,`Powtoon_b`,`Khan_a`,`Khan_b`,`Mindjet_a`,`Mindjet_b`,`Onenote_a`,`Onenote_b`,`Cam_a`,`Cam_b`,`Canva_a`,`Canva_b`,`Dropbox_a`,`Dropbox_b`,`Socrative_a`,`Socrative_b`,
                                                `Expediciones_a`,`Expediciones_b`,`Wix_a`,`Wix_b`,`Vyond_a`,`Vyond_b`,`Otro_cinco`,`Intranet_a`,`Intranet_b`,`Portal_docente_a`,`Portal_docente_b`,`Escalafon_a`,`Escalafon_b`,`Publicaciones_a`,`Publicaciones_b`,`Moodle_ucp_a`,`Moodle_ucp_b`,`Datos_a`,`Datos_b`,
                                                `Catalogo_a`,`Catalogo_b`,`Repositorio_a`,`Repositorio_b`,`Libros_a`,`Libros_b`,`Gestion_a`,`Gestion_b`,`Otro_sies`,`Servicios_ucp`,`Scopus_a`,`Scopus_b`,`Sage_a`,`Sage_b`,`Ebsco_a`,`Ebsco_b`,`Legiscomex_a`,`Legiscomex_b`,`Redalyc_a`,`Redalyc_b`,
                                                `Scielo_a`,`Scielo_b`,`Dialnet_a`,`Dialnet_b`,`Science_a`,`Science_b`,`Otro_siete`,`Zootero_a`,`Zootero_b`,`Mendeley_a`,`Mendeley_b`,`Refworks_a`,`Refworks_b`,`Atlasti_a`,`Atlasti_b`,`Spss_a`,`Spss_b`,`Turnitin_a`,`Turnitin_b`,`Plagium_a`,`Plagium_b`,
                                                `Plagtracker_a`,`Plagtracker_b`,`Otro_ocho`,`Researchgate_a`,`Researchgate_b`,`Google_academico_a`,`Google_academico_b`,`Cvlac_a`,`Cvlac_b`,`Otro_nueve`,`Ebooks_a`,`Ebooks_b`,`Ribuc_a`,`Ribuc_b`,`BiblioTechnia_a`,`BiblioTechnia_b`,`Otro_dies`,`Opiniones`,`Opiniones2`)
                     VALUES (NULL,'$Correo',
                                  '$Nombres','$Apellidos','$Documento','$Numero','$Programa','$Contratacion','$Ciudad',
                                  '$Habilidades_texto_a','$Habilidades_texto_b','$Habilidades_calculo_a','$Habilidades_calculo_b','$Habilidades_presentacion_a','$Habilidades_presentacion_b','$Habilidades_datos_a','$Habilidades_datos_b',
                                  '$Habilidades_herramientas_a','$Habilidades_herramientas_b','$Habilidades_correo_a','$Habilidades_correo_b','$Habilidades_hardware_a','$Habilidades_hardware_b','$Habilidades_software_a','$Habilidades_software_b','$Otro_uno',
                                  '$Habilidades_navegador_a','$Habilidades_navegador_b','$Habilidades_buscadores_a','$Habilidades_buscadores_b','$Habilidades_correo_electronico_a','$Habilidades_correo_electronico_b','$Habilidades_seguridad_a','$Habilidades_seguridad_b',
                                  '$Habilidades_redes_sociales_a','$Habilidades_redes_sociales_b','$Habilidades_foros_a','$Habilidades_foros_b','$Habilidades_blogs_a','$Habilidades_blogs_b','$Habilidades_nube_a','$Habilidades_nube_b','$Habilidades_conferencias_a','$Habilidades_conferencias_b',
                                  '$Habilidades_web2_a','$Habilidades_web2_b','$Habilidades_web3_a','$Habilidades_web3_b','$Habilidades_web4_a','$Habilidades_web4_b','$Otro_dos','$Habilidades_buscador_a','$Habilidades_buscador_b','$Habilidades_correos_a','$Habilidades_correos_b',
                                  '$Habilidades_calendario_a','$Habilidades_calendario_b','$Habilidades_drive_a','$Habilidades_drive_b','$Habilidades_documentos_a','$Habilidades_documentos_b','$Habilidades_calculos_a','$Habilidades_calculos_b','$Habilidades_presentaciones_a','$Habilidades_presentaciones_b',
                                  '$Habilidades_formularios_a','$Habilidades_formularios_b','$Habilidades_keep_a','$Habilidades_keep_b','$Habilidades_tareas_a','$Habilidades_tareas_b','$Otro_tres','$Whatsapp_a','$Whatsapp_b','$Facebook_a','$Facebook_b','$Youtube_a','$Youtube_b','$Instagram_a','$Instagram_b',
                                  '$Twitter_a','$Twitter_b','$Linkedin_a','$Linkedin_b','$Tiktok_a','$Tiktok_b','$Otro_cuatro','$Docs_a','$Docs_b','$Kahoot_a','$Kahoot_b','$Moodle_a','$Moodle_b','$Classroom_a','$Classroom_b','$Evernote_a','$Evernote_b','$Slideshare_a','$Slideshare_b','$Prezi_a','$Prezi_b',
                                  '$Blogger_a','$Blogger_b','$Edmodo_a','$Edmodo_b','$Sites_a','$Sites_b','$Powtoon_a','$Powtoon_b','$Khan_a','$Khan_b','$Mindjet_a','$Mindjet_b','$Onenote_a','$Onenote_b','$Cam_a','$Cam_b','$Canva_a','$Canva_b','$Dropbox_a','$Dropbox_b','$Socrative_a','$Socrative_b',
                                  '$Expediciones_a','$Expediciones_b','$Wix_a','$Wix_b','$Vyond_a','$Vyond_b','$Otro_cinco','$Intranet_a','$Intranet_b','$Portal_docente_a','$Portal_docente_b','$Escalafon_a','$Escalafon_b','$Publicaciones_a','$Publicaciones_b','$Moodle_ucp_a','$Moodle_ucp_b','$Datos_a','$Datos_b',
                                  '$Catalogo_a','$Catalogo_b','$Repositorio_a','$Repositorio_b','$Libros_a','$Libros_b','$Gestion_a','$Gestion_b','$Otro_sies','$Servicios_ucp','$Scopus_a','$Scopus_b','$Sage_a','$Sage_b','$Ebsco_a','$Ebsco_b','$Legiscomex_a','$Legiscomex_b','$Redalyc_a','$Redalyc_b',
                                  '$Scielo_a','$Scielo_b','$Dialnet_a','$Dialnet_b','$Science_a','$Science_b','$Otro_siete','$Zootero_a','$Zootero_b','$Mendeley_a','$Mendeley_b','$Refworks_a','$Refworks_b','$Atlasti_a','$Atlasti_b','$Spss_a','$Spss_b','$Turnitin_a','$Turnitin_b','$Plagium_a','$Plagium_b',
                                  '$Plagtracker_a','$Plagtracker_b','$Otro_ocho','$Researchgate_a','$Researchgate_b','$Google_academico_a','$Google_academico_b','$Cvlac_a','$Cvlac_b','$Otro_nueve','$Ebooks_a','$Ebooks_b','$Ribuc_a','$Ribuc_b','$BiblioTechnia_a','$BiblioTechnia_b','$Otro_dies','$Opiniones','$Opiniones2')";
        $Ingreso = mysqli_query($cn,$Ingresar);

        $Ingresar_sistema = "INSERT INTO `3.2_Tecnologica` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Contratacion`,
                                                       `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`,`Op9`) 
                            VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Contratacion',
                                         '$Si1','$Si2','$Si3','$Si4','$Si5','$Si6','$Si7','$Si8','$Si9')";
        $Ingreso_sistema = mysqli_query($cn,$Ingresar_sistema);

        $Ingresar_Bases = "INSERT INTO `3.3_Pedagogica` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Contratacion`,
                                                           `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`,`Op9`) 
                           VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Contratacion',
                                        '$Bd1','$Bd2','$Bd3','$Bd4','$Bd5','$Bd6','$Bd7','$Bd8','$Bd9')";
        $Ingreso_Bases = mysqli_query($cn,$Ingresar_Bases);

        $Ingresar_Catalogo = "INSERT INTO `3.4_Comunicativa` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Contratacion`,
                                                           `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`,`Op9`) 
                              VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Contratacion',
                                           '$Ca1','$Ca2','$Ca3','$Ca4','$Ca5','$Ca6','$Ca7','$Ca8','$Ca9')";
        $Ingreso_Catalogo = mysqli_query($cn,$Ingresar_Catalogo);

        $Ingresar_Repositorio = "INSERT INTO `3.5_Gestion` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Contratacion`,
                                                                 `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`,`Op9`)  
                                 VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Contratacion',
                                              '$Re1','$Re2','$Re3','$Re4','$Re5','$Re6','$Re7','$Re8','$Re9')";
        $Ingreso_Repositorio = mysqli_query($cn,$Ingresar_Repositorio);

        $Ingresar_Publicaciones = "INSERT INTO `3.6_Investigativa` (`ID`,`Correo`,`Nombres`,`Apellidos`,`Numero`,`Programa`,`Contratacion`,
                                                                     `Op1`,`Op2`,`Op3`,`Op4`,`Op5`,`Op6`,`Op7`,`Op8`,`Op9`) 
                                   VALUES (NULL,'$Correo','$Nombres','$Apellidos','$Numero','$Programa','$Contratacion',
                                                '$Pu1','$Pu2','$Pu3','$Pu4','$Pu5','$Pu6','$Pu7','$Pu8','$Pu9')";
        $Ingreso_Publicaciones = mysqli_query($cn,$Ingresar_Publicaciones);

        include "profesor.php";
    }
    mysqli_close($cn);
?>