<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactInfoRequest;
use App\Http\Requests\UpdateContactInfoRequest;
use App\Repositories\ContactInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ContactInfoController extends AppBaseController
{
    /** @var  ContactInfoRepository */
    private $contactInfoRepository;

    public function __construct(ContactInfoRepository $contactInfoRepo)
    {
        $this->contactInfoRepository = $contactInfoRepo;
    }

    /**
     * Display a listing of the ContactInfo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contactInfoRepository->pushCriteria(new RequestCriteria($request));
        $contactInfos = $this->contactInfoRepository->all();

        return view('contact_infos.index')
            ->with('contactInfos', $contactInfos);
    }

    /**
     * Show the form for creating a new ContactInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('contact_infos.create');
    }

    /**
     * Store a newly created ContactInfo in storage.
     *
     * @param CreateContactInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateContactInfoRequest $request)
    {
        $input = $request->all();

        $contactInfo = $this->contactInfoRepository->create($input);

        Flash::success('Contact Info saved successfully.');

        return redirect(route('contactInfos.index'));
    }

    /**
     * Display the specified ContactInfo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactInfo = $this->contactInfoRepository->findWithoutFail($id);

        if (empty($contactInfo)) {
            Flash::error('Contact Info not found');

            return redirect(route('contactInfos.index'));
        }

        return view('contact_infos.show')->with('contactInfo', $contactInfo);
    }

    /**
     * Show the form for editing the specified ContactInfo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactInfo = $this->contactInfoRepository->findWithoutFail($id);

        if (empty($contactInfo)) {
            Flash::error('Contact Info not found');

            return redirect(route('contactInfos.index'));
        }

        return view('contact_infos.edit')->with('contactInfo', $contactInfo);
    }

    /**
     * Update the specified ContactInfo in storage.
     *
     * @param  int              $id
     * @param UpdateContactInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactInfoRequest $request)
    {
        $contactInfo = $this->contactInfoRepository->findWithoutFail($id);

        if (empty($contactInfo)) {
            Flash::error('Contact Info not found');

            return redirect(route('contactInfos.index'));
        }

        $contactInfo = $this->contactInfoRepository->update($request->all(), $id);

        Flash::success('Contact Info updated successfully.');

        return redirect(route('contactInfos.index'));
    }

    /**
     * Remove the specified ContactInfo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactInfo = $this->contactInfoRepository->findWithoutFail($id);

        if (empty($contactInfo)) {
            Flash::error('Contact Info not found');

            return redirect(route('contactInfos.index'));
        }

        $this->contactInfoRepository->delete($id);

        Flash::success('Contact Info deleted successfully.');

        return redirect(route('contactInfos.index'));
    }
}
