<?php

$board = [
  0,1,0, 1,0,1, 1,0,1
];

/**
 * Thang nao win
 * 1: x
 * 0: 0
 * null: k ai
 */
$winner = null;

// check rows
for ($i = 0; $i < 3; $i++) {
  $index = $i * 3;

  $a = $index;
  $b = $index + 1;
  $c = $index + 2;

  // Check theo hàng 3
  if ($board[$a] === $board[$b] && $board[$b] === $board[$c]) {
    $winner = $board[$a];
  }

  $a = 0 + $i;
  $b = 3 + $i;
  $c = 6 + $i;

  // Check theo cột
  if ($board[$a] === $board[$b] && $board[$b] === $board[$c]) {
    $winner = $board[$a];
  }
}

// Check hàng chéo từ trái qua phải
if ($board[0] === $board[4] && $board[4] === $board[8]) {
  $winner = $board[0];
}

// Chekc hàng chéo từ phải qua trái
if ($board[2] === $board[4] && $board[4] === $board[6]){
  $winner = $board[2];
}

if ($winner === 1) {
  echo "X thang\n";
}

if ($winner === 0) {
  echo "O thang\n";
}

if ($winner === null) {
  echo "Khong ai thang\n";
}
