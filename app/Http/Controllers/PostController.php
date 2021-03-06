<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Translate\TranslateClient;
use Google\Cloud\Language\LanguageClient;
use Storage;
use App\Post;
use App\User;
use App\Like;
use App\Entity;
use App\Category;
use App\Boost;
class PostController extends Controller
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
        $projectId = 'buko-199807';
		// # Instantiates a client
		$language = new LanguageClient([
			'projectId' => $projectId,
		    'keyFilePath' => storage_path('app/BuKo.json')
		]);
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
		//add post
		$register = new Post;
		$register->user_id = $request->userid;
		$register->location = $request->location;
		$register->body_plate_no = $request->body_plate_no;
		$register->driver_name = $request->driver_name;
		$register->puv = $request->puv;
		$register->content = $request->content;
		$register->feelings_title = $request->feeling_title;
		$register->feelings_uri = $request->feeling_uri;
		$register->image = $request->image;
		$register->translated = $res['text'];
		$register->sentiment_score = $sentiment_score;
		$register->sentiment = $sentiment;
		$register->magnitude = $magnitude;
        $register->company = $request->bus_company;
        $register->direct = $request->direct;
		$register->save();
        return response()->json(['status' => '200','last_insert_id' => $register->id]);
		// Call the analyzeEntities function
    	$response = $language->analyzeEntitySentiment($res['text']);
    	$info = $response->info();
    	$entities = $info['entities'];
	    foreach ($entities as $entity) {
	    	$register_entity = new Entity;
	    	$register_entity->post_id = $register->id;
	    	$register_entity->entity_name = $entity['name'];
	    	$register_entity->entity_type = $entity['type'];
	        $register_entity->entity_salience = $entity['salience'];
	        $register_entity->entity_senti_score = $entity['sentiment']['score'];
	        $register_entity->entity_senti_magnitude = $entity['sentiment']['magnitude'];
	        $register_entity->save();
	    }
	    # Call the classifyText function
	    $response = $language->classifyText($res['text']);
    	$categories = $response->categories();
    	foreach ($categories as $category) {
    		$register_category = new Category;
    		$register_category->post_id = $register->id;
    		$register_category->category_name = $category['name'];
    		$register_category->category_confidence = $category['confidence'];
			$register_category->save();
		}
		
    }  	
    public function AllPosts(Request $request)
    {
    	$id = $request->id;
    	$take = $request->limit;
    	$skip = $request->offset;
        $post = Post::with('user')->withCount('likes','comments','boosts')->withCount(['like' => function ($query) use ($id, $take, $skip) {
		    $query->where('user_id', '=', $id);
		}])->withCount(['comment' => function ($query) use ($id, $take, $skip) {
		    $query->where('user_id', '=', $id);
		}])->withCount(['boost' => function ($query) use ($id, $take, $skip) {
            $query->where('user_id', '=', $id);
        }])->latest()->skip($skip)->take($take)->get();
        return $post;
    }
    // public function AllPostsNolimit(Request $request)
    // {
    //     $id = '1';
    //     $post = Post::with('user')->withCount('likes','comments')->withCount(['like' => function ($query) use ($id) {
    //         $query->where('user_id', '=', $id);
    //     }])->withCount(['comment' => function ($query) use ($id) {
    //         $query->where('user_id', '=', $id);
    //     }])->latest()->get();
    //     return $post;
    // }
    public function UserPost(Request $request)
    {
        $id = $request->id;
        $take = $request->limit;
        $skip = $request->offset;
        $post = Post::with('user')->where('user_id', $id)->withCount('likes','comments')->withCount(['like','comment' => function ($query) use ($id) {
		    $query->where('user_id', '=', $id);
        }])->withCount(['comment' => function ($query) use ($id, $take, $skip) {
            $query->where('user_id', '=', $id);
        }])->withCount(['boost' => function ($query) use ($id, $take, $skip) {
            $query->where('user_id', '=', $id);
        }])->latest()->skip($skip)->take($take)->get();
        return $post;
    }
    public function Analytics(Request $request)
    {
    	$id = $request->id;
    	//getting sentiment score in correlation
        $jeepney = Post::with('user')->where('user_id', $id)->where('puv','jeepney')->avg('sentiment_score');
        $bus = Post::with('user')->where('user_id', $id)->where('puv','bus')->avg('sentiment_score');
        $taxi = Post::with('user')->where('user_id', $id)->where('puv','taxi')->avg('sentiment_score');
        $train = Post::with('user')->where('user_id', $id)->where('puv','train')->avg('sentiment_score');
        $tri = Post::with('user')->where('user_id', $id)->where('puv','tricycle')->avg('sentiment_score');
        $tnvs = Post::with('user')->where('user_id', $id)->where('puv','tnvs')->avg('sentiment_score');
        //getting percentage

        //posts count
        $postCount = Post::with('user')->where('user_id', $id)->count();
        //jeep percentage
        $jeepCount = Post::with('user')->where('user_id', $id)->where('puv','jeepney')->count();
        $jeepPercentage = number_format($jeepCount/$postCount * 100, 2, '.', ',');
        //bus percentage
        $busCount = Post::with('user')->where('user_id', $id)->where('puv','bus')->count();
        $busPercentage = number_format($busCount/$postCount * 100, 2, '.', ',');     
        //taxi percentage
        $taxiCount = Post::with('user')->where('user_id', $id)->where('puv','taxi')->count();
        $taxiPercentage = number_format($taxiCount/$postCount * 100, 2, '.', ',');  
        //train percentage
        $trainCount = Post::with('user')->where('user_id', $id)->where('puv','train')->count();
        $trainPercentage = number_format($trainCount/$postCount * 100, 2, '.', ',');  
        //tric percentage
        $tricCount = Post::with('user')->where('user_id', $id)->where('puv','tricycle')->count();
        $tricPercentage = number_format($tricCount/$postCount * 100, 2, '.', ','); 
        //tnvs percentage
        $tnvsCount = Post::with('user')->where('user_id', $id)->where('puv','tnvs')->count();
        $tnvsPercentage = number_format($tnvsCount/$postCount * 100, 2, '.', ',');         
        return response()->json([
        	$graph = array(
        	'jeepMeter' => number_format($jeepney, 2, '.', ','),
            'busMeter' => number_format($bus, 2, '.', ','),
            'taxiMeter' => number_format($taxi, 2, '.', ','),
            'trainMeter' => number_format($train, 2, '.', ','),
            'triMeter' => number_format($tri, 2, '.', ','),
            'tnvsMeter' => number_format($tnvs, 2, '.', ','),
        ),
            $percentage = array(
        	'jeepPercentage' => number_format($jeepPercentage, 2, '.', ','),
            'busPercentage' => number_format($busPercentage, 2, '.', ','),
            'taxiPercentage' => number_format($taxiPercentage, 2, '.', ','),
            'trainPercentage' => number_format($trainPercentage, 2, '.', ','),
            'tricPercentage' => number_format($tricPercentage, 2, '.', ','),
            'tnvsPercentage' => number_format($tnvsPercentage, 2, '.', ',')
            )
        ]);
    }
    public function test()
    {
    	$post = Post::with('user')->where('user_id', '$id')->get();
    	return $post;
    }
    public function SimilarPost(Request $request)
    {
        $id = $request->id;
        $puv = $request->puv;
        $take = $request->limit;
        $skip = $request->offset;
        $similarpost = Post::with('user')->withCount('likes','comments')->withCount(['like' => function ($query) use ($id, $puv) {
            $query->where('user_id', '=', $id);
        }])->withCount(['comment' => function ($query) use ($id, $puv) {
            $query->where('user_id', '=', $id);
        }])->withCount(['boost' => function ($query) use ($id, $take, $skip) {
            $query->where('user_id', '=', $id);
        }])->where('body_plate_no', 'LIKE', '%' .$puv. '%')->latest()->skip($skip)->take($take)->get();
        return $similarpost;
    }
    //web routes
    public function testboosted()
    {
        // $post = Boost::with('user','post')->withCount('user')->latest()->get();
        $post = Post::with('user','boost')->withCount('boosts')->orderBy('boosts_count', 'desc')->get();
        return $post;
    }
    public function testpositive()
    {
        $post = Post::with('user')->withCount('likes','comments','boosts')->where('sentiment', 'positive')->latest()->get();
        return $post;
    }
    public function testnegative()
    {
         $post = Post::with('user')->withCount('likes','comments','boosts')->where('sentiment', 'negative')->latest()->get();
        return $post;       
    }
    public function testneutral()
    {
         $post = Post::with('user')->withCount('likes','comments','boosts')->where('sentiment', 'neutral')->latest()->get();
        return $post;       
    }
    public function testallpost()
    {
        $post = Post::with('user')->withCount('likes','comments','boosts')->latest()->get();
        return $post;       
    }
   public function Count()
    {
        $usercount = User::all()->count();
        $poscount = Post::where('sentiment','positive')->get()->count();
        $negcount = Post::where('sentiment','negative')->get()->count();
        $neucount = Post::where('sentiment','neutral')->get()->count();
        return response()->json([
            $counts = array(
                'usercount' => $usercount, 
                'poscount' => $poscount, 
                'negcount' => $negcount, 
                'neucount' => $neucount
            )
        ]);
        return $counts;
    }
}
