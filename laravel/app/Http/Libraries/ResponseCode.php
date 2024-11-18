<?php

namespace App\Http\Libraries;

class ResponseCode
{
    public function OKE($msg = null, $datas = null)
    {
        return response()->json(["status" => 200, "messages" => $msg, "datas" => $datas]);
    }
    public function CREATED($msg = null, $datas = null)
    {
        return response()->json(["status" => 201, "messages" => $msg, "datas" => $datas]);
    }
    public function ACCEPTED($msg = null, $datas = null)
    {
        return response()->json(["status" => 202, "messages" => $msg, "datas" => $datas]);
    }
    public function BAD_REQUEST($msg = null, $datas = null)
    {
        return response()->json(["status" => 400, "messages" => $msg, "datas" => $datas]);
    }
    public function UNAUTHORIZED($msg = null, $datas = null)
    {
        return response()->json(["status" => 401, "messages" => $msg, "datas" => $datas]);
    }
    public function FORBIDDEN($msg = null, $datas = null)
    {
        return response()->json(["status" => 403, "messages" => $msg, "datas" => $datas]);
    }
    public function NOT_FOUND($msg = null, $datas = null)
    {
        return response()->json(["status" => 404, "messages" => $msg, "datas" => $datas]);
    }
    public function TO_MANY_REQ($msg = null, $datas = null)
    {
        return response()->json(["status" => 429, "messages" => $msg, "datas" => $datas]);
    }
    public function SERVER_ERROR($msg = null, $datas = null)
    {
        return response()->json(["status" => 500, "messages" => $msg, "datas" => $datas]);
    }
    public function SERVER_TIMEOUT($msg = null, $datas = null)
    {
        return response()->json(["status" => 504, "messages" => $msg, "datas" => $datas]);
    }
}
