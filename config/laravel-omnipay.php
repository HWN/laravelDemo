<?php

return [

	// The default gateway to use
	'default' => 'alipay',

	// Add in each gateway here
	'gateways' => [
		'paypal' => [
			'driver'  => 'PayPal_Express',
			'options' => [
				'solutionType'   => '',
				'landingPage'    => '',
				'headerImageUrl' => ''
			]
		],
        'alipay' => [
            'driver' => 'Alipay_AopPage',
            'options' => [
                'environment' =>'sandbox',
                'appId' =>'2016080700185851',
                'signType' =>'RSA2',
                'privateKey' =>'MIIEpAIBAAKCAQEA1wlAh6II38y4k5yYrdbKazYRaB488UYz6ureOJaEy6WkpTHVXlV5rCV100HIgSrXdv0inxr3Bkc/BS3YYbn5mGYMh7bfkxNl1tCX8tTgXW2Uvqd31Uk/dQECkHQQ+sKXuAIhPHtX6wsIHWMIKa2Gvx4sx+vqlDXZ++06fKlZGsOUCWy8EeU+/7f17+1YbNf6M51CaafiQwF1F0MXVg+Kghm1u9x8ualSm5+bhS1vTAVx+PNfaKTSz5xB0nDJUBbIEYmEgYPp8lYQFlr3w2rrt+6FVQHecUur8tXv5rPrbi8FvT6PyKgy5w8kprc1ZWFaYIxNgBSyenirLeK1Z+DoUQIDAQABAoIBACJ0jA9viiZ6AhU84UXxhauaFT3uomsyiX0ZtxOwIoUS/IevrXWZEo7fzbpU7xCrUazyMIr34h7yaYml5+b4yqJ9r4JLbhV95TJ/Z+lz7KNrvIq0AMJ/IxjXWZbV0iar6W2FgdfUF6lEsj8rMBKliFK1Pg2mooau/kecomN5KxrbcmTlvwLeHbf/WAfUgJn80A164fWScSfcP+4LtgWq2bu3a8QVetFTbZ962qLmRYVTarmZ5OxzMEAFtrXhj77rXtLlz5zO/3LwAfEKnnGrJjZ7YDRmleTd+v3Aka4hgc5d4HvKjbXqS6BrWYzCJ5DFemJlYnaM8CjULxuvlkouDEECgYEA9kS7TuyDhSHlzvCKCzgWWz7PFIIwGwWekFCBB/AD/nZks+XcQx0lc5QG/7EoSbAh6SvvsevA7V0SzDaQGVgKMGt/T0lJKxQGEO4jIqTiiQukvQnf+CzzNufz3QuWVhM5D2kqa5i6u3WJwWO82gTddXW1QJRZaWiN4g+WCUr4VTkCgYEA34iSa0D/55kYlN4r1GXkv+J5Z3N27oGi9z+J3aHyTi7uMAum+i7UZSOFvJ+buTT89cXbOILDQrcEdMP5UaLkTP6kBkzQhYgMvS/08zhJWF6tOwAZoMChf8BR0JPmqO83CE23BvIgrEEnh+Attv5j4ZrcALVuO00/EGeWzu5pA9kCgYBOcSgkhIuD/X8gwleGKVBdsgzt4GYIRWrzVuEysQ3koLuE3eOh8Qe739u22CwYBKVYiyknSAvEz4+sQnj1yag9MhB0JcjLku43uFKyt0h9FJtdp2aSu2ahB5MSxp0VP7w+H2ZmrVhVW6QMWIOQAlq0DlE0h8xPGgGPjx1gSmP9aQKBgQCZo7AnwexiTesEX1Q2z7YTYWFahpVHR5kwYd6rlCUMMduK8GdbbBaWUX0ZcYbCHLaFYvHTfKUi1NJeQ1i5EMHkXd11axSjwygmXLD6/0QCVkiw1dfHkr8uJIzXVODkWk80CN51CrUEUGAQVzh0n5MdPKhcYFecsPJYnyqbnmhVuQKBgQCJ123R7td9bzFgSD83EZx79UFdX525d4gn9+OFc+U7sEdrTNGZmshq/sxztQ5UknAro/Tvhk0Pbwov/SuseFQMTX+TuhmNN7hp/hC9AJFcRMSGFaOehgOLz3qXgRb7NwZwVJqktt9H+s+cAN5GZDMvRxKMsEglIwQVT1Zk6dPyEQ==',
                'alipayPublicKey' =>'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1wlAh6II38y4k5yYrdbKazYRaB488UYz6ureOJaEy6WkpTHVXlV5rCV100HIgSrXdv0inxr3Bkc/BS3YYbn5mGYMh7bfkxNl1tCX8tTgXW2Uvqd31Uk/dQECkHQQ+sKXuAIhPHtX6wsIHWMIKa2Gvx4sx+vqlDXZ++06fKlZGsOUCWy8EeU+/7f17+1YbNf6M51CaafiQwF1F0MXVg+Kghm1u9x8ualSm5+bhS1vTAVx+PNfaKTSz5xB0nDJUBbIEYmEgYPp8lYQFlr3w2rrt+6FVQHecUur8tXv5rPrbi8FvT6PyKgy5w8kprc1ZWFaYIxNgBSyenirLeK1Z+DoUQIDAQAB',
                'returnUrl' => 'https://www.example.com/return',
                'notifyUrl' => 'https://www.example.com/notify'
            ]
        ],
        'alipay_mobie' => [
            'driver' => 'Alipay_AopWap',
            'options' => [
                'environment' =>'sandbox',
                'appId' =>'2016080700185851',
                'signType' =>'RSA2',
                'privateKey' =>'MIIEpAIBAAKCAQEA1wlAh6II38y4k5yYrdbKazYRaB488UYz6ureOJaEy6WkpTHVXlV5rCV100HIgSrXdv0inxr3Bkc/BS3YYbn5mGYMh7bfkxNl1tCX8tTgXW2Uvqd31Uk/dQECkHQQ+sKXuAIhPHtX6wsIHWMIKa2Gvx4sx+vqlDXZ++06fKlZGsOUCWy8EeU+/7f17+1YbNf6M51CaafiQwF1F0MXVg+Kghm1u9x8ualSm5+bhS1vTAVx+PNfaKTSz5xB0nDJUBbIEYmEgYPp8lYQFlr3w2rrt+6FVQHecUur8tXv5rPrbi8FvT6PyKgy5w8kprc1ZWFaYIxNgBSyenirLeK1Z+DoUQIDAQABAoIBACJ0jA9viiZ6AhU84UXxhauaFT3uomsyiX0ZtxOwIoUS/IevrXWZEo7fzbpU7xCrUazyMIr34h7yaYml5+b4yqJ9r4JLbhV95TJ/Z+lz7KNrvIq0AMJ/IxjXWZbV0iar6W2FgdfUF6lEsj8rMBKliFK1Pg2mooau/kecomN5KxrbcmTlvwLeHbf/WAfUgJn80A164fWScSfcP+4LtgWq2bu3a8QVetFTbZ962qLmRYVTarmZ5OxzMEAFtrXhj77rXtLlz5zO/3LwAfEKnnGrJjZ7YDRmleTd+v3Aka4hgc5d4HvKjbXqS6BrWYzCJ5DFemJlYnaM8CjULxuvlkouDEECgYEA9kS7TuyDhSHlzvCKCzgWWz7PFIIwGwWekFCBB/AD/nZks+XcQx0lc5QG/7EoSbAh6SvvsevA7V0SzDaQGVgKMGt/T0lJKxQGEO4jIqTiiQukvQnf+CzzNufz3QuWVhM5D2kqa5i6u3WJwWO82gTddXW1QJRZaWiN4g+WCUr4VTkCgYEA34iSa0D/55kYlN4r1GXkv+J5Z3N27oGi9z+J3aHyTi7uMAum+i7UZSOFvJ+buTT89cXbOILDQrcEdMP5UaLkTP6kBkzQhYgMvS/08zhJWF6tOwAZoMChf8BR0JPmqO83CE23BvIgrEEnh+Attv5j4ZrcALVuO00/EGeWzu5pA9kCgYBOcSgkhIuD/X8gwleGKVBdsgzt4GYIRWrzVuEysQ3koLuE3eOh8Qe739u22CwYBKVYiyknSAvEz4+sQnj1yag9MhB0JcjLku43uFKyt0h9FJtdp2aSu2ahB5MSxp0VP7w+H2ZmrVhVW6QMWIOQAlq0DlE0h8xPGgGPjx1gSmP9aQKBgQCZo7AnwexiTesEX1Q2z7YTYWFahpVHR5kwYd6rlCUMMduK8GdbbBaWUX0ZcYbCHLaFYvHTfKUi1NJeQ1i5EMHkXd11axSjwygmXLD6/0QCVkiw1dfHkr8uJIzXVODkWk80CN51CrUEUGAQVzh0n5MdPKhcYFecsPJYnyqbnmhVuQKBgQCJ123R7td9bzFgSD83EZx79UFdX525d4gn9+OFc+U7sEdrTNGZmshq/sxztQ5UknAro/Tvhk0Pbwov/SuseFQMTX+TuhmNN7hp/hC9AJFcRMSGFaOehgOLz3qXgRb7NwZwVJqktt9H+s+cAN5GZDMvRxKMsEglIwQVT1Zk6dPyEQ==',
                'alipayPublicKey' =>'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1wlAh6II38y4k5yYrdbKazYRaB488UYz6ureOJaEy6WkpTHVXlV5rCV100HIgSrXdv0inxr3Bkc/BS3YYbn5mGYMh7bfkxNl1tCX8tTgXW2Uvqd31Uk/dQECkHQQ+sKXuAIhPHtX6wsIHWMIKa2Gvx4sx+vqlDXZ++06fKlZGsOUCWy8EeU+/7f17+1YbNf6M51CaafiQwF1F0MXVg+Kghm1u9x8ualSm5+bhS1vTAVx+PNfaKTSz5xB0nDJUBbIEYmEgYPp8lYQFlr3w2rrt+6FVQHecUur8tXv5rPrbi8FvT6PyKgy5w8kprc1ZWFaYIxNgBSyenirLeK1Z+DoUQIDAQAB',
                'notifyUrl' => 'https://www.example.com/notify'
            ]
        ]
	]

];