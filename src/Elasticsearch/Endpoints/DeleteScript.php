<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */

declare(strict_types = 1);

namespace Elasticsearch\Endpoints;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class DeleteScript
 * Elasticsearch API name delete_script
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class DeleteScript extends AbstractEndpoint
{

    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_scripts/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint delete_script');
    }

    public function getParamWhitelist(): array
    {
        return [
            'timeout',
            'master_timeout'
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }
}
