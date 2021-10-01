<?php

class Mahasiswa_model
{
  private $mhs = [
    [
      "nama" => "Mochamad Rizky Pratama",
      "nrp" => "193040080",
      "email" => "mrizkyprtm28@gmail.com",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama" => "Alsa Lira Amalia",
      "nrp" => "193040079",
      "email" => "alsalira@gmail.com",
      "jurusan" => "Teknik Informatika"
    ],
    [
      "nama" => "Adji Pratama",
      "nrp" => "193040101",
      "email" => "djitothebeat123@gmail.com",
      "jurusan" => "Teknik Informatika"
    ]
  ];

  public function getAllMahasiswa()
  {
    return $this->mhs;
  }
}
