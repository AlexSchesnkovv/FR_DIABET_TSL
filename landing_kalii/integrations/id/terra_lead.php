<?php
require_once './lib/checker.php';
require_once './lib/logger.php';

$data_lead = array(
	'name' => $_POST['name'],
	'phone' => $_POST['phone'],
	'region' => $_POST['region'] ?? null,
	'city' => $_POST['city'] ?? null,
	'count' => $_POST['count'] ?? null,
	'offer_id' => $_POST['offer_id'],
	'stream_id' => '',
	'country' => $_POST['country'],
	'tz' => '',
	'address' => $_POST['address'] ?? null,
	'email' => $_POST['email'] ?? null,
	'zip' => $_POST['zip'] ?? null,
	'user_comment' => $_POST['user_comment'] ?? null,
	'referer' => $_POST['referer'] ?? $_SERVER['HTTP_REFERER'] ?? null,

	'utm_source' => $_POST['utm_source'] ?? null,
	'utm_medium' => $_POST['utm_medium'] ?? null,
	'utm_campaign' => $_POST['utm_campaign'] ?? null,
	'utm_term' => $_POST['utm_term'] ?? null,
	'utm_content' => $_POST['utm_content'] ?? null,

	'sub_id' => $_POST['sub_id'] ?? null,
	'sub_id_1' => $_POST['sub_id_1'] ?? null,
	'sub_id_2' => $_POST['sub_id_2'] ?? null,
	'sub_id_3' => $_POST['sub_id_3'] ?? null,
	'sub_id_4' => $_POST['sub_id_4'] ?? null,
);

try {
	$apiConnector = new CApiConnector();

	$lead = $apiConnector->create(array(
		'name' => $_POST['name'],
		'phone' => $_POST['phone'],
		'region' => $_POST['region'] ?? null,
		'city' => $_POST['city'] ?? null,
		'count' => $_POST['count'] ?? null,
		'offer_id' => $_POST['offer_id'],
		'stream_id' => '',
		'country' => $_POST['country'],
		'tz' => '',
		'address' => $_POST['address'] ?? null,
		'email' => $_POST['email'] ?? null,
		'zip' => $_POST['zip'] ?? null,
		'user_comment' => $_POST['user_comment'] ?? null,
		'referer' => $_POST['referer'] ?? $_SERVER['HTTP_REFERER'] ?? null,

		'utm_source' => $_POST['utm_source'] ?? null,
		'utm_medium' => $_POST['utm_medium'] ?? null,
		'utm_campaign' => $_POST['utm_campaign'] ?? null,
		'utm_term' => $_POST['utm_term'] ?? null,
		'utm_content' => $_POST['utm_content'] ?? null,

		'sub_id' => $_POST['sub_id'] ?? null,
		'sub_id_1' => $_POST['sub_id_1'] ?? null,
		'sub_id_2' => $_POST['sub_id_2'] ?? null,
		'sub_id_3' => $_POST['sub_id_3'] ?? null,
		'sub_id_4' => $_POST['sub_id_4'] ?? null,
	));

	if ($lead) {
		$response = "Lead ID #" . $lead->id . ". Status " . $lead->status;
		$status = 'success';
		$httpcode = '';
		$cookies = [
			'httpcode' => $httpcode,
			'response' => $response,
			'pixel' => $_POST['pixel'],
			'ttq' => $_POST['ttq'],
			'language' => $_POST['language'],
			'name' => $_POST['name'],
			'phone' => $_POST['phone'],
			'ordered' => ($status === 'success') ? 1 : 0,
			'status' => $status,
		];
		foreach ($cookies as $key => $value)
			setcookie($key, $value, time() + 60 * 60 * 24, '/');
		writeToLog($data_lead, $httpcode, $response, $status, basename(__FILE__, ".php"));
		header("Location: ./success_page/success.php");
	}
} catch (Exception $e) {
	$response = $e->getMessage();
	$status = 'error';
	$httpcode = '';
	$cookies = [
		'httpcode' => $httpcode,
		'response' => $response,
		'pixel' => $_POST['pixel'],
		'ttq' => $_POST['ttq'],
		'language' => $_POST['language'],
		'name' => $_POST['name'],
		'phone' => $_POST['phone'],
		'ordered' => ($status === 'success') ? 1 : 0,
		'status' => $status,
	];
	foreach ($cookies as $key => $value)
		setcookie($key, $value, time() + 60 * 60 * 24, '/');
	writeToLog($data_lead, $httpcode, $response, $status, basename(__FILE__, ".php"));
	header("Location: ./success_page/success.php");
}

class CApiConnector
{
	public $config = array(
		'api_key' => '5cccdcd62be27ccbff27d92cf4424a0b',
		'offer_id' => '',
		'user_id' => '34515',
		'api_domain' => 'http://tl-api.com',
	);

	public function create($params)
	{
		$data = [
			'name' => empty($params['name']) ? '' : trim($params['name']),    //name
			'phone' => empty($params['phone']) ? '' : trim($params['phone']),   //phone
			'offer_id' => $_POST['offer_id'],
			'country' => empty($params['country']) ? '' : trim($params['country']), //country
		];

		$not_require_params = [
			'tz', //Time zone
			'address', //Address
			'region', //Region
			'city', //City
			'zip', //Zip
			'stream_id', //Stream ID
			'count', //Count
			'email', //Email
			'user_comment', //Comment

			//utm marks
			'utm_source',
			'utm_medium',
			'utm_campaign',
			'utm_term',
			'utm_content',

			//sub-parameters
			'sub_id',
			'sub_id_1',
			'sub_id_2',
			'sub_id_3',
			'sub_id_4',

			'referer', //Referer
			'user_agent', //User Agent
			'ip', //IP
		];

		if (!empty($params)) {
			foreach ($params as $param_key => $param_value) {
				if (in_array($param_key, $not_require_params)) {
					$data[$param_key] = $param_value;
				}
			}
		}

		return $this->get_data($data, 'lead', 'create');
	}

	public function status($id)
	{
		$data = [
			'id' => $id,
		];

		return $this->get_data($data, 'lead', 'status');
	}

	protected function check_sum($json_data): string
	{
		return sha1($json_data . $this->config['api_key']);
	}

	protected function request($data, $model, $method, array $headers = array()): array
	{
		$data = [
			'user_id' => $this->config['user_id'],
			'data' => $data
		];

		$json_data = json_encode($data);

		$api_url = $this->config['api_domain'] . '/api/' . $model . '/' . $method . '?' . http_build_query(array(
			'check_sum' => $this->check_sum($json_data)
		));

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

		if (!empty($headers)) {
			$http_headers = array();

			foreach ($headers as $header_name => $header_value) {
				$http_headers[] = $header_name . ': ' . $header_value;
			}

			curl_setopt($ch, CURLOPT_HTTPHEADER, $http_headers);
		}

		$result = curl_exec($ch);

		$curl_error = curl_error($ch);
		$curl_errno = curl_errno($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);

		$response = array(
			'error' => $curl_error,
			'errno' => $curl_errno,
			'http_code' => $http_code,
			'result' => $result,
		);

		return $response;
	}

	protected function get_data($data, $model, $method)
	{
		$response = $this->request($data, $model, $method);

		if ($response['http_code'] == 200 && $response['errno'] === 0) {
			$body = json_decode($response['result']);
			if (json_last_error() === JSON_ERROR_NONE) {
				if ($body->status == 'ok') {
					return $body->data;
				} elseif ($body->status == 'error') {
					throw new Exception($body->error);
				} else {
					throw new Exception('Unknown response status');
				}
			} else {
				throw new Exception('JSON response error');
			}
		} else {
			if (!empty($response['result'])) {
				$body = json_decode($response['result']);

				if (json_last_error() === JSON_ERROR_NONE) {
					if ($body->status == 'error') {
						throw new Exception($body->error);
					} else {
						throw new Exception('Unknown response status');
					}
				} else {
					throw new Exception('JSON response error');
				}
			} else {
				throw new Exception('HTTP request error. ' . $response['error']);
			}
		}
	}
}
