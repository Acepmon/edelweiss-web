<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    public function up(Request $request)
    {
        $request->validate([
            'app_key' => ['required', 'string', 'in:' . config('app.key')]
        ]);

        $res = Artisan::call('up');

        return response()->json([
            'result' => $res
        ]);
    }

    public function down(Request $request)
    {
        $request->validate([
            'app_key' => ['required', 'string', 'in:' . config('app.key')]
        ]);

        $res = Artisan::call('down');

        return response()->json([
            'result' => $res
        ]);
    }

    public function check(Request $request)
    {
        $request->validate([
            'app_key' => ['required', 'string', 'in:' . config('app.key')]
        ]);

        $res = file_exists(storage_path().'/framework/down') ? 'down' : 'up';

        return response()->json([
            'result' => $res
        ]);
    }
}
