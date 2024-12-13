<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Link;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('links.index', [
            'links' => Link::query()->latest()->get(),
        ]);
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
    public function store(LinkRequest $request): RedirectResponse
    {
        $request->user()->links()->create($request->validated());

        return redirect(route('links.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link): View
    {
        Gate::authorize('update', $link);

        return view('links.edit', [
            'link' => $link,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LinkRequest $request, Link $link)
    {
        Gate::authorize('update', $link);

        $link->update($request->validated());

        return redirect(route('links.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link): RedirectResponse
    {
        Gate::authorize('delete', $link);

        $link->delete();

        return redirect(route('links.index'));
    }
}
