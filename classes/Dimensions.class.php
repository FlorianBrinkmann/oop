<?phpclass Dimensions extends Body {	function setObjectValues() {		$this->objectValues = [			'length',			'width',			'height',			'trackFront',			'trackRear',			'trackMean',			'wheelbase',			'contactArea'		];	}	function getValues( $wantedValues, $restArray ) {		$db     = new Datenbank();		$dbh    = $db->connect();		$result = $db->select( $dbh );		$values = new FilterArray();		$values = $values->filter( $result, $restArray );		return [ 'values' => $values, 'wantedValues' => $wantedValues ];	}}