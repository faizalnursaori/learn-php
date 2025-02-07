<?php

// Magic method __set() dieksekusi ketika mencoba mengubah nilai properti yang tidak tersedia.
// Magic method __get() dieksekusi ketika mencoba mengakses properti yang tidak tersedia.
// Magic method __isset() dieksekusi ketika menggunakan isset() atau empty() pada properti yang tidak tersedia.
// Magic method __unset() dieksekusi ketika menggunakan unset() pada properti yang tidak tersedia.
// Magic method __call() dieksekusi ketika mencoba memanggil metode yang tidak tersedia dalam objek.
// Magic method __callStatic() dieksekusi ketika mencoba memanggil metode statis yang tidak tersedia dalam class.

class Zero
{
    // Array private untuk menyimpan properti dinamis yang ditambahkan secara runtime.
    private array $properties = [];

    // Magic method __get() akan dipanggil saat mencoba mengakses properti yang tidak ada dalam class.
    public function __get($name)
    {
        // Mengembalikan nilai properti dari array $properties.
        return $this->properties[$name] ?? null; // Menghindari error jika properti tidak ditemukan.
    }

    // Magic method __set() akan dipanggil saat mencoba menetapkan nilai pada properti yang tidak ada.
    public function __set($name, $value)
    {
        // Menyimpan nilai dalam array $properties agar bisa diakses nanti.
        $this->properties[$name] = $value;
    }

    // Magic method __isset() akan dipanggil saat menggunakan isset() atau empty() pada properti yang tidak tersedia.
    public function __isset($name): bool
    {
        // Mengecek apakah properti dengan nama tertentu ada di array $properties.
        return isset($this->properties[$name]);
    }

    // Magic method __unset() akan dipanggil saat menggunakan unset() pada properti yang tidak tersedia.
    public function __unset($name)
    {
        // Menghapus properti dari array $properties.
        unset($this->properties[$name]);
    }

    // Magic method __call() akan dipanggil saat mencoba memanggil metode yang tidak tersedia dalam objek.
    public function __call($name, $arguments)
    {
        // Menggabungkan argument menjadi string untuk ditampilkan.
        $join = join(", ", $arguments);
        echo "Call function $name with arguments: $join" . PHP_EOL;
    }

    // Magic method __callStatic() akan dipanggil saat mencoba memanggil metode statis yang tidak tersedia dalam class.
    public static function __callStatic($name, $arguments)
    {
        // Menggabungkan argument menjadi string untuk ditampilkan.
        $join = join(", ", $arguments);
        echo "Call static function $name with arguments: $join" . PHP_EOL;
    }
}

// Membuat instance dari class Zero.
$zero = new Zero();

// Menetapkan nilai ke properti dinamis yang tidak dideklarasikan dalam class.
$zero->firstName = "Faizal";
$zero->middleName = "Rahmat";
$zero->lastName = "Nursaori";

// Mengakses properti dinamis dan mencetaknya ke layar.
echo "First Name : $zero->firstName" . PHP_EOL;
echo "Middle Name : $zero->middleName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

// Memanggil metode yang tidak tersedia dalam objek (akan memicu __call()).
$zero->sayHello("Faizal", "Nursaori");

// Memanggil metode statis yang tidak tersedia dalam class (akan memicu __callStatic()).
Zero::sayHello("Faizal", "Nursaori");
