<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\User;
use App\Department;
use App\Batch;

class UserResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Users = new User;        

        if($request->has('department_id')) {
            $Users = $Users->where('department_id', $request->department_id);
        }

        if($request->has('batch_id')) {
            $Users = $Users->where('batch_id', $request->batch_id);
        }

        $Users = $Users->get();

        if($request->ajax()) {
            return $Users;
        }

        return view('staff.student.index', compact('Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Departments = Department::all();
        $Batchs = Batch::all();
        return view('staff.student.create', compact('Departments','Batchs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'dob' => 'required|date',
            'department_id' => 'required|exists:departments,id',
            
        ]);

        // User::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'email' => $request->email,
        //     'dob' => Carbon::parse($request->dob),
        //     'department_id' => $request->department_id,
        //     'password' => bcrypt($request->dob),
        //     'batch_id' => $request->batch_id,
        // ]);
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->dob = Carbon::parse($request->dob);
       // $user->password = bcrypt($request->dob);
        $user->department_id = $request->department_id;
        $user->batch_id = $request->batch_id;
        $user->save();
        return redirect()->route('staff.student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
