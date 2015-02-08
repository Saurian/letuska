<?php


namespace CmsModule\TravelService;

use Nette;
use Nette\ComponentModel\Component;
use Nette\Object;


interface IComponentMapper
{

	const FIELD_NAME = 'field.name';
	const ITEMS_TITLE = 'items.title';
	const ITEMS_FILTER = 'items.filter';
	const ITEMS_ORDER = 'items.order';


    /**
     * @param Component $component
     * @param Object    $request
     *
     * @return
     */
	function load(Component $component, Object $request);


    /**
     * @param Component $component
     * @param Object    $request
     *
     * @return
     */
	function save(Component $component, Object $request);

}
