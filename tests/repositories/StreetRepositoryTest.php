<?php

use App\Models\Street;
use App\Repositories\StreetRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StreetRepositoryTest extends TestCase
{
    use MakeStreetTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var StreetRepository
     */
    protected $streetRepo;

    public function setUp()
    {
        parent::setUp();
        $this->streetRepo = App::make(StreetRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateStreet()
    {
        $street = $this->fakeStreetData();
        $createdStreet = $this->streetRepo->create($street);
        $createdStreet = $createdStreet->toArray();
        $this->assertArrayHasKey('id', $createdStreet);
        $this->assertNotNull($createdStreet['id'], 'Created Street must have id specified');
        $this->assertNotNull(Street::find($createdStreet['id']), 'Street with given id must be in DB');
        $this->assertModelData($street, $createdStreet);
    }

    /**
     * @test read
     */
    public function testReadStreet()
    {
        $street = $this->makeStreet();
        $dbStreet = $this->streetRepo->find($street->id);
        $dbStreet = $dbStreet->toArray();
        $this->assertModelData($street->toArray(), $dbStreet);
    }

    /**
     * @test update
     */
    public function testUpdateStreet()
    {
        $street = $this->makeStreet();
        $fakeStreet = $this->fakeStreetData();
        $updatedStreet = $this->streetRepo->update($fakeStreet, $street->id);
        $this->assertModelData($fakeStreet, $updatedStreet->toArray());
        $dbStreet = $this->streetRepo->find($street->id);
        $this->assertModelData($fakeStreet, $dbStreet->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteStreet()
    {
        $street = $this->makeStreet();
        $resp = $this->streetRepo->delete($street->id);
        $this->assertTrue($resp);
        $this->assertNull(Street::find($street->id), 'Street should not exist in DB');
    }
}
