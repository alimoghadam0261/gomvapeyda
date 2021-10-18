<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class formads extends Model

{

    use HasFactory;

    protected $fillable = [

        'name',

        'category',

        'price',

        'phone',

        'address',

        'mojdegani',

        'img',

        'status',

        'content',

        'viwecount',

        'user_id',

        'viewcount'

    ];



    public function user()

    {

        return $this->belongsTo(User::class);

    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }



    public function categories()

    {

        return $this->belongsToMany(Category::class);

}



    public static function search($txt)

    {

        $searchform=formads::orderBy('id','DESC');

        if (sizeof($txt)>0) {

            $searchform=  $searchform->where($txt['list_search'],'LIKE','%'.$txt['txt_search'].'%');

        }

        $searchform=$searchform->paginate(3);

        return $searchform;

}

}

