<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateScaleRequest;
use App\Models\Scale;

class ScaleController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScaleRequest $request, Scale $scale)
    {
        if (!isset($_POST["scale"])) {
            return '';
        }

        \App\Models\User::create([
            'name' => 'Hello',
            'email' => 'mohammedjammeh@yahoo.com',
            'password' => '123',
            'remember_token' => 'hello',
        ]);

        return 'Successfully stored!';
    }
}
