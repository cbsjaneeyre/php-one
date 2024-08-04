<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

const TOTAL_DRAWINGS = 80;
const MARKER_DRAWINGS = 23;
const PENCIL_DRAWINGS = 40;

echo TOTAL_DRAWINGS - MARKER_DRAWINGS - PENCIL_DRAWINGS;
