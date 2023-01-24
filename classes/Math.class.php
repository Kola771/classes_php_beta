<?php
class Math {
    private int $nombre1;
    private string $operation;
    private int $nombre2;

    public function __construct(int $nombre1, $operation, int $nombre2) {
        $this->nombre1 = $nombre1;
        $this->operation = $operation;
        $this->nombre2 = $nombre2;
    }

    public function calculate() {
        switch($this->operation) {
            case "Addition":
                return $this->operation . " de " . $this->nombre1 . " et de " . $this->nombre2 . " est : " . $this->nombre1 + $this->nombre2;
            break;

            case "Soustraction":
                return $this->operation . " de " . $this->nombre1 . " et de " . $this->nombre2 . " est : " . $this->nombre1 - $this->nombre2;
            break;

            case "Multiplication":
                return $this->operation . " de " . $this->nombre1 . " et de " . $this->nombre2 . " est : " . $this->nombre1 * $this->nombre2;
            break;
            
            case "Division":
                if ($this->nombre2 !== 0) {
                    return $this->operation . " de " . $this->nombre1 . " et de " . $this->nombre2 . " est : " . $this->nombre1 / $this->nombre2;
                }
                return "Imposible !!!";
            break;
        }
    }
}

?>