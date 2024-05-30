<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\UpdateTrackingRequest;
use App\Models\Scale;
use App\Models\Tracking;

class TrackingController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrackingRequest $request, Scale $scale)
    {
        $data = $request->validated();

        $scale = Scale::where('external_id', $data['scale_id'])->first();

        Tracking::create([
            'scale_id' => $scale->id,
            'weight' => $data['weight'],
        ]);

        return 'Successfully stored!';
    }
}
