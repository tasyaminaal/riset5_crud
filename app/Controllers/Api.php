<?php
namespace App\Controllers;
use App\Models\AlumniModel;
use App\Models\WebserviceModel;
use CodeIgniter\RESTful\ResourceController;
class Api extends ResourceController
{
	public function index() //project list + form create
	{
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => "https://pbd.bps.go.id/simpeg_api/pkl_stis_2021",
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => [
				'apiKey'	=> "0smUjhQHo2SMu2MJkcJmgEmEkv4qAfCvTW8PwnQQ724=",
				'kategori'	=> "get_riwayat_pendidikan",
				// 'nipbps'	=> "340058944"
				'nipbps'	=> "340014024"
				// 'nipbps'	=> "123120312"

				// 'nipbps'	=> $user->getNip()
			]
		]);
		curl_setopt($curl, CURLOPT_FRESH_CONNECT, TRUE);

		$result = curl_exec($curl);
		curl_close($curl);
		$hasil = json_decode($result);

		// echo $result;
		if (isset($hasil->pesan)) {
			echo "data tidak ditemukan";
		} else {
			$riwayat_pendidikan = array();
			foreach ($hasil as $data)
				array_push($riwayat_pendidikan, $data->Nama_Instansi_Pendidikan);
			if (in_array('Akademi Ilmu Statistik', $riwayat_pendidikan) || in_array('Sekolah Tinggi Ilmu Statistik', $riwayat_pendidikan) || in_array('Politeknin Statistika STIS', $riwayat_pendidikan))
				echo "Alumni";
			else
				echo "Bukan Alumni";
		}
		die();
	}

	//--------------------------------------------------------------------

	public function user() //user:profile
	{
		$cek = 0;
		$init = new AlumniModel();
		$init2 = new WebserviceModel();
		$apiKey = $this->request->getPost('api-key');
		$nim = $this->request->getPost('nim');

		if ($apiKey==NULL) {
			$respond = [
				'status' => 401,
				'message'=> 'Please input an api-key',
				'data' => []
			];

			return $this->respond($respond,401);
		}

		$scope = $init2->getScopeAppToken($apiKey)->getResult();

		foreach ($scope as $key => $value) {
			 $scope[$key]->id_scope;
			 if ($scope[$key]->id_scope=='1') {
				 $cek = $cek+1;
			 }
		}


		$init2->updateTokenReq($apiKey);

		if($cek == 1){
			$alumni = $init->getUserApi($nim)->getResult();
			$respond = [
				'status' => 200,
				'message'=> 'Successful!',
				'data' => $alumni
			];
			return $this->respond($respond, 200);
		} else {
			$respond = [
				'status' => 403,
				'message'=> 'Forbidden!',
				'data' => []
			];
			return $this->respond($respond, 403);	
		}
		 
	}

	//--------------------------------------------------------------------


	public function alumni() //alumni:profile
	{
		$scp2 = 0;
		$scp3 = 0;
		$init = new AlumniModel();
		$init2 = new WebserviceModel();
		$apiKey = $this->request->getPost('api-key');
		$list = $this->request->getPost('list');
		$nim = $this->request->getPost('nim');

		if ($apiKey==NULL) {
			$respond = [
				'status' => 401,
				'message'=> 'Please input an api-key!',
				'data' => []
			];

			return $this->respond($respond,401);
		}

		$scope = $init2->getScopeAppToken($apiKey)->getResult();

		foreach ($scope as $key => $value) {
			 $scope[$key]->id_scope;
			 if ($scope[$key]->id_scope=='2') {
				 $scp2 = 1;
			 };

			 if ($scope[$key]->id_scope=='3') {
				$scp3 = 1;
			};
		};

		$init2->updateTokenReq($apiKey);


		if ($list==1) {
			if ($scp3 == 1) {
				$alumni = $init->getDetailUserApi()->getResult();

				$respond = [
					'status' => 200,
					'message'=> 'Successful!',
					'data' => $alumni
				];
				return $this->respond($respond, 200);
				
			} else {
				$respond = [
					'status' => 403,
					'message'=> 'Forbidden!',
					'data' => []
				];
				return $this->respond($respond, 403);
			}
		} else {

			if ($scp2 == 1) {
				$alumni = $init->getDetailUserApi($nim)->getResult();
	
				$respond = [
					'status' => 200,
					'message'=> 'Successful!',
					'data' => $alumni
				];
				return $this->respond($respond, 200);
			} else {
				$respond = [
					'status' => 403,
					'message'=> 'Forbidden!',
					'data' => []
				];
				return $this->respond($respond, 403);
			}
		};

	} 

	//--------------------------------------------------------------------

}
