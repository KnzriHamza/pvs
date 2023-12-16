<?php

namespace App\Http\Controllers;

use App\Models\WhatsappMessage;
use App\Http\Requests\StoreWhatsappMessageRequest;
use App\Http\Requests\UpdateWhatsappMessageRequest;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsappMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function send(Request $request){
        // Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
        $sid = getenv("TWILIO_SID");
        $Hamza = getenv("TWILIO_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $token);
        $message = $twilio->messages
            ->create("whatsapp:+491772275270", // to
                [
                    "body" => $request->message,
                    "from" => "whatsapp:+14155238886"
                ]
            );
        $message = WhatsappMessage::create(['message' => $request->message]);

        return redirect('/dashboard');

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = WhatsappMessage::all();

        return view('dashboard', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWhatsappMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WhatsappMessage $whatsappMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WhatsappMessage $whatsappMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWhatsappMessageRequest $request, WhatsappMessage $whatsappMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WhatsappMessage $whatsappMessage)
    {
        //
    }
}
