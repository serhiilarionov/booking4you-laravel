<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateParserCompanyAPIRequest;
use App\Http\Requests\API\UpdateParserCompanyAPIRequest;
use App\Models\ParserCompany;
use App\Repositories\ParserCompanyRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ParserCompanyController
 * @package App\Http\Controllers\API
 */

class ParserCompanyAPIController extends AppBaseController
{
    /** @var  ParserCompanyRepository */
    private $parserCompanyRepository;

    public function __construct(ParserCompanyRepository $parserCompanyRepo)
    {
        $this->parserCompanyRepository = $parserCompanyRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/parserCompanies",
     *      summary="Get a listing of the ParserCompanies.",
     *      tags={"ParserCompany"},
     *      description="Get all ParserCompanies",
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
     *                  @SWG\Items(ref="#/definitions/ParserCompany")
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
        $this->parserCompanyRepository->pushCriteria(new RequestCriteria($request));
        $this->parserCompanyRepository->pushCriteria(new LimitOffsetCriteria($request));
        $parserCompanies = $this->parserCompanyRepository->all();

        return $this->sendResponse($parserCompanies->toArray(), 'ParserCompanies retrieved successfully');
    }

    /**
     * @param CreateParserCompanyAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/parserCompanies",
     *      summary="Store a newly created ParserCompany in storage",
     *      tags={"ParserCompany"},
     *      description="Store ParserCompany",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ParserCompany that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ParserCompany")
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
     *                  ref="#/definitions/ParserCompany"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateParserCompanyAPIRequest $request)
    {
        $input = $request->all();

        $parserCompanies = $this->parserCompanyRepository->create($input);

        return $this->sendResponse($parserCompanies->toArray(), 'ParserCompany saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/parserCompanies/{id}",
     *      summary="Display the specified ParserCompany",
     *      tags={"ParserCompany"},
     *      description="Get ParserCompany",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ParserCompany",
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
     *                  ref="#/definitions/ParserCompany"
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
        /** @var ParserCompany $parserCompany */
        $parserCompany = $this->parserCompanyRepository->find($id);

        if (empty($parserCompany)) {
            return Response::json(ResponseUtil::makeError('ParserCompany not found'), 404);
        }

        return $this->sendResponse($parserCompany->toArray(), 'ParserCompany retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateParserCompanyAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/parserCompanies/{id}",
     *      summary="Update the specified ParserCompany in storage",
     *      tags={"ParserCompany"},
     *      description="Update ParserCompany",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ParserCompany",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ParserCompany that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ParserCompany")
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
     *                  ref="#/definitions/ParserCompany"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateParserCompanyAPIRequest $request)
    {
        $input = $request->all();

        /** @var ParserCompany $parserCompany */
        $parserCompany = $this->parserCompanyRepository->find($id);

        if (empty($parserCompany)) {
            return Response::json(ResponseUtil::makeError('ParserCompany not found'), 404);
        }

        $parserCompany = $this->parserCompanyRepository->update($input, $id);

        return $this->sendResponse($parserCompany->toArray(), 'ParserCompany updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/parserCompanies/{id}",
     *      summary="Remove the specified ParserCompany from storage",
     *      tags={"ParserCompany"},
     *      description="Delete ParserCompany",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ParserCompany",
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
        /** @var ParserCompany $parserCompany */
        $parserCompany = $this->parserCompanyRepository->find($id);

        if (empty($parserCompany)) {
            return Response::json(ResponseUtil::makeError('ParserCompany not found'), 404);
        }

        $parserCompany->delete();

        return $this->sendResponse($id, 'ParserCompany deleted successfully');
    }
}
