<?php
// Old version redirects

function redirect($target) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $target");
    die();
}

$folder = ($_GET['lang'] === 'eng') ? '/en/' : '/';
switch ($_GET['game']) {
    case 'abotw2':
        redirect($folder . 'spectrum-another-brick-on-the-wall-2.html');
        break;
    case 'packferpecto':
        redirect($folder . 'spectrum-pack-ferpecto.html');
        break;
    case 'revelados':
        redirect($folder . 'spectrum-revelados.html');
        break;
    case 'sokoban':
        redirect($folder . 'spectrum-sokoban.html');
        break;
    case 'zxcolumns':
        redirect($folder . 'spectrum-zx-columns.html');
        break;
    case 'zxmines':
        redirect($folder . 'spectrum-zx-mines.html');
        break;
    case 'zxmines2':
        redirect($folder . 'spectrum-zx-mines-2.html');
        break;
    case 'zxpoker':
        redirect($folder . 'spectrum-zx-poker.html');
        break;

    case 'babaliba':
        redirect($folder . 'remakes-babaliba.html');
        break;

    case 'prensa':
        if ($_GET['lang'] === 'eng') {
            redirect('/en/press-releases.html');
        } else {
            redirect('/notas-de-prensa.html');
        }
        break;
    case 'about':
        redirect($folder . 'index.html');
        break;
}

redirect('index.html');
