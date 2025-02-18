<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Method: index()
     * Desc: Lấy danh sách người dùng
     * Params:
     * Return: Danh sách useruser
     */
    function index()
    {
        $users = User::all();
        dd($users);
        return "getAllUser";
    }
    /**
     * Method: detail()
     * Desc: Lấy danh sách người dùng
     * Params:
     * Return: Danh sách useruser
     */
    function detail($id)
    {
        return "getUserById" . $id;
    }
    /**
     * Method: store()
     * Desc: Lấy danh sách người dùng
     * Params:
     * Return: Danh sách useruser
     */
    function store()
    {
        return "Liệt kê danh sách người dùng";
    }
    /**
     * Method: index()
     * Desc: Lấy danh sách người dùng
     * Params:
     * Return: Danh sách useruser
     */
    function create($id)
    {
        return "Thêm người dùng có id là: " . $id;
    }
    function edit($id)
    {
        return "edit".$id;
    }
    /**
     * Method: index()
     * Desc: Lấy danh sách người dùng
     * Params:
     * Return: Danh sách useruser
     */
    function update($code)
    {
        return "Cập nhật thông tin người dùng có mã là: " . $code;
    }
    /**
     * Method: index()
     * Desc: Lấy danh sách người dùng
     * Params:
     * Return: Danh sách useruser
     */
    function delete($code)
    {
        return "Xóa người dùng có mã là: " . $code;
    }

}
