<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use OpenAI\Laravel\Facades\OpenAI;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $messages = collect(session('messages', []))->reject(fn ($message) => $message['role'] === 'system');

    return view('welcome', [
        'messages' => $messages
    ]);
});

Route::post('/', function (Request $request) {
    $messages = $request->session()->get('messages', [
        ['role' => 'system', 'content' => 'You are LaravelGPT - A ChatGPT clone. Answer as concisely as possible.']
    ]);

    $messages[] = ['role' => 'user', 'content' => $request->input('message')];
    $response = OpenAI::chat()->create([
        'model' => 'gpt-3.5-turbo',
        'messages' => $messages
    ]);
    $messages[] = ['role' => 'assistant', 'content' => $response->choices[0]->message->content];
    $request->session()->put('messages', $messages);
    info($messages);
    return redirect('/');
});

Route::get('/reset', function (Request $request) {
    $request->session()->forget('messages');

    return redirect('/');
});

Route::get('/record',function ()
{
    return view('record');
});

Route::post('/record',function (Request $request)
{
    // dd($request->file('recorder'));
    Storage::disk('local')->put('camerawawa.webm',file_get_contents($request->file('recorder')));
    $response = OpenAI::audio()->translate([
        'model' => 'whisper-1',
        // 'file' => fopen(,'r'),
        'file' => Storage::disk('local')->readStream('camerawawa.webm'),
        'response_format' => 'verbose_json',
    ]);

    $response->task; // 'translate'
    $response->language; // 'english'
    $response->duration; // 2.95
    $response->text; // 'Hello, how are you?'

    // foreach ($response->segments as $segment) {
    //     $segment->index; // 0
    //     $segment->seek; // 0
    //     $segment->start; // 0.0
    //     $segment->end; // 4.0
    //     $segment->text; // 'Hello, how are you?'
    //     $segment->tokens; // [50364, 2425, 11, 577, 366, 291, 30, 50564]
    //     $segment->temperature; // 0.0
    //     $segment->avgLogprob; // -0.45045216878255206
    //     $segment->compressionRatio; // 0.7037037037037037
    //     $segment->noSpeechProb; // 0.1076972484588623
    //     $segment->transient; // false
    // }
    return response()->json([$response->toArray()['text']],200);
    // return back()->with('message',$response->toArray()['text']);
});
