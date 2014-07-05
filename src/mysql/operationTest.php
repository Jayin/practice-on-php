<?php
require_once 'connectMysqlTest.php';
require_once '../mylibs/_.php';
//面向对象风格
// mixed mysqli::query ( string $query [, int $resultmode = MYSQLI_STORE_RESULT ] )

// 过程化风格
// mixed mysqli_query ( mysqli $link , string $query [, int $resultmode = MYSQLI_STORE_RESULT ] )

// 失败时返回 FALSE，通过mysqli_query() 成功执行SELECT, SHOW, DESCRIBE或
// EXPLAIN查询会返回一个mysqli_result 对象，其他查询则返回TRUE。
$result = $mysqli->query("select * from user");

if ($result) {
    dpf($result);
    foreach ($result as $a) {
        dpf($a);
        /* free result set */
        $result->close();
    }
}
