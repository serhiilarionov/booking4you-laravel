<?php

use App\Models\ParserCompany;
use App\Repositories\ParserCompanyRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ParserCompanyRepositoryTest extends TestCase
{
    use MakeParserCompanyTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ParserCompanyRepository
     */
    protected $parserCompanyRepo;

    public function setUp()
    {
        parent::setUp();
        $this->parserCompanyRepo = App::make(ParserCompanyRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateParserCompany()
    {
        $parserCompany = $this->fakeParserCompanyData();
        $createdParserCompany = $this->parserCompanyRepo->create($parserCompany);
        $createdParserCompany = $createdParserCompany->toArray();
        $this->assertArrayHasKey('id', $createdParserCompany);
        $this->assertNotNull($createdParserCompany['id'], 'Created ParserCompany must have id specified');
        $this->assertNotNull(ParserCompany::find($createdParserCompany['id']), 'ParserCompany with given id must be in DB');
        $this->assertModelData($parserCompany, $createdParserCompany);
    }

    /**
     * @test read
     */
    public function testReadParserCompany()
    {
        $parserCompany = $this->makeParserCompany();
        $dbParserCompany = $this->parserCompanyRepo->find($parserCompany->id);
        $dbParserCompany = $dbParserCompany->toArray();
        $this->assertModelData($parserCompany->toArray(), $dbParserCompany);
    }

    /**
     * @test update
     */
    public function testUpdateParserCompany()
    {
        $parserCompany = $this->makeParserCompany();
        $fakeParserCompany = $this->fakeParserCompanyData();
        $updatedParserCompany = $this->parserCompanyRepo->update($fakeParserCompany, $parserCompany->id);
        $this->assertModelData($fakeParserCompany, $updatedParserCompany->toArray());
        $dbParserCompany = $this->parserCompanyRepo->find($parserCompany->id);
        $this->assertModelData($fakeParserCompany, $dbParserCompany->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteParserCompany()
    {
        $parserCompany = $this->makeParserCompany();
        $resp = $this->parserCompanyRepo->delete($parserCompany->id);
        $this->assertTrue($resp);
        $this->assertNull(ParserCompany::find($parserCompany->id), 'ParserCompany should not exist in DB');
    }
}
