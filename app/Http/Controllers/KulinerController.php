<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public array $dataKuliner = [];

    public function readAllKuliner($kulinerId="") : array
    {

        $query = (!empty($kulinerId)) ? $kulinerId : "";

        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/getKuliner'.$query;

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
			return $this->dataKuliner = $row;

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

        $dataKuliner = $this->readAllKuliner();

        return view("admin.kuliner.index", compact("dataKuliner"));
        // var_dump($dataNews);

		// return view("pages.news.index")->with("dataProducts");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kuliner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/postKuliner';

        $cUrl = curl_init();

        $dataJSON = json_encode(array(
            'nama_kuliner' => $request->input("nama_kuliner"),
            'jam_buka' => $request->input("jam_buka"),
            'deskripsi_kuliner' => $request->input("deskripsi_kuliner"),
            'gambar_kuliner' => $request->input("gambar_kuliner"),
            'lokasi_kuliner' => $request->input("lokasi_kuliner"),
            'map_kuliner' => $request->input("map_kuliner"),
            'galeri' => [
                "galeri_1"=> $request->input("galeri-1"),
                "galeri_2"=> $request->input("galeri-2"),
                "galeri_3"=> $request->input("galeri-3"),
                "galeri_4"=> $request->input("galeri-4"),
                "galeri_5"=> $request->input("galeri-5"),
                "galeri_6"=> $request->input("galeri-6"),
            ],
        ));

		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER=> array("Content-Type:application/json"),
            CURLOPT_POSTFIELDS => $dataJSON
		);

		curl_setopt_array($cUrl, $options);
		$response = curl_exec($cUrl);
		$data = json_decode($response);
        // var_dump($data);
		curl_close($cUrl);

        if ($data->success === true) {
            return redirect("/dashboard/kuliner")->with('success', $data->message);
            // return redirect("/news")->with('success', $data->message);

        } else {
            // Jika login gagal, bisa menampilkan pesan error atau melakukan tindakan lainnya
            return redirect("/dashboard/kuliner")->with('error', $data->message);
        }

        // return redirect("/news");

        // return "store data berita ". $dataJSON;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kulinerId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kulinerId)
    {
        //
         $dataKuliner = $this->readAllKuliner("?id=" . $kulinerId);

        return view("admin.kuliner.edit", compact("dataKuliner"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kulinerId){

        $query= "?id=".$kulinerId;
        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/putKuliner'.$query ;

        $cUrl = curl_init();

       $dataJSON = json_encode(array(
            'nama_kuliner' => $request->input("nama_kuliner"),
            'jam_buka' => $request->input("jam_buka"),
            'deskripsi_kuliner' => $request->input("deskripsi_kuliner"),
            'gambar_kuliner' => $request->input("gambar_kuliner"),
            'lokasi_kuliner' => $request->input("lokasi_kuliner"),
            'map_kuliner' => $request->input("map_kuliner"),
            'galeri' => [
                "galeri_1"=> $request->input("galeri-1"),
                "galeri_2"=> $request->input("galeri-2"),
                "galeri_3"=> $request->input("galeri-3"),
                "galeri_4"=> $request->input("galeri-4"),
                "galeri_5"=> $request->input("galeri-5"),
                "galeri_6"=> $request->input("galeri-6"),
            ],
        ));

		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_CUSTOMREQUEST => "PUT",
			CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER=> array("Content-Type:application/json"),
            CURLOPT_POSTFIELDS => $dataJSON
		);

		curl_setopt_array($cUrl, $options);
		$response = curl_exec($cUrl);
		$data = json_decode($response);
        // var_dump($data);
		curl_close($cUrl);

        // Mengecek jika response sukses dan menyimpan data ke dalam session
        if ($data->success === true) {
            return redirect("/dashboard/kuliner")->with('success', $data->message);
            // return redirect("/news")->with('success', $data->message);

        } else {
            // Jika login gagal, bisa menampilkan pesan error atau melakukan tindakan lainnya
            return redirect("/dashboard/kuliner")->with('error', $data->message);
        }

        // return "masuk update isinya: ". $request ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kulinerId)
    {
        $query= "?id=".$kulinerId;
        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/deleteKuliner'.$query ;

        $cUrl = curl_init();

		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_CUSTOMREQUEST => "DELETE",
			CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER=> array("Content-Type:application/json")
		);

		curl_setopt_array($cUrl, $options);
		$response = curl_exec($cUrl);
		$data = json_decode($response);
        // var_dump($data);
		curl_close($cUrl);

        // Mengecek jika response sukses dan menyimpan data ke dalam session
        if ($data->success === true) {
            return redirect("/dashboard/kuliner")->with('success', $data->message);

        } else {
            // Jika login gagal, bisa menampilkan pesan error atau melakukan tindakan lainnya
            return redirect("/dashboard/kuliner")->with('error', $data->message);

        }
    }
}
