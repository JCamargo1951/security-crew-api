<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Http\Resources\LinkResource;
use App\Interfaces\Links\CreatesLinks;
use App\Models\Link;
use Illuminate\Support\Facades\Gate;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('viewAny', Link::class)) abort(403);
        
        $links = auth()->user()->links()->paginate(10);
        return LinkResource::collection($links);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request, CreatesLinks $action)
    {
        $link = $action->handle($request->validated());
        return new LinkResource($link);
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        //
    }
}
