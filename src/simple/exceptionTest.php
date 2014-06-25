<?php
require_once '../mylibs/_.php';

function f($msg) {
    if (! $msg) {
        throw new Exception("lol");
    }
    d($msg);
}

try {
    f();
} catch (Exception $e) {
    d($e->getMessage());
}
