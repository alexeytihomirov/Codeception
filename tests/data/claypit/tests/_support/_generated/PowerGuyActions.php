<?php  //[STAMP] 84a81ce21b6bd84912f09844a9ff9b10
namespace _generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

use Codeception\Module\PowerHelper;

trait PowerGuyActions
{
   
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\PowerHelper::gotThePower()
     */
    public function gotThePower() {
        return $this->scenario->runStep(new \Codeception\Step\Action('gotThePower', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\PowerHelper::castFireball()
     */
    public function castFireball() {
        return $this->scenario->runStep(new \Codeception\Step\Action('castFireball', func_get_args()));
    }
}