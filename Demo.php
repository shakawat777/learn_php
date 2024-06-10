<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello</title>
  </head>
  <body>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">S.I</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
    </tr>
  </thead>
  <tbody>

  <?php
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

    $formattedDate1 = date('l', strtotime($dateString));
    $formattedDate2 = date('dS', strtotime($dateString));
    $formattedDate3 = date('F', strtotime($dateString));
    $formattedDate4 = date('Y', strtotime($dateString));
?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $formattedDate1 ?></td>
      <td><?php echo $formattedDate2 ?></td>
      <td><?php echo $formattedDate3 ?></td>
      <td><?php echo $formattedDate4 ?></td>
    </tr>
  <?php
  } ?>  
  
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

