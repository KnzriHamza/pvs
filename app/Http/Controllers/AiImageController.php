<?php

namespace App\Http\Controllers;

use App\Models\WhatsappMessage;
use App\Http\Requests\StoreWhatsappMessageRequest;
use App\Http\Requests\UpdateWhatsappMessageRequest;
use Illuminate\Http\Request;
use OpenAI;
class AiImageController extends Controller
{
/**
     * Display a listing of the resource.
     */
    function generateImage(Request $request){
        $client = $client = OpenAI::client(config('app.openai_api_key'));;
        $response = $client->images()->create([
            'model' => 'dall-e-2',
            'prompt' => 'A cute baby sea otter',
            'n' => 1,
            'size' => '1024x1024',
            'response_format' => 'url',
        ]);
        
        $response->created; // 1589478378
        
        foreach ($response->data as $data) {
            $data->url; // 'https://oaidalleapiprodscus.blob.core.windows.net/private/...'
            $data->b64_json; // null
        }
        
        return $response->toArray();

    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $messages = WhatsappMessage::orderBy('created_at', 'DESC')->get();

        return view('pages/imageGen', ['messages' => $messages]);
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
