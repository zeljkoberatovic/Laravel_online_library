<?php

namespace App\Http\Controllers;

use App\Http\Requests\RulesBooksStore;
use App\Models\Authors;
use App\Models\Bindings;
use App\Models\Categories;
use App\Models\Formats;
use App\Models\Genres;
use App\Models\Languages;
use App\Models\Letters;
use App\Models\Publishers;
use App\Models\Books;
use Illuminate\Http\Request;
use Nette\Utils\Arrays;


class KnjigeController extends Controller
{
    private Mixed $authors; 
    private Mixed $bindings;
    private Mixed $categories;
    private Mixed $formats;
    private Mixed $genres;
    private Mixed $languages;
    private Mixed $letters;
    private Mixed $publishers;
    private Mixed $books;

    public function __construct () {
        $this->authors = Authors::orderBy('name_surname', 'asc')->get();
        $this->bindings = Bindings::all();
        $this->categories = Categories::all();
        $this->formats = Formats::all();
        $this->genres = Genres::all();
        $this->languages = Languages::all();
        $this->letters = Letters::all();
        $this->publishers = Publishers::all();
        $this->books = Books::query()
                ->with(['authors', 'genres', 'categories' 
                        ])
                ->orderBy('year', 'desc')->get()->all(); 

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
       // dd( $this->authors );
       return view('knjige.index', ['books' => $this->books, 'authors' => $this->authors ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('knjige.create',
            ['authors'=>$this->authors, 'bindings'=>$this->bindings, 'categories'=>$this->categories, 'formats'=>$this->formats, 
             'genres'=>$this->genres, 'languages'=>$this->languages, 'letters'=>$this->letters, 'publishers'=>$this->publishers, 
             'books'=>$this->books
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RulesBooksStore $request)
    {
        // Validacija poslatih podataka
        $validated = $request->validated();  //dd($validated);

        // --- TRENUTNO NIJE POTREBNO
        // Ako je potrebno konvertovati u string(json format) parametare koji predstavljaju niz, 
        // koristi se funkcija json_encode(), nakon konverzije parametri su spremni za unos u bazu
        // $validated['authors']    = json_encode( $request->validated()['authors'] );
        // $validated['categories'] = json_encode( $request->validated()['categories'] );
        // $validated['genres']     = json_encode( $request->validated()['genres'] );

        //dd($validated);

        $book = Books::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'year' => $validated['year'],
            'page_count' => $validated['page_count'],
            'isbn' => $validated['isbn'],
            'letter_id' => $validated['letter_id'],
            'binding_id' => $validated['binding_id'],
            'format_id' => $validated['format_id'],
            'language_id' => $validated['language_id'],
            'publisher_id' => $validated['publisher_id'],
        ]);

        $book->authors()->attach($validated['authors']);
        $book->genres()->attach($validated['genres']);
        $book->categories()->attach($validated['categories']);
        $request->session()->flash('msg_success', 'Knjiga je uspješno unešena!'); 
        return redirect()->route('knjige.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return view( 'knjige.show', ['book' => Books::findOrFail($id)] ); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view( 'knjige.edit', 
            ['authors'=>$this->authors, 'bindings'=>$this->bindings, 'categories'=>$this->categories, 'formats'=>$this->formats, 
             'genres'=>$this->genres, 'languages'=>$this->languages, 'letters'=>$this->letters, 'publishers'=>$this->publishers, 
             'book' => Books::findOrFail($id)
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RulesBooksStore $request, string $id)
    {
        $validated = $request->validated();
        $book = Books::find($id);

        $book->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'year' => $validated['year'],
            'page_count' => $validated['page_count'],
            'isbn' => $validated['isbn'],
            'letter_id' => $validated['letter_id'],
            'binding_id' => $validated['binding_id'],
            'format_id' => $validated['format_id'],
            'language_id' => $validated['language_id'],
            'publisher_id' => $validated['publisher_id'],
        ]);

        $book->genres()->detach();
        $book->categories()->detach();
        $book->authors()->detach();

        $book->genres()->attach($validated['genres']);
        $book->categories()->attach($validated['categories']);
        $book->authors()->attach($validated['authors']);
        $book->save();

        $request->session()->flash('msg_success', 'Podaci o knjizi su uspješno ažurirani!'); 
        return redirect()->route('knjige.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item_deleted = Books::findOrFail($id);
        $item_deleted->delete();
        session()->flash('msg_success', "Stavka je uspješno obrisana!");
        return redirect()->route('knjige.index' );
    }
}
