<?php
/**
 * CosineSimilarity measures a cosine similarity between two vectors
 *
 */

class CosineSimilarity {
  
  public function similarity(array $vec1, array $vec2) {
    return $this->_dotProduct($vec1, $vec2) / ($this->_absVector($vec1) * $this->_absVector($vec2));
  }
  
  protected function _dotProduct(array $vec1, array $vec2) {
    $result = 0;
    
    foreach (array_keys($vec1) as $key1) {
      foreach (array_keys($vec2) as $key2) {
	if ($key1 === $key2) $result += $vec1[$key1] * $vec2[$key2];
      }
    }
    
    return $result;
  }
  
  protected function _absVector(array $vec) {
    $result = 0;
    
    foreach (array_values($vec) as $value) {
      $result += $value * $value;
    }
    
    return sqrt($result);
  }
}
