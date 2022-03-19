<?php
/**
 * RegExp for Hungarian licence plates issued after 1st of July, 2022
 *
 * @author Balint Ruszki <balintx@baliAAAAAntx.me> (remove the As)
 * unit tests at https://regex101.com/r/OWbxkK/1
 */

$re = '/^((C[B-DF-HJ-NP-RTV-Z]|G[B-DF-HJ-NP-TV-XZ]|L[B-DF-HJ-NP-TV-XZ]|N[B-DF-HJ-NP-TV-XZ]|S[B-DF-HJ-NP-TV-Y]|T[B-DF-HJ-NP-TV-XZ]|Z[B-DF-HJ-NP-RTV-Z]|[BDFHJKMPQRVWXY][B-DF-HJ-NP-TV-Z]|[AEIOU]{2}|OT) ?([A-Z]{2})[ \-]?(\d{2}[1-9]|\d[1-9]\d|[1-9]\d{2})|(CD) ?(\d{3}\-?\d{2}[1-9]|\d{3}\-?\d[1-9]\d|\d{3}\-?[1-9]\d{2}|\d{2}[1-9]\-?\d{3}|\d[1-9]\d\-?\d{3}|[1-9]\d{2}\-?\d{3})|(CD) ?([1-9]\d{3}|\d[1-9]\d{2}|\d{2}[1-9]\d|\d{3}[1-9]) ?(\d{2})|(I) ?(\d[1-9]|[1-9]\d) ?([A-Z]{2}) ?\d{2}|(I) ?(\d{2}[1-9]|\d[1-9]\d|[1-9]\d{2})[ \-]?([A-Z]{2})|(RA|HA|MA|NA|BA) ?(\d{2}\-?\d{2}[1-9]|\d{2}\-?\d[1-9]\d|\d{2}\-?[1-9]\d{2}|\d[1-9]\-?\d{3}|[1-9]\d\-?\d{3})|([A-Z]{6})\-?([1-9])|([A-Z]{5})\-?(\d[1-9]|[1-9]\d)|([A-Z]{4})\-?(\d{2}[1-9]|\d[1-9]\d|[1-9]\d{2})|([A-Z]{3})\-?([1-9]\d{3}|\d[1-9]\d{2}|\d{2}[1-9]\d|\d{3}[1-9]))$/i';
$str = 'I 01AA 23';

preg_match($re, $str, $matches, PREG_OFFSET_CAPTURE, 0);

// Print the entire match result
var_dump($matches);
