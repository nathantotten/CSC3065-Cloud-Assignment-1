<?php
function isPrime($num) {
    if ($num <= 1) return false;
    if ($num <= 3) return true;

    if ($num % 2 == 0 || $num % 3 == 0) return false;

    for ($i = 5; $i * $i <= $num; $i += 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
    }

    return true;
}

// Get the 'limit' parameter from the URL query string, or use a default value of 100000
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 100000;

$primeNumbers = [];
for ($i = 0; $i <= $limit; $i++) {
    if (isPrime($i)) {
        $primeNumbers[] = $i;
    }
}

// Set the response content type to JSON
header('Content-Type: application/json');

// Output the prime numbers as a JSON response
echo json_encode([
    'limit' => $limit,
    'prime_numbers' => $primeNumbers,
    'count' => count($primeNumbers),
]);


// https://www.php.net/manual/en/function.memory-get-usage.php
// https://www.weanswer.xyz/monitor-php-cpu-memory-usage
?>


