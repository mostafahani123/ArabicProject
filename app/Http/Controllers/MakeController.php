<?php

namespace App\Http\Controllers;
// use App\Http\Requests\Make;
use App\Http\Requests\MakeRequest;
use App\Models\Makeing;
use App\Http\Resources\MakeResource;
class MakeController extends Controller
{
    public function Creat_Make(MakeRequest $request){
   
        // handle file create
        $ImageCard = $request->file('imageCard')->store('Images_Card','StoreApp');


         //    create db data -> Store
         $data_store =   Makeing::create([
            'name' => $request->name,
            'country' => $request->country,
            'governorate' => $request->governorate,
            'region' => $request->region,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'whatsapp_number' => $request->whatsapp_number,
            'urlStore' => $request->urlStore,
            'email' => $request->email,
            'workingScops' => $request->workingScops,
            'description' => $request->description,
            'imageCard' => $ImageCard,

]);
return MakeResource::make($data_store);
  }
}
