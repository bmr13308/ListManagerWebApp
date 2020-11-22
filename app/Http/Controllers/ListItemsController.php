<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Support\Facades\Auth;

class ListItemsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    if (Auth::check()) {

      $list1 = array();
      $list2 = array();
      $userId = Auth::id();

      $list1 = ListItem::where('user_id', $userId)->where('list_id', 1)->orderBy('index_number', 'asc')->get();
      $list2 = ListItem::where('user_id', $userId)->where('list_id', 2)->orderBy('index_number', 'asc')->get();


      $data = array(
        'list1' => $list1,
        'list2' => $list2
      );

      return view('pages.list')->with($data);
    }
  }


  public function saveAll(Request $request)
  {
    $jsonArray =  $request->input('items');
    $listItems = json_decode($jsonArray);

    $userId = Auth::id();

    foreach ($listItems as $listItem) {

      $itemToUpdate = ListItem::find($listItem->id);

      if ($itemToUpdate->user_id != $userId) {
        continue;
      }
      $itemToUpdate->index_number = $listItem->indexNumber;
      $itemToUpdate->list_id = $listItem->listId;
      $itemToUpdate->save();
    }

    return $request->input('items');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
