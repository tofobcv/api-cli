<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class StudentsController extends Controller
{
    protected $client;
    protected $api;

    public function __construct()
    {
        $this->client = new Client();
        $this->api = env('API_URL'); // http://127.0.0.1:8080/api
    }

    // LISTAR
    public function index()
    {
        $response = $this->client->get($this->api . '/students');
        $students = json_decode($response->getBody(), true);

        return view('students.index', compact('students'));
    }

    // FORMULARIO CREAR
    public function create()
    {
        return view('students.create');
    }

    // GUARDAR
    public function store(Request $request)
    {
        $this->client->post($this->api . '/students', [
            'json' => $request->all()
        ]);

        return redirect()->route('students.index');
    }

    // FORMULARIO EDITAR
    public function edit($id)
    {
        $response = $this->client->get($this->api . "/students/$id");
        $student = json_decode($response->getBody(), true);

        return view('students.edit', compact('student'));
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $this->client->put($this->api . "/students/$id", [
            'json' => $request->all()
        ]);

        return redirect()->route('students.index');
    }

    // BORRAR
    public function destroy($id)
    {
        $this->client->delete($this->api . "/students/$id");
        return redirect()->route('students.index');
    }
}
