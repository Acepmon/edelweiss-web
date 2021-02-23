<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use Illuminate\Http\Request;

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

        return view('pages.' . $page->type_cd, [
            'page' => $page
        ]);
    }
}
