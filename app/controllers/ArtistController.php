<?php

class ArtistController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $artists = Artist::all();
        foreach ($artists as $artist) {
            var_dump($artist->getName());
        }
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
        //ユーザデータの取得
        $uuid = Input::get('uuid');
        $user = User::where('uuid', '=', $uuid)->first();
        if (!$user) {
            return;
        }

        //artistデータの検証
        $name = Input::get('name');
        $artist = Artist::where('name', '=', $name)->get();
        if (!count($artist)) {
            //artistの登録
            $artist = new Artist(array('name' => $name));
        }

        //関連データの登録
        $user->artists()->save($artist);
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
		//
	}

}
