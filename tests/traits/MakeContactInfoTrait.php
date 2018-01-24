<?php

use Faker\Factory as Faker;
use App\Models\ContactInfo;
use App\Repositories\ContactInfoRepository;

trait MakeContactInfoTrait
{
    /**
     * Create fake instance of ContactInfo and save it in database
     *
     * @param array $contactInfoFields
     * @return ContactInfo
     */
    public function makeContactInfo($contactInfoFields = [])
    {
        /** @var ContactInfoRepository $contactInfoRepo */
        $contactInfoRepo = App::make(ContactInfoRepository::class);
        $theme = $this->fakeContactInfoData($contactInfoFields);
        return $contactInfoRepo->create($theme);
    }

    /**
     * Get fake instance of ContactInfo
     *
     * @param array $contactInfoFields
     * @return ContactInfo
     */
    public function fakeContactInfo($contactInfoFields = [])
    {
        return new ContactInfo($this->fakeContactInfoData($contactInfoFields));
    }

    /**
     * Get fake data of ContactInfo
     *
     * @param array $postFields
     * @return array
     */
    public function fakeContactInfoData($contactInfoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'phone_number' => $fake->word,
            'address_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $contactInfoFields);
    }
}
