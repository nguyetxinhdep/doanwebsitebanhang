<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class YourController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = ProductCategory::where('name', 'LIKE', "%{$query}%")->limit(5)->get(); // Thay 'name' bằng cột bạn muốn tìm kiếm
        // Log::debug($results);
        return response()->json($results);
    }
}
