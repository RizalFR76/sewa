<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sewa extends Migration
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
            'id_penyewa' => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,                
            ],
            'id_barang' => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,                
            ],
            'tgl_sewa' => [
                "type" => "TIMESTAMP"
            ],
            'tgl_ambil' => [
                "type" => "DATE",
                "null" => false
            ],
            'tgl_pengembalian' => [
                "type" => "DATE",
                "null" => false
            ],
            'k_sewa' => [
                "type" => "ENUM",
                "constraint" => ['ditolak','diterima'],
                "null" => true
            ],
            'k_pengembalian' => [
                "type" => "ENUM",
                "constraint" => ['belum dikembalikan','sudah dikembalikan'],
                "null" => true
            ]
        ];
        $this->forge->addField($fields);
        // membuat primary key
        $this->forge->addKey('id',true);
        // membuat uniq
        
        // membuat tabel
        $this->forge->createTable("sewa");
    }

    public function down()
    {
        //
        $this->forge->dropTable('sewa');
    }
}
