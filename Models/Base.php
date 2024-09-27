<?php

namespace Models;

use App\Libraries\Model;

class Base extends Model
{
    public static function loadUser()
    {
        return (new self)->db->query("SELECT *, NULL as password from users where id=:id")->bind(":id", $_SESSION[APP]->user->id)->single();
    }
}
