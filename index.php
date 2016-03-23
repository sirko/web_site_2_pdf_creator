<?php
$loader = require_once __DIR__.'/vendor/autoload.php';
use mikehaertl\wkhtmlto\Pdf;
$pdf = new Pdf('http://pdfcreator.loc/index.php');
$pdf->send('test.pdf');
//echo $pdf->getError();

?>
<html>
<head>
<title>PDF Creator</title>
</head>
<body>
  <h1>Post URLs here: </h1>

  <form method="post">
    <textarea name="urls" style="width:100%; display: block;" rows="10">

    </textarea>
     <em style="display:block">Each url should be added on the new line </em>
    <input type="submit" name="Sumit" value="Give me PDF" />
  </form>
</body>
</html>
