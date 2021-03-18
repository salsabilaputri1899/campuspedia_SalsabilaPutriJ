<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customerr;

class CustomerrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_Customerr');
		
		
    }
	public function create_post(Request $request){
		$customerr = new Customerr;

        $customerr->name = $request["name"];
		$customerr->email = $request["email"];;
		$customerr->occupation = $request["occupation"];
		$customerr->save();
		return view('view_Customerr', ['customerr' => $customerr]);
	}

	public function get(){
		$all_customerr = Customerr::all();
		
		return view('all_customerr', ['all_customerr' => $all_customerr]);
	}
	
    public function edit($id)
    {
		$customerr = Customerr::find($id);
		return view('edit_customerr', ['customerr' => $customerr]);
    }

	public function edit_post(Request $request){
		$customerr = Customerr::find($request["id"]);
		
        $customerr->name = $request["name"];
		$customerr->email = $request["email"];;
		$customerr->occupation = $request["occupation"];
		$customerr->save();
		return view('view_customerr', ['customerr' => $customerr]);
    }
	
    public function delete($id)
    {
		$customerr = Customerr::find($id);

		$customerr->delete();
	
		return "Berhasil Di Delete";
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
