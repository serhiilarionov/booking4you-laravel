<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateStreetAPIRequest;
use App\Http\Requests\API\UpdateStreetAPIRequest;
use App\Models\Street;
use App\Repositories\StreetRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class StreetController
 * @package App\Http\Controllers\API
 */

class StreetAPIController extends AppBaseController
{
    /** @var  StreetRepository */
    private $streetRepository;

    public function __construct(StreetRepository $streetRepo)
    {
        $this->streetRepository = $streetRepo;
        $this->streetRepository->skipPresenter(false);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/streets",
     *      summary="Get a listing of the Streets.",
     *      tags={"Street"},
     *      description="Get all Streets",
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
     *                  @SWG\Items(ref="#/definitions/Street")
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
        $this->streetRepository->pushCriteria(new RequestCriteria($request));
        $this->streetRepository->pushCriteria(new LimitOffsetCriteria($request));
        $streets = $this->streetRepository->all();

        return $this->sendResponse($streets, 'Streets retrieved successfully');
    }

    /**
     * @param CreateStreetAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/streets",
     *      summary="Store a newly created Street in storage",
     *      tags={"Street"},
     *      description="Store Street",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Street that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Street")
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
     *                  ref="#/definitions/Street"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateStreetAPIRequest $request)
    {
        $input = $request->all();

        $streets = $this->streetRepository->create($input);

        return $this->sendResponse($streets, 'Street saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/streets/{id}",
     *      summary="Display the specified Street",
     *      tags={"Street"},
     *      description="Get Street",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Street",
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
     *                  ref="#/definitions/Street"
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
        /** @var Street $street */
        $street = $this->streetRepository->find($id);

        if (empty($street)) {
            return Response::json(ResponseUtil::makeError('Street not found'), 404);
        }

        return $this->sendResponse($street, 'Street retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateStreetAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/streets/{id}",
     *      summary="Update the specified Street in storage",
     *      tags={"Street"},
     *      description="Update Street",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Street",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Street that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Street")
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
     *                  ref="#/definitions/Street"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateStreetAPIRequest $request)
    {
        $input = $request->all();

        /** @var Street $street */
        $street = $this->streetRepository->find($id);

        if (empty($street)) {
            return Response::json(ResponseUtil::makeError('Street not found'), 404);
        }

        $street = $this->streetRepository->update($input, $id);

        return $this->sendResponse($street, 'Street updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/streets/{id}",
     *      summary="Remove the specified Street from storage",
     *      tags={"Street"},
     *      description="Delete Street",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Street",
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
        /** @var Street $street */
        $street = $this->streetRepository->skipPresenter()->find($id);

        if (empty($street)) {
            return Response::json(ResponseUtil::makeError('Street not found'), 404);
        }

        $street->delete();

        return $this->sendResponse($id, 'Street deleted successfully');
    }
}
