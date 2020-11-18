
function solution($A) {
    $max = max($A);

    $result = 1;

    if ($max < 0) {
        return $result;
    }

    $all = range(1, $max);

    $result = array_diff($all, $A);

    if ($result == NULL || count($result) == 0) {
        return $max + 1;
    }

    return min($result);
}
