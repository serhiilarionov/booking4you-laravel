<?php

trait ApiTestTrait
{
    public function assertApiResponse(Array $actualData)
    {
        $this->assertApiSuccess();

        $response = json_decode($this->response->getContent(), true);
        if (isset($response['data'])) {
            $responseData = $response['data'];
        } else {
            $responseData = $response;
        }

        $this->assertNotEmpty($responseData['id']);
        $this->assertModelData($actualData, $responseData);
    }

    public function assertApiSuccess()
    {
        $this->assertResponseOk();
//        $this->seeJson(['success' => true]);
    }

    public function assertModelData(Array $actualData, Array $expectedData)
    {
        //var_dump($actualData);
        if (isset($actualData['translations'])) {
            unset($actualData['translations']);
        }
        foreach ($actualData as $key => $value) {
            $this->assertEquals($actualData[$key], $expectedData[$key]);
        }
    }
}