<?php 
$file = '/resources/ASPTutorial-Rick.pdf';
$filename = '/resources/ASPTutorial-Rick.pdf';
 
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
 
@readfile($file);

//echo '  <embed src="ade.pdf" width="500" height="375" type="application/pdf">';
//echo '<iframe src="/resources/officetutorial-Bambam.pdf" width="100%" style="height:100;"></iframe>';
  
?>


<!--<html>
  <head>
    <title>PDFObject example</title>
   <script src="../script/js/pdfobject.min.js"></script>
    <script type="text/javascript">
      window.onload = function (){
        var success = new PDFObject({ url: "/resources/officetutorial-Bambam.pdf" }).embed();
      };
    </script>
  </head> 
  <body>
   

    <object data="/resources/ASPTutorial-Rick.pdf" type="application/pdf" width="600" height="600">
      alt : <a href="/resources/ASPTutorial-Rick.pdf">sample.pdf</a>
  </object>
  </body>
</html>-->

<?php
// The location of the PDF file on the server.
/*$filename = "/resources/ASPTutorial-Rick.pdf";
	 
	// Let the browser know that a PDF file is coming.
header("Content-Length: " . filesize($filename));
header("Content-disposition: inline;");
 
// Send the file to the browser.
readfile($filename);
exit;*/
?>
