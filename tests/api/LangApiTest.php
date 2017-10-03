<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LangApiTest extends TestCase
{
    use MakeLangTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateLang()
    {
        $lang = $this->fakeLangData();
        $this->json('POST', '/api/v1/langs', $lang);

        $this->assertApiResponse($lang);
    }

    /**
     * @test
     */
    public function testReadLang()
    {
        $lang = $this->makeLang();
        $this->json('GET', '/api/v1/langs/'.$lang->id);

        $this->assertApiResponse($lang->toArray());
    }

    /**
     * @test
     */
    public function testUpdateLang()
    {
        $lang = $this->makeLang();
        $editedLang = $this->fakeLangData();

        $this->json('PUT', '/api/v1/langs/'.$lang->id, $editedLang);

        $this->assertApiResponse($editedLang);
    }

    /**
     * @test
     */
    public function testDeleteLang()
    {
        $lang = $this->makeLang();
        $this->json('DELETE', '/api/v1/langs/'.$lang->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/langs/'.$lang->id);

        $this->assertResponseStatus(404);
    }
}
