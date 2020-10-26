<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiscountCode;

class DiscountCodeController extends Controller
{
    public function discountCodeAddForm()
    {
        return view('discount_codes.add');
    }

    public function discountCodeAdd(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'unique:discount_codes,name'
            ],
            [
                'name.unique' => 'Mã giảm giá này đã tồn tại'
            ]
        );
        $inputs = $request->all();
        DiscountCode::create(
            $request->all()
        );

        return back()->with('success', 'Thêm thành công');
    }
}
