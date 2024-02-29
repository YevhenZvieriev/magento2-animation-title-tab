<?php
declare(strict_types=1);

namespace Zvirko\AnimateTitle\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

 class Config implements ArgumentInterface
{
    const ENABLED_PATH = 'animationTitleTab/general/enable';

    const ANIMATION_TITLE_TAB_TEXT = 'animationTitleTab/general/animationTitleTab';

    const VALUE_FROM_ADMIN = 'animationTitleTab/general/getValueFromAdmin';

     /**
      * @var ScopeConfigInterface
      */
    public ScopeConfigInterface $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
    }

     /**
      * @return mixed
      */
    public function ifEnable(): mixed
    {
        return $this->scopeConfig->getValue(self::ENABLED_PATH);
    }

     /**
      * @return mixed
      */
    public function getAnimationTitleTabText(): mixed
    {
        return $this->scopeConfig->getValue(self::ANIMATION_TITLE_TAB_TEXT);
    }

     /**
      * @return mixed
      */
     public function getValueFromAdmin(): mixed
     {
         return $this->scopeConfig->getValue(self::VALUE_FROM_ADMIN);
     }
}