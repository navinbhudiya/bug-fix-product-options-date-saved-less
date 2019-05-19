<?php
namespace Navin\Base\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

class Data extends AbstractHelper {

    protected $logger;
    protected $scopeConfig;
    public function __construct(Context $context, StoreManagerInterface $storeManager,\Magento\Framework\Locale\Resolver $store_local) {
        parent::__construct($context);
        $this->scopeConfig = $context->getScopeConfig();
        $this->storeManager = $storeManager;
        $this->store_local=$store_local;
    }

    #########################################################################################
    # All Comman function
    #########################################################################################

    public function getStoreConfig($storePath) {
        $storeConfig = $this->scopeConfig->getValue($storePath, ScopeInterface::SCOPE_STORE);
        return $storeConfig;
    }

    public function log($info) {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/elmec_connection.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info($info);
    }

    public function getStoreUrl() {
        return $this->storeManager->getStore()->getBaseUrl();
    }

    ###################################################################################################
    # Function for ALL
    ###################################################################################################
    public function getFormattedDate($date,$default_format){
        if($this->store_local->getLocale()!='ar_SA'){
            $date=date("d-m-Y", strtotime($date));
        }else{
            $date=$default_format;
        }
        return $date;
    }

}
