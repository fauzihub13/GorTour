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

        return view("admin.wisata.index", compact("dataWisata"));
        // var_dump($dataNews);

		// return view("pages.news.index")->with("dataProducts");
    }

    public function destinasiWisata()
    {
        //
        // Memanggil metode readAllNews() untuk mendapatkan data

        $dataWisata = $this->readAllWisata();

        return view("wisata", compact("dataWisata"));
        // var_dump($dataNews);

		// return view("pages.news.index")->with("dataProducts");
    }

    public function detailWisata(string $wisataId)
    {
        //
         $dataWisata = $this->readAllWisata("?id=" . $wisataId);

        return view("detailwisata", compact("dataWisata"));
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
        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/postWisata';

        $cUrl = curl_init();

        $dataJSON = json_encode(array(
            'nama_wisata' => $request->input("nama_wisata"),
            'jam_buka' => $request->input("jam_buka"),
            'deskripsi_wisata' => $request->input("deskripsi_wisata"),
            'gambar_wisata' => $request->input("gambar_wisata"),
            'wilayah_wisata' => $request->input("wilayah_wisata"),
            'lokasi_wisata' => $request->input("lokasi_wisata"),
            'map_wisata' => $request->input("map_wisata"),
            'harga_wisata' => $request->input("harga_wisata"),
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
            return redirect("/dashboard/wisata")->with('success', $data->message);
            // return redirect("/news")->with('success', $data->message);

        } else {
            // Jika login gagal, bisa menampilkan pesan error atau melakukan tindakan lainnya
            return redirect("/dashboard/wisata")->with('error', $data->message);
        }

        // return redirect("/news");

        // return "store data berita ". $dataJSON;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $wisataId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $wisataId)
    {
        //
         $dataWisata = $this->readAllWisata("?id=" . $wisataId);

        return view("admin.wisata.edit", compact("dataWisata"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $wisataId){

        $query= "?id=".$wisataId;
        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/putWisata'.$query ;

        $cUrl = curl_init();

       $dataJSON = json_encode(array(
            'nama_wisata' => $request->input("nama_wisata"),
            'jam_buka' => $request->input("jam_buka"),
            'deskripsi_wisata' => $request->input("deskripsi_wisata"),
            'gambar_wisata' => $request->input("gambar_wisata"),
            'wilayah_wisata' => $request->input("wilayah_wisata"),
            'lokasi_wisata' => $request->input("lokasi_wisata"),
            'map_wisata' => $request->input("map_wisata"),
            'harga_wisata' => $request->input("harga_wisata"),
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
            return redirect("/dashboard/wisata")->with('success', $data->message);
            // return redirect("/news")->with('success', $data->message);

        } else {
            // Jika login gagal, bisa menampilkan pesan error atau melakukan tindakan lainnya
            return redirect("/dashboard/wisata")->with('error', $data->message);
        }

        // return "masuk update isinya: ". $request ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $wisataId)
    {
        $query= "?id=".$wisataId;
        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/deleteWisata'.$query ;

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
            return redirect("/dashboard/wisata")->with('success', $data->message);

        } else {
            // Jika login gagal, bisa menampilkan pesan error atau melakukan tindakan lainnya
            return redirect("/dashboard/wisata")->with('error', $data->message);

        }
    }
}
