<?php

class HrTime extends Time {
  public function show() {
    return date("H:i:s");
  }

  public function Split() {
    $parts = explode(":", $this->show());
    echo "H=" . $parts[0] . ", M=" . $parts[1] . "\n";
  }
}
