<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRegionAPIRequest;
use App\Http\Requests\API\UpdateRegionAPIRequest;
use App\Models\Region;
use App\Repositories\RegionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class RegionController
 * @package App\Http\Controllers\API
 */

class RegionAPIController extends AppBaseController
{
    /** @var  RegionRepository */
    private $regionRepository;

    public function __construct(RegionRepository $regionRepo)
    {
        $this->regionRepository = $regionRepo;
        $this->regionRepository->skipPresenter(false);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/regions",
     *      summary="Get a listing of the Regions.",
     *      tags={"Region"},
     *      description="Get all Regions",
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
     *                  @SWG\Items(ref="#/definitions/Region")
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
        $this->regionRepository->pushCriteria(new RequestCriteria($request));
        $this->regionRepository->pushCriteria(new LimitOffsetCriteria($request));
        $regions = $this->regionRepository->all();

        return $this->sendResponse($regions, 'Regions retrieved successfully');
    }

    /**
     * @param CreateRegionAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/regions",
     *      summary="Store a newly created Region in storage",
     *      tags={"Region"},
     *      description="Store Region",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Region that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Region")
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
     *                  ref="#/definitions/Region"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateRegionAPIRequest $request)
    {
        $input = $request->all();

        $regions = $this->regionRepository->create($input);

        return $this->sendResponse($regions, 'Region saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/regions/{id}",
     *      summary="Display the specified Region",
     *      tags={"Region"},
     *      description="Get Region",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Region",
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
     *                  ref="#/definitions/Region"
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
        /** @var Region $region */
        $region = $this->regionRepository->find($id);

        if (empty($region)) {
            return Response::json(ResponseUtil::makeError('Region not found'), 404);
        }

        return $this->sendResponse($region, 'Region retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateRegionAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/regions/{id}",
     *      summary="Update the specified Region in storage",
     *      tags={"Region"},
     *      description="Update Region",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Region",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Region that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Region")
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
     *                  ref="#/definitions/Region"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateRegionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Region $region */
        $region = $this->regionRepository->find($id);

        if (empty($region)) {
            return Response::json(ResponseUtil::makeError('Region not found'), 404);
        }

        $region = $this->regionRepository->update($input, $id);

        return $this->sendResponse($region, 'Region updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/regions/{id}",
     *      summary="Remove the specified Region from storage",
     *      tags={"Region"},
     *      description="Delete Region",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Region",
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
        /** @var Region $region */
        $region = $this->regionRepository->skipPresenter()->find($id);

        if (empty($region)) {
            return Response::json(ResponseUtil::makeError('Region not found'), 404);
        }

        $region->delete();

        return $this->sendResponse($id, 'Region deleted successfully');
    }
}
