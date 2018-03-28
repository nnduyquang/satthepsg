<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Post;
use App\Product;

class FrontendRepository implements FrontendRepositoryInterface
{
    public function getAllSidebar()
    {
        $sidebar = [];
//        $categoryPosts = CategoryItem::where('type', 0)->get();
        $categoryProducts = CategoryItem::where('type', 1)->where('isActive',1)->get();
//        $sidebar['categoryPosts'] = $categoryPosts;
        $sidebar['categoryProducts'] = $categoryProducts;
        return $sidebar;
    }

    public function getProductByCategoryMain($path)
    {
        $data = [];
        $categoryMain = CategoryItem::where('path', $path)->first();
        $categorySub=CategoryItem::where('parent_id', $categoryMain->id)->get();
        $products =   $products=Product::whereIn('category_product_id',function($query)use ($categoryMain){
            $query->select('id')->from(with(new CategoryItem)->getTable())->where('parent_id',$categoryMain->id);
        })->orderBy('id','DESC')->get();
        foreach ($products as $key => $data) {
            $data->price = number_format($data->price, 0, ',', '.');
            $data->final_price = number_format($data->final_price, 0, ',', '.');
        }
        $data['category']=$categoryMain;
        $data['categorySub']=$categorySub;
        $data['products'] = $products;
        $data['type']=1;
        return $data;
    }

    public function getServiceByCategory($path)
    {
        $data = [];
        $categoryPost = CategoryItem::where('path', $path)->first();
        $posts = Post::where('category_post_id', $categoryPost->id)->get();
        $page = Post::find($categoryPost->page_id);
        $data['categoryPost'] = $categoryPost;
        $data['posts'] = $posts;
        $data['page'] = $page;
        return $data;
    }

    public function getAllListCategoryAndProduct()
    {
        $categoryProducts = CategoryItem::where('type', 1)->where('level',0)->where('isActive',1)->get();
        foreach ($categoryProducts as $key=>$data){
            $products=Product::whereIn('category_product_id',function($query)use ($data){
                $query->select('id')->from(with(new CategoryItem)->getTable())->where('parent_id',$data->id);
            })->orderBy('id','DESC')->take(8)->get();
            $data->listProduct=$products;
        }
        $data['categoryProducts'] = $categoryProducts;
        return $data;
    }

    public function getProductInfo($productPath)
    {
        $data = [];
        $product = Product::where('path', $productPath)->first();
        $product->price = number_format($product->price, 0, ',', '.');
        $product->final_price = number_format($product->final_price, 0, ',', '.');
        $orther = Product::where('category_product_id', $product->category_product_id)->where('id', '!=', $product->id)->get();
        foreach ($orther as $key => $data) {
            $data->price = number_format($data->price, 0, ',', '.');
            $data->final_price = number_format($data->final_price, 0, ',', '.');
        }
        $data['product'] = $product;
        $data['orther'] = $orther;
        return $data;
    }

    public function getServiceInfo($categoryPath, $servicePath)
    {
        $data = [];
        $service = Post::where('path', $servicePath)->first();
        $orther = Post::where('category_post_id', $service->category_post_id)->where('id', '!=', $service->id)->get();
        $data['service'] = $service;
        $data['orther'] = $orther;
        return $data;
    }

    public function getFooterInfo()
    {
        $listFooterCategory = CategoryItem::where('type', 1)->get();
        return $listFooterCategory;
    }

    public function getMainPage($path)
    {
        $page = Post::where('path', $path)->get();
        return $page;
    }

    public function getSearch($keySearch)
    {
        $data = [];
        $keySearch = preg_replace('/\s+/', ' ', $keySearch);
        $products = Product::where('name', 'like', '%' . $keySearch . '%')->orderBy('id', 'DESC')->get();
        $data['products'] = $products;
        $data['key-search']=$keySearch;
        return $data;
    }

    public function getProductByCategorySub($pathParent, $pathSub)
    {
        $data = [];
        $categorySub=CategoryItem::where('path',$pathSub)->first();
        $products=Product::where('category_product_id',$categorySub->id)->get();
        foreach ($products as $key => $data) {
            $data->price = number_format($data->price, 0, ',', '.');
            $data->final_price = number_format($data->final_price, 0, ',', '.');
        }
        $data['category']=$categorySub;
        $data['categorySub']=[];
        $data['products']=$products;
        $data['type']=2;
        return $data;
    }


}