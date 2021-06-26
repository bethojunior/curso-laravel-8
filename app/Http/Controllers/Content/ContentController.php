<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use App\Http\Requests\Content\CreateContentRequest;
use App\Services\Content\ContentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContentController extends Controller
{

    private $service;

    /**
     * ContentController constructor.
     * @param ContentService $contentService
     */
    public function __construct(ContentService $contentService)
    {
        $this->service = $contentService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() : View
    {
        return view('content.create');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show() : View
    {
        $contents = $this->service
            ->show();
        return view('content.list')->with([
            'contents' => $contents
        ]);
    }

    /**
     * @param CreateContentRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function insert(CreateContentRequest $request) : RedirectResponse
    {
        try{
            $this->service
                ->create($request->all());
        }catch (\Exception $exception)
        {
            return redirect()->route('content.index')
                ->with([
                    'error' => 'Erro ao inserir conteudo '.$exception->getMessage()
                ]);
        }
        $contents = $this->service->show();
        return redirect()->route('content.show')
            ->with([
                'success'  => 'Conteúdo inserido com sucesso',
                'contents' =>  $contents
            ]);
    }
}
