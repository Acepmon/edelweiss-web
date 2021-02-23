<?php

namespace App\Http\View\Composers;

use App\Repositories\MenuRepository;
use Illuminate\View\View;

class NavigationComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\MenuRepository
     */
    protected $menuRepository;

    /**
     * Create a new navigation composer.
     *
     * @param  \App\Repositories\MenuRepository  $menuRepository
     * @return void
     */
    public function __construct(MenuRepository $menuRepository)
    {
        // Dependencies are automatically resolved by the service container...
        $this->menuRepository = $menuRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menus', $this->menuRepository->getRootMenus());
    }
}