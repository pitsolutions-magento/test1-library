<?php
namespace Test\PaymentService;

interface Constants
{
    /**
     * API constants
     */
    const API_SPEC_VERSION = '1.16';

    const API_ACCEPT_HEADER_TYPE = 'application/json';

    const API_CHARSET = 'utf-8';

    const API_TIMEOUT = 30;

    const API_RETRY_INDICATOR = 0;

    const API_ALIAS_INSERT = 'api/Payment/v1/Alias/Insert';

    const API_ALIAS_GET_DETAILS = 'api/Payment/v1/Alias/AssertInsert';

    const API_DEFAULT_SHOP_NAME = 'Magento Shop';

    const API_DEFAULT_LANG_CODE = 'en';

    const API_PAYMENT_LIFE_TIME = 1000;

    const API_ALIAS_ID_GENERATOR = 'RANDOM_UNIQUE';

    const ACTIVE = 1;

    const INACTIVE = 0;

    const CARD_HOLDER_NAME_NONE = 'NONE';

    const SAFERPAY_MASTERPASS_WALLET = 'MASTERPASS';

    const SAFERPAY_APPLEPAY_WALLET = 'APPLEPAY';

    const API_ACTION_CAPTURE = 'capture';

    const API_ACTION_REFUND = 'refund';

    const PAYMENT_PAGE = 'PaymentPage';

    const TRANSACTION_PAGE = 'Iframe';

    const TRUE = true;

    const FORCE = 'FORCE';

    const API_ALIAS_AUTHENTICATION_ONLINE = 'ONLINE_STRONG';
}
