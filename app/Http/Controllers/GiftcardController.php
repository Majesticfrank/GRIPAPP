<?php
namespace App\Http\Controllers;

use App\Models\Giftcard;
use Illuminate\Http\Request;
use App\Http\Requests\GiftcardRequest;

class GiftcardController extends Controller
{
    protected $variable;

    public function __construct(Giftcard $giftcard)
    {
        $this->variable = $giftcard;
    }

    public function createGiftcardView()
    {
        return view('Giftcard');
    }

    public function storeGiftcard(GiftcardRequest $request)
    {
        $request->validated();
   
        $giftcardDetails = [
            'name' => $request->name,
            'image' => $request->file('image')->store('photos', 'public'),
        ];

        dd($giftcardDetails);

        $giftcard = $this->variable->create($giftcardDetails);
        return redirect()->route('Adminboard')->with('success', 'Giftcard added successfully');
    }
}


