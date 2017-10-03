<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StreetApiTest extends TestCase
{
    use MakeStreetTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateStreet()
    {
        $street = $this->fakeStreetData();
        $this->json('POST', '/api/v1/streets', $street);

        $this->assertApiResponse($street);
    }

    /**
     * @test
     */
    public function testReadStreet()
    {
        $street = $this->makeStreet();
        $this->json('GET', '/api/v1/streets/'.$street->id);

        $this->assertApiResponse($street->toArray());
    }

    /**
     * @test
     */
    public function testUpdateStreet()
    {
        $street = $this->makeStreet();
        $editedStreet = $this->fakeStreetData();

        $this->json('PUT', '/api/v1/streets/'.$street->id, $editedStreet);

        $this->assertApiResponse($editedStreet);
    }

    /**
     * @test
     */
    public function testDeleteStreet()
    {
        $street = $this->makeStreet();
        $this->json('DELETE', '/api/v1/streets/'.$street->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/streets/'.$street->id);

        $this->assertResponseStatus(404);
    }
}
