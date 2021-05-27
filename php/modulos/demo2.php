<?php
require_once __DIR__.'/vendor/autoload.php';
//require_once __DIR__.'/vendor/phpoffice/phpword/bootstrap.php';

// Creating the new document...
//$phpWord = new \PhpOffice\PhpWord\PhpWord();
use \PhpOffice\PhpWord\TemplateProcessor;

$plantilla = new TemplateProcessor('word/plantilla.docx');

$nombre = 'Demo';
$direccion = 'XXX';
$fecha = date('Y-m-d');

$plantilla->setValue('dirigido',$nombre);
$plantilla->setValue('grupo',$direccion);
$plantilla->setValue('prioridad',$direccion);
$plantilla->setValue('tiempo',$fecha);
$plantilla->setValue('detalles',$fecha);
$plantilla->setValue('observaciones',$fecha);
$plantilla->setValue('tabla',$fecha);

$plantilla->saveAs('exports/helloWorld.docx');

header('Content-Disposition: attachment; filename=helloWorld.docx; charset=iso-8859-1');
echo file_get_contents('exports/helloWorld.docx');
// Saving the document as OOXML file...
//$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//$objWriter->save('exports/helloWorld.docx');

?>