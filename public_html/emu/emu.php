<?php
// Old version redirects

function redirect($target) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $target");
    die();
}

switch ($_GET['game']) {
    case 'abotw2_eng':
        redirect('../en/spectrum-another-brick-on-the-wall-2.html');
        break;
    case 'abotw2_esp':
        redirect('../spectrum-another-brick-on-the-wall-2.html');
        break;
    case 'packferpecto':
        redirect('../spectrum-pack-ferpecto.html');
        break;
    case 'revelados':
        redirect('../spectrum-revelados.html');
        break;
    case 'sokoban_eng':
        redirect('../en/spectrum-sokoban.html');
        break;
    case 'sokoban_esp':
        redirect('../spectrum-sokoban.html');
        break;
    case 'zxcolumns':
        redirect('../spectrum-zx-columns.html');
        break;
    case 'zxmines':
        redirect('../spectrum-zx-mines.html');
        break;
    case 'zxmines2':
        redirect('../spectrum-zx-mines-2.html');
        break;
    case 'zxpoker':
        redirect('../spectrum-zx-poker.html');
        break;
}

redirect('../index.html');
