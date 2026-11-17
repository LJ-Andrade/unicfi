<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;
use App\Category;
use App\Tag;
use App\Contact;
use App\CatalogimgArticle;
use App\CatalogimgCategory;
use App\CatalogimgTag;
use Mail;
use App\Mail\WebContactMail;

class WebController extends Controller
{

	public function __construct()
	{
		Carbon::setLocale('es');
	}

	public function home()
    {
        return view('web/web');
	}

	/*
    |--------------------------------------------------------------------------
    | Gallery
    |--------------------------------------------------------------------------
	*/

	public function gallery(Request $request)
	{
		$articles = CatalogimgArticle::search($request->title)->orderBy('id', 'DESC')->where('status', '1')->paginate(12);
		
		$categories = CatalogimgCategory::all();
		$tags = CatalogimgTag::all();
		if($request->title != null){
			$searchInfo = 'Término de búsqueda: '. $request->title;
		} else {
			$searchInfo = null;
		}

		return view('web.galeria.galeria')
			->with('articles', $articles)
			->with('categories', $categories)
			->with('tags', $tags)
			->with('searchInfo', $searchInfo);
	}

	
	public function showCatalogimgWithSlug($slug)
	{
        $article = CatalogimgArticle::where('slug', '=', $slug)->firstOrFail();
		$categories = CatalogimgCategory::all();
		$tags = CatalogimgTag::all();

		return view('web.galeria.item')
			->with('article', $article)
			->with('categories', $categories)
			->with('tags', $tags);
    }

	public function searchCatalogimgCategory($name)
	{
		$category = CatalogimgCategory::SearchCategory($name)->first();
		$articles = $category->articles()->paginate(12);

		$searchInfo = 'Imágenes con la categoría: '. $name;
		
		$categories = CatalogimgCategory::all();
		$tags = CatalogimgTag::all();
		
		return view('web.galeria.galeria')
			->with('articles', $articles)
			->with('categories', $categories)
			->with('tags', $tags)
			->with('searchInfo', $searchInfo);
	}

	public function searchCatalogimgTag($name)
    {
        $tag = CatalogimgTag::SearchTag($name)->first();
        $articles = $tag->articles()->paginate(12);

		$searchInfo = 'Imágenes con la etiqueta: '.$name;
		
		$categories = CatalogimgCategory::all();
		$tags = CatalogimgTag::all();

		return view('web.galeria.galeria')
			->with('articles', $articles)
			->with('categories', $categories)
			->with('tags', $tags)
			->with('searchInfo', $searchInfo);
    }

	
    public function viewCatalogimgArticle($id)
    {
        $article = CatalogimgArticle::find($id);
        $categories = CatalogimgCategory::all();
		$tags = CatalogimgTag::all();

		return view('web.galeria.galeria')
			->with('articles', $articles)
			->with('categories', $categories)
			->with('tags', $tags);
	}
	

	/*
    |--------------------------------------------------------------------------
    | BLOG
    |--------------------------------------------------------------------------
	*/

	public function portfolio(Request $request)
	{
        $articles = Article::search($request->title)->orderBy('id', 'DESC')->where('status', '1')->paginate(12);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
		}); 

		if($request->title != null){
			$searchInfo = 'Término de búsqueda: '. $request->title;
		} else {
			$searchInfo = null;
		}

		$categories = Category::all();
		$tags = Tag::all();

    	return view('web.blog.blog')
			->with('articles', $articles)
			->with('categories', $categories)
			->with('tags', $tags)
			->with('searchInfo', $searchInfo);
    }

	public function searchCategory($name)
	{
		$category = Category::SearchCategory($name)->first();
		$articles=$category->article()->paginate(12);
		$articles->each(function($articles){
				$articles->category;
				$articles->images;
		});
		
		$searchInfo = 'Noticias con la categoría: '. $name;

		$categories = Category::all();
		$tags = Tag::all();

		return view('web.blog.blog')
			->with('articles', $articles)
			->with('categories', $categories)
			->with('tags', $tags)
			->with('searchInfo', $searchInfo);
	}

    public function searchTag($name)
    {
        $tag = Tag::SearchTag($name)->first();
        $articles = $tag->article()->paginate(12);
        $articles->each(function($articles){
                $articles->category;
                $articles->images;
		});
		
		$searchInfo = 'Noticias con la etiqueta: '. $name;
		
		$categories = Category::all();
		$tags = Tag::all();

		return view('web.blog.blog')
			->with('articles', $articles)
			->with('categories', $categories)
			->with('tags', $tags)
			->with('searchInfo', $searchInfo);
    }

    public function viewArticle($id)
    {
        $article = Article::find($id);
        $article->each(function($article){
                $article->category;
                $article->images;
                $article->tags;
                $article->colors;
		});
		
        $categories = Category::all();
		$tags = Tag::all();

		return view('web.blog.blog')
			->with('articles', $articles)
			->with('categories', $categories)
			->with('tags', $tags);
    }

    /*
    |--------------------------------------------------------------------------
    | SITEMAP (para buscadores)
    |--------------------------------------------------------------------------
    */

    public function sitemap()
    {
        $urls = [
            ['loc' => url('/'), 'lastmod' => null, 'priority' => '1.0'],
            ['loc' => url('noticias'), 'lastmod' => null, 'priority' => '0.8'],
            ['loc' => url('galeria'), 'lastmod' => null, 'priority' => '0.6'],
            ['loc' => url('director'), 'lastmod' => null, 'priority' => '0.6'],
        ];

        foreach (Article::where('status', '1')->orderBy('id', 'DESC')->get(['slug', 'updated_at', 'created_at']) as $article) {
            $urls[] = [
                'loc' => route('web.portfolio.article', $article->slug),
                'lastmod' => optional($article->updated_at ?: $article->created_at)->toAtomString(),
                'priority' => '0.7',
            ];
        }

        foreach (CatalogimgArticle::where('status', '1')->orderBy('id', 'DESC')->get(['slug', 'updated_at', 'created_at']) as $item) {
            $urls[] = [
                'loc' => route('web.catalogoimg.item', $item->slug),
                'lastmod' => optional($item->updated_at ?: $item->created_at)->toAtomString(),
                'priority' => '0.4',
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($urls as $u) {
            $xml .= '  <url><loc>' . e($u['loc']) . '</loc>'
                . ($u['lastmod'] ? '<lastmod>' . $u['lastmod'] . '</lastmod>' : '')
                . '<priority>' . $u['priority'] . '</priority></url>' . "\n";
        }
        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    /**
     * llms-full.txt: versión extendida de llms.txt para agentes de IA,
     * con el resumen del sitio y el texto completo de las noticias publicadas.
     */
    public function llmsFull()
    {
        $clean = function ($html) {
            $text = html_entity_decode(strip_tags(str_replace(['<br>', '<br/>', '<br />', '</p>'], "\n", $html)), ENT_QUOTES, 'UTF-8');
            $text = preg_replace("/[ \t]+/u", ' ', $text);
            return trim(preg_replace("/\n\s*\n+/u", "\n\n", $text));
        };

        $out = trim(file_get_contents(public_path('llms.txt'))) . "\n\n";
        $out .= "## Noticias y artículos\n\n";
        $out .= "Texto completo de las noticias publicadas en " . url('noticias') . ".\n\n";

        $articles = Article::with('category', 'tags')->where('status', '1')->orderBy('id', 'DESC')->get();
        foreach ($articles as $article) {
            $out .= '### ' . trim(strip_tags($article->title)) . "\n\n";
            $out .= '- URL: ' . route('web.portfolio.article', $article->slug) . "\n";
            $out .= '- Fecha: ' . optional($article->created_at)->format('Y-m-d') . "\n";
            if ($article->category) {
                $out .= '- Categoría: ' . $article->category->name . "\n";
            }
            if ($article->tags->count()) {
                $out .= '- Etiquetas: ' . $article->tags->pluck('name')->implode(', ') . "\n";
            }
            $out .= "\n" . \Illuminate\Support\Str::limit($clean($article->content), 4000) . "\n\n";
        }

        return response($out, 200)
            ->header('Content-Type', 'text/plain; charset=UTF-8')
            ->header('X-Robots-Tag', 'noindex');
    }

    public function showWithSlug($slug) {

        $article = Article::where('slug', '=', $slug)->where('status', '1')->firstOrFail();
		$categories = Category::all();
		$tags = Tag::all();

		return view('web.blog.article')
			->with('article', $article)
			->with('categories', $categories)
			->with('tags', $tags);
    }


	/*
    |--------------------------------------------------------------------------
    | CONTACT
    |--------------------------------------------------------------------------
    */

    public function contact()
    {  
        return view('contacto');
    }

	public function mainContactMailSender(Request $request)
    {

		try{
			$contact = new Contact();
			$contact->fill($request->all());
			$contact->save();
			$subject = 'Nuevo contacto desde la web';
            $data = $request->all();
			
            $view = 'vadmin.components.mailWebContact';

            Mail::to(env('APP_EMAIL_1'))->send(new WebContactMail($subject, $data, $view));
			
			return response()->json(['response' => 1,
									 'error'    => '0']); 
		} catch(Exception $e) {
			return response()->json(['response' => 0,
									 'error'    => $e]); 
		}
    }		
    	
    
}
