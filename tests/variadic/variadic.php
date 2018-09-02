<?php

function f($req, $opt = null, ...$params) {
    // $params is an array containing the remaining arguments.
    printf('$req: %d; $opt: %d; number of params: %d'."\n",
        $req, $opt, count($params));
}

$operators = [2, 3];

// echo add(1, ...$operators);

function foo (int ...$inbound) {
    var_dump($inbound);
}

interface DB {
    public function query($query, ...$params);
    public function prepare($query, &...$params);
    public function query1($query);
    public function query2($query, ...$params);
    public function query3($query, array ...$params);
    public function query4($query, array $extraParam = null, array ...$params);
}
