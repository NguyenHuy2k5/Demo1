<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.products.list');
    }
    function detail()
    {
        return "Product detail: ";
    }
    function create()
    {
        return view('admin.products.add');
    }
    function store($id)
    {
        return "Save product create".$id;
    }
    function edit($id)
    {
        return "Form edit product: ".$id;
    }
    function update($id)
    {
        return "Update success".$id;
    }
    function delete($id)
    {
        return "Delete success".$id;
    }
}
