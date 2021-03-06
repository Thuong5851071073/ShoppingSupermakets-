<?php

namespace Platform\Ecommerce\Repositories\Caches;

use Platform\Ecommerce\Repositories\Interfaces\ProductCategoryInterface;
use Platform\Support\Repositories\Caches\CacheAbstractDecorator;

class ProductCategoryCacheDecorator extends CacheAbstractDecorator implements ProductCategoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function getCategories(array $param)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function getDataSiteMap()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function getFeaturedCategories($limit)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function getAllCategories($active = true)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryProductById($id)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryById($id)
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
