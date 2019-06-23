<?php

include '../../boot.php'; // load all functions

Auth::logout();
header('Location: ../inloggen/index.php')
;
