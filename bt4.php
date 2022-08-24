<?php

/**
 * cho một bàn cờ, chứa 4x4 ô,
 * 
 * yêu cầu: xác định X hoặc O thắng
 * 
 * Luật xác định X hay O thắng mô tả như sau:
 * 
 * x hoặc o sắp xếp thành 1 hàng dọc, ngang hoặc chéo liền mạch
 * mỗi một bàn cờ chỉ có 1 người thắng duy nhất hoặc không ai
 */

function getWinner(array $board): int|null {

  $winner = null;

  for ($i = 0; $i < 4; $i++) {
    $row = $board[$i];
  
    if ($row[0] === $row[1] && $row[1] === $row[2] && $row[2] === $row[3] && $row[0] !== null) {
      $winner = $row[0];
    }
  
    $a = $board[0][$i];
    $b = $board[1][$i];
    $c = $board[2][$i];
    $d = $board[3][$i];
  
    if ($a === $b && $b === $c && $c === $d && $a !== null) {
      $winner = $a;
    }
  }
  
  if ($board[0][0] === $board[1][1] && $board[1][1] === $board[2][2] && $board[2][2] === $board[3][3] && $board[0][0] !== null) {
    $winner = $board[0][0];
  }

  if ($board[0][3] === $board[1][2] && $board[1][2] === $board[2][1] && $board[2][1] === $board[3][0] && $board[3][0] !== null) {
    $winner = $board[0][3];
  }

  return $winner;
}

$board = [
  [1,0,null,0],
  [1,0,null,1],
  [0,1,0,1],
  [1,0,null,0],
];

$winner = getWinner($board);

if ($winner === 1) {
  echo "Winner is X\n";
}

if ($winner === 0) {
  echo "Winner is O\n";
}

if ($winner === null) {
  echo "Winner is no one\n";
}
