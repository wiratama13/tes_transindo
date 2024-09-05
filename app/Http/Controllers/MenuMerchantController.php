<?php

namespace App\Http\Controllers;

use App\Models\MenuMerchant;
use Illuminate\Http\Request;

class MenuMerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.menu.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuMerchant $menuMerchant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuMerchant $menuMerchant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuMerchant $menuMerchant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuMerchant $menuMerchant)
    {
        //
    }
}
