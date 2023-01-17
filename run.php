<?php

require_once __DIR__ . '/vendor/autoload.php';

xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

$fore = new ForEac();

$fore->forEach();

$xhprof_data = xhprof_disable();

$XHPROF_LIB_ROOT = __DIR__ . "/src/profiling/xhprof_lib";
include_once $XHPROF_LIB_ROOT . "/utils/xhprof_lib.php";
include_once $XHPROF_LIB_ROOT . "/utils/xhprof_runs.php";

$xhprof_runs = new XHProfRuns_Default(__DIR__ . "/profiling_out");
$run_id = $xhprof_runs->save_run($xhprof_data, "test");

echo "---------------\n".
    "Assuming you have set up the http based UI for \n".
    "XHProf at some address, you can view run at \n".
    "http://<xhprof-ui-address>/index.php?run=$run_id&source=test\n".
    "---------------\n";