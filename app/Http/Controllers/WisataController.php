<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    public array $dataWisata = [];

    public function readAllWisata($wisataId="") : array
    {

        $query = (!empty($wisataId)) ? $wisataId : "";

        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/getWisata'.$query;

        $cUrl = curl_init();

		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_RETURNTRANSFER => true,

		);

		curl_setopt_array($cUrl, $options);
		$response = curl_exec($cUrl);
		$data = json_decode($response);
        // var_dump($data);
		curl_close($cUrl);

        // Mengecek jika response sukses dan menyimpan data ke dalam session
        if ($data->success === true) {
            // Menggunakan foreach untuk mengurai properti dari 'result'
            // Mengakses properti dari objek 'result' secara langsung
            $row = $data->result;

            if (is_array($row) && !empty($row))
			return $this->dataWisata = $row;

        }
        return [];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Memanggil metode readAllNews() untuk mendapatkan data

        $dataWisata = $this->readAllWisata();

        // $dataNews->pagination(10);
        return view("admin.wisata.index", compact("dataWisata"));
        // var_dump($dataNews);

		// return view("pages.news.index")->with("dataProducts");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
