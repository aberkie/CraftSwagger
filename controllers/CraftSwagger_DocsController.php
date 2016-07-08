<?php

namespace Craft;

use Swagger\Serializer;

class CraftSwagger_DocsController extends BaseController
{

	public function actionGetDocs()
	{

		$swaggerJson = \Swagger\scan(CRAFT_PLUGINS_PATH.'/naturecatadventureapi');
		$serializer = new Serializer();
		$swagger = $serializer->deserialize($swaggerJson, 'Swagger\Annotations\Swagger');
		$this->returnJson($swagger);
	}

}