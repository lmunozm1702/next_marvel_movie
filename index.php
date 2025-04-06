<?php
require_once 'functions.php';
require_once 'const.php';
require_once 'classes/movie.php';

$next_movie = Movie::fetchAndCreateMovie();
?>

<?php render_template('head', $next_movie); ?>
<?php render_template('main', $next_movie) ?>

</html>