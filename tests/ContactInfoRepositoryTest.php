<?php

use App\Models\ContactInfo;
use App\Repositories\ContactInfoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactInfoRepositoryTest extends TestCase
{
    use MakeContactInfoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ContactInfoRepository
     */
    protected $contactInfoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->contactInfoRepo = App::make(ContactInfoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateContactInfo()
    {
        $contactInfo = $this->fakeContactInfoData();
        $createdContactInfo = $this->contactInfoRepo->create($contactInfo);
        $createdContactInfo = $createdContactInfo->toArray();
        $this->assertArrayHasKey('id', $createdContactInfo);
        $this->assertNotNull($createdContactInfo['id'], 'Created ContactInfo must have id specified');
        $this->assertNotNull(ContactInfo::find($createdContactInfo['id']), 'ContactInfo with given id must be in DB');
        $this->assertModelData($contactInfo, $createdContactInfo);
    }

    /**
     * @test read
     */
    public function testReadContactInfo()
    {
        $contactInfo = $this->makeContactInfo();
        $dbContactInfo = $this->contactInfoRepo->find($contactInfo->id);
        $dbContactInfo = $dbContactInfo->toArray();
        $this->assertModelData($contactInfo->toArray(), $dbContactInfo);
    }

    /**
     * @test update
     */
    public function testUpdateContactInfo()
    {
        $contactInfo = $this->makeContactInfo();
        $fakeContactInfo = $this->fakeContactInfoData();
        $updatedContactInfo = $this->contactInfoRepo->update($fakeContactInfo, $contactInfo->id);
        $this->assertModelData($fakeContactInfo, $updatedContactInfo->toArray());
        $dbContactInfo = $this->contactInfoRepo->find($contactInfo->id);
        $this->assertModelData($fakeContactInfo, $dbContactInfo->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteContactInfo()
    {
        $contactInfo = $this->makeContactInfo();
        $resp = $this->contactInfoRepo->delete($contactInfo->id);
        $this->assertTrue($resp);
        $this->assertNull(ContactInfo::find($contactInfo->id), 'ContactInfo should not exist in DB');
    }
}
