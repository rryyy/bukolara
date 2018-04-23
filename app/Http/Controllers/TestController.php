<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Translate\TranslateClient;
use Google\Cloud\Language\LanguageClient;
use Storage;
class TestController extends Controller
{
    //
    public function index() 
    {
    	$trans = new TranslateCLient([
            'key' => 'AIzaSyAdktTiwLIftzJRHRRGcF9Zm859nM1dj40'
        ]);

        $res = $trans->translate('Panget', [
            'target' => 'en'
        ]);
        // dd($res['text']);
        $projectId = 'buko-199807';
		// # Instantiates a client
		$language = new LanguageClient([
			'projectId' => $projectId,
		    'keyFilePath' => storage_path('app/BuKo-6e7f5c5e0c75.json')
		]);
		// $text = 'Fuck you!';
		# Detects the sentiment of the text
		$annotation = $language->analyzeSentiment($res['text']);
		$sentiment = $annotation->sentiment();
		$tout = 'Text: ' . $res['text'] . 'Sentiment: ' . $sentiment['score'] . ', ' . $sentiment['magnitude'];
        dd($tout);
    }
}
