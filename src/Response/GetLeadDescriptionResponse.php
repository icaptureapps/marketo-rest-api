<?php
/*
 * This file is part of the Marketo REST API Client package.
 *
 * (c) 2016 Michael Porter (based on Daniel Chesterton's work)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CSD\Marketo\Response;

use CSD\Marketo\Response;

/**
 * Response for the getLeads API method.
 *
 * @author Michael Porter <michael@icapture.com>
 */
class GetLeadDescriptionResponse extends Response
{
    /**
     * @return array|null
     */
    public function getLeadDescription()
    {
        return $this->getResult();
    }
}
