<?php
/**
 * Created by PhpStorm.
 * User: patryk.wozinski
 * Date: 20/12/2018
 * Time: 12:42
 */
declare(strict_types=1);

namespace App;


interface UserRepositoryInterface
{
	public function deleteById(int $userId): void;
}
