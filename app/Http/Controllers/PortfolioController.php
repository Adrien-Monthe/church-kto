<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Pocategory;
use App\Models\Portfolio;
use App\Models\Potag;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['portfolios'] = Portfolio::orderBy('id', 'desc')->get();
        return view('backend.pages.portfolios.show-portfolios', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['categories'] = Pocategory::orderBy('id', 'desc')->get();
        $data['tags'] = Potag::orderBy('id', 'desc')->get();
        return view('backend.pages.portfolios.create-portfolio', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePortfolioRequest $request
     * @return Response
     */
    public function store(StorePortfolioRequest $request)
    {
        $Portfolio_id = $request->portfolio_id;

        $codename = $this->clean($request->name_fr);

        $slug = $this->slug($request->name_fr);

        $Portfolio = Portfolio::updateOrCreate(['id' => $Portfolio_id],
            [
                'codename' => $codename,

                'slug' => $slug,

                'pocategory_id' => $request->pocategory_id,

                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr,
                ],

                'added_by' => Auth::user()->id,

                'views' => 0,

                'event_date' => $request->birthdate,

                'short_description' => [
                    'en' => $request->short_description_en,
                    'fr' => $request->short_description_fr,
                ],

            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/Portfolios/' . $Portfolio->id . '/Portfolio-images/'), $fileName);
            $Portfolio->image_path = 'storage/Portfolios/' . $Portfolio->id . '/Portfolio-images/' . $fileName;
            $Portfolio->save();
        }

        if ($request->image_path_banner) {
            $fileName = time() . '_img.' . $request->image_path_banner->extension();
            $request->image_path_banner->move(public_path('storage/Portfolios/' . $Portfolio->id . '/Portfolio-images/'), $fileName);
            $Portfolio->image_path_banner = 'storage/Portfolios/' . $Portfolio->id . '/Portfolio-images/' . $fileName;
            $Portfolio->save();
        }

        return redirect()->route('portfolios.index', app()->getLocale())->with('success', 'Portfolio has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Portfolio $portfolio
     * @return Response
     */
    public function show( Portfolio $portfolio)
    {
        $data['categories'] = Pocategory::orderBy('id', 'desc')->get();
        $data['tags'] = Potag::orderBy('id', 'desc')->get();
        $data['portfolio'] = $portfolio;
        return view('backend.pages.portfolios.show-portfolio', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Portfolio $portfolio
     * @return Response
     */
    public function edit( Portfolio $portfolio)
    {
        $data['categories'] = Pocategory::orderBy('id', 'desc')->get();
        $data['tags'] = Potag::orderBy('id', 'desc')->get();
        $data['portfolio'] = $portfolio;
        return view('backend.pages.portfolios.edit-portfolio', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePortfolioRequest $request
     * @param Portfolio $portfolio
     * @return Response
     */
    public function update(UpdatePortfolioRequest $request,  Portfolio $portfolio)
    {
        $Portfolio_id = $portfolio->id;


        $Portfolio = Portfolio::updateOrCreate(['id' => $Portfolio_id],
            [
                'pocategory_id' => $request->pocategory_id,

                'name' => [
                    'en' => $request->name_en,
                    'fr' => $request->name_fr,
                ],

                'event_date' => $request->birthdate,

                'short_description' => [
                    'en' => $request->short_description_en,
                    'fr' => $request->short_description_fr,
                ],

            ]);

        if ($request->image_path) {
            $fileName = time() . '_img.' . $request->image_path->extension();
            $request->image_path->move(public_path('storage/Portfolios/' . $Portfolio->id . '/Portfolio-images/'), $fileName);
            $Portfolio->image_path = 'storage/Portfolios/' . $Portfolio->id . '/Portfolio-images/' . $fileName;
            $Portfolio->save();
        }

        if ($request->image_path_banner) {
            $fileName = time() . '_img.' . $request->image_path_banner->extension();
            $request->image_path_banner->move(public_path('storage/Portfolios/' . $Portfolio->id . '/Portfolio-images/'), $fileName);
            $Portfolio->image_path_banner = 'storage/Portfolios/' . $Portfolio->id . '/Portfolio-images/' . $fileName;
            $Portfolio->save();
        }

        return redirect()->route('portfolios.index', app()->getLocale())->with('success', 'Portfolio has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Portfolio $portfolio
     * @return Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
