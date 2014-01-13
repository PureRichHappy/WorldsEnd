<?php

class Artist extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'artists';

    /*
     * 複数代入禁止フィールド指定
     *
     * @var array
     */
    protected $guarded = array('id');
    
	public function getName()
	{
    	return $this->name;
	}

    public function users()
    {
        return $this->belongsToMany('User', 'user_artist');
    }
}
