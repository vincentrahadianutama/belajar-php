<?php
//1.Buatkan kode menggunakan for untuk menghasilkan segitiga seperti berikut:  
    echo "<p>Kode Program PHP - Segitiga Bintang (10)</p>";
    echo "<pre>";
   
    $tinggi_segitiga = 10;
    for($i = 1; $i <= $tinggi_segitiga; $i++) {
      for($j = 1; $j <= $i; $j++) {
        echo " #";
      }
      echo "<br>";
    }
   
    echo "</pre>";
  
//2.Hasil yang dikeluarkan dari kode berikut menggunakan implode:
$array = ["PHP", "JAVASCRIPT", "LARAVEL"];
echo implode(", ", $array);
    
//3.Hasil yang dikeluarkan dari kode berikut menggunakan explode:
$explode = "PHP, JAVASCRIPT, LARAVEL";
$arrayExp =  explode(", ", $explode);
print_r($arrayExp);


//4.Buatlah sebuah validation required, jika username dan password kosong maka berikan peringatan harus diisikan. Jika salah satunya diisikan maka tombol button simpan tidak berfungsi. Gunakan fungsi php form handling required.
?>
<?php
$username = '';
$password ='';
    
$usernameError = '';
$passwordError = '';

        function dataType($dataPerson){
            $inputData = trim($dataPerson);
            $inputData = stripslashes($dataPerson);
            $inputData = htmlspecialchars($dataPerson);
            return $inputData;
        }

        if($_SERVER['REQUEST_METHOD'] === "POST"){
            if(empty($_POST['username'])){
                echo $usernameError = 'Username tidak boleh kosong!';
            }else{
                echo $username = dataType($_POST['username']);
            }if(empty($_POST['password'])){
                echo $passwordError = "password tidak boleh kosong!";
            }else{
                echo $password = dataType($_POST['password']);
            }
        }
        ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <div style="margin-bottom:3px;">
        <label for="username">username</label>
        <input type="text" id="username" name="username">
        <span style="color:red; font-size: 12px;"> <?php echo $usernameError;?> </span>    
    </div>
    <div style="margin-bottom:3px;">
        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <span style="color:red; font-size:12px;"><?php echo $passwordError;?></span>
    </div>
<button type="submit">submit</button>
</form>
<?php
        echo "Nama saya adalah ".$username;
        echo "<br>";
        echo "Sandi saya ".$password;
        

//5.Buatlah sebuah class dalam PHP dengan nama "Student" yang memiliki properti "name" dan "age". Kemudian, buatlah objek dari class tersebut dengan nama "student1" dan set properti "name" menjadi "John" dan "age" menjadi 20.
?>

<?php
class Student {
    private $name;
    private $age;
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setAge($age) {
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
}
$student1 = new Student;
$student1->setName('Nama saya John');
$student1->setAge('Usia saya 20');
echo "<br>";
echo $student1->getName(); // Outputs "John"
echo "<br>";
echo $student1->getAge(); // Outputs "20"
echo "<br>";
//6.Buatlah sebuah class dalam PHP dengan nama "Rectangle" yang memiliki properti "length" dan "width". Kemudian, buatlah sebuah method dalam class tersebut dengan nama "calculateArea()" yang menghitung dan mengembalikan luas persegi panjang berdasarkan properti "length" dan "width". Buat objek dari class tersebut dengan nama "rectangle1" dan set properti "length" menjadi 5 dan "width" menjadi 8, lalu panggil method "calculateArea()" dan tampilkan hasilnya.
?>

<?php
class Rectangle {
    private $length;
    private $width;

    public function setLength($length) {
        $this->length = $length;
    }
    
    public function setWidth($width) {
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function getLength() {
        return $this->length;
    }
    
    public function getWidth() {
        return $this->width;
    }
}
$rectangle1 = new Rectangle;
$rectangle1->setLength(5);
$rectangle1->setWidth(8);

$area = $rectangle1->calculateArea();

echo "$area square units"."<br>";
//7.Buatlah sebuah class dalam PHP dengan nama "Person" yang memiliki properti "name" dan "age". Buatlah method dalam class tersebut dengan nama "getInfo()" yang mengembalikan string yang berisi informasi nama dan umur. Buat objek dari class tersebut dengan nama "person1" dan set properti "name" menjadi "Sarah" dan "age" menjadi 25, lalu panggil method "getInfo()" dan tampilkan hasilnya.
?>
<?php
class Person {
    private $name;
    private $age;
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setAge($age) {
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function getInfo() {
        return "Name: " . $this->name . ", Age: " . $this->age;
    }
}

$person1 = new Person;
$person1->setName('Sarah');
echo "<br>";
$person1->setAge(25);
echo "<br>";

echo $person1->getInfo(); // Outputs "Name: Sarah, Age: 25"

//8.Buatlah sebuah class dalam PHP dengan nama "Circle" yang memiliki properti "radius". Buatlah method dalam class tersebut dengan nama "calculateArea()" yang menghitung dan mengembalikan luas lingkaran berdasarkan properti "radius". Buat objek dari class tersebut dengan nama "circle1" dan set properti "radius" menjadi 10, lalu panggil method "calculateArea()" dan tampilkan hasilnya.
?>
<?php
class Circle {
    public $radius;

    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

$circle1 = new Circle();
$circle1->radius = 10;

$area = $circle1->calculateArea();
echo "<br>";
echo "Luas lingkaran dengan radius " . $circle1->radius . " adalah: " . $area;
 // Outputs "Area of circle (in square units): 314.159265359 square units"

//9.Buatlah sebuah class dalam PHP dengan nama "Car" yang memiliki properti "brand" dan "year". Buatlah method dalam class tersebut dengan nama "getInfo()" yang mengembalikan string yang berisi informasi merk dan tahun produksi mobil. Buat objek dari class tersebut dengan nama "car1" dan set properti "brand" menjadi "Toyota" dan "year" menjadi 2020, lalu panggil method "getInfo()" dan tampilkan hasilnya.
?>
<?php
class Car
{
    public $brand;
    public $year;

    public function __construct($brand, $year)
    {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function getInfo()
    {
        return $this->brand . ', ' . $this->year;
    }
}
echo "<br>";
$car1 = new Car('Toyota', 2020);
echo $car1->getInfo();

?>
  <?php  
//10.Buatlah sebuah class dalam PHP dengan nama "Animal" yang memiliki properti "name" dan "sound". Buatlah method dalam class tersebut dengan nama "makeSound()" yang menampilkan suara hewan berdasarkan properti "sound". Buat objek dari class tersebut dengan nama "animal1" dan set properti "name" menjadi "Cat" dan "sound" menjadi "Meow", lalu panggil method "makeSound()" untuk mengeluarkan suara hewan.
class Animal {
    private $name;
    private $sound;

    public function __construct(string $name, string $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function getName() {
        return $this->name;
    }

    public function getSound() {
        return $this->sound;
    }

    public function makeSound() {
        return 'The ' . $this->name . ' says ' . $this->sound . '.';
    }
}
echo "<br>";
$animal1 = new Animal('Cat', 'Meow');
echo $animal1->makeSound(); // Outputs "The Cat says Meow."

?>