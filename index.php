<html>
<body>
<h1> Testing code </h1>
<?php
  $cloud_url=`head -n1 path.txt`;
  $img_path="http://".$cloud_url."/temple_full.jpg";
  echo "<br>";
  echo "<img src='${img_path}' width=400 height=300>"
  ?>
  </body>
  </html>
