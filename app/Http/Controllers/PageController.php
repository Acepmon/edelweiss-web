<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class PageController extends Controller
{
    protected $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function index(Request $request, $url)
    {
        $page = $this->pageRepository->getBySlug($url);

        if ($page == null) {
            abort(404);
        }

        SEOTools::setTitle($page->meta('title'));
        SEOTools::setDescription($page->meta('description'));
        SEOTools::opengraph()->setUrl($page->meta('url'));

        if ($page->type_cd == 'static') {
            return view('pages.static', [
                'page' => $page
            ]);
        } else if ($page->type_cd == 'collection') {
            return redirect()->action([CollectionController::class, 'index'], [
                'page' => $page,
                'collection' => $page->collection
            ]);
        }
    }
}
