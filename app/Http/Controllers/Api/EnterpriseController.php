<?php

namespace App\Http\Controllers\Api;

use App\Models\Enterprise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EnterpriseResource;
use App\Http\Requests\EnterpriseStoreRequest;

class EnterpriseController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:index-enterprises')->only('index');
        $this->middleware('permission:show-enterprises')->only('show');
        $this->middleware('permission:create-enterprises')->only('create','store');
        $this->middleware('permission:update-enterprises')->only('update');
        $this->middleware('permission:delete-enterprises')->only(['delete','destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EnterpriseResource::collection(Enterprise::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $created_enterprise = Enterprise::create($request->validated());

        return new EnterpriseResource($created_enterprise);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Enterprise $enterprise)
    {
        return new EnterpriseResource($enterprise);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EnterpriseStoreRequest $request, Enterprise $enterprise)
    {
        $enterprise->update($request->validated());

        return $enterprise;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enterprise $enterprise)
    {
        $enterprise->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
