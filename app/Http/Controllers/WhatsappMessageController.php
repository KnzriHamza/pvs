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
        $client = new \GuzzleHttp\Client();
        $sid = getenv("TWILIO_SID");
        $Hamza = getenv("TWILIO_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");


        $response = $client->request('POST', 'https://robomatic-ai.p.rapidapi.com/api', [
            'form_params' => [
                'in' => $request->message,
                'op' => 'in',
                'cbot' => '1',
                'SessionID' => 'RapidAPI1',
                'cbid' => '1',
                'key' => 'RHMN5hnQ4wTYZBGCF3dfxzypt68rVP',
                'ChatSource' => 'RapidAPI',
                'duration' => '1'
            ],
            'headers' => [
                'X-RapidAPI-Host' => 'robomatic-ai.p.rapidapi.com',
                'X-RapidAPI-Key' => 'a0ac45b27cmshb60aed6954ba011p18dd10jsnc889785187a0',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
        ]);
        $data = json_decode($response->getBody(), true);
        $aiResponse = $data['out'];

        $twilio = new Client($sid, $token);
        $message = $twilio->messages
            ->create("whatsapp:+491772275270", // to
                [
                    "body" => $aiResponse,
                    "from" => "whatsapp:+14155238886"
                ]
            );

            $message = WhatsappMessage::create([
                'message' => $request->message,
                'response' => $aiResponse
            ]);

        
        
        //echo ;
        
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
    public function destroy($messageId)
    {
        $result = WhatsappMessage::where('id',$messageId)->delete();;

    if ($result) {
        // Message deleted successfully
        return redirect()->back()->with('success', 'Message deleted successfully.');
    } else {
        // Unable to delete message
        return redirect()->back()->with('error', 'Unable to delete message.');
    }
    }
}
