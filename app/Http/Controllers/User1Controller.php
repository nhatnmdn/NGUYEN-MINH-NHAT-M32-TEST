<?php

namespace App\Http\Controllers;

use App\Filter\User1Filter;
use App\Mode\User1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    protected $user1Filter;

    public function __construct()
    {
        $this->user1Filter = app(User1Filter::class);
    }
    public function index()
    {
        return view('user1.index');
    }

    public function create()
    {
        return view('user1.create');
    }


    public function store(Request $request)
    {
        $params = $request->except('_token');

        User1::create($params);

        return redirect(route('user1.list'));
    }

    public function show(Request $request)
    {
        $query = User1::query();
        $search = $request->get('search','');
        $searchKey = $request->get('searchKey', '');

        if (!empty($search) && !empty($searchKey)){
            $query = $this->user1Filter->search($query, $search, $searchKey);
        }

        $user1 = $query->get();

        return view('user1.list', compact('user1'));
    }


    public function edit($id)
    {
        $user1 = User1::find($id);

        return view('user1.edit', compact('user1'));
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        User1::find($id)->delete();

        return redirect(route('user1.list'))->with('success','Xóa thành công');
    }
}
