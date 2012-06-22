<?php

$sendme = filter_input(INPUT_POST, 'sendme', FILTER_SANITIZE_STRING);

file_put_contents('saved.txt', $sendme);