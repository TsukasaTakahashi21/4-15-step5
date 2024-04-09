<?php
class WordChecker {
  // $wordに整数型を指定 || 返り値として void を指定
  public static function printWordDescription(string $word): void {
    for ($i = 1; $i <= 6; $i++) {
      if ($word == "hoge") {
          if ($i % 2 == 0) {
              echo "wordがhoge かつ " . $i . "は2の倍数です" . "\n";
          } else {
              echo "wordがhoge かつ " . $i . "は2の倍数以外です" . "\n";
          }
      } else {
          if ($i % 2 == 0) {
              echo "wordがhogeでない かつ " . $i . "は2の倍数です" . "\n";
          } else {
              echo "wordがhogeでない かつ " . $i . "は2の倍数以外です" . "\n";
          }
      }
    }
  }
}

WordChecker::printWordDescription("hoge");
?>