<?php
echo "Before the conditional.";
if (4 > 3) {
 echo "Inside the conditional.";
}
if (3 > 4) {
 echo "This will not be printed.";
}
echo "After the conditional.";

echo "</br>";


// another example of conditional.

if (4 > 5) {
   echo "Not printed";
  } elseif (4 > 4) {
   echo "Not printed";
  } elseif (4 == 4) {
   echo "Printed.";
  } elseif (4 > 2) {
   echo "Not evaluated.";
  } else {
   echo "Not evaluated.";
  }
  if (4 == 4) {
   echo "Printed";
  }

  // Switch…case.

  $title = 'Twilight';
switch ($title) {
 case 'Harry Potter':
 echo "Nice story, a bit too long.";
 break;
 case 'Twilight':
 echo 'Uh...';           // break is missing so printed up to end.
 case 'Lord of the Rings':  
 echo "A classic!";
 default:
 echo "Dunno that one.";
}

?>