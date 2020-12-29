<?php

namespace App\Database\Seeds;

class AlumniSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $faker = \Faker\Factory::create('id_ID');
                for ($i = 0; $i < 100; $i++) {
                        $data = [
                                'angkatan'      => $faker->numberBetween($min = 1, $max = 62),
                                'nama'          => $faker->name,
                                'nim'           => $faker->randomNumber($nbDigits = 9, $strict = false),
                                'jenisKelamin'  => $faker->randomElement($array = array('L', 'P')),
                                'tempatLahir'   => $faker->city,
                                'tanggalLahir'  => $faker->date($format = 'Y-m-d', $max = 'now'),
                                'telpAlumni'    => $faker->phoneNumber,
                                'alamat'        => $faker->address,
                                'statusBekerja' => $faker->boolean,
                                'perkiraanPensiun' => $faker->year,
                                'jabatanTerakhir'  => $faker->jobTitle,
                                'aktifPNS'      => $faker->boolean
                        ];
                        $this->db->table('alumni')->insert($data);
                }

                // // Simple Queries
                // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
                //         $data
                // );

                // Using Query Builder

                //banyak data
                // $this->db->table('alumni')->insertBatch($data);
        }
}
