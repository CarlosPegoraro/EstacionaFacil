<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

use function PHPUnit\Framework\isNull;

class LoginController extends Controller
{
    public function index() {
        $message = session('successMessage');
        return view('login.index')->with("successMessage", $message);
    }

    public function login(Request $request) {
        $data = DB::table('users')->where('email', $request->email)->first();
        if (isNull($data) || $data->password != $request->password) {
            return to_route('login.index')->with("sucessMessage", "Dados inválidos");
        }

        return view('home.index');
    }

    public function create() {
        $message = session('successMessage');
        return view('login.create')->with("successMessage", $message);
    }

    public function store(LoginRequest $request)
    {
        $data = User::create($request->all());

        return to_route('login.index')->with('successMessage', "Registrado com sucesso");
    }

}
