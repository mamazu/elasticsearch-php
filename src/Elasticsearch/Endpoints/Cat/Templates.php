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

namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Templates
 *
 */
class Templates extends AbstractEndpoint
{
    private $name;

    /**
     * @param string $name
     * @return Templates
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        if (isset($this->name)) {
            return "/_cat/templates/{$this->name}";
        } else {
            return "/_cat/templates";
        }
    }

    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array(
            'format',
            'node_id',
            'actions',
            'detailed',
            'parent_node',
            'parent_task',
            'h',
            'help',
            'v',
            's',
            'local',
            'master_timeout',
        );
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'GET';
    }
}
