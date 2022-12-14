<?php

/**
 * Cho một bàn cờ 4x4 (giống bt4),
 * 
 * Yêu cầu: xác định bàn cờ có hợp lệ hay không.
 * 
 * Bàn cờ hợp lệ khi số lượng của X nhiều hơn hoặc bằng O 1 đơn vị
 * 
 * input:
 * 
 * 
 * $board = [
 *   [1,0,null,0],
 *   [1,0,null,1],
 *   [0,1,0,1],
 *   [1,0,null,0],
 * ];
 * 
 * output: true/false
 */

function is_valid(array $board): bool {

  $x = 0;
  $o = 0;

  foreach ($board as $row) {
    foreach ($row as $value) {
      $x += ($value === 1) ? 1 : 0;
      $o += ($value === 0) ? 1 : 0;
    }
  }

  return $x >= $o;
}
