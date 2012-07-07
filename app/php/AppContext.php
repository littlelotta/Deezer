<?php

  namespace App;

  class AppContext extends \Simplon\SimplonContext
  {
    /**
     * @var AppContext
     */
    private static $_instance;

    // ########################################

    /**
     * @static
     * @return AppContext|\Simplon\SimplonContext
     */
    public static function getInstance()
    {
      if (!AppContext::$_instance)
      {
        AppContext::$_instance = new AppContext();
      }

      return AppContext::$_instance;
    }

    // ########################################

    /**
     * @return Vo\Config\ThirdPartyConfigVo|\Simplon\Vo\Config\CoreThirdPartyConfigVo
     */
    public function getThirdPartyConfigVo()
    {
      return new \App\Vo\Config\ThirdPartyConfigVo();
    }

    // ########################################

    /**
     * @return Vo\Config\DeezerConfigVo
     */
    public function getDeezerConfig()
    {
      /** @var $thirdPartyConfigVo \App\Vo\Config\ThirdPartyConfigVo */
      $thirdPartyConfigVo = $this->getThirdPartyConfig();

      $configVo = new \App\Vo\Config\DeezerConfigVo();
      $configVo->setData($thirdPartyConfigVo->getDeezerConfig());

      return $configVo;
    }
  }
