<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password');
    
    /*
     * 複数代入禁止フィールド指定
     *
     * @var array
     */
    protected $guarded = array('id');


	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getUuid()
	{
		return $this->uuid;
	}

  /**
     * UUIDセッター
     *
     * @param string $value
     */
    public function setUuiddAttribute($value)
    {
        $this->attributes['uuid'] = Hash::make($value);
    }
 
    /**
     * ユーザーのパスワードを取得
     *
     * @return string
     */
    public function getAuthPassword()
    {
    }
 
      /**
     * パスワードリマンダーを送信するメールアドレスの取得
     *
     * @return string
     */
    public function getReminderEmail()
    {
    }
}
