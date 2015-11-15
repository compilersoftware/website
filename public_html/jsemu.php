<?php
switch ($_GET['game'])
{
    case 'abotw2_esp' : $game = 'abotw2.es.tap'; $title="Another Brick On The Wall 2"; break;
    case 'abotw2_eng' : $game = 'abotw2.en.tap'; $title="Another Brick On The Wall 2"; break;
    case 'revelados' : $game = 'revelados.tzx'; $title="Revelados"; break;
    case 'sokoban_esp' : $game = 'sokoban.es.tzx'; $title="Sokoban"; break;
    case 'sokoban_eng' : $game = 'sokoban.en.tzx'; $title="Sokoban"; break;
    case 'zxcolumns' : $game = 'zxcolumns.tap'; $title="ZX Columns"; break;
    case 'zxmines' : $game = 'zxmines.tap'; $title="ZX Mines"; break;
    case 'zxmines2' : $game = 'zxmines2.tap'; $title="ZX Mines 2"; break;
    case 'zxpoker' : $game = 'zxpoker.tap'; $title="ZX Poker"; break;
    default : $game = '';
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Compiler Software - Online emulator</title>
    <script src="/jsspeccy/jdataview.js"></script>
    <script src="/jsspeccy/jsspeccy-core.min.js"></script>
</head>
<body onunload="var emu = document.getElementById('speccy'); document.body.removeChild(emu);">
<div id="speccy"></div>
<script>
function go() {
    var jsspeccy = JSSpeccy('speccy', {
        'autostart': true,
        'autoload': true,
        'scaleFactor': 2,
        'loadFile': 'files/games/<?php echo $game; ?>'
    });
}
go();
</script>
</body>
</html>
