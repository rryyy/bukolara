<?php

namespace App\Http\Controllers;
use Google\Cloud\Translate\TranslateClient;
use Google\Cloud\Language\LanguageClient;
use Storage;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    //
    public function index(Request $request) 
    {
    	$trans = new TranslateCLient([
            'key' => 'AIzaSyAdktTiwLIftzJRHRRGcF9Zm859nM1dj40'
        ]);

        $res = $trans->translate($request->content, [
            'target' => 'en'
        ]);
        // dd($res['text']);
        $projectId = 'buko-199807';
		// # Instantiates a client
		$language = new LanguageClient([
			'projectId' => $projectId,
		    'keyFilePath' => storage_path('app/BuKo.json')
		]);
		// $text = 'Fuck you!';
		# Detects the sentiment of the text
		$annotation = $language->analyzeSentiment($res['text']);
		$sentiment = $annotation->sentiment();
		// $tout = 'Text: ' . $res['text'] . 'Sentiment: ' . $sentiment['score'] . ', ' . $sentiment['magnitude'];
		$translated_content = $res['text'];
		$sentiment_score = $sentiment['score'];
		$magnitude = $sentiment['magnitude'];
		//condition for sentiment
		if(($sentiment_score >= 0.26) && ($sentiment_score <= 1.0)){
			$sentiment = "positive";
		}else if (($sentiment_score >= -1.0) && ($sentiment_score <= -0.26)){
			$sentiment = "negative";
		}else{
			$sentiment = "neutral";
		}
		$register = new Comment;
		$register->post_id = $request->post_id;
		$register->user_id = $request->user_id;
		$register->content = $request->content;
		$register->translated = $translated_content;
		$register->sentiment_score = $sentiment_score;
		$register->sentiment = $sentiment;
		$register->magnitude = $magnitude;
		$register->save();
		return $register;
    }
    public function GetPostComments(Request $request)
    {
    	$comments = Comment::with('user')->where('post_id',$request->id)->get();
    	return $comments;
    }
    public function view(Request $request)
    {
    	$comments = Comment::with('user')->where('post_id',$request->id)->get();
    	return $comments;
    }
}
