<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $fields = User::all();
        return view('users.index')->with([
            'fields' => $fields,
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Write code on Method
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:5|required_with:password_confirmation|same:confirmPassword',
            'confirmPassword' => 'required|min:5',
            'phone' => 'required',
            'type' => 'required',
//            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $userExist = User::where('email', $request->post('email'))->get();
        if(count($userExist) > 0 || $userExist == ''){
            return redirect("add-user")->withErrors('Email already exist. Please try aagain with different email');
        }
        else{
            $image = $request->file('image');
            $image_name = time()."_".$image->getClientOriginalName();
            $image->move('images/users',$image_name);

            $form_data['name'] = $request->post('username');
            $form_data['email'] = $request->post('email');
            $form_data['password'] = Hash::make($request->post('password'));
            $form_data['type'] = $request->post('type');
            $form_data['phone'] = $request->input('phone');
            $form_data['image'] = $image_name;
            User::create($form_data);
            return redirect('/add-user')->withSuccess('User has been added successfully');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(User $id)
    {
        $data   = json_decode($id);
        $fields = User::where('id', $data->id)->get();
        return view('users.edit')->with([
            'fields' => $fields,
        ]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $password = '';
        if($request->post('password') != ''){
            $request->validate([
                'username' => 'required',
                'email' => 'required',
                'password' => 'required|min:5|required_with:password_confirmation|same:confirmPassword',
                'confirmPassword' => 'required|min:5',
                'phone' => 'required',
                'type' => 'required',
            ]);
            $password = Hash::make($request->post('password'));
        }
        else{
            $request->validate([
                'username' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'type' => 'required',
            ]);
        }
        $image_name = '';
        if($request->file('image' ) != ''){
            $image = $request->file('image');
            $image_name = time()."_".$image->getClientOriginalName();
            $image->move('images/users',$image_name);
        }
        $result = User::find($request->input('id'));
        if(!empty($image_name)){
            $result->image = $image_name;
        }
        if(!empty($password)){
            $result->password = $password;
        }
        $result->name = $request->post('username');
        $result->type = $request->post('type');
        $result->phone = $request->post('phone');
        $result->update();
        return redirect()->route('users.edit', $request->input('id'))->withSuccess('User has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users')->withSuccess('User has been deleted successfully');
    }
}
