<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://opensource.org/licenses/gpl-3.0.html.
 *
 * @copyright Copyright (c) 2009 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename_help'] = 'El módulo Blackboard Collaborate permite que profesores y estudiantes se reúnan en una clase virtual
mediante el uso de conferencias web de Blackboard Collaborate.  
Estos espacios de reuniones en línea ofrecen:

* audio de dos vías
* video multipunto
* chat de texto
* pizarra interactiva, aplicación y escritorio compartido
* medios enriquecidos
* salas para grupos
* sondeos y cuestionarios

Estas sesiones también se pueden grabar para visualizarlas y revisarlas fuera de línea.
Opcionalmente, se puede asignar automáticamente una calificación a los estudiantes para que asistan a la sesión.';
$string['modulename_link'] = 'http://www.blackboard.com/Platforms/Collaborate/Products/Blackboard-Collaborate/Web-Conferencing.aspx';
$string['elluminate:addinstance'] = 'Capacidad para agregar una sesión de Blackboard Collaborate nueva.';
$string['elluminate:deleteanyrecordings'] = 'Capacidad para eliminar cualquier grabación.';
$string['elluminate:deleterecordings'] = 'Capacidad para eliminar grabaciones propias.';
$string['elluminate:editallrecordings'] = 'Capacidad para editar cualquier descripción de grabación.';
$string['elluminate:editownrecordings'] = 'Capacidad para editar descripciones de grabaciones propias.';
$string['elluminate:enablerecordings'] = 'Capacidad para ocultar/mostrar grabaciones propias.';
$string['elluminate:joinmeeting'] = 'Capacidad para participar en una sesión.';
$string['elluminate:manage'] = 'Capacidad para administrar los ajustes.';
$string['elluminate:manageattendance'] = 'Capacidad para modificar los registros de asistencia (calificaciones).';
$string['elluminate:manageanyrecordings'] = 'Capacidad para ocultar/mostrar cualquier grabación de sesión.';
$string['elluminate:managemoderators'] = 'Capacidad para agregar/quitar moderadores.';
$string['elluminate:manageparticipants'] = 'Capacidad para agregar/quitar participantes.';
$string['elluminate:managepreloads'] = 'Capacidad para agregar/eliminar archivos de precarga.';
$string['elluminate:managerecordings'] = 'Capacidad para ocultar/mostrar grabaciones de sesiones de grupo.';
$string['elluminate:moderatemeeting'] = 'Capacidad para ser un moderador de sesión.';
$string['elluminate:view'] = 'Capacidad para acceder a la sesión.';
$string['elluminate:viewattendance'] = 'Capacidad para ver grabaciones de asistencia.';
$string['elluminate:viewguestlink'] = 'Capacidad para ver enlace de invitado.';
$string['elluminate:viewmoderators'] = 'Capacidad para ver moderadores.';
$string['elluminate:viewparticipants'] = 'Capacidad para ver participantes.';
$string['elluminate:viewrecordings'] = 'Capacidad para ver grabaciones.';
$string['elluminate:convertallrecordings'] = 'Capacidad para iniciar la conversión de todas las grabaciones a formatos de audio (MP3) y video (MP4).';
$string['elluminate:convertownrecordings'] = 'Capacidad para iniciar la conversión de las grabaciones propias a formatos de audio (MP3) y video (MP4).';
$string['boundarytime'] = 'Entrada de sesión anticipada';
$string['boundarytime_help'] = 'El período previo al inicio de una sesión en el cual los usuarios se pueden unir a la sesión. Se visualiza en minutos.';
$string['boundarytimedisplay'] = 'Visualizar tiempo de entrada de sesión anticipada';
$string['customdescription'] = 'Descripción de prefijo con nombre de grupo';
$string['customname'] = 'Usar código de curso y nombre<br />de grupo para nombre de sesión';
$string['customname_help'] = 'Al crear una sesión de grupo, se crea una sesión individual para cada grupo, que se configura para el curso. <br> Esta opción hará que el nombre del grupo se convierta en parte del nombre de sesión.';
$string['customsessionname'] = 'Nombre de sesión';
$string['customsessionname_help'] = 'El nombre de sesión es el valor transferido al servidor de programación Collaborate';
$string['description'] = 'Descripción';
$string['maxtalkers'] = 'Máximo de habladores';
$string['maxtalkers_help'] = 'El número máximo de habladores simultáneos que se configurará en la sesión de Blackboard Collaborate al iniciarla.';
$string['gradeattendance'] = 'Calificar asistencia';
$string['gradesession'] = 'Calificar esta sesión';
$string['gradesession_help'] = 'Cuando está seleccionada, esta sesión se mostrará en el Libro de calificaciones, y se debe seleccionar una opción de Calificación de asistencia.<br><br><b>Sin calificación:</b><br><br>no se rastrea la asistencia para la sesión, pero la sesión se mostrará en el Libro de calificaciones para permitir el ingreso de retroalimentación de texto.<br><br><b>Calificación de escala:</b><br><br>si un estudiante asiste a la sesión, se le asignará la mejor calificación en la escala seleccionada.<br><br><b>Calificación numérica:</b><br> <br>si un estudiante asiste a la sesión, se le asignará la calificación numérica completa seleccionada para esta sesión.';
$string['gradesessiondeletewarn'] = 'Advertencia: Cuando se deshabilita la calificación para una sesión, se quitarán todas las calificaciones existentes asociadas con dicha sesión.';
$string['meetingbegins'] = 'Comienza la sesión';
$string['meetingends'] = 'Finaliza la sesión';
$string['recordingmode'] = 'Modo de grabación';
$string['restrictparticipants'] = 'Restringir participantes de la sesión';
$string['restrictparticipants_help'] = 'Marcar esta opción creará una sesión privada a la que solo pueden acceden los participantes invitados. Los moderadores y participantes se pueden administrar en la página de vista de la sesión. <br><br>Esta opción no se aplica a las sesiones con un modo de grupo de visible o separado. La participación en dicho tipo de sesión se puede administrar a través de una membresía de grupo.';
$string['sessionname'] = 'Nombre de sesión personalizado';
$string['title'] = 'Título';
$string['title_help'] = 'El título de la sesión se visualiza en el calendario y la programación del curso de Moodle. Si no se proporciona un nombre de sesión, el título también se usa como el nombre de sesión.';
$string['appendgroupname'] = 'Nombre de sesión de grupo personalizado';
$string['recordingmode_help'] = 'El modo de grabación en la sesión de Blackboard Collaborate. <br><br> 1) Manual: un presidente debe comenzar las grabaciones <br><br> 2) Automático: la grabación comienza automáticamente cuando se inicia la sesión <br><br> 3) Deshabilitado: la grabación está deshabilitada';
$string['groupsettingsdisabled'] = 'Ajustes de grupo deshabilitados debido a modo de grupo del curso';
$string['telephony_formvalue'] = 'Habilitar teleconferencias de sesión';
$string['telephony_formvalue_help'] = 'Permitir que los participantes de la sesión se conecten a las sesiones mediante teleconferencia. <br>Una vez que esta opción está habilitada, el número de teléfono y PIN estarán disponibles en la página de vista de sesión.';
$string['disabled'] = 'Desactivado';
$string['manual'] = 'Manual';
$string['automatic'] = 'Automático';
$string['customnamegrouponly'] = 'Solo nombre de grupo';
$string['customnameappend'] = 'Anexar nombre de grupo a título';
$string['customnamenone'] = 'Ninguno';
$string['group'] = 'Ajustes del grupo';
$string['scheduling'] = 'Programación';
$string['basicsession'] = 'Detalles de sesión básicos';
$string['details'] = 'Información de sesión';
$string['settings'] = 'Atributos de sesión';
$string['grading'] = 'Calificación de sesión';
$string['groupnamelabel'] = 'Nombre del grupo';
$string['groupsessions'] = 'Sesiones de grupo';
$string['invalidsessiontimes'] = 'La hora de inicio de la sesión de {$a->timestart} es posterior a la hora de finalización de la sesión de {$a->timeend}';
$string['starttimebeforenow'] = 'La hora de inicio de la sesión de {$a->timestart} es anterior a la hora actual.';
$string['meetinglessthanyear'] = 'Su sesión no puede tener una antigüedad de más de un año.';
$string['meetingnamemustbeginwithalphanumeric'] = 'El nombre de su sesión debe comenzar con un carácter alfanumérico. Si no se ingresó un nombre de sesión, se usará el título.';
$string['groupname_meetingnamemustbeginwithalphanumeric'] = '<b>Error de nombre de sesión de grupo personalizado:</b><br> el nombre del grupo <b>{$a->groupname}</b> no se puede usar como un nombre de sesión porque no comienza con una letra o un número. <br><br>Corrija el nombre del grupo o elija otro nombre de sesión de grupo personalizado.';
$string['groupname_specialcharacters'] = '<b>Error de nombre de sesión de grupo personalizado:</b><br> el nombre del grupo <b>{$a->groupname}</b> no se puede usar como un nombre de sesión porque contiene caracteres no válidos. <br><br> Corrija el nombre del grupo o elija otro nombre de sesión de grupo personalizado.';
$string['groupname_meetingnameempty'] = '<b>Error de nombre de sesión de grupo personalizado:</b><br> el nombre del grupo <b>{$a->groupname}</b> no se puede usar como un nombre de sesión porque contiene caracteres no válidos. <br><br> Corrija el nombre del grupo o elija otro nombre de sesión de grupo personalizado.';
$string['meetingnameempty'] = 'El nombre de su sesión está vacío. Se eliminaron los siguientes caracteres <,>,&,#,%,\' Ingrese un carácter alfanumérico. Si no se ingresó un nombre de sesión, se usará el título.';
$string['samesessiontimes'] = 'La hora de inicio de la sesión de {$a->timestart} es igual a la hora de finalización de la sesión de {$a->timeend}';
$string['meetingstartoverayear'] = 'Su sesión no puede comenzar de nuevo dentro de un año.';
$string['badgroupname'] = ' (nombre de grupo no válido)';
$string['guestlink'] = 'Enlace de invitado';
$string['guestlinkerror'] = 'No se pudo recuperar el enlace de invitado';
$string['guestlinkgrouperror'] = 'No se generó el enlace de invitado. Únase a la sesión y, a continuación, actualice esta página para recuperar el enlace de invitado.';
$string['preloadfile'] = 'Archivo de precarga';
$string['nopreloadfile'] = 'Ninguno';
$string['sessionnamedisplay'] = 'Nombre de sesión';
$string['joinsession'] = 'Unirse a la sesión';
$string['supportlinktext'] = 'Verifique que su sistema esté configurado correctamente ';
$string['telephonydetails'] = 'Detalles de teleconferencia';
$string['moderatorphone'] = 'Marcado de moderador';
$string['participantphone'] = 'Marcado de participante';
$string['telephonypin'] = 'PIN: ';
$string['telephonygrouperror'] = 'No se ha generado la información de marcado. Únase a la sesión y, a continuación, actualice esta página para recuperar el número y el PIN de marcado.';
$string['telephonysaserror'] = 'No se pudo recuperar la información de marcado en este momento. Inténtelo de nuevo más tarde.';
$string['nomoderator'] = 'No hay moderadores invitados a esta sesión';
$string['singlemoderator'] = '1 moderador está invitado a esta sesión';
$string['multimoderator'] = '{$a} moderadores están invitados a esta sesión';
$string['editmoderatorsforthissession'] = 'Agregar/Quitar moderadores';
$string['noparticipant'] = 'No hay participantes invitados a esta sesión';
$string['singleparticipant'] = '1 participante está invitado a esta sesión';
$string['multiparticipant'] = '{$a} participantes están invitados a esta sesión';
$string['allparticipant'] = 'Todos los estudiantes matriculados en este curso pueden asistir a esta sesión';
$string['editparticipantsforthissession'] = 'Agregar/Quitar participantes';
$string['groupparticipant'] = 'Todos los miembros del grupo "{$a}" pueden asistir a esta sesión';
$string['sessionattendance'] = 'Asistencia a la sesión';
$string['noattendance'] = 'Ningún estudiante asistió a esta sesión';
$string['singleattendance'] = '1 estudiante asistió a esta sesión';
$string['multiattendance'] = '{$a} estudiantes asistieron a esta sesión';
$string['editattendance'] = 'Ver detalles de asistencia';
$string['deleterecordingconfirm'] = '¿Está seguro de que desea eliminar la grabación con fecha {$a} del servidor de Blackboard Collaborate?';
$string['deleterecordingfailure'] = 'No se pudo eliminar la grabación del servidor de Blackboard Collaborate.';
$string['deleterecordingsuccess'] = 'La grabación se eliminó con éxito del servidor de Blackboard Collaborate.';
$string['deletethisrecording'] = 'Eliminar grabación';
$string['hidethisrecording'] = 'Establecer como invisible esta grabación';
$string['showthisrecording'] = 'Establecer como visible esta grabación';
$string['recordingdatetitle'] = 'Fecha/hora';
$string['recordingdurationtitle'] = 'Duración (H:M:s)';
$string['recordingplaytitle'] = 'Reproducir';
$string['recordingoptionstitle'] = 'Opciones';
$string['norecordingsavailable'] = 'No hay grabaciones disponibles.';
$string['conversionerror'] = 'Error: {$a}';
$string['conversioncommerror'] = 'Error - intente más tarde';
$string['editrecordingdescription'] = 'Editar descripción de grabación';
$string['recordingdeleteerror'] = 'No se pudo eliminar la grabación. Error: {$a}';
$string['recordingmanual'] = 'La grabación se controla manualmente';
$string['recordingnone'] = 'La grabación se desactiva';
$string['recordingautomatic'] = 'La grabación se se activa automáticamente';
$string['recordings'] = 'Grabaciones';
$string['recordinggroupvisibleall'] = 'La grabación es visible para cualquiera en este curso. Haga clic para cambiar.';
$string['recordinggroupvisiblesingle'] = 'La grabación es visible solo para los miembros de este grupo. Haga clic para cambiar.';
$string['recordinglauncherror'] = 'No se pudo cargar la grabación de Blackboard Collaborate';
$string['recording'] = 'Título - Fecha';
$string['viewrecordingdescription'] = 'Ver detalles de grabación y gestionar conversiones';
$string['recordingat'] = 'Grabación de Collaborate - ';
$string['format'] = 'Formato';
$string['status'] = 'Estado';
$string['converror'] = 'Error de conversión';
$string['lastupdate'] = 'Última actualización';
$string['vcr'] = 'Blackboard Collaborate';
$string['mp3'] = 'Audio (MP3)';
$string['mp4'] = 'Video (MP4)';
$string['available'] = 'Disponible';
$string['playlink'] = 'Reproducir grabación';
$string['inprogress'] = 'En curso - Espere';
$string['notavailable'] = 'No disponible';
$string['convertlink'] = 'Convertir grabación';
$string['error'] = 'Error de conversión';
$string['manualstatusupdatelink'] = 'Verificar estado de conversión';
$string['loadrecording'] = 'Espere: la grabación se está cargando.';
$string['conversionformaterror'] = 'Ocurrió un error al convertir el formato {$a} para esta grabación. Consulte los registros para obtener más detalles.';
$string['playrecordingnotavailable'] = 'Esta grabación ya no se encuentra disponible. Es probable que se haya quitado automáticamente debido a límites de capacidad.';
$string['backtosession'] = 'Ver sesión de Blackboard Collaborate';
$string['notapplicable'] = '-';
$string['conversiontitle'] = 'Convertir';
$string['incorrectversion'] = 'Esta grabación no se puede convertir al formato de audio/video.';
$string['vcrplayrecording'] = 'Reproducir formato de Blackboard Collaborate';
$string['mp3playrecording'] = 'Reproducir formato de audio (MP3)';
$string['mp4playrecording'] = 'Reproducir formato de video (MP4)';
$string['mp3not_available'] = 'Audio (MP3)';
$string['mp4not_available'] = 'Video (MP4)';
$string['mp3in_progress'] = 'Audio (MP3) - En curso';
$string['mp4in_progress'] = 'Video (MP4) - En curso';
$string['mp3not_applicable'] = 'Audio (MP3) - Error';
$string['mp4not_applicable'] = 'Video (MP4) - Error';
$string['availablemoderators'] = '{$a} moderador(es) disponible(s)';
$string['availableparticipant'] = '1 participante disponible';
$string['availableparticipants'] = '{$a} participantes disponibles';
$string['existingmoderators'] = '{$a} moderador(es) existente(s)';
$string['existingparticipant'] = '1 participante existente';
$string['existingparticipants'] = '{$a} participantes existentes';
$string['addmoderators'] = 'Agregar moderador(es)';
$string['addparticipants'] = 'Agregar participante(s)';
$string['sessioncreator'] = 'Creador de sesión/Moderador por defecto:';
$string['editingmoderators'] = 'Editando moderadores';
$string['editingparticipants'] = 'Editando participantes';
$string['couldnotadduserstosession'] = 'No se pudo agregar usuario(s) a la sesión.';
$string['couldnotremoveusersfromsession'] = 'No se pudo quitar usuario(s) de la sesión.';
$string['removemoderators'] = 'Quitar moderador(es)';
$string['removeparticipants'] = 'Quitar participante(s)';
$string['participanteditbadsessiontype'] = 'No se puede administrar a los participantes para este tipo de sesión. La sesión debe ser una sesión no grupal con participantes restringidos.';
$string['invalidformdata'] = 'Datos no válidos enviados.';
$string['user_edit_invalid_selection'] = 'Selección de usuarios no válida. <br>Para agregar un usuario a la sesión, seleccione un usuario de la lista "disponible" y haga clic en agregar.<br>Para quitar un usuario de la sesión, seleccione un usuario de la lista "existente" y haga clic en quitar.';
$string['addpreload'] = 'Agregar un archivo de precarga';
$string['deletepreloadfile'] = 'Eliminar archivo de precarga';
$string['deletewhiteboardpreload'] = 'Eliminar un archivo de precarga de pizarra';
$string['preloadchoosewhiteboardfile'] = 'Elegir un archivo de precarga (*.wbd, *.wbp, *.elp, *.elpx) para cargar, con un tamaño máximo de {$a->uploadmaxfilesize}.';
$string['preloadcouldnotaddpreloadtomeeting'] = 'No se pudo agregar la precarga a la sesión. Error: {$a}';
$string['preloadcouldnotcreatepreload'] = 'No se pudo crear la precarga. Error: {$a}';
$string['preloadcouldnotreadfilecontents'] = 'No se pudo leer el contenido del archivo subido';
$string['preloadcouldnotstreamepreload'] = 'No se pudo enviar los contenidos del archivo al servidor ELM';
$string['preloaddeleteerror'] = 'No se pudo eliminar la precarga. Error: {$a}';
$string['preloaddeletemeetingerror'] = 'No se pudo eliminar la precarga de la sesión';
$string['preloaddeletesuccess'] = 'Archivo de precarga eliminado con éxito';
$string['preloademptyfile'] = 'El archivo cargado estaba vacío';
$string['preloadinvalidfileempty'] = 'El archivo cargado está vacío.';
$string['preloadinvalidnotxml'] = 'El archivo cargado no está en formato XML.';
$string['preloadinvalidfileextension'] = 'El archivo cargado usa una extensión no válida.';
$string['preloadnofileextension'] = 'El archivo cargado no tiene una extensión de archivo.';
$string['preloadfiletoolarge'] = 'La precarga que intentó cargar era demasiado grande.';
$string['preloadfileinvalidname'] = 'No se seleccionó un archivo. Elija un archivo válido para cargar.';
$string['preloaduploadsuccess'] = 'Archivo de precarga cargado con éxito: {$a}';
$string['attendancescalenotice'] = 'Dado que está usando una escala para el valor de calificación de asistencia, puede establecer valores de usuario individuales a continuación.';
$string['attended'] = 'Asistió';
$string['updateattendance'] = 'Actualizar asistencia';
$string['meetingattendance'] = 'Asistencia a la sesión';
$string['attendance'] = 'Asistencia';
$string['attendancefor'] = 'Asistencia para {$a}';
$string['attendancenousers'] = 'No hay participantes matriculados en esta sesión para asistir.';
$string['sessionnotgraded'] = 'La asistencia solo se puede gestionar para sesiones en las que se ha habilitado la calificación y se ha seleccionado una calificación numérica o escalada.';
$string['configauthusername'] = 'Cuenta del servicio web para el servidor de programación Blackboard Collaborate.';
$string['configauthpassword'] = 'Contraseña del servicio web para el servidor de programación Blackboard Collaborate.';
$string['configboundarydefault'] = 'Permitir que los profesores elijan un tiempo límite (en minutos) para sus sesiones o forzar un valor por defecto aquí.';
$string['configopenchair'] = 'Todos los usuarios se unirán a la sesión como moderador en la sesión de Blackboard Collaborate.';
$string['configmustbesupervised'] = 'Permite que los moderadores vean todos los mensajes de chat privados en la sesión de Blackboard Collaborate.';
$string['configmaxtalkers'] = 'Número máximo de habladores simultáneos que se puede configurar en la sesión de Blackboard Collaborate al iniciar la sesión.';
$string['configprepopulatemoderators'] = 'Sí: todos los usuarios del curso con privilegios de moderador se agregan como moderadores de la sesión.<br>No:   solo el usuario que crea la sesión se agrega como moderador de la sesión.';
$string['configpermissionson'] = 'Todos los usuarios que se unen a la sesión como Participantes reciben permisos completos para los recursos de la sesión, como audio, pizarra, etc.';
$string['configseatreservation'] = 'Permitir que los profesores reserven lugares en el servidor de Blackboard Collaborate para sus sesiones.';
$string['configscheduler'] = 'Tipo de programador usado (SAS/ELM)';
$string['configserver'] = 'Servidor por defecto para usar cuando se crea una sesión nueva de Blackboard Collaborate';
$string['configserverblank'] = 'Debe ingresar una URL de servidor';
$string['configraisehand'] = 'Cuando los usuarios se unan a la sesión de Blackboard Collaborate, levantarán automáticamente la mano (esto puede estar acompañado de una notificación audible).';
$string['configuserduration'] = 'El número de días que existirá una cuenta de estudiante en el servidor de Blackboard Collaborate antes de ser eliminada automáticamente';
$string['configwsdebug'] = 'Activar depuración de servicios web: útil cuando se están recibiendo errores de <b>Fallas</b> al usar este módulo, pero imprime <b>mucha</b> información extra.';
$string['configloglevel'] = 'Establecer el nivel de salida del registro en los registros del módulo Blackboard Collaborate.';
$string['downloadlogs'] = 'Ver y descargar los archivos de registro disponibles';
$string['configenabletelephony'] = 'Permitir la habilitación/deshabilitación de teleconferencias para sesiones individuales (se establece por defecto en Sí) o elegir un valor por defecto para todas las sesiones que no se pueden modificar.';
$string['connectiontestfailure'] = 'Prueba de conexión incorrecta. Verifique sus ajustes.';
$string['connectiontestsuccessful'] = 'Prueba de conexión correcta.';
$string['default_elluminate_server'] = 'http://localhost:8080';
$string['default_elluminate_scheduler'] = 'SAS';
$string['default_elluminate_auth_username'] = 'default_user';
$string['default_elluminate_auth_password'] = 'default_pass';
$string['elluminate_auth_username'] = 'Nombre de usuario';
$string['elluminate_auth_password'] = 'Contraseña';
$string['elluminate_boundary_default'] = 'Tiempo límite por defecto';
$string['elluminate_must_be_supervised'] = 'Debe ser supervisado';
$string['elluminate_all_moderators'] = 'Todos los moderadores';
$string['elluminate_permissions_on'] = 'Permisos sobre';
$string['elluminate_pre_populate_moderators'] = 'Completar previamente moderadores';
$string['elluminate_raise_hand'] = 'Levantar mano al entrar';
$string['elluminate_scheduler'] = 'Programador';
$string['elluminate_seat_reservation'] = 'Reserva de lugar';
$string['elluminate_server'] = 'URL del servidor';
$string['elluminate_user_duration'] = 'Duración de usuario';
$string['elluminate_telephony'] = 'Habilitar teleconferencia de sesión';
$string['elluminate_ws_debug'] = 'Depuración de servicios web';
$string['elluminate_log_level'] = 'Nivel de registro';
$string['elluminate_max_talkers'] = 'Máximo de habladores';
$string['testconnection'] = 'Probar conexión';
$string['testconnectionnotice'] = 'Probar ahora mismo los valores en el formulario para verificar que se conectan con éxito a su servidor. <b>Se abre en una ventana nueva.</b>';
$string['elluminateconnectiontest'] = 'Prueba de conexión de Blackboard Collaborate';
$string['serverurl'] = 'URL del servidor';
$string['serverlogs'] = 'Registros de Blackboard Collaborate';
$string['backtosettings'] = 'Volver a ajustes de Blackboard Collaborate';
$string['logname'] = 'Nombre del archivo';
$string['logdate'] = 'Fecha de registro';
$string['logsize'] = 'Tamaño del archivo';
$string['logsizeunits'] = 'Kb';
$string['viewlogs'] = 'Ver registros';
$string['licenseoption'] = 'Licencia';
$string['licensevariation'] = 'Nombre de variación';
$string['licensed'] = 'con licencia';
$string['licenses'] = 'Información de licencia de Blackboard Collaborate';
$string['cmidincorrect'] = 'El ID del módulo del curso es incorrecto';
$string['couldnotloadsessionmeetingid'] = 'No se pudo cargar sesión con ID de reunión: ';
$string['courseidincorrect'] = 'El ID del curso es incorrecto';
$string['deletesessionloaderror'] = 'Eliminar sesión. Error de carga: ';
$string['fromdatabase'] = ' de base de datos. ';
$string['here'] = 'aquí';
$string['invalidsessiontype'] = 'Tipo de sesión no válido: ';
$string['invalidrecordingid'] = 'ID de grabación no válido';
$string['nomeetings'] = 'No hay reuniones de Blackboard Collaborate ';
$string['viewrecordingloaderror'] = 'Error de carga de grabación: {$a}';
$string['viewsessionloaderror'] = 'Error de carga de sesión: {$a}';
$string['viewsessiongenericerror'] = 'No se pudo cargar la sesión con el ID [{$a}]. Comuníquese con su administrador.';
$string['toplevelnotfound'] = '¡No se pudo encontrar un curso de nivel superior!';
$string['user_error_unconfiguredmodule'] = 'No se ha configurado el módulo Blackboard Collaborate. Comuníquese con su administrador.';
$string['user_error_soaperror'] = 'Se produjo un error de comunicación con el servidor SAS. Comuníquese con su administrador.';
$string['soap_send_command_error'] = 'Se produjo un error de comunicación con el servidor SAS. Comuníquese con su administrador. <br>Detalles del error: {$a->soapmessage}';
$string['user_error_processing'] = 'Se produjo un error de procesamiento interno. Comuníquese con su administrador.';
$string['user_error_database'] = 'Se produjo un error de base de datos interno. Comuníquese con su administrador.';
$string['sessioncreationerror'] = 'Error: no se pudo crear la sesión: {$a}';
$string['sessionupdateerror'] = 'Error: No se pudo actualizar la sesión: ${a}';
$string['sessionloaderror'] = 'Error: no se pudo iniciar la sesión de Blackboard Collaborate con ID de {$a}.';
$string['responseerror'] = 'Tipo de respuesta de servicio web no válido: [{$a}]';
$string['groupiderror'] = 'ID de grupo de sesión no válido [{$a}].';
$string['groupiniterror'] = 'No se pudo inicializar la sesión de grupo. ID de sesión [{$a->id}], ID de grupo [{$a->group}]. <br><br>Error del servidor de programación: {$a->errormsg}';
$string['upgrade30error_api'] = 'Para usar la versión 3.0 del módulo Moodle para SAS, su cuenta de API debe tener acceso a la versión 3 de la API habilitada. <br> La actualización no puede completarse hasta que esta sea habilitada. <br>Comuníquese con el soporte de Collaborate. <br> Una vez habilitada la v3 de la API, puede volver a intentar esta actualización cargando <a href="{$a->retry}">{$a->retry}</a>';
$string['upgrade30error'] = 'Ocurrió un error durante el proceso de conversión de sus datos de sesión para la versión 3.0 del módulo Moodle para SAS. <br> Puede reintentar esta actualización cargando <a href="{$a->retry}">/mod/elluminate/web/util/30_upgrade_retry.php</a>. <br>Puede encontrar más detalles sobre el error en los <a href="{$a->logs}">registros</a>. </a><br>Si continúa teniendo problemas, comuníquese con el soporte de Collaborate.';
$string['groupdoesnotexist'] = 'ID de grupo no válido de [{$a}]. Un grupo con este ID no existe para este curso.';
$string['recordingidinvalid'] = 'Error al eliminar grabación. La grabación con el ID de [{$a}] no existe.';
$string['convertedgroupsession1'] = 'Esta sesión ha sido actualizada del modo de grupo a ningún grupo debido a un ajuste de nivel del curso.';
$string['convertedgroupsession2'] = 'Haga clic a continuación para acceder a las sesiones de grupo de programación existentes y a cualquier grabación asociada.';
$string['convertedgroupsessionreturn'] = 'Volver a la sesión principal';
$string['recording_generalpermissionserror'] = 'No tiene permisos para ver esta grabación.';
$string['recording_hiddenpermissionserror'] = 'No tiene permisos para ver esta grabación.';
$string['recording_meetinggeneralpermissionserror'] = 'No tiene permisos para ver esta grabación.';
$string['recording_meetingprivatepermissionserror'] = 'No tiene permisos para ver esta grabación.';
$string['recording_meetinggrouppermissionserror'] = 'No tiene permisos para ver esta grabación.';
$string['recordingconvertpermissionserror'] = 'No tiene permisos para solicitar la conversión de esta grabación.';
$string['meetinggeneralpermissionserror'] = 'No tiene permisos para unirse a esta reunión.';
$string['meetingprivatepermissionserror'] = 'No tiene permisos para unirse a esta reunión.';
$string['meetingattendancepermissionserror'] = 'No tiene permisos para gestionar la asistencia de esta reunión.';
$string['meetingeditpermissionserror'] = 'No tiene permisos para editar esta reunión.';
$string['viewattendanceepermissionserror'] = 'No tiene permisos para ver la asistencia de esta sesión de Blackboard Collaborate.';
$string['privatesessionnotinvited'] = 'No puede unirse a esta reunión sin una invitación.';
$string['recordingdeletepermissionserror'] = 'No tiene permisos para eliminar esta grabación.';
$string['recordingeditpermissionserror'] = 'No tiene permisos para editar esta grabación.';
$string['recordingmanagepermissionserror'] = 'No tiene permisos para cambiar la visibilidad de esta grabación.';
$string['groupsessionnotinvited'] = 'No puede unirse a esta reunión sin ser un miembro del grupo correcto.';
$string['recordingmp4notlicensed'] = 'No está autorizado para la conversión y reproducción de grabaciones MP3/MP4';
$string['logpermissions'] = 'No tiene permisos para acceder a los registros de Blackboard Collaborate.';
$string['licensepermissions'] = 'No tiene permisos para acceder a los detalles de licencia de Blackboard Collaborate.';
$string['modulename'] = 'Blackboard Collaborate';
$string['modulenameinstance'] = 'Sesión de Blackboard Collaborate';
$string['modulenameplural'] = 'Sesiones de Blackboard Collaborate';
$string['sessionsviewed'] = 'Sesiones de Blackboard Collaborate:';
$string['calendarname'] = '[Sesión de Blackboard Collaborate] : {$a}';
$string['pluginname'] = 'Blackboard Collaborate';
$string['pluginadministration'] = 'Administración de Blackboard Collaborate';
$string['notattendedyet'] = 'Todavía no asistió';
