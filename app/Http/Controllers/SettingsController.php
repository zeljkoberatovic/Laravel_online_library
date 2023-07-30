<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Genres;
use App\Models\Publishers;
use App\Models\Letters;
use App\Models\Bindings;
use App\Models\Formats;
use App\Models\Languages;
use App\Http\Requests\RulesCategories; 
use App\Http\Requests\RulesGenres;
use App\Http\Requests\RulesPublishers;
use App\Http\Requests\RulesLetters;
use App\Http\Requests\RulesBindings;
use App\Http\Requests\RulesFormats;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SettingsController extends Controller
{
    protected $data;
    protected $item_deleted;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!request()->get('option')) { $option = 'categories'; }
        else $option = null;
        
        $this->data = ['option' => $option,
            'categories' => Categories::orderBy('name', 'asc')->get(),
            'genres' => Genres::orderBy('name', 'asc')->get(),
            'publishers' => Publishers::all(),
            'letters' => Letters::all(),
            'bindings' => Bindings::all(),
            'formats' => Formats::all(),
            'languages' => Languages::all(),
        
        ];

        return view('podesavanja', $this->data);
                

              //  dd( Categories::orderBy('name', 'asc')->get() );
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
    public function store( RulesCategories $request, RulesGenres $req2, RulesPublishers $req3,
                           RulesLetters $req4, RulesBindings $req5, RulesFormats $req6 )
    {  
        if($request->settings_option == 'categories') {     
            $data = new Categories();  
            $validated = $request->validated();   
            $data = Categories::create($validated);
            $request->session()->flash('msg_success', 'Nova kategorija je uspješno kreirana!');  
            $this->data['option'] = $request->settings_option;
                   
        } else if($req2->settings_option == 'genres') {   
            $data = new Genres();
            $validated = $req2->validated();            
            $data = Genres::create($validated);
            $req2->session()->flash('msg_success', 'Novi žanr je uspješno kreiran!'); 
            $this->data['option'] = $req2->settings_option; 
       
        } else if($req3->settings_option == 'publishers') {  
            $data = new Publishers();
            $validated = $req3->validated();               
            $data = Publishers::create($validated);
            $req3->session()->flash('msg_success', 'Novi izdavač je uspješno unešen!');  
            $this->data['option'] = $req3->settings_option;
       
        } else if($req4->settings_option == 'letters') {   
            $data = new Letters();
            $validated = $req4->validated();                        
            $data = Letters::create($validated);
            $req4->session()->flash('msg_success', 'Novo pismo je uspješno kreirano!');
            $this->data['option'] = $req4->settings_option;
                                                                                 
       
        } else if($req5->settings_option == 'bindings') {   
            $data = new Bindings();
            $validated = $req5->validated();                        
            $data = Bindings::create($validated);
            $req5->session()->flash('msg_success', 'Novi povez je uspješno dodat!');
            $this->data['option'] = $req5->settings_option;
                                                                                 
       
        } else if($req6->settings_option == 'formats') {   
            $data = new Formats();
            $validated = $req6->validated();                        
            $data = Formats::create($validated);
            $req6->session()->flash('msg_success', 'Novi format je uspješno dodat!');
            $this->data['option'] = $req6->settings_option;
                                                                                 
       
        }  
        return redirect()->route('podesavanja.index', $this->data );
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {   // dd($request);
        $data['option'] = $request->settings_option;
        if($request->settings_option == 'categories') {     
            $data = ['data' => Categories::findOrFail($id)]; 
            return view('settings.categories.show', $data );
                   
        } else if($request->settings_option == 'genres') {   
            $data = ['data' => Genres::findOrFail($id)]; 
            return view('settings.genres.show', $data );
           
        } else if($request->settings_option == 'publishers') {  
            $data = ['data' => Publishers::findOrFail($id)];  
            return view('settings.publishers.show', $data );
       
        } else if($request->settings_option == 'letters') {   
            $data = ['data' => Letters::findOrFail($id)]; 
            return view('settings.letters.show', $data );
                                                                                 
        } else if($request->settings_option == 'bindings') {   
            $data = ['data' => Bindings::findOrFail($id)]; 
            return view('settings.bindings.show', $data );
                                                                                 
        } else if($request->settings_option == 'formats') {   
            $data = ['data' => Formats::findOrFail($id)]; 
            return view('settings.formats.show', $data );
                                                                                 
        }  
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        //dd( $request ); 
        // $data['option'] = $request->settings_option;
        $option = $request->query('option') ?? $request->settings_option; 
        if($option == 'categories') { 
            return view( 'settings.categories.edit', [ 'categorie' => Categories::findOrFail($id) ] );
        
        } else if($option == 'genres') { 
            return view( 'settings.genres.edit', [ 'genre' => Genres::findOrFail($id) ] );
        
        } else if($option == 'publishers') { 
            return view( 'settings.publishers.edit', [ 'publisher' => Publishers::findOrFail($id) ] );
        
        } else if($option == 'letters') { 
            return view( 'settings.letters.edit', [ 'letter' => Letters::findOrFail($id) ] );
        
        } else if($option == 'bindings') { 
            return view( 'settings.bindings.edit', [ 'binding' => Bindings::findOrFail($id) ] );
        
        } else if($option == 'formats') { 
            return view( 'settings.formats.edit', [ 'format' => Formats::findOrFail($id) ] );
        
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RulesCategories $request, RulesGenres $req2, RulesPublishers $req3,
                           RulesLetters $req4, RulesBindings $req5, RulesFormats $req6, string $id = null)
    {  //dd($request);

        if($request->settings_option == 'categories') {   
            $item = Categories::findOrFail($id);
            $validated = $request->validated();
            $item->fill($validated);
            $item->save();
            $request->session()->flash('msg_success', 'Kategorija je uspješno ažurirana!');  
            $this->data['option'] = $request->settings_option;
                   
        } else if($req2->settings_option == 'genres') {   
            $item = Genres::findOrFail($id);
            $validated = $req2->validated();
            $item->fill($validated);
            $item->save();
            $req2->session()->flash('msg_success', 'Žanr je uspješno ažuriran!'); 
            $this->data['option'] = $req2->settings_option; 
       
        } else if($req3->settings_option == 'publishers') {  
            $item = Publishers::findOrFail($id);
            $validated = $req3->validated();
            $item->fill($validated);
            $item->save();
            $req3->session()->flash('msg_success', 'Izdavač je uspješno ažuriran!');  
            $this->data['option'] = $req3->settings_option;
       
        } else if($req4->settings_option == 'letters') {   
            $item = Letters::findOrFail($id);
            $validated = $req4->validated();
            $item->fill($validated);
            $item->save();
            $req4->session()->flash('msg_success', 'Novo pismo je uspješno kreirano!');
            $this->data['option'] = $req4->settings_option;
                                                                                 
       
        } else if($req5->settings_option == 'bindings') {   
            $item = Bindings::findOrFail($id);
            $validated = $req5->validated();
            $item->fill($validated);
            $item->save();
            $req5->session()->flash('msg_success', 'Povez je uspješno ažuriran!');
            $this->data['option'] = $req5->settings_option;
                                                                                 
       
        } else if($req6->settings_option == 'formats') {   
            $item = Bindings::findOrFail($id);
            $validated = $req6->validated();
            $item->fill($validated);
            $item->save();
            $req5->session()->flash('msg_success', 'Format je uspješno ažuriran!');
            $this->data['option'] = $req6->settings_option;
                                                                                 
        }  
        return redirect()->route('podesavanja.index', $this->data );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {  
        $option = $request->query('option') ?? $request->settings_option;  
        if($option == 'categories') { 
            $this->item_deleted = Categories::findOrFail($id);

        } else if($option == 'genres') { 
            $this->item_deleted = Genres::findOrFail($id);

        } else if($option == 'publishers') { 
            $this->item_deleted = Publishers::findOrFail($id);
           

        } else if($option == 'letters') { 
            $this->item_deleted = Letters::findOrFail($id);

        } else if($option == 'bindings') { 
            $this->item_deleted = Bindings::findOrFail($id);

        } else if($option == 'formats') { 
            $this->item_deleted = Formats::findOrFail($id);

        }
        $this->data['option'] = $option;
        // Meko brisanje
        try {
            $this->item_deleted->delete();
            session()->flash('msg_success', "Stavka je uspješno obrisana!");
            return redirect()->route('podesavanja.index', $this->data );
       
        } catch(Exception $e) {
            session()->flash('msg_warning', "Stavka nije moguće obrisati!");
            return redirect()->route('podesavanja.index', $this->data );
        }
    }
}
