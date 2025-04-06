<?php
require_once 'functions.php';
require_once 'const.php';

$data = get_api_data(API_URL);
?>

<?php render_template('head', $data); ?>
<?php render_template('main', $data) ?>

</html>