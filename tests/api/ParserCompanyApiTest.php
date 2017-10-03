<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ParserCompanyApiTest extends TestCase
{
    use MakeParserCompanyTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateParserCompany()
    {
        $parserCompany = $this->fakeParserCompanyData();
        $this->json('POST', '/api/v1/parserCompanies', $parserCompany);

        $this->assertApiResponse($parserCompany);
    }

    /**
     * @test
     */
    public function testReadParserCompany()
    {
        $parserCompany = $this->makeParserCompany();
        $this->json('GET', '/api/v1/parserCompanies/'.$parserCompany->id);

        $this->assertApiResponse($parserCompany->toArray());
    }

    /**
     * @test
     */
    public function testUpdateParserCompany()
    {
        $parserCompany = $this->makeParserCompany();
        $editedParserCompany = $this->fakeParserCompanyData();

        $this->json('PUT', '/api/v1/parserCompanies/'.$parserCompany->id, $editedParserCompany);

        $this->assertApiResponse($editedParserCompany);
    }

    /**
     * @test
     */
    public function testDeleteParserCompany()
    {
        $parserCompany = $this->makeParserCompany();
        $this->json('DELETE', '/api/v1/parserCompanies/'.$parserCompany->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/parserCompanies/'.$parserCompany->id);

        $this->assertResponseStatus(404);
    }
}
