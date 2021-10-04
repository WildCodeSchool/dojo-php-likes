<?php

require __DIR__ . '/likes.php';

function check(array $names, string $expected): void {
    $result = likes($names);

    if (count($names) === 0) {
        $namesAsString = '[]';
    } else {
        $namesAsString = "['" . join("', '", $names) . "']";
    }

    if ($result === $expected) {
        echo "SUCCESS: get '$expected' for $namesAsString!!!\n";
    } else {
        echo "ERROR: expected '$expected' for $namesAsString, but get '$result'!!!\n";
    }
}

check([], "Be the first to like this");
check(["Cartman"], "Cartman likes this");
check(["Kenny", "Cartman"], "Kenny and Cartman like this");
check(["Stan", "Kyle", "Kenny", "Cartman"], "Stan and 3 other people like this");
