<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public array $dataUser = [];

    public function readAllUser($userId="") : array
    {

        $query = (!empty($userId)) ? $userId : "";

        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/getUser'.$query;

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
			return $this->dataUser = $row;

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

        $dataUser = $this->readAllUser();

        return view("admin.user.index", compact("dataUser"));
        // var_dump($dataNews);

		// return view("pages.news.index")->with("dataProducts");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/register';

        $cUrl = curl_init();

        $dataJSON = json_encode(array(
            'username' => $request->input("username"),
            'password' => $request->input("password"),
            'email' => $request->input("email"),
            'nama_lengkap' => $request->input("nama_lengkap"),
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
            return redirect("/dashboard/user")->with('success', $data->message);
            // return redirect("/news")->with('success', $data->message);

        } else {
            // Jika login gagal, bisa menampilkan pesan error atau melakukan tindakan lainnya
            return redirect("/dashboard/user")->with('error', $data->message);
        }

        // return redirect("/news");

        // return "store data berita ". $dataJSON;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $userId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $userId)
    {
        //
         $dataUser = $this->readAllUser("?id=" . $userId);

        return view("admin.user.edit", compact("dataUser"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $userId){

        $query= "?id=".$userId;
        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/putUser'.$query ;

        $cUrl = curl_init();

       $dataJSON = json_encode(array(
            'username' => $request->input("username"),
            'email' => $request->input("email"),
            'nama_lengkap' => $request->input("nama_lengkap"),
            'role' => $request->input("role"),
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
        var_dump($options);
		curl_close($cUrl);

        // Mengecek jika response sukses dan menyimpan data ke dalam session
        if ($data->success === true) {
            return redirect("/dashboard/user")->with('success', $data->message);
            // return redirect("/news")->with('success', $data->message);

        } else {
            // Jika login gagal, bisa menampilkan pesan error atau melakukan tindakan lainnya
            return redirect("/dashboard/user")->with('error', $data->message);
        }

        // return "masuk update isinya: ". $request ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $userId)
    {
        $query= "?id=".$userId;
        // API URL
        $url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pldpgou/endpoint/deleteUser'.$query ;

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
            return redirect("/dashboard/user")->with('success', $data->message);

        } else {
            // Jika login gagal, bisa menampilkan pesan error atau melakukan tindakan lainnya
            return redirect("/dashboard/user")->with('error', $data->message);

        }
    }
}

