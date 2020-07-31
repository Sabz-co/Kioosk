<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AutoCompleteController extends Controller
{
    public function authors($query)
    {
        $result = Author::orWhereRaw("concat(first_name, ' ', last_name)  like '%$query%' ")->get();
        return response()->json(["suggestions" => $result]);
    }
}
