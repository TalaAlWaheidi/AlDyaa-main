<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\AppConfig;
use Illuminate\Http\Request;

class AppConfigController extends Controller
{

    public function index()
    {
        $configs = AppConfig::orderBy('id', 'DESC')->get();
        return view('setup.appConfigs.index', compact('configs'));
    }

    public function edit(AppConfig $config)
    {
        return view('setup.appConfigs.edit', compact('config'));
    }

    public function update(Request $request, AppConfig $config)
    {
        $request->validate([
            'value'=> 'required'
        ]);
        $config->update($request->only('value'));
        return redirect()->route('setups.app-config.all');
    }

}
