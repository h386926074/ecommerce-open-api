<?php

/*
 * This file is part of ibrand/product.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Component\Product\Repositories;

/*
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-09-27
 * Time: 17:31
 */
use Prettus\Repository\Contracts\RepositoryInterface;

interface GoodsRepository extends RepositoryInterface
{
    /**
     * get one goods on sale.
     *
     * @param $id
     *
     * @return mixed
     */
    public function findOneById($id);
}
