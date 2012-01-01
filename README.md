# CosineSimilarity
CosineSimilarity measures a cosine similarity between two vectors.

## USAGE
    require_once 'CosineSimilarity.php';

### sample data: word => term frequency
    $v1 = array('php' => 5, 'web' => 2,  'google' => 1);
    $v2 = array('php' => 0, 'web' => 5,  'google' => 10);
    $v3 = array('php' => 0, 'web' => 10, 'google' => 5);
    $v4 = array('php' => 5, 'web' => 2,  'google' => 1);

### calculate
    $cs = new CosineSimilarity();

    $result1 = $cs->similarity($v1,$v2); // similarity of 1 and 2
    $result2 = $cs->similarity($v1,$v3); // similarity of 1 and 3
    $result3 = $cs->similarity($v1,$v4); // similarity of 1 and 4

    var_dump($result1); // #=> float(0.32659863237109)
    var_dump($result2); // #=> float(0.40824829046386)
    var_dump($result3); // #=> float(1)

## NOTES
CosineSimilarity::_absVector(array $vec) is faster than the following logic:

    return sqrt(array_sum(array_map(function($value) { return $value * $value; }, $vec)));