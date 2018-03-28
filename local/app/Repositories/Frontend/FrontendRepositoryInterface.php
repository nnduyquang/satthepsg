<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getAllSidebar();

    public function getProductByCategoryMain($path);

    public function getProductByCategorySub($pathParent,$pathSub);

    public function getServiceByCategory($path);

    public function getAllListCategoryAndProduct();

    public function getProductInfo($productPath);

    public function getServiceInfo($categoryPath, $servicePath);

    public function getFooterInfo();

    public function getMainPage($path);

    public function getSearch($keySearch);
}