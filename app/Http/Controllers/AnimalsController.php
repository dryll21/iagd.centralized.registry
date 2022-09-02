<?php

namespace App\Http\Controllers;

use App\Models\animals;
use App\Models\cat_profile;
use App\Models\dog_profile;
use App\Models\chicken_profile;
use App\Models\parrot_profile;
use App\Models\rabbit_profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalsController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard.index');
    }

    public function displayall(){
        $rabbit_profile = DB::table('rabbit_profile')->select('iagd_no', 'animal_name','breed','dateofbirth','PetType','ImageURL');
        $cat_profile = DB::table('cat_profile')->select('iagd_no', 'animal_name','breed','dateofbirth','PetType','ImageURL');
        $dog_profile = DB::table('dog_profile')->select('iagd_no', 'animal_name','breed','dateofbirth','PetType','ImageURL');
        $chicken_profile = DB::table('chicken_profile')->select('iagd_no', 'animal_name','breed','dateofbirth','PetType','ImageURL');
        $parrot_profile = DB::table('parrot_profile')
                            ->select('iagd_no', 'animal_name','breed','dateofbirth','PetType','ImageURL')
                            ->union($chicken_profile)
                            ->union($dog_profile)
                            ->union($cat_profile)
                            ->union($rabbit_profile)
                            ->paginate(8);
        $data['allanimal'] = $parrot_profile;       
        return view('pages.users.user-pets',$data);
    }

    public function displaydeceased(){
        $dog_profile = DB::table('dog_profile')->select('iagd_no', 'animal_name','breed','dateofbirth','PetType','ImageURL','deceased')
                                               ->distinct()->get();
        $data['allanimal'] = $dog_profile;       
        return view('pages.users.deceased-pets',$data);
    }

    public static function displayname($iagd_no){
        $iagd_name = chicken_profile::query()
        ->where('animal_name', $iagd_no)
        ->get();
        return $iagd_name;
    }


    public function displaypets($request){
        $allanimal = animals::where('iagd_no', $request)->distinct()->get();
        $profile_table = $allanimal[0]->PetType;

        
        $cat_profile = cat_profile::where('iagd_no',$request)->distinct()->get();
        $chicken_profile = chicken_profile::where('iagd_no',$request)->distinct()->get();
        $parrot_profile = parrot_profile::where('iagd_no',$request)->distinct()->get();
        $dog_profile = dog_profile::where('iagd_no',$request)->distinct()->get();
        $rabbit_profile = rabbit_profile::where('iagd_no',$request)->distinct()->get();

        $data="";
        switch ($profile_table) {
            case "cat-profile":
                $data = $cat_profile;
                break;
            case "chicken-profile":
                $data =$chicken_profile;
                break;
            case "parrot-profile":
                $data = $parrot_profile;
                break;
            case "dog-profile":
                $data = $dog_profile;
                break;
            case "rabbit-profile":
                $data = $rabbit_profile;
                break;
            default:
                $data = "";
            break;
          }
          
          
          
        //   return view('pages.users.pets-profile', $dataall)->with('data',$data);
          return view('pages.users.pets-profile')->with('data',$data);
    }
}