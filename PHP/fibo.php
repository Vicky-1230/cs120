<!doctype html>
<html>
<head>
<title>Fibonacci</title>
</head>

<body>
<?php
    $n = (int)$_GET['n'];
    if ($n == 0) {
        $fib = [0];
    } else if ($n == 1) {
        $fib = [0, 1];
    } else {
        $fib = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fib[i] = $fib[$i - 1] + $fib[$i - 2];
        }
    }

    $response = array("length" => $n, "fibSequence" => $fib);
    echo json_encode($response);
?>
</body>
</html>
