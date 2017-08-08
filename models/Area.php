<?php namespace JanVince\SmallRecords\Models;

use Str;
use Model;
use URL;
use October\Rain\Router\Helper as RouterHelper;
use Cms\Classes\Page as CmsPage;
use Cms\Classes\Theme;

class Area extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'janvince_smallrecords_areas';

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

	public $timestamps = true;

    protected $guarded = [];

    protected $jsonable = ['allowed_fields'];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:janvince_smallrecords_categories',
    ];

    public $translatable = [
        'name',
        ['slug', 'index' => true]
    ];


	/**
	 * @var array Relations
	 */
	public $hasMany = [
		'records' => [
			'JanVince\SmallRecords\Models\Record'
		]
	];


    public function afterDelete()
    {
        $this->records()->detach();
    }

    /**
     *  SCOPES
     */
    public function scopeIsActive($query) {
        return $query->where('active', '=', true);
    }

}
