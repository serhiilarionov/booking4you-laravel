<?php

use App\Models\Lang;
use App\Repositories\LangRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LangRepositoryTest extends TestCase
{
    use MakeLangTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var LangRepository
     */
    protected $langRepo;

    public function setUp()
    {
        parent::setUp();
        $this->langRepo = App::make(LangRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateLang()
    {
        $lang = $this->fakeLangData();
        $createdLang = $this->langRepo->create($lang);
        $createdLang = $createdLang->toArray();
        $this->assertArrayHasKey('id', $createdLang);
        $this->assertNotNull($createdLang['id'], 'Created Lang must have id specified');
        $this->assertNotNull(Lang::find($createdLang['id']), 'Lang with given id must be in DB');
        $this->assertModelData($lang, $createdLang);
    }

    /**
     * @test read
     */
    public function testReadLang()
    {
        $lang = $this->makeLang();
        $dbLang = $this->langRepo->find($lang->id);
        $dbLang = $dbLang->toArray();
        $this->assertModelData($lang->toArray(), $dbLang);
    }

    /**
     * @test update
     */
    public function testUpdateLang()
    {
        $lang = $this->makeLang();
        $fakeLang = $this->fakeLangData();
        $updatedLang = $this->langRepo->update($fakeLang, $lang->id);
        $this->assertModelData($fakeLang, $updatedLang->toArray());
        $dbLang = $this->langRepo->find($lang->id);
        $this->assertModelData($fakeLang, $dbLang->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteLang()
    {
        $lang = $this->makeLang();
        $resp = $this->langRepo->delete($lang->id);
        $this->assertTrue($resp);
        $this->assertNull(Lang::find($lang->id), 'Lang should not exist in DB');
    }
}
