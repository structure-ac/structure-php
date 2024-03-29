<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace structure\Structure\Models\Operations;

use \structure\Structure\Utils\SpeakeasyMetadata;
class ListJobsRequest
{
    /**
     * ID of the company
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
    /**
     * The offset number to start at
     * 
     * @var ?string $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?string $offset = null;
    
    /**
     * Number of results per page (0-100)
     * 
     * @var ?string $perPage
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=per_page')]
    public ?string $perPage = null;
    
	public function __construct()
	{
		$this->id = "";
		$this->offset = null;
		$this->perPage = null;
	}
}
