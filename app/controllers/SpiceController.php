<?php

class SpiceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		\Eloquent::unguard();

		$data = Input::all();
		$data['user_id'] = \Auth::user()->id;
		unset($data['_token']);

		Spice::create($data);
		return Redirect::to('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$spice = Spice::find($id);
		$spice->delete();
		
		return Redirect::to('/');
	}

	public function userInventory() 
	{
		$user_id = \Auth::user()->id;
		$spices = User::find($user_id)->spices()->get();
		return View::make('userSpiceList')->withSpices($spices);
	}

	public function newSpice()
	{
		return View::make('forms.addSpice');
	}

	public function newSpiceWithData($upc)
	{
		$product = $this->getProductData($upc);
		if (!empty($product)) {
			return View::make('forms.addSpice')->withProduct($product);
		} else {
			return View::make('forms.addSpice')->withError('Cannot find that product. :(');
		}
		
	}

	public function getProductData($upc)
	{
		$client = new \Guzzle\Service\Client('http://api.v3.factual.com/t/products-cpg?q="' . $upc . '"}');
		$auth = new \Guzzle\Plugin\Oauth\OauthPlugin([
			'consumer_key' => 'HixxECiJzhDAITGTerWl0yiHDgJAY3gJNiViLjEH',
			'consumer_secret' => 'YBMZ3BPgVWqMU5gB6FUkwwwVoT7lYYcYZinWPJms'
		]);
		$client->addSubscriber($auth);
		$response = $client->get()->send()->json();

		$product = [];
		if(!empty($response['data'])) {
			$product['name'] = $response['data'][0]['product_name'];
			$product['manufacturer'] = $response['data'][0]['manufacturer'];
		}

		return $product;
	}

}