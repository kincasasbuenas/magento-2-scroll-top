<?php
/**
 * Copyright (c) 2024 - Kevin casasbuenas (https://kincasasbuenas.dev/)
 * @author      Kevin Casasbuenas <kincasasbuenas@outlook.com>
 * @category    Kinuz
 * @module      Kinuz/ScrollTop
 */ 

declare(strict_types=1);

namespace Kinuz\ScrollTop\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\ScopeInterface;

/**
 *  Data class view model
 */
class Data implements ArgumentInterface
{   
    /**
     * @var string
     */
    private const XML_PATH_IS_ENABLE = 'scrolltop/general/enable';

    /**
     * @var string
     */
    private const XML_PATH_POSITION = 'scrolltop/general/position';

    /**
     * @var string
     */
    private const XML_PATH_BOTTOM_SPACE = 'scrolltop/general/bottom_space';

    /**
     * @var string
     */
    private const XML_PATH_VERTICAL_SPACE = 'scrolltop/general/vertical_space';

    /**
    * Construct
    *
    * @param ScopeConfigInterface $scopeConfig
    */
    public function __construct(
        protected ScopeConfigInterface $scopeConfig
    ) { }
    
    /**
     * Return status enable or disable
     * 
     * @return Boolean
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue(
                self::XML_PATH_IS_ENABLE,
                ScopeInterface::SCOPE_STORE
            );
    }

    /**
     * Return Position
     * 
     * @return String
     */
    public function getPosition()
    {
        return $this->scopeConfig->getValue(
                self::XML_PATH_POSITION,
                ScopeInterface::SCOPE_STORE
            );
    }

    /**
     * Return bottom space
     * 
     * @return String
     */
    public function getBottomSpace()
    {
        return $this->scopeConfig->getValue(
                self::XML_PATH_BOTTOM_SPACE,
                ScopeInterface::SCOPE_STORE
            );
    }

    /**
     * Return vertical space
     * 
     * @return String
     */
    public function getVerticalSpace()
    {
        return $this->scopeConfig->getValue(
                self::XML_PATH_VERTICAL_SPACE,
                ScopeInterface::SCOPE_STORE
            );
    }
}
