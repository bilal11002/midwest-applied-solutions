<?php

namespace App\Http\Controllers;

use App\Models\sales_funnel;
use App\Models\User;
use Illuminate\Http\Request;

class SalesFunnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields = sales_funnel::all();
        return view('sales_funnel.index')->with([
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
        return view('sales_funnel.add');
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
            'funnel_name' => 'required',
        ]);
        $recordExist = sales_funnel::where('name', $request->post('funnel_name'))->get();
        if(count($recordExist) > 0 || $recordExist == ''){
            return redirect("create-funnel")->withErrors('Sales funnnel names already exist. Please try a   gain with different name');
        }
        $form_data['name'] = trim( $request->post('funnel_name') );
        sales_funnel::create($form_data);
        return redirect('/create-funnel')->withSuccess('Sales funnel has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sales_funnel  $sales_funnel
     * @return \Illuminate\Http\Response
     */
    public function show(sales_funnel $sales_funnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sales_funnel  $sales_funnel
     * @return \Illuminate\Http\Response
     */
    public function edit(sales_funnel $id)
    {
        //
        $data   = json_decode($id);
        $fields = sales_funnel::where('id', $data->id)->get();

        return view('sales_funnel.edit')->with([
            'fields' => $fields,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sales_funnel  $sales_funnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sales_funnel $sales_funnel)
    {
        //
        $request->validate([
            'funnel_name' => 'required',
        ]);
        $recordExist = sales_funnel::where('name', $request->post('funnel_name'))->get();
        if(count($recordExist) > 0 || $recordExist == ''){
            return redirect()->route('funnels.edit', $request->input('id'))->withErrors('Sales funnnel names already exist. Please try again with different name');
        }
        $result = sales_funnel::find($request->input('id'));
        $result->name = $request->post('funnel_name');
        $result->update();
        return redirect()->route('funnels.edit', $request->input('id'))->withSuccess('Sales funnel has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sales_funnel  $sales_funnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(sales_funnel $sales_funnel, $id)
    {
        //
        $sales = sales_funnel::findOrFail($id);
        $sales->delete();
        return redirect()->route('funnels')->withSuccess('User has been deleted successfully');
    }
}
