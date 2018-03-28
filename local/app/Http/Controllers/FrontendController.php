<?php

namespace App\Http\Controllers;

use App\Repositories\Frontend\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }

    public function getProductByCategoryMain($path)
    {
        $data = $this->frontendRepository->getProductByCategoryMain($path);
        return view('frontend.category.index', compact('data'));
    }

    public function getProductByCategorySub($pathParent,$pathSub)
    {
        $data = $this->frontendRepository->getProductByCategorySub($pathParent,$pathSub);
        return view('frontend.category.index', compact('data'));
    }



    public function getServiceByCategory($path)
    {
        $data = $this->frontendRepository->getServiceByCategory($path);
        return view('frontend.' . $data['categoryPost']->template, compact('data'));
    }

    public function getAllListCategoryAndProduct(){
        $data = $this->frontendRepository->getAllListCategoryAndProduct();
        return view('frontend.home.index',compact('data'));
    }

    public function getProductInfo($productPath){
        $data = $this->frontendRepository->getProductInfo($productPath);
        return view('frontend.product.index',compact('data'));
    }

    public function getServiceInfo($categoryPath, $servicePath){
        $data = $this->frontendRepository->getServiceInfo($categoryPath, $servicePath);
        return view('frontend.'.$data['service']->template,compact('data'));
    }

    public function getMainPage($path){
        $data=$this->frontendRepository->getMainPage($path);
        return view('frontend.'.$data[0]->template,compact('data'));
    }

    public function getSearch(Request $request){
        $data=$this->frontendRepository->getSearch($request->input('key-search'));
        return view('frontend.search.index',compact('data'));
    }
}
