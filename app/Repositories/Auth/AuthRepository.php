<?php
namespace App\Repositories\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\BaseRepository;
use Illuminate\Database\DatabaseManager;
use App\Repositories\Auth\AuthRepositoryInterface;
/**
 * Class BaseRepository
 *
 * @package Framgia\Gmt\Repositories
 */
class AuthRepository extends BaseRepository implements AuthRepositoryInterface
{
    /**
     * @var User
     */
    protected $model;
    
    /**
     * @var DatabaseManager
     */
    private $db;
    
    /**
     * UserRepository constructor.
     *
     * @param User $model
     * @param DatabaseManager $db
     */
    public function __construct(User $model, DatabaseManager $db)
    {
        parent::__construct($model);
        $this->db = $db;
    }
    public function login($email, $password)
    {
        
    }

}