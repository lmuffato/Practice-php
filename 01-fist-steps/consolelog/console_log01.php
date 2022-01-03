
<script>console.log('Debug Objects: "Test"' );</script>


<?php

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  print "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

debug_to_console("Test");

?>