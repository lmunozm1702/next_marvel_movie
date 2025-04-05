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
<html lang="en" data-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Next Marvel Movie</title>
  <link rel="stylesheet" href="style.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />

</head>

<body>
  <main>
    <section class="center">
      <?php if (!empty($data)): ?>
        <h2><mark><?php echo $data['title']; ?></mark> releases in <?php echo $data['days_until']; ?> days!</h2>
        <p class="movie-release-date">
          Release date: <?php echo $data['release_date']; ?>
        </p>
        <p class="movie-overview"><?php echo $data['overview']; ?></p>
        <img src="<?php echo $data['poster_url']; ?>" alt="<?php echo $data['title']; ?>Poster" class="poster" />
        <p class="movie-following-movie">Folowing movie: <?php echo $data['following_production']['title']; ?> in <?php echo $data['following_production']['days_until']; ?> days.</p>
      <?php else: ?>
        <p>No data found</p>
      <?php endif; ?>
    </section>
  </main>
</body>

</html>