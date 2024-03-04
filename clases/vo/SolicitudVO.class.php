<?php

class SolicitudVO{
  var $idesolicitud;
  var $idecontratista;
  var $numparticipantes;
  var $numcontacto;
  var $correo;
  var $idetipopago;
  var $estadosolic;
  var $numoperpago;
  var $fechapago;
  var $horapago;
  var $idecapacitaciones;
  var $ideempresa;
  var $rucs;
  var $razonsocial;
  var $idAutorizador;
  var $horario_r;
  var $cuposdispo;
  var $numoc;
  var $desccapacitacion;
  var $hora;
  var $fechoraautoriza;
  var $nombres_aut;
  var $feccrea;

  function __construct(
    $idesolicitud,
    $idecontratista,
    $numparticipantes,
    $numcontacto,
    $correo,
    $idetipopago,
    $estadosolic,
    $numoperpago,
    $fechapago,
    $horapago,
    $idecapacitaciones,
    $ideempresa,
    $rucs,
    $razonsocial,
    $idAutorizador,
    $horario_r,
    $cuposdispo,
    $numoc,
    $desccapacitacion,
    $hora,
    $fechoraautoriza,
    $nombres_aut,
    $feccrea
  ){
    $this->idesolicitud = $idesolicitud;
    $this->idecontratista = $idecontratista;
    $this->numparticipantes = $numparticipantes;
    $this->numcontacto = $numcontacto;
    $this->correo = $correo;
    $this->idetipopago = $idetipopago;
    $this->estadosolic = $estadosolic;
    $this->numoperpago = $numoperpago;
    $this->fechapago = $fechapago;
    $this->horapago = $horapago;
    $this->idecapacitaciones = $idecapacitaciones;
    $this->ideempresa = $ideempresa;
    $this->rucs = $rucs;
    $this->razonsocial = $razonsocial;
    $this->idAutorizador = $idAutorizador;
    $this->horario_r = $horario_r;
    $this->cuposdispo = $cuposdispo;
    $this->numoc = $numoc;
    $this->desccapacitacion = $desccapacitacion;
    $this->fechoraautoriza = $fechoraautoriza;
    $this->nombres_aut = $nombres_aut;
    $this->feccrea = $feccrea;
  }
}
?>