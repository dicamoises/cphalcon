
extern zend_class_entry *phalcon_filter_sanitize_striptags_ce;

ZEPHIR_INIT_CLASS(Phalcon_Filter_Sanitize_Striptags);

PHP_METHOD(Phalcon_Filter_Sanitize_Striptags, __invoke);

ZEND_BEGIN_ARG_INFO_EX(arginfo_phalcon_filter_sanitize_striptags___invoke, 0, 0, 1)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, input, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, input)
#endif
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(phalcon_filter_sanitize_striptags_method_entry) {
	PHP_ME(Phalcon_Filter_Sanitize_Striptags, __invoke, arginfo_phalcon_filter_sanitize_striptags___invoke, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
