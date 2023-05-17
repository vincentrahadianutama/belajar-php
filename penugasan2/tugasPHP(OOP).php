<?php

class Vehicle {
    private $numberPolice;
    private $type;

    public function __construct($numberPolice, $type) {
        $this->numberPolice = $numberPolice;
        $this->type = $type;
    }

    public function getNumberPolice() {
        return $this->numberPolice;
    }

    public function getType() {
        return $this->type;
    }
}

class Parking {
    private $maxParking;
    private $showVehicleParking;

    public function __construct($maxParking) {
        $this->maxParking = $maxParking;
        $this->showVehicleParking = array();
    }

    public function inParking($numberPolice, $type) {
        if (count($this->showVehicleParking) < $this->maxParking) {
            $vehicle = new Vehicle($numberPolice, $type);
            $this->showVehicleParking[] = $vehicle;
            echo "Kendaraan dengan nomor polisi " . $vehicle->getNumberPolice() . " tipe " . $vehicle->getType() . " telah diparkir." . "<br>";
        } else {
            echo "Area parkir sudah penuh. Tunggu hingga kendaraan keluar." . "<br>";
        }
    }

    public function outParking($numberPolice) {
        foreach ($this->showVehicleParking as $key => $vehicle) {
            if ($vehicle->getNumberPolice() === $numberPolice) {
                unset($this->showVehicleParking[$key]);
                echo "Kendaraan dengan nomor polisi " . $numberPolice . " telah keluar dari area parkir." . "<br>";
                return;
            }
        }
        echo "Kendaraan dengan nomor polisi " . $numberPolice . " tidak ada dalam area parkir." . "<br>";
    }

    public function statusParking() {
        echo "Status Parkir:" . "<br>";
        echo "Jumlah total kendaraan yang diparkir: " . count($this->showVehicleParking) . "<br>";
        foreach ($this->showVehicleParking as $vehicle) {
            echo "Nomor polisi: " . $vehicle->getNumberPolice() . ", Tipe: " . $vehicle->getType() . "<br>";
        }
    }
}

// Form Handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $parking = new Parking(2);

    if (isset($_POST["parking"])) {
        $numberPolice = $_POST["numberPolice"];
        $type = $_POST["type"];
        $parking->inParking($numberPolice, $type);
        echo "Terima kasih telah mengisi formulir ini";
    } elseif (isset($_POST["exitParking"])) {
        $numberPolice = $_POST["numberPolice"];
        $parking->outParking($numberPolice);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Parkir</title>
</head>
<body>
    <h1>Sistem Parkir</h1>

    <h2>Parkir Kendaraan</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numberPolice">Nomor Polisi:</label>
        <input type="text" id="numberPolice" name="numberPolice" required>
        <br><br>
        <label for="type">Tipe Kendaraan:</label>
        <input type="text" id="type" name="type" required>
        <br><br>
        <button type="submit">submit</button>
    </form>
    
</body>
</html>
