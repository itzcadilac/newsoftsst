<?php
class ConsultasDAO{

   function ListarSolicitudes() {

    $BD = new ConexionDB();
    $fec = new Fecha();

    $sql1='SET lc_time_names = "es_ES"';
    $sql='SELECT DATE_FORMAT(sl.feccreacion, "%W %d-%b-%Y %r" ) AS feccrea,
    sl.razons AS razonsocial,
    sl.ruc AS rucs,
    pr.dscparametro AS estadosol,
    pr.codparametro AS codestado,
    DATE_FORMAT(sl.fechoraautorizacion, "%W %d-%b-%Y %r" ) AS fechoraautoriza,
    cn.nombres AS nombres_aut,
    cn.nro_personal AS nro_personal,
    DATE_FORMAT( cal.hora, "%W %d-%b-%Y %r" ) AS hora,
    tip.desccapacitacion,
    sl.* 
  FROM
    solicitudcapac sl
    INNER JOIN calendcapacitaciones cal ON sl.idecalendcapacitaciones = cal.idecalendcapacitaciones
    INNER JOIN tipcapacitaciones tip ON cal.idecapacitacion = tip.idecapacitacion
    INNER JOIN parametro pr ON sl.estadosolic = pr.codparametro 
    LEFT JOIN autorizadores cn ON sl.id_autorizador = cn.id_autorizador 
  WHERE 
    pr.idetipparametro = "TIP_ESTADOSOL" 
    AND sl.estadosolic IN ( 1, 2, 4, 5, 6 ) 
  ORDER BY
    sl.idesolicitud DESC
    LIMIT 15;';
    
    $recordSet1 = $BD->ejecutar($sql1);
    $recordSet = $BD->ejecutar($sql);
    
    $bandeja = array();

    while($row = mysqli_fetch_array($recordSet)) {

      $idesolicitud=$row['idesolicitud'];
      $rucs=$row['rucs'];
      $razonsocial=$row['razonsocial'];
      $numparticipantes=$row['numparticipantes'];
      $numcontacto=$row['numcontacto'];
      $correo=$row['correo'];
      $feccrea=$row['feccrea'];
      $estadosol=$row['estadosol'];
      $desccapacitacion=$row['desccapacitacion'];
      $hora=$row['hora'];
      $nombres_aut=$row['nombres_aut'];
      $nro_personal=$row['nro_personal'];
      $fechoraautoriza=$row['fechoraautoriza'];
      $codestado=$row['codestado'];

    //$bandeja[] = new SolicitudVO($fila['idesolicitud'],"",$fila['numparticipantes'],$fila['numcontacto'],$fila['correo'],"",$fila['estadosolic'],"","","",$fila['idecalendcapacitaciones'],$fila['ideempresa'],$fila['rucs'],$fila['razonsocial'],$fila['id_autorizador'],"","","",$fila['desccapacitacion'],$fila['hora'],$fila['fechoraautoriza'],$fila['nombres_aut'],$fila['feccrea']);
    $bandeja[] = array('idesolicitud'=> $idesolicitud, 'rucs'=> $rucs, 'razonsocial'=> $razonsocial, 'numparticipantes'=> $numparticipantes, 'numcontacto'=> $numcontacto, 'correo'=> $correo, 'feccrea'=> $feccrea, 'estadosol'=> $estadosol, 'desccapacitacion'=> $desccapacitacion, 'hora'=> $hora, 'nombres_aut'=> $nombres_aut, 'nro_personal'=> $nro_personal, 'fechoraautoriza'=> $fechoraautoriza, 'codestado'=> $codestado);
    }

    return $bandeja;  
   
    }

}
?>