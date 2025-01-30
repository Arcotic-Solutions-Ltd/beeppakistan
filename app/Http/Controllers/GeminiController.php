<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Gemini\Laravel\Facades\Gemini;



class GeminiController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function process(Request $request)
    {
        try {
            $result = Gemini::geminiPro()->generateContent($request->prompt);

            return response()->json([
                'response' => $result->text() ?? 'No response from API'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to process the request.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }


}
