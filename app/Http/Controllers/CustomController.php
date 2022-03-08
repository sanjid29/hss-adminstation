<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Yajra\DataTables\DataTables;


class CustomController extends Controller
{
    public $user;
    public $modelName;
    public $routeName;
    public $viewPath;
    public $model;

    public function __construct()
    {
        //getting Model name in format User
        $this->modelName = (str_replace("Controller", '', class_basename(get_class($this))));
        //getting Route name in format users
        $this->routeName = lcfirst(str_replace("Controller", '', class_basename(get_class($this)))) . 's';

        $this->user = Auth::user();
        //getting view path models.users
        $this->viewPath = 'models.' . $this->routeName;
        //getting model App\User
        $this->model = 'App\\' . $this->modelName;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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

                    $btn = '<a href="'.$editUrl.'" target="_blank" class="edit btn btn-primary btn-sm">Edit</a>';
//                    $btn = $btn.'  <a href="'.$deleteUrl.'" class="edit btn btn-danger btn-sm" id="delete">Delete</a>';

                    return $btn;
                })
                ->editColumn('id',function($row){
                    $editUrl = route($this->routeName.'.edit', $row->id);
                    return '<a href="'.$editUrl.'" target="_blank">'.$row->id.'</a>';
                })
                ->rawColumns(['id','action'])
                ->make(true);
        }

        return view($this->viewPath . '.grid', ['modelName' => $this->modelName, 'routeName' => $this->routeName]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view($this->viewPath . '.form', [
            'modelName' => $this->modelName,
            'routeName' => $this->routeName
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $validatedData = $request->validate();

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:100',
            'first_name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'mobile' => 'required|max:200',
        ]);

        if ($validator->fails()) // on validator found any error
        {
            // pass validator object in withErrors method & also withInput it should be null by default
            return redirect($this->routeName . '.create')->withErrors($validator)->withInput();
        }
        $this->modelName::create($request->all());


        return redirect($this->routeName . '.create')->with('success', $this->modelName.' created successfully.');

//        $request->validate([
//            'first_name' => 'required',
//
//        ]);

//        return redirect()->route($this->routeName.'.index')
//            ->with('success',$this->modelName. ' updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        //
        return redirect(route($this->routeName . '.edit', $id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        //
        $element = $this->model::find($id);
        return view($this->viewPath . '.form', [
            'modelName' => $this->modelName,
            'routeName' => $this->routeName,
            'element' => $element
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:100',
            'first_name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'mobile' => 'required|max:200',
        ]);

        $element = $this->model::find($id);

        if ($validator->fails()) // on validator found any error
        {
            // pass validator object in withErrors method & also withInput it should be null by default
            return redirect(route($this->routeName.'.edit'))->withErrors($validator)->withInput();
        }
        $element->update($request->all());


        return redirect(route($this->routeName.'.edit'))->with('success', 'User updated successfully.');


//        return view($this->viewPath . '.form', [
//            'modelName' => $this->modelName,
//            'routeName' => $this->routeName,
//            'element' => $element
//        ]);

    }

    /**
     * Remove the specified resource from storage.
     * @param $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        $element = $this->model::find($id);

        $element->delete();

        return redirect(route($this->routeName.'.index'))->with('success', 'Deleted successfully.');


    }
}

