<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Http\Resources\StoreResource;
class StoreController extends Controller
{
    public function store(StoreRequest $request){
   
          // handle file create
          $ImageCard = $request->file('imageCard')->store('Images_Card','StoreApp');


           //    create db data -> Store
           $data_store =   Store::create([
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
  return StoreResource::make($data_store);
    }
}
