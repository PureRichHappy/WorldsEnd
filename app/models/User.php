<?php

class User extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
    
    /*
     * 複数代入禁止フィールド指定
     *
     * @var array
     */
    protected $guarded = array('id');

	public function getUuid()
	{
		return $this->uuid;
	}

    public function artists()
    {
        return $this->belongsToMany('Artist', 'user_artist');
    }
}
