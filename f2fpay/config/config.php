<?php
$config = array (
		//签名方式,默认为RSA2(RSA2048)
		'sign_type' => "RSA2",

		//支付宝公钥
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhYYOfJYtZAanGsqUnjuN2wjqlADjO1UfKLLc+kbyq1TEY/w/66TmbN67hI2R4XBo6rsIbzKp47Qr3QSK1vLwHb6iHGM05zoWkc2eanrk369zilH24fOP4DoOI5MKn3/hKOwNnnBYmn6JwTFkwwC13pfDVrsI4dsOOYz34s+B3IDQdkDQarlFLQk6KR+e7CH32OfeiIbjGzdbLfpZF+QhMZpzYErEON0/rTcGU/TV/ApgQOo92ADeVr0/j3j00chA5qjCl2Y0bO6NH9vqvtFfEfClbPkjwRYWbm4v1wzYuXQUZEZ/jm7t4qR2iwtOxe2NWL4iT25dEy0UipERlLwCWQIDAQAB",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAhYYOfJYtZAanGsqUnjuN2wjqlADjO1UfKLLc+kbyq1TEY/w/66TmbN67hI2R4XBo6rsIbzKp47Qr3QSK1vLwHb6iHGM05zoWkc2eanrk369zilH24fOP4DoOI5MKn3/hKOwNnnBYmn6JwTFkwwC13pfDVrsI4dsOOYz34s+B3IDQdkDQarlFLQk6KR+e7CH32OfeiIbjGzdbLfpZF+QhMZpzYErEON0/rTcGU/TV/ApgQOo92ADeVr0/j3j00chA5qjCl2Y0bO6NH9vqvtFfEfClbPkjwRYWbm4v1wzYuXQUZEZ/jm7t4qR2iwtOxe2NWL4iT25dEy0UipERlLwCWQIDAQABAoIBAGvkMviA8RSOO6DuaMCjJrECt2n4faSH17GvNdgWVCgVSsvwHEZw7LC0GZm2O1aK2nwxvVL9AUI5Z+gjr3yYuWWPkLaXgzwEOBCAsa0guKf2wcnXCULy6CMrRhmAy2iukGXct/R6m13bObyeCOl5PXwr7W+7miXGN+xQ+EyRmEFvt88OGZn7+fKp2KEWGcC1zF0MaRY4aiNpwysPIbWcIzTna9paZxJ1xZAnpopXGRNQscstgKSyBnLb9yj43+3RuWtXeOMUPLp8QQ9lVyQ/nXKksHy4ZUzmxC8R3kf1OAONuOMQH52yc4DUpN9/PCu8QWIRdIQCgtbUpk+a5V0JzgECgYEA0eseNOohyk4qFBOwyLfhmNrHTN4M52MwW1rRoJ9KLPzlrs58kQFwrRtnYvUSUdxyozwGG+5zphIrL9AkEOeDcsvSP9y64UjFZiRjgEub++BuZ6trPA+AW+BXIyOMDGhsF6JL/DmeOhZnL8U0MLRag6AUvN0ZV+w1uTsb5pXhH0kCgYEAotW/J7GaV5Zl9+mfNCXn3H6AI/mOiVyfazyhVwKPghMzusu/OfrvOzJR75YzE3mO70ug6yjAMh1OHx2ZLvyma8Wiub/Yl9niIWBWwewM3mCVY41+0AToKAMHdSZYylcnDzh4Ol1fF8DUdnTqTRnKWuy41XocNtJtnXXa0R5M+pECgYEAwjhjrlmiAefoDsNZIZzgYeip1XjtP3kKWLvikFZQ7ubeK6ponlFSyxc7xNcyqALrHhR/IoCxB8pvosFVXT6W5DOox+WWErKd0S+B0EYkgBrai5iSkvNUs60RcjWFckV7HTLQUwGMX/oyZoRzEU0NIhOOnF+E/1BRNJx36BRsQeECgYAiaiBzaDLhjhTQ95xBLj25uTal48l/OIcs5+yFcjIYYKyPLx6kR2emUDVG+Kyk0g0mgApriPpN3Sm0o9HLP3SA1I1WyrghJ9iGC1FqvNPfb/RCzRXfKxpR0ooR9V/Qq+jCa8HlO/SsFYIR4xXd47SD0QIjhCJQZ9ro646qocfNMQKBgEs7r1BCmu2a4IzKnUM0fe2jpPzeK3uC6avHbKgd/SnBeOHQ3DkVonM39hdT+8681bQqd6M3tpC2rt69tm0VSgNofwqAqjp2gh79JAbMRcC8+UUr234+/kwIvm4wW3SxAziuGznSV5NQ8NBy08uyo+AALe825GGZh66/MY6mN+2U",

		//编码格式
		'charset' => "UTF-8",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//应用ID
		'app_id' => "2021001108668243",

		//异步通知地址,只有扫码支付预下单可用
		'notify_url' => "http://firstvgh.top/notify_url.php",

		//最大查询重试次数
		'MaxQueryRetry' => "10",

		//查询间隔
		'QueryDuration' => "3"
);