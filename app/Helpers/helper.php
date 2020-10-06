<?php

namespace app\Helpers;

use App\NguoiDung;

class Helper
{
    public static function getUser($id)
    {
        return NguoiDung::findOrFail($id);
    }
}