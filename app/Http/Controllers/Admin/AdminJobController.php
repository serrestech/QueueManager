<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminJobController extends Controller
{
    public function index() {
        return view('admin.job.index')->with('jobs',AdminHelper::allJobs());
    }

    public function create() {

    }

    public function store() {

    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function update(Request $request) {

    }

    public function destroy($id) {

    }
}
