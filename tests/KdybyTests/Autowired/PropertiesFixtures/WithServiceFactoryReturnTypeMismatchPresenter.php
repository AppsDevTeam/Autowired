<?php
declare(strict_types=1);

namespace KdybyTests\Autowired\PropertiesFixtures;

use Kdyby;
use KdybyTests\Autowired\PropertiesFixtures\UseExpansion\ImportedService;
use Nette;


class WithServiceFactoryReturnTypeMismatchPresenter extends Nette\Application\UI\Presenter
{

	use Kdyby\Autowired\AutowireProperties;


	/**
	 * @autowire("missmatch", factory=\KdybyTests\Autowired\PropertiesFixtures\SampleServiceFactory)
	 */
	public ImportedService $service;

}
