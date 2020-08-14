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

namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetJobStats
 * Elasticsearch API name ml.get_job_stats
 * Generated running $ php util/GenerateEndpoints.php 7.9
 *
 */
class GetJobStats extends AbstractEndpoint
{
    protected $job_id;

    public function getURI(): string
    {
        $job_id = $this->job_id ?? null;

        if (isset($job_id)) {
            return "/_ml/anomaly_detectors/$job_id/_stats";
        }
        return "/_ml/anomaly_detectors/_stats";
    }

    public function getParamWhitelist(): array
    {
        return [
            'allow_no_jobs'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setJobId($job_id): GetJobStats
    {
        if (isset($job_id) !== true) {
            return $this;
        }
        $this->job_id = $job_id;

        return $this;
    }
}
