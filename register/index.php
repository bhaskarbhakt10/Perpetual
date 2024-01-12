<?php
require_once dirname(__DIR__) . "/__config.php";
require_once ROOT_PATH . 'common/header.php';
require_once ROOT_PATH . 'common/navigation.php';

if (!empty($_GET['q']) && !empty($_GET['key']) && array_key_exists('q', $_GET) && array_key_exists('key', $_GET) && strcasecmp($_GET['key'], 'register') === 0) {

    $query = $_GET['q'];
    $key = $_GET['key'];

    $allForms = scandir(ROOT_PATH . '/register/pages');
    unset($allForms[0]);
    unset($allForms[1]);
    // print_r($allForms);
    if (in_array($query . '.php', $allForms) && strcasecmp($key, 'register') === 0) {
        foreach ($allForms as $form) {
            if (strcasecmp($query . '.php', $form) === 0) {
?>

                <div class="main form-<?php echo preg_replace('/ /', '-', $query) ?>">
                    <div class="main-container">
                        <?php require_once ROOT_PATH . 'register/pages/' . $query . '.php'; ?>
                    </div>
                </div>

        <?php
            }
        }
    } else {
        ?>
        <div class="main form-not-found ">
            <div class="container">
                <?php require_once  ROOT_PATH . 'register/pages/404.php'; ?>
            </div>
        </div>
<?php

    }
} else {
    header('Location: ' . ROOT_URL . '404.php');
}

require_once ROOT_PATH . '/common/footer.php';





