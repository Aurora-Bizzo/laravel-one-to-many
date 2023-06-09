<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Str;
    use App\Models\Type;

    class Project extends Model
    {
        protected $fillable=['title', 'content', 'slug', 'date_project', 'type_id'];
        use HasFactory;

        public static function generateSlug($title)
        {
            return Str::slug($title, '-');
        }

        public function type()
        {
            return $this->belongsTo(Type::class);
        }
    }
?>