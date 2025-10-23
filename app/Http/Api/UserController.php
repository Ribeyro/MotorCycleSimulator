<?php

namespace App\Http\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    // GET /api/user/{dni}
    public function show($dni): JsonResponse
    {
        $user = User::where('dni', $dni)->first();
        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        return response()->json($user);
    }

    // POST /api/user
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'dni' => 'required|string|unique:users,dni',
            'name' => 'required|string',
            'last_name' => 'required|string',
            'tiempo_total' => 'required|numeric',
            'vel_maxima' => 'required|string',
            'vel_promedio' => 'required|string',
            'num_objetivos_cumplidos' => 'required|integer',
            'num_infracciones' => 'required|integer',
            'lista_casos' => 'required|array',
            'lista_senales' => 'required|array',
        ]);

        $user = User::create([
            'dni' => $validated['dni'],
            'name' => $validated['name'],
            'last_name' => $validated['last_name'],
            'tiempo_total' => $validated['tiempo_total'],
            'vel_maxima' => $validated['vel_maxima'],
            'vel_promedio' => $validated['vel_promedio'],
            'num_objetivos_cumplidos' => $validated['num_objetivos_cumplidos'],
            'num_infracciones' => $validated['num_infracciones'],
            'lista_casos' => $validated['lista_casos'],
            'lista_senales' => $validated['lista_senales'],
        ]);

        return response()->json($user, 201);
    }

    // GET /api/user/all
    public function getAll(): JsonResponse
    {
        $users = User::all();
        return response()->json($users);
    }
}
