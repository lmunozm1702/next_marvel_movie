<body>
  <main>
    <section class="center">
      <?php if ($next_movie): ?>
        <h2><mark><?= $next_movie->getMovieTitle(); ?></mark> releases in <?= $next_movie->getDaysUntil(); ?> days!</h2>
        <p class="movie-release-date">
          Release date: <?= $next_movie->getReleaseDate(); ?>
        </p>
        <p class="movie-overview"><?= $next_movie->getOverview(); ?></p>
        <img src="<?= $next_movie->getPosterUrl(); ?>" alt="<?= $next_movie->getMovieTitle(); ?>Poster" class="poster" />
        <p class="movie-following-movie">Folowing movie: <?= $next_movie->getFollowingProductionTitle(); ?> in <?= $next_movie->getFollowingProductionDaysUntil(); ?> days.</p>
      <?php else: ?>
        <p>No data found</p>
      <?php endif; ?>
    </section>
  </main>
</body>