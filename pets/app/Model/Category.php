<?php
/**
 * 宠物表
 * User: collegedaily
 * Date: 2018/7/26
 * Time: 下午1:34
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name', 'pid', 'created_at'];

    protected $hidden = ['updated_at'];
    public $timestamps = true;
//    protected $dateFormat = 'U';

    public function getCategory()
    {
        return $this->where('pid', null)->get();
    }

    public function getParentCategory()
    {
        return $this->where('pid', null)->get();
    }

    public function getSubCategoryById($id)
    {
        return $this->where('pid', $id)->get();
    }
}