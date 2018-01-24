<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactInfoApiTest extends TestCase
{
    use MakeContactInfoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateContactInfo()
    {
        $contactInfo = $this->fakeContactInfoData();
        $this->json('POST', '/api/v1/contactInfos', $contactInfo);

        $this->assertApiResponse($contactInfo);
    }

    /**
     * @test
     */
    public function testReadContactInfo()
    {
        $contactInfo = $this->makeContactInfo();
        $this->json('GET', '/api/v1/contactInfos/'.$contactInfo->id);

        $this->assertApiResponse($contactInfo->toArray());
    }

    /**
     * @test
     */
    public function testUpdateContactInfo()
    {
        $contactInfo = $this->makeContactInfo();
        $editedContactInfo = $this->fakeContactInfoData();

        $this->json('PUT', '/api/v1/contactInfos/'.$contactInfo->id, $editedContactInfo);

        $this->assertApiResponse($editedContactInfo);
    }

    /**
     * @test
     */
    public function testDeleteContactInfo()
    {
        $contactInfo = $this->makeContactInfo();
        $this->json('DELETE', '/api/v1/contactInfos/'.$contactInfo->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/contactInfos/'.$contactInfo->id);

        $this->assertResponseStatus(404);
    }
}
