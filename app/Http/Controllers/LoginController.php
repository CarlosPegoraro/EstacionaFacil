<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class LoginController extends Controller
{
    public function index() {
        return view('login.index')->with("successMessage", "Pinto");
    }

    public function login(Request $request) {
        $data = DB::table('user')->where('email', 'kadu@gmail.com')->first();
        if ($data->password != $request->password) {
            return to_route('login.index')->with("sucessMessage", "Dados inválidos");
        }

        return view('home.index');
    }

    public function create() {
        return view('login.create')->with("successMessage", "Pinto");
    }

    public function store(Request $request)
    {
        $data = User::create($request->all());

        if (isNull($data)) {
            return view('login.create')->with('sucessMessage', "Erro registrar");
        }

        return view('login.index')->with('successMessage', "Registrado com sucesso");
    }

}
