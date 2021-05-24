<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getBreakTemplatesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202011\BreakTemplatePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202011\BreakTemplatePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202011\BreakTemplatePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202011\BreakTemplatePage $rval
     * @return \Google\AdsApi\AdManager\v202011\getBreakTemplatesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}