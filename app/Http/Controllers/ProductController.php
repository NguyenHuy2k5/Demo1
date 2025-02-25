<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Method: index()
     * Desc: Lấy tất cả sản phẩm
     * Params:
     * Return: Danh sách sản phẩm
     */
    function index()
    {
        $accounts = DB::table("accounts")->get();
        $data = [
            'accounts' => $accounts];
        return view('admin.products.list', $data);
    }
    function create()
    {
        return view('admin.products.add');

    }
    function store(Request $request)
    {
        $accounts = new Account();
        $accounts->name = $request->name;
        $accounts->age = $request->age;
        $accounts->address = $request->address;
        $accounts->status = $request->status;
        $accounts->create();
        return Redirect::route('product.index');

    }
    function edit($id){
        $account = DB::table('accounts')->find($id);
        $data = ['account' => $account];
        return view('admin.products.edit', $data);
    }
    function update(Request $request, $id){
        DB::table('accounts')->where('id', $id)
        ->update([
            'name' => $request -> name,
            'age' => $request -> age,
            'address' => $request ->address,
            'status' => $request -> status
        ]);
        return Redirect::route('product.index');
    }
    function delete($id)
    {
        DB::table('accounts')->where('id',$id)->delete();
        return Redirect::route('product.index');
    }
}
