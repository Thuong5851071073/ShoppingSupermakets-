<?php

namespace Platform\Ecommerce\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Support\Collection;

interface ProductCategoryInterface extends RepositoryInterface
{

    /**
     * get categories filter by $param.
     *
     * @param array $param
     * $param['active'] => [true,false]
     * $param['order_by'] => [ASC, DESC]
     * $param['is_child'] => [true,false, null]
     * $param['is_feature'] => [true,false, null]
     * $param['num'] => [int,null]
     * @return Collection categories model
     */
    public function getCategories(array $param);

    /**
     * @return mixed
     */
    public function getDataSiteMap();

    /**
     * @param $limit
     */
    public function getFeaturedCategories($limit);

    /**
     * @param bool $active
     * @return mixed
     */
    public function getAllCategories($active = true);

    /**
     * @param $id
     * @return mixed
     */
    public function getCategoryProductById($id);

    /**
     * @param $id
     * @return mixed
     */
    public function getCategoryById($id);
}
