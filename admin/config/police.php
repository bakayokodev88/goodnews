<?php

    if (!isset($_SESSION['auth']) || $_SESSION['auth']=!true){
        header('Location: ../login.php?access=denied');
    }

