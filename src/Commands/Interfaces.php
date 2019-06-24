<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 18/04/2017
 * Time: 00:17
 */

namespace jjsquady\MikrotikApi\Commands;

use jjsquady\MikrotikApi\Core\Client;
use jjsquady\MikrotikApi\Exceptions\CommandException;

/**
 * Class InterfaceCommand
 * @package MiKontrol\Http\MikrotikApi\Commands
 */
class Interfaces extends Command
{
    /**
     * Interfaces constructor.
     * @param Client $client
     * @throws CommandException
     */
    public function __construct(Client $client)
    {
        $this->entityClass = config('mikrotik.entities.interface');

        parent::__construct($client);
    }

    /**
     * @param $id
     * @throws CommandException
     */
    public function remove($id)
    {
        throw new CommandException('Interfaces cannot be removed.');
    }
}