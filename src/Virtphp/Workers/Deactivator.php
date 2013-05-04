<?php
/*
 * This file is part of VirtPHP.
 *
 * (c) Jordan Kasper <github @jakerella> 
 *     Ben Ramsey <github @ramsey>
 *     Jacques Woodcock <github @jwoodcock> 
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Virtphp\Workers;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class Deactivator
{

    /**
     * @var InputInterface
     */
    protected $input = null;
    /**
     * @var OutputInterface
     */
    protected $output = null;
    

    public function __construct(InputInterface $input, OutputInterface $output) {
      $this->input = $input;
      $this->output = $output;
      
    }
    
    
    public function execute() {
      
        try {
            
            $this->unsetEnvironmentVars();

        } catch (Exception $e) {
            $this->output->writeln("<error>ERROR: ".$e->getMessage()."</error>");
            // TODO: anything else?
        }
    }

    protected function unsetEnvironmentVars() {
        $this->output->writeln("<info>Resetting environment variables</info>");
    }


}
