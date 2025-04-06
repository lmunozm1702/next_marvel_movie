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