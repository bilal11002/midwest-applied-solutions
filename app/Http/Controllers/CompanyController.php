<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\sales_funnel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fields = company::all();
        return view('company.index')->with([
            'fields' => $fields,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fields = sales_funnel::all();
        return view('company.add')->with([
            'sales' => $fields,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'company_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'notes' => 'required',
            'type' => 'required',
            'contacts' => 'required',
            'rep' => 'required',
        ]);
        $recordExist = company::where('name', $request->post('company_name'))->get();

        if(count($recordExist) > 0 || $recordExist == ''){
            return redirect("add-company")->withErrors('Comapny already exist. Please try aagain with different namae');
        }

        $image = $request->file('image');
        $image_name = '';
        if(!empty($image)){
            $image_name = time()."_".$image->getClientOriginalName();
            $image->move('images/company',$image_name);
        }
        $form_data['name'] = trim( $request->post('company_name') );
        $form_data['email'] = trim( $request->post('email') );
        $form_data['address'] = trim( $request->post('address') );
        $form_data['city'] = trim( $request->post('city') );
        $form_data['state'] = trim( $request->post('state') );
        $form_data['zip'] = trim( $request->post('zip') );
        $form_data['phone'] = trim( $request->post('phone') );
        $form_data['notes'] = trim( $request->post('notes') );
        $form_data['type'] = trim( $request->post('type') );
        $form_data['contacts'] = trim( $request->post('contacts') );
        $form_data['rep'] = trim( $request->post('rep') );
        $form_data['image'] = $image_name;

        company::create($form_data);
        return redirect('/add-company')->withSuccess('Company has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(company $id)
    {
        //
        $data   = json_decode($id);
        $fields = company::where('id', $data->id)->get();
        $sales = sales_funnel::all();

        return view('company.edit')->with([
            'sales' => $sales,
            'fields' => $fields,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, company $company)
    {
        //
//        dd('we are jere');
        $request->validate([
            'company_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'notes' => 'required',
            'type' => 'required',
            'contacts' => 'required',
            'rep' => 'required',
        ]);
//        $recordExist = company::where('name', $request->post('company_name'))->get();
//
//        if(count($recordExist) > 0 || $recordExist == ''){
//            return redirect()->route('companies.edit', $request->input('id'))->withErrors('Comapny already exist. Please try aagain with different namae');
//        }

        $image_name = '';
        if($request->file('image' ) != ''){
            $image = $request->file('image');
            $image_name = time()."_".$image->getClientOriginalName();
            $image->move('images/company',$image_name);
        }
        $result = company::find($request->input('id'));
        $result->email = $request->input('email');
        $result->address = $request->input('address');
        $result->city = $request->input('city');
        $result->state = $request->input('state');
        $result->zip = $request->input('zip');
        $result->phone = $request->input('phone');
        $result->notes = $request->input('notes');
        $result->type = $request->input('type');
        $result->contacts = $request->input('contacts');
        $result->rep = $request->input('rep');
        if(!empty($image_name)){
            $result->image = $image_name;
        }
        $result->update();
        return redirect()->route('companies.edit', $request->input('id'))->withSuccess('Company has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company, $id)
    {
        //
        $user = company::findOrFail($id);
        $user->delete();
        return redirect()->route('companies')->withSuccess('Company  has been deleted successfully');
    }
}
