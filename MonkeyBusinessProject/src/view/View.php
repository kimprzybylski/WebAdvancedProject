<?php
/**
 * Created by PhpStorm.
 * User: kimprzybylski
 * Date: 17/05/17
 * Time: 18:35
 */

namespace view;


interface View
{
    public function show(array $data);
}