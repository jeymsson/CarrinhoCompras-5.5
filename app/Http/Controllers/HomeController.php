<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Produto;
use PDO;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = Produto::where([
           'ativo' => 'S'
        ])->get();
        // dd($registro);
        // return view('home.index', compact($registro));
        return view('home.index', compact('registro'));
    }
    public function where($id = null)
    {
        if (!empty($id)) {
            $registro = Produto::where([
                'id'    => $id,
                'ativo' => 'S'
            ])->first();
            if (!empty($id)) {
                return view('home.index', compact('registro'));
            }
        }
        return redirect()->route('index');
    }
    public function connecta(){
        $DB_host = 'localhost';
        $DB_username = 'root';
        $DB_password = 'root';
        $DB_name = 'carrinhocompras';
        $pdo_conn = '';
        try {
            $pdo_conn = new PDO('mysql:host='.$DB_host.';dbname='.$DB_name, $DB_username, $DB_password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        $res = $pdo_conn->prepare("Select 1;");
        $res->execute();
        $row = $res->fetchAll();



        dd($pdo_conn, $res, $row);
    }
}
