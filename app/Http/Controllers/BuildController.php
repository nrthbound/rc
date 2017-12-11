<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BuildRequest;

use App\Build;

class BuildController extends Controller
{
    public function index()
    {
      // $build = Build::all();
      $build = Build::all();
      return $build;
    }

    public function edit()
    {

    }

    public function store(BuildRequest $request)
    {
      $build = new Build();
      $build->name = $request->name;
      $build->type = $request->type;
      return $build->save() ? $build->toJson() : response($build->errors, 400);
    }

    public function delete($id)
    {
      $build = Build::find($id);
      return $build->delete() ? $build->toJson() : response($build->errors, 400);
    }

}
