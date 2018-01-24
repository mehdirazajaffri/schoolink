<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateContactInfoAPIRequest;
use App\Http\Requests\API\UpdateContactInfoAPIRequest;
use App\Models\ContactInfo;
use App\Repositories\ContactInfoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ContactInfoController
 * @package App\Http\Controllers\API
 */

class ContactInfoAPIController extends AppBaseController
{
    /** @var  ContactInfoRepository */
    private $contactInfoRepository;

    public function __construct(ContactInfoRepository $contactInfoRepo)
    {
        $this->contactInfoRepository = $contactInfoRepo;
    }

    /**
     * Display a listing of the ContactInfo.
     * GET|HEAD /contactInfos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contactInfoRepository->pushCriteria(new RequestCriteria($request));
        $this->contactInfoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $contactInfos = $this->contactInfoRepository->all();

        return $this->sendResponse($contactInfos->toArray(), 'Contact Infos retrieved successfully');
    }

    /**
     * Store a newly created ContactInfo in storage.
     * POST /contactInfos
     *
     * @param CreateContactInfoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateContactInfoAPIRequest $request)
    {
        $input = $request->all();

        $contactInfos = $this->contactInfoRepository->create($input);

        return $this->sendResponse($contactInfos->toArray(), 'Contact Info saved successfully');
    }

    /**
     * Display the specified ContactInfo.
     * GET|HEAD /contactInfos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ContactInfo $contactInfo */
        $contactInfo = $this->contactInfoRepository->findWithoutFail($id);

        if (empty($contactInfo)) {
            return $this->sendError('Contact Info not found');
        }

        return $this->sendResponse($contactInfo->toArray(), 'Contact Info retrieved successfully');
    }

    /**
     * Update the specified ContactInfo in storage.
     * PUT/PATCH /contactInfos/{id}
     *
     * @param  int $id
     * @param UpdateContactInfoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactInfoAPIRequest $request)
    {
        $input = $request->all();

        /** @var ContactInfo $contactInfo */
        $contactInfo = $this->contactInfoRepository->findWithoutFail($id);

        if (empty($contactInfo)) {
            return $this->sendError('Contact Info not found');
        }

        $contactInfo = $this->contactInfoRepository->update($input, $id);

        return $this->sendResponse($contactInfo->toArray(), 'ContactInfo updated successfully');
    }

    /**
     * Remove the specified ContactInfo from storage.
     * DELETE /contactInfos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ContactInfo $contactInfo */
        $contactInfo = $this->contactInfoRepository->findWithoutFail($id);

        if (empty($contactInfo)) {
            return $this->sendError('Contact Info not found');
        }

        $contactInfo->delete();

        return $this->sendResponse($id, 'Contact Info deleted successfully');
    }
}
