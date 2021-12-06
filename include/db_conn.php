<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dummy";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']);




function file_extension($location)
{
    $doc = '../img/doc.svg';
    $pdf = '../img/pdf.svg';
    $xls = '../img/xls.svg';
    $zip = '../img/zip.svg';

    if (   (explode(".", $location))[1]==='doc'  || (explode(".", $location))[1]==='docx' || (explode(".", $location))[1]==='rtf')
        {
        $html ='<img src="'.$doc.'" alt="doc file extension" height="50" width="auto"/>';
        return $html;
        }

        if (   (explode(".", $location))[1]==='xls'  || (explode(".", $location))[1]==='xlsx')
        {
        $html ='<img src="'.$xls.'" alt="xls file extension" height="50" width="auto"/>';
        return $html;
        }

        if (   (explode(".", $location))[1]==='pdf')
        {
        $html ='<img src="'.$pdf.'" alt="pdf file extension" height="50" width="auto"/>';
        return $html;
        }

        if (   (explode(".", $location))[1]==='zip' || (explode(".", $location))[1]==='rar')
        {
        $html ='<img src="'.$zip.'" alt="zip file extension" height="50" width="auto"/>';
        return $html;
        }

        else {return '';}
}


?>