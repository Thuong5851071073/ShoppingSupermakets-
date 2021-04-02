<?php

namespace Platform\Blog\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\Base\Forms\FormBuilder;
use Platform\Base\Http\Controllers\BaseController;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Base\Traits\HasDeleteManyItemsTrait;
use Platform\Blog\Forms\TagForm;
use Platform\Blog\Tables\TagTable;
use Platform\Blog\Http\Requests\TagRequest;
use Platform\Blog\Repositories\Interfaces\TagInterface;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Illuminate\View\View;
use Throwable;

class TagController extends BaseController
{

    use HasDeleteManyItemsTrait;

    /**
     * @var TagInterface
     */
    protected $tagRepository;

    /**
     * @param TagInterface $tagRepository
     */
    public function __construct(TagInterface $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * @param TagTable $dataTable
     * @return Factory|View
     *
     * @throws Throwable
     */
    public function index(TagTable $dataTable)
    {
        page_title()->setTitle(trans('plugins/blog::tags.menu'));

        return $dataTable->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/blog::tags.create'));

        return $formBuilder->create(TagForm::class)->renderForm();
    }

    /**
     * @param TagRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(TagRequest $request, BaseHttpResponse $response)
    {
        $tag = $this->tagRepository->createOrUpdate(array_merge($request->input(),
            ['author_id' => Auth::user()->getKey()]));
        event(new CreatedContentEvent(TAG_MODULE_SCREEN_NAME, $request, $tag));

        return $response
            ->setPreviousUrl(route('tags.index'))
            ->setNextUrl(route('tags.edit', $tag->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, Request $request, FormBuilder $formBuilder)
    {
        $tag = $this->tagRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $tag));

        page_title()->setTitle(trans('plugins/blog::tags.edit') . ' "' . $tag->name . '"');

        return $formBuilder->create(TagForm::class, ['model' => $tag])->renderForm();
    }

    /**
     * @param int $id
     * @param TagRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, TagRequest $request, BaseHttpResponse $response)
    {
        $tag = $this->tagRepository->findOrFail($id);
        $tag->fill($request->input());

        $this->tagRepository->createOrUpdate($tag);
        event(new UpdatedContentEvent(TAG_MODULE_SCREEN_NAME, $request, $tag));

        return $response
            ->setPreviousUrl(route('tags.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param Request $request
     * @param int $id
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy($id, Request $request, BaseHttpResponse $response)
    {
        try {
            $tag = $this->tagRepository->findOrFail($id);
            $this->tagRepository->delete($tag);

            event(new DeletedContentEvent(TAG_MODULE_SCREEN_NAME, $request, $tag));

            return $response->setMessage(trans('plugins/blog::tags.deleted'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage(trans('plugins/blog::tags.cannot_delete'));
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     *
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        return $this->executeDeleteItems($request, $response, $this->tagRepository, TAG_MODULE_SCREEN_NAME);
    }

    /**
     * Get list tags in db
     *
     * @return array
     */
    public function getAllTags()
    {
        return $this->tagRepository->pluck('name');
    }
}
