<?phpclass CarModel extends Body {	var $modelID;	var $carModel;	function setObjectValues() {		$this->objectValues = [ 'carModel' ];	}	function getValues( $wantedValues, $restArray ) {		$db     = new Datenbank();		$dbh    = $db->connect();		$result = $db->select( $dbh );		$values = new FilterArray();		$values = $values->filter( $result, $restArray );		return [ 'values' => $values, 'wantedValues' => $wantedValues ];	}}