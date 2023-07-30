<?php

namespace App\Http\Controllers;

use App\Models\RecycleBin;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecycleBinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $db_tables = DB::select('SHOW TABLES'); // returns an array of stdObjects

        //dd(compact('db_tables'));

        
        foreach($db_tables as $table)
        {
          //  dump($table);
        }



        $items = Books::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(10);

        return view('recycle-bin/index', compact('items', 'db_tables'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
       
    }

    /**
     * Restore deleted items.
     */
    public function restore($id) 
    {
        $item = Books::where('id', $id)->withTrashed()->first();
        $item->restore();

        return redirect()->route('recycle-bin.index')
            ->with('msg_success', 'Obrisana stavka je uspješno vraćena');
            
    }


     /**
     * Permanently delete items.
     */
    public function delete($id)
    {
        $item = Books::where('id', $id)->withTrashed()->first();
        $item->forceDelete();

        return redirect()->route('recycle-bin/index')
            ->with('msg_success', 'Stavka je obrisana iz korpe za otpatke');

    }

   

}
