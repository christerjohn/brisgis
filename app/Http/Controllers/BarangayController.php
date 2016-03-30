<?php

namespace brisgis\Http\Controllers;

use Illuminate\Http\Request;

use brisgis\Http\Requests;
use brisgis\BarangayCRUD;
use brisgis\Repositories\Contracts\BarangayRepositoryInterface;
use brisgis\Repositories\BarangayRepositoryDB;
use brisgis\Output\Contracts\BarangayShowInterface;
use brisgis\Output\BarangayShowText;
use brisgis\ProvinceCRUD;
use brisgis\Repositories\Contracts\ProvinceRepositoryInterface;
use brisgis\Repositories\ProvinceReposritoryDB;
use brisgis\Output\Contracts\ProvinceShowInterface;
use brisgis\Output\ProvinceShowText;


class BarangayController extends Controller
{
    /**
     * @var BarangayRepositoryInterface
     */
    private $repo;
    /**
     * @var BarangayShowInterface
     */
    private $output;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BarangayRepositoryInterface $repo, BarangayShowInterface $output,
                                ProvinceRepositoryInterface $province_repo, ProvinceShowInterface $provinces_output)
    {
        $this->middleware('auth');
        $this->repo = $repo;
        $this->output = $output;
        $this->province_repo = $province_repo;
        $this->provinces_output = $provinces_output;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangays = new BarangayCRUD();
        $barangays->getAllBarangays($this->repo);
        $provinces = new ProvinceCRUD();
        $provinces->getAllProvinces($this->province_repo);
        return view('pages.barangays.index')
                                ->with('barangays',$barangays->showAllBarangays($this->output))
                                ->with('provinces',$provinces->showAllProvinces($this->provinces_output));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('pages.barangays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*        $inputs = $request->all();

        $barangay = Barangay::Create($inputs);

        return redirect()->route('barangays.index');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
/*        $barangay = new BarangayProfile($this->repo, $id);
        return view('pages.barangays.show')->with('barangay',$barangay->show($this->output));*/
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
/*        Barangay::destroy($id);

        return redirect()->route('pages.barangays.index');*/
    }
}
