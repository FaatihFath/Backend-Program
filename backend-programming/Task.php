<?php

# membuat class Animal
class Animal
{
    # property animals
    public $animals;
    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($animal)
    {$animal = [
        'Shark', 'Cow', 'Dolphin', 'tiger', 
    ];
    return $this->animals = $animal;
    }
    # method index - menampilkan data animals
    public function index()
    {foreach ($this->animals as $animal)
        echo $animal . '<br>';
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($animal)
    {array_push($this->$animal);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $animal){
        array_splice($this->animals, $index, $animal);
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {unset($this->animals[$index]);
        # gunakan method unset atau array_splice untuk menghapus data array
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal([]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";