<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Company;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookRentController extends Controller
{
    public function index(){

        $users = User::where('id', '!=', 1)->get();
        $companies = Company::all();
        return view('book-rent', ['users' => $users, 'companies' => $companies]);
    }

    public function store(Request $request){

        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(3)->toDateString();
        
       try {
        DB::beginTransaction();

        RentLogs::create($request->all());

        $categories = Company::findOrFail($request->company_id);
       /*  $categories->status = 'not available'; */
        $categories->save();
        DB::commit();

        Session::flash('message', 'success!!!');
        Session::flash('alert-class', 'alert-success');
        return redirect('book-rent');
        
        } catch (\Throwable $th){
            DB::rollBack();
            
        }
    

    }

    public function returnBook(){

        $users = User::where('id', "!=", 1)->get();
        $companies = Company::all();
        return view('return-book', ['users' => $users, 'companies' => $companies]);

       

    } 

    public function saveReturnBook(Request $request){
        
        $rent = RentLogs::where('user_id', $request->user_id)->where('company_id', $request->company_id)->where('actual_return_date', null)->count();

        $rentData = $rent->first(); 
        $countData = $rent->count();

        
        if($rent == 1){
            $rentData->actual_return_date = Carbon::now()->toDateString();
            $rentData->save();

            Session::flash('message', 'success!!!');
            Session::flash('alert-class', 'alert-success');
            return redirect('return-book');



        }else{
            Session::flash('message', 'error!!!');
            Session::flash('alert-class', 'alert-success');
            return redirect('return-book');



        }
    }
}
