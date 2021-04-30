<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header style="width: 100%; height: 100px; background: grey;">
            <?php
                $name="Mihail";
                $age=23;
                echo '<strong>'.$name.'<br>';
                echo '<strong>'.$age.'<br>';
                echo '<br>';
            ?>
        </header>
        <div class="block1" style="width: 750px; height: 100px; background: darkgray; margin: auto;">
            <?php
            $Pi=3.14;
            echo '<strong>'.$Pi.'<br>';
            echo '<br>';
            ?>
        </div>

        <?php
            $a=date('h');
            $bgcolor="palegreen";
            $time=$a;
            if ($time>8 and $time<=20){//day
                $bgcolor="yellowgreen";
                echo "<div class=\"block1\" style=\"width: 750px; height: 300px; background:yellowgreen ; margin: auto;\"</div>";}
            else{//night && early morning
                $bgcolor="palegreen";
            echo "<div class=\"block1\" style=\"width: 750px; height: 300px; background:palegreen ; margin: auto;\"</div>";}
        ?>
        <div class="block1" style="width: 750px; height: 300px; background: <?php $bgcolor ?>; margin: auto;">
            <?php
            echo '<strong>'.$time.'<br>' .$bgcolor;
            echo '<br>'.$a;
            echo '<br>';
            ?>
        </div>
    </body>
</html>

