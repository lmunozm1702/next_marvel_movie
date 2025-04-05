<?php
const API_URL = 'https://whenisthenextmcufilm.com/api';

$ch = curl_init(API_URL);
#set options for save the response into a variable called $response instead of printing it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#execute the request
$response = curl_exec($ch);
#close the curl session
curl_close($ch);
#decode the json response into an associative array
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Next Marvel Movie</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>Next Marvel Movie</h1>
  <?php if (!empty($data)): ?>
    <p>The next Marvel movie is: <?php echo $data['title']; ?></p>
    <p>Release date: <?php echo $data['release_date']; ?></p>
    <p>Days until release: <?php echo $data['days_until']; ?></p>
    <p>Overview: <?php echo $data['overview']; ?></p>
    <img src="<?php echo $data['poster_url']; ?>" alt="Poster" />
    <p>Folowing movie: <?php echo $data['following_production']['title']; ?> in <?php echo $data['following_production']['days_until']; ?> days.</p>
  <?php else: ?>
    <p>No data found</p>
  <?php endif; ?>
</body>

</html>

<?php
##check if the data is not empty
#if (!empty($data)) {
#  echo '
#<pre>';
#  print_r($data);
#  echo '</pre>';
#} else {
#  echo 'No data found';
#}
#
?>