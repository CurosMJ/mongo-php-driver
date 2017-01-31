--TEST--
Decimal128: [decq447] exponent lengths
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$bson = hex2bin('1800000013640007000000000000000000000000000E3800');

// BSON to Canonical BSON
echo bin2hex(fromPHP(toPHP($bson))), "\n";

// BSON to Canonical extJSON
echo json_canonicalize(toJSON($bson)), "\n";

$json = '{"d" : {"$numberDecimal" : "7E+999"}}';

// extJSON to Canonical extJSON
echo json_canonicalize(toJSON(fromJSON($json))), "\n";

// extJSON to Canonical BSON
echo bin2hex(fromJSON($json)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
1800000013640007000000000000000000000000000e3800
{"d":{"$numberDecimal":"7E+999"}}
{"d":{"$numberDecimal":"7E+999"}}
1800000013640007000000000000000000000000000e3800
===DONE===