<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Entry;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $entries = Entry::query()->where('user_id', $user->id)->get();
        $totalAmount = $this->sumAmount($entries);

        return view('Entry.index',compact('entries','totalAmount'));
    }
    public function create()
    {
        $entries = Entry::all();
        $categories = Category::all();
        return view('Entry.create',compact('categories','entries'));


    }
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>['required','exists:categories,id'],
            'title'=>['required', 'max:50'],
            'type'=>['required', 'in:income,expense'],
            'amount'=>['required','integer','min:0','max:10000000'],
            'entry_date'=>['required','date_format:Y-m-d'],
            'description'=>[ 'max:300'],
        ]);

        $user = Auth::user();
        Entry::query()->create([
            'category_id'=>$request->category_id,
            'user_id'=>$user->id,
            'title'=>$request->title,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'entry_date'=>$request->entry_date,
            'description'=>$request->description,
        ]);

        return redirect(route('entries.index'));
    }

    public function edit($id)
    {

        $categories = Category::all();
        $user = auth()->user();
        $entries = Entry::query()->find($id);
        if ($user->id != $entries->user_id)
        {
            abort(403);
        }
        return view('Entry.edit',compact('entries','categories'));


    }
    public function update(Request $request, $id)
    {
        $entry = Entry::query()->find($id);
        $user = auth()->user();

        if ($user->id != $entry->user_id)
        {
            abort(403);
        }
        $request->validate([
            'category_id'=>['required','exists:categories,id'],
            'title'=>['required', 'max:50'],
            'type'=>['required', 'in:income,expense'],
            'amount'=>['required','integer','min:0','max:10000000'],
            'entry_date'=>['required','date_format:Y-m-d'],
            'description'=>[ 'max:300'],

        ]);

        $entry->update([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'entry_date'=>$request->entry_date,
            'description'=>$request->description,

        ]);

        return redirect(route('entries.index'));

    }

    public function destroy($id)
    {
        $entry = Entry::query()->find($id);
        $user = auth()->user();

        if ($user->id != $entry->user_id)
        {
            abort(403);
        }
        $entry->delete();
        return redirect()->back();
    }

    public function sumAmount($entries)
    {
        $x=0;
        $sum = 0;
        foreach ($entries as $entry)
        {
            if ($entry->type == 'income')

            {
                $x = + ($entry->amount);
            }
            if ($entry->type == 'expense')
            {
                $x = -($entry->amount);
            }
            $sum+=$x;
        }

        return $sum;
    }


}
