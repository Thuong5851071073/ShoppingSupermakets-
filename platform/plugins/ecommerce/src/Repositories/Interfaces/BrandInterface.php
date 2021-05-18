<?php

namespace Platform\Ecommerce\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface BrandInterface extends RepositoryInterface
{
    /**
     * @param array $condition
     * @return mixed
     */
    public function getAll(array $condition = []);

    /**
     * @param int $brandId
     * @return mixed
     */
    public function getBrandById(int $brandId);
}
