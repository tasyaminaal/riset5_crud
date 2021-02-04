<?php

namespace App\Database\Seeds;

class AlumniSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $faker = \Faker\Factory::create('id_ID');

                $data = [
                        'angkatan'           => $faker->numberBetween($min = 1, $max = 62),
                        'nama'               => "Dummy_dummy",
                        'nim'                => "221810160",
                        'jenis_kelamin'      => $faker->randomElement($array = array('L', 'P')),
                        'tempat_lahir'       => $faker->city,
                        'tanggal_lahir'      => $faker->date($format = 'Y-m-d', $max = 'now'),
                        'telp_alumni'        => $faker->phoneNumber,
                        'alamat'             => $faker->address,
                        'status_bekerja'     => $faker->boolean,
                        'perkiraan_pensiun'  => $faker->year,
                        'jabatan_terakhir'   => $faker->jobTitle,
                        'aktif_pns'          => $faker->boolean
                ];
                $this->db->table('alumni')->insert($data);

                for ($i = 0; $i < 20; $i++) {
                        $data = [
                                'angkatan'      => $faker->numberBetween($min = 1, $max = 62),
                                'nama'          => $faker->name,
                                'nim'           => $faker->randomNumber($nbDigits = 9, $strict = false),
                                'jenis_kelamin'  => $faker->randomElement($array = array('L', 'P')),
                                'tempat_lahir'   => 'kota20',
                                'tanggal_lahir'  => $faker->date($format = 'Y-m-d', $max = 'now'),
                                'telp_alumni'    => '20000',
                                'alamat'        => 'alamat200',
                                'status_bekerja' => $faker->boolean,
                                'perkiraan_pensiun' => $faker->year,
                                'jabatan_terakhir'  => 'jabatan2000',
                                'aktif_pns'      => $faker->boolean
                        ];
                        $this->db->table('alumni')->insert($data);
                }

                for ($i = 0; $i < 180; $i++) {
                        $data = [
                                'angkatan'      => $faker->numberBetween($min = 1, $max = 62),
                                'nama'          => $faker->name,
                                'nim'           => $faker->randomNumber($nbDigits = 9, $strict = false),
                                'jenis_kelamin'  => $faker->randomElement($array = array('L', 'P')),
                                'tempat_lahir'   => $faker->city,
                                'tanggal_lahir'  => $faker->date($format = 'Y-m-d', $max = 'now'),
                                'telp_alumni'    => '20000',
                                'alamat'        => 'alamat200',
                                'status_bekerja' => $faker->boolean,
                                'perkiraan_pensiun' => $faker->year,
                                'jabatan_terakhir'  => 'jabatan2000',
                                'aktif_pns'      => $faker->boolean
                        ];
                        $this->db->table('alumni')->insert($data);
                }

                for ($i = 0; $i < 1800; $i++) {
                        $data = [
                                'angkatan'      => $faker->numberBetween($min = 1, $max = 62),
                                'nama'          => $faker->name,
                                'nim'           => $faker->randomNumber($nbDigits = 9, $strict = false),
                                'jenis_kelamin'  => $faker->randomElement($array = array('L', 'P')),
                                'tempat_lahir'   => $faker->city,
                                'tanggal_lahir'  => $faker->date($format = 'Y-m-d', $max = 'now'),
                                'telp_alumni'    => '20000',
                                'alamat'        => $faker->address,
                                'status_bekerja' => $faker->boolean,
                                'perkiraan_pensiun' => $faker->year,
                                'jabatan_terakhir'  => 'jabatan2000',
                                'aktif_pns'      => $faker->boolean
                        ];
                        $this->db->table('alumni')->insert($data);
                }

                for ($i = 0; $i < 18000; $i++) {
                        $data = [
                                'angkatan'      => $faker->numberBetween($min = 1, $max = 62),
                                'nama'          => $faker->name,
                                'nim'           => $faker->randomNumber($nbDigits = 9, $strict = false),
                                'jenis_kelamin'  => $faker->randomElement($array = array('L', 'P')),
                                'tempat_lahir'   => $faker->city,
                                'tanggal_lahir'  => $faker->date($format = 'Y-m-d', $max = 'now'),
                                'telp_alumni'    => '20000',
                                'alamat'        => $faker->address,
                                'status_bekerja' => $faker->boolean,
                                'perkiraan_pensiun' => $faker->year,
                                'jabatan_terakhir'  => $faker->jobTitle,
                                'aktif_pns'      => $faker->boolean
                        ];
                        $this->db->table('alumni')->insert($data);
                }

                for ($i = 0; $i < 100; $i++) {
                        $data = [
                                'angkatan'      => $faker->numberBetween($min = 1, $max = 62),
                                'nama'          => $faker->name,
                                'nim'           => $faker->randomNumber($nbDigits = 9, $strict = false),
                                'jenis_kelamin'  => $faker->randomElement($array = array('L', 'P')),
                                'tempat_lahir'   => $faker->city,
                                'tanggal_lahir'  => $faker->date($format = 'Y-m-d', $max = 'now'),
                                'telp_alumni'    => $faker->phoneNumber,
                                'alamat'        => $faker->address,
                                'status_bekerja' => $faker->boolean,
                                'perkiraan_pensiun' => $faker->year,
                                'jabatan_terakhir'  => $faker->jobTitle,
                                'aktif_pns'      => $faker->boolean
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
