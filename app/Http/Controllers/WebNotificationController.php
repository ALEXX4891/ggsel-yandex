<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\Notification;
// use App\Http\Requests\StoreNotificationRequest;
// use App\Http\Requests\UpdateNotificationRequest;

class WebNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'Hello World';
        // $data = request()->all();

        // return response()->json($data, 200);

        return response()->json([
            'version' => '1.0.0',
            'name' => request()->input('notificationType'),
            'time' => request()->input('time'),
            'ip' => request()->ip(),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotificationRequest $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
