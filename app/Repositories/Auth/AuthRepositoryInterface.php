<?php
namespace App\Repositories\Auth;

use App\Models\User;
use App\Repositories\RepositoryInterface;
/**
 * Interface UserRepositoryInterface
 *
 * @package Framgia\Gmt\Repositories\User
 */
interface AuthRepositoryInterface extends RepositoryInterface
{
    public function login($email, $password);
}
