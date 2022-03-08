<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Validator;
use App\HssCommand;

class HssCommandController extends CustomController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = $this->model::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $editUrl = route($this->routeName.'.edit', $row->id);
                    $deleteUrl = route($this->routeName.'.destroy', $row->id);

                    $btn = '<a href="'.$editUrl.'"class="edit btn btn-primary btn-sm">Edit</a>';
//                    $btn = $btn.'  <a href="'.$deleteUrl.'" class="edit btn btn-danger btn-sm" id="delete">Delete</a>';

                    return $btn;
                })
                ->editColumn('id',function($row){
                    $editUrl = route($this->routeName.'.edit', $row->id);
                    return '<a href="'.$editUrl.$row->id.'</a>';
                })
                ->rawColumns(['id','action'])
                ->make(true);
        }

        return view($this->viewPath . '.grid', ['modelName' => $this->modelName, 'routeName' => $this->routeName]);
    }
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
        ]);

        if ($validator->fails()) // on validator found any error
        {
            // pass validator object in withErrors method & also withInput it should be null by default
            return redirect(route($this->routeName . '.create'))->withErrors($validator)->withInput();
        }

        HssCommand::create($request->all());


        return redirect(route($this->routeName . '.create'))->with('success', $this->modelName.' created successfully.');
    }
    //
    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\HssCommandOld  $hssCommand
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(HssCommandOld $hssCommand)
    // {
    //     //
    // }
    //
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\HssCommandOld  $hssCommand
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(HssCommandOld $hssCommand)
    // {
    //     //
    // }
    //
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',

        ]);

        $element = $this->model::find($id);

        if ($validator->fails()) // on validator found any error
        {
            // pass validator object in withErrors method & also withInput it should be null by default
            return redirect(route($this->routeName.'.edit',$id))->withErrors($validator)->withInput();
        }
        $element->update($request->all());


        return redirect(route($this->routeName.'.edit',$id))->with('success', 'User updated successfully.');



    }
    //
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\HssCommandOld  $hssCommand
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(HssCommandOld $hssCommand)
    // {
    //     //
    // }
}
