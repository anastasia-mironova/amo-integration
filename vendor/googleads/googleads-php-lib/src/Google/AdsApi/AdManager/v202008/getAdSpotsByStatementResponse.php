<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAdSpotsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\AdSpotPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202008\AdSpotPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\AdSpotPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\AdSpotPage $rval
     * @return \Google\AdsApi\AdManager\v202008\getAdSpotsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
