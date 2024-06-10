
<?php
/*
date_default_timezone_set('Asia/Dhaka');
$year = date('Y');
$month = date('m');
$dayInMonth = date('t');

for ($day = 1; $day<  $dayInMonth; $day++){
    $dateString = sprintf('%d-%d-%d', $year, $month, $day);
    $formatedDate = date('D,F j/Y', strtotime( $dateString ));
    echo $formatedDate. "\n";

}
*/
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">SL.N</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
    </tr>
  </thead>
  <tbody>

  <?php
  /*
date_default_timezone_set('Asia/Dhaka');
$year = date('Y');
$month = date('m');
$dayInMonth = date('t');

for ($day = 1; $day<  $dayInMonth; $day++){
    $dateString = sprintf('%d-%d-%d', $year, $month, $day);
    // $formatedDate = date('D,F j/Y', strtotime( $dateString ));
    // echo $formatedDate. "\n";

     //$formatedDate = date('d', strtotime( $dateString ));
    $formatedDate1 = date('l', strtotime( $dateString ));
    $formatedDate2 = date('d', strtotime( $dateString ));
    $formatedDate3 = date('F', strtotime( $dateString ));
    $formatedDate4 = date('Y', strtotime( $dateString ));
*/

///////////////////////

date_default_timezone_set('Asia/Dhaka');

// Get the current year and month
$year = date('Y');
$month = date('m');

// Get the number of days in the current month
$daysInMonth = date('t');

// Loop through each day of the current month
for ($day = 1; $day <= $daysInMonth; $day++) {
    // Create a date string for the current day
    $dateString = sprintf('%d-%d-%d', $year, $month, $day);
    // Convert the date string to a timestamp and format it
    //$formattedDate = date('D, F j/Y', strtotime($dateString));

    // Print the formatted date
    //echo $formattedDate . "\n";
    $formattedDate = date('d', strtotime($dateString));

    $formattedDate1 = date('l', strtotime($dateString));
    $formattedDate2 = date('dS', strtotime($dateString));
    $formattedDate3 = date('F', strtotime($dateString));
    $formattedDate4 = date('Y', strtotime($dateString));

?>


    <tr>
      <th scope="row">
     <?php echo      $formattedDate ?> 
    </th>
      <td><?php echo $formattedDate1 ?></td>
      <td><?php echo $formattedDate2 ?></td>
      <td><?php echo $formattedDate3 ?></td>
      <td><?php echo $formattedDate4 ?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>



