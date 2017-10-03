<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLangAPIRequest;
use App\Http\Requests\API\UpdateLangAPIRequest;
use App\Models\Lang;
use App\Repositories\LangRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class LangController
 * @package App\Http\Controllers\API
 */

class LangAPIController extends AppBaseController
{
    /** @var  LangRepository */
    private $langRepository;

    public function __construct(LangRepository $langRepo)
    {
        $this->langRepository = $langRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/langs",
     *      summary="Get a listing of the Langs.",
     *      tags={"Lang"},
     *      description="Get all Langs",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Lang")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->langRepository->pushCriteria(new RequestCriteria($request));
        $this->langRepository->pushCriteria(new LimitOffsetCriteria($request));
        $langs = $this->langRepository->all();

        return $this->sendResponse($langs->toArray(), 'Langs retrieved successfully');
    }

    /**
     * @param CreateLangAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/langs",
     *      summary="Store a newly created Lang in storage",
     *      tags={"Lang"},
     *      description="Store Lang",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Lang that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Lang")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Lang"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateLangAPIRequest $request)
    {
        $input = $request->all();

        $langs = $this->langRepository->create($input);

        return $this->sendResponse($langs->toArray(), 'Lang saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/langs/{id}",
     *      summary="Display the specified Lang",
     *      tags={"Lang"},
     *      description="Get Lang",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Lang",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Lang"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Lang $lang */
        $lang = $this->langRepository->find($id);

        if (empty($lang)) {
            return Response::json(ResponseUtil::makeError('Lang not found'), 404);
        }

        return $this->sendResponse($lang->toArray(), 'Lang retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateLangAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/langs/{id}",
     *      summary="Update the specified Lang in storage",
     *      tags={"Lang"},
     *      description="Update Lang",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Lang",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Lang that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Lang")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Lang"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateLangAPIRequest $request)
    {
        $input = $request->all();

        /** @var Lang $lang */
        $lang = $this->langRepository->find($id);

        if (empty($lang)) {
            return Response::json(ResponseUtil::makeError('Lang not found'), 404);
        }

        $lang = $this->langRepository->update($input, $id);

        return $this->sendResponse($lang->toArray(), 'Lang updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/langs/{id}",
     *      summary="Remove the specified Lang from storage",
     *      tags={"Lang"},
     *      description="Delete Lang",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Lang",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Lang $lang */
        $lang = $this->langRepository->find($id);

        if (empty($lang)) {
            return Response::json(ResponseUtil::makeError('Lang not found'), 404);
        }

        $lang->delete();

        return $this->sendResponse($id, 'Lang deleted successfully');
    }





    /**
     * @return Response
     *
     * @SWG\GET(
     *      path="/langs/current",
     *      summary="Get current lang",
     *      tags={"Lang"},
     *      description="Current Lang",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function getCurrent()
    {
        return ['current' => $this->langRepository->getCurrent()];
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\POST(
     *      path="/langs/set-current",
     *      summary="Set current lang",
     *      tags={"Lang"},
     *      description="Set current Lang",
     *      produces={"application/json"},
     *     @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Lang that should be set",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Lang")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function setCurrent(Request $request)
    {
        //$this->validate($request, ['code' => 'required|exists:lang,code']);

        $input = $request->only(['code']);

        $result = $this->langRepository->store($input);

        if ($result) {
            return ['current' => $result];
        } else {
            return $this->errorInternal();
        }
    }
    

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\POST(
     *      path="/lang/content/{name}",
     *      summary="language content for entity",
     *      tags={"Lang"},
     *      description="language content for entity",
     *      produces={"application/json"},
     *     @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="word that should be translate",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Lang")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    
    public function getContent($name)
    {
        $list = $this->langRepository->getContent($name);

        if (!is_array($list)) {
            throw new NotFoundHttpException();
        }

        return $this->array($list);
    }
}
