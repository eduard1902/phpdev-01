<?php

include './tree/NodeInterface.php';
include './tree/Node.php';

$tree = (new \Node('Electronics'))
    ->addChild(
        (new \Node('Televisions'))
            ->addChild(new \Node('Tube'))
            ->addChild(new \Node('LCD'))
            ->addChild(new \Node('Plasma'))
        )
    ->addChild(
        (new \Node('Portable electronic'))
            ->addChild((new \Node('MP3 players'))->addChild(new \Node('Flash')))
            ->addChild(new \Node('CD players'))
            ->addChild(new \Node('2 way radios'))
        )    
    ;

    // $tree->print();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Новый заголовок</h1>
    <h1>
        <?php echo "Hello world!"; ?>
    </h1>
   <p>I'm <?php echo $_REQUEST['name'] ?? 'Noname'; ?></p>
   <pre><?php echo $tree; ?></pre>
</body>
</html>