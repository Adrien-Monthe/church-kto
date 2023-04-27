<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrayerRequest;
use App\Http\Requests\UpdatePrayerRequest;
use App\Models\Prayer;

class PrayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['prayers'] = Prayer::orderBy('id','desc')->get();
        return view('backend.pages.prayers.show-prayers',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.prayers.create-prayer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrayerRequest $request)
    {
        $prayer_id = $request->prayer_id;

        $codename =  $this->clean($request->title_fr);

        $prayer  =   Prayer::updateOrCreate(['id' => $prayer_id],
            [
                'codename' => $codename,

                'meta_keywords' => $request->meta_keywords,

                'author' => $request->author,

                'title' => [
                    'en' => $request->title_en,
                    'fr' => $request->title_fr,
                ],
                'sub_title' => [
                    'en' => $request->sub_title_en,
                    'fr' => $request->sub_title_fr,
                ],
                'content' => [
                    'en' => $request->content_en,
                    'fr' => $request->content_fr,
                ],

            ]);
        return redirect()->route('prayers.index',app()->getLocale())->with('success','Prayer has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prayer $prayer)
    {
        $data['prayer'] = $prayer;
        return view('backend.pages.prayers.show-prayer',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prayer $prayer)
    {
        $data['prayer'] = $prayer;
        return view('backend.pages.prayers.edit-prayer',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrayerRequest $request, Prayer $prayer)
    {
        $prayer_id = $prayer->id;

        $codename =  $this->clean($request->title_fr);

        $prayer  =   Prayer::updateOrCreate(['id' => $prayer_id],
            [
                'codename' => $codename,

                'meta_keywords' => $request->meta_keywords,

                'title' => [
                    'en' => $request->title_en,
                    'fr' => $request->title_fr,
                ],
                'sub_title' => [
                    'en' => $request->sub_title_en,
                    'fr' => $request->sub_title_fr,
                ],
                'content' => [
                    'en' => $request->content_en,
                    'fr' => $request->content_fr,
                ],

            ]);
        return redirect()->route('players.index',app()->getLocale())->with('success','Prayer has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prayer $prayer)
    {
        //
    }
}
