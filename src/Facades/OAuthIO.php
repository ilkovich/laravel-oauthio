<?php namespace Ilkovich\OAuthIO\Facades;
use Illuminate\Support\Facades\Facade;

class OAuthIO extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'ilkovich.oauthio';
	}
}
