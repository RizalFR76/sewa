<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
            'tgl_lahir' => [
                "type" => "DATE",
                "null" => false
            ],
            'jk' => [
                "type" => "ENUM",
                "constraint" => ['L','P'],
                "null" => true
            ],
            'alamat' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'telepon' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'email' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'username' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'password' => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            'level' => [
                "type" => "ENUM",
                "constraint" => ['pelanggan','admin'],
                "null" => false
            ]
        ];
        $this->forge->addField($fields);
        // membuat primary key
        $this->forge->addKey('id',true);
        // membuat uniq
        $this->forge->addUniqueKey("email");
        $this->forge->addUniqueKey("username");
        // membuat tabel
        $this->forge->createTable("user");
    }

    public function down()
    {
        //
        $this->forge->dropTable('user');
    }
}
