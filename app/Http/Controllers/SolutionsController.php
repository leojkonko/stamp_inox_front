<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\Products\Services\ProductService;
use Illuminate\Http\Request;
use Ellite\PageCompany\Services\PageCompanyService;

class SolutionsController extends Controller
{
    public function index(SiteService $site, PageCompanyService $page)
    {
        $site->setAlternates('solutions')
            ->setTitle('Serviços')
            ->setBreadTitle('Serviços')
            ->pushBreadCrumb('Serviços')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);

        return view('front.pages.solutions', [
            'page' => $page->getPage(),
        ]);
    }

}
