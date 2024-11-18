<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Role;
use App\Http\Libraries\Tools;
use App\Http\Libraries\ResponseCode;

class UserController extends Controller
{
    private $resCode, $tool, $user, $role;
    public function __construct() {
        $this->tool = new Tools;
        $this->resCode = new ResponseCode;
        $this->user = new User;

        $tmpRole = new Role;
        $this->role = $tmpRole->all();
    }

    public function index()
    {
        try {
            $getDatas = $this->tool->isValidVal($this->user::all());
            if ($getDatas) {
                return $this->resCode->OKE("berhasil mengambil data", $getDatas);
            }
            return $this->resCode->OKE("tidak ada data");
        } catch (\Throwable $th) {
            return $this->resCode->SERVER_ERROR("kesalahan dalam mengambil data!", $th);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $getDatas = $this->tool->isValidVal($this->user::find($id));
            if ($getDatas) {
                return $this->resCode->OKE("berhasil mengambil data", $getDatas);
            }
            return $this->resCode->OKE("tidak ada data");
        } catch (\Throwable $th) {
            return $this->resCode->SERVER_ERROR("kesalahan dalam mengambil data!", $th);
        }
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
    public function update(Request $req, string $id)
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
