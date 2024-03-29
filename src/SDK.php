<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace structure\Structure;

/**
 * SDK - Structure: Structure provides company and people data. Use our dataset of 700 million people and 24 million companies to build products, enrich person profiles, power predictive modeling/ai, analysis, and more.
 * 
 * @package structure\Structure
 * @access public
 */
class SDK
{
	public const SERVERS = [
		'https://www.structure.ac/api/v1',
	];
  	
    /**
     * Accounts
     * 
     * @var Accounts $$accounts
     */
	public Accounts $accounts;
	
    /**
     * Companies
     * 
     * @var Companies $$companies
     */
	public Companies $companies;
	
    /**
     * People
     * 
     * @var People $$people
     */
	public People $people;
	
    /**
     * User
     * 
     * @var User $$user
     */
	public User $user;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return SDKBuilder
	 */
	public static function builder(): SDKBuilder
	{
		return new SDKBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->accounts = new Accounts($this->sdkConfiguration);
		
		$this->companies = new Companies($this->sdkConfiguration);
		
		$this->people = new People($this->sdkConfiguration);
		
		$this->user = new User($this->sdkConfiguration);
	}
}