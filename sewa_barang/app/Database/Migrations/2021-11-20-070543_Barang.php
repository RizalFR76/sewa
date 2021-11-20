<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        //
        $fields=[
            'id' => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            'nama' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'stock' => [
                "type" => "INT",
                "constraint" => 11,
                "null" => false
            ],
            'jenis' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'merk' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ]
        ];
        $this->forge->addField($fields);
        // membuat primary key
        $this->forge->addKey('id',true);
        // membuat uniq

        // membuat tabel
        $this->forge->createTable("barang");
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
