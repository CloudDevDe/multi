<?php

use Zizaco\Entrust\HasRole;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use AuraIsHere\LaravelMultiTenant\Traits\TenantScopedModelTrait;

class User extends Eloquent implements ConfideUserInterface
{
    use ConfideUser, HasRole, TenantScopedModelTrait;

    public function company()
	{
  		return $this->belongsTo('Company');
  	}

}