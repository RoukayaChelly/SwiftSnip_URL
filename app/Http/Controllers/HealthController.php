<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthController extends Controller
{
    public function checkHealth()
    {
        try {
            // Check if the database connection is successful
            DB::connection()->getPdo();

            // Check if the required tables exist
            $tablesExist = DB::select('SHOW TABLES');

            return response()->json(['status' => 'success', 'tablesExist' => !empty($tablesExist)]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}
